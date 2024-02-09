<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalDetail;
use App\Models\Customer;
use App\Models\Test;
use App\Models\Doctor;
use App\Models\CustomerBatch;
use App\Models\CorporateBatch;
use Illuminate\Validation\Rules\Unique;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Rules\CountResultGivenByDoctor;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class VertigoReportController extends Controller
{
    public function pdf(Request $request)
{
    // Receive modal content from AJAX request
    $modalContent = $request->input('modalContent');

    // Include modal content in the data array
    $data = [
        'title' => 'My PDF Title',
        'content' => 'This is the content of my PDF.',
        'modalContent' => $modalContent,
    ];
    $pdf = new Dompdf();
    $pdf->loadHtml(view('dashboard.vertigo.pdf', $data));
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();
    $pdfContent = $pdf->output();

    $fileName = 'my_pdf_file.pdf';

    return response()->streamDownload(
        function () use ($pdfContent) {
            echo $pdfContent;
        },
        $fileName
    );
}

    public function show()
    {
        return QrCode::generate(
            'Ashish Singh',
        );
    }
    public function customersvertigoreports(Request $request)
    {
        if ($request->ajax()) {

            $medicalmodel = 'App\\\\Models\\\\CustomerBatch';


            $customerBatch = CustomerBatch::select(
                'customerbatchs.id as batch_id',
                'customers.name as name',
                'customers.user_id as unique_id',
                'customerbatchs.batch_no as batch_no',
                'customerbatchs.test as total_test',
                'customers.mobile_no as mobile_no',
                'customers.email as email',
                DB::raw("DATE_FORMAT(customerbatchs.created_at ,'%d/%m/%Y') AS date"),
                DB::raw("(SELECT COUNT(*) as count FROM medical_details WHERE cusmerbatchdetails_id=customerbatchs.id AND cusmerbatchdetails_type='$medicalmodel')AS count")

            )
                ->join('customers', 'customerbatchs.customer_id', '=', 'customers.id')
                ->orderBy('customerbatchs.created_at', 'DESC')
                ->get();



            $data = $customerBatch;



            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" class="btn bg-primary btn-sm" style="color:white" data-bs-toggle="modal" href="' . url('customer/consumer/?id=' . $row->batch_id) . '"  >View Reports</a>';
                    return $actionBtn;
                })->addIndexColumn()
                ->addColumn('remaing_test', function ($row) {
                    $actionBtn = ($row->total_test) - ($row->count);
                    return $actionBtn;
                })->addIndexColumn()
                ->rawColumns(['action', 'remaing_test'])
                ->make(true);
        }
        return view('dashboard.vertigo.customervertigoreport');
    }


    public function corporatevertigoreports(Request $request)
    {
        if ($request->ajax()) {

            $medicalmodel = 'App\\\\Models\\\\CorporateBatch';


            $corporateBatch = CorporateBatch::select(
                'corporatebatchs.id as batch_id',
                'company.name as company_name',
                'company.email as company_email',
                'corporatebatchs.batch_no as company_batch_no',
                'corporatebatchs.test as total_test',

                DB::raw("DATE_FORMAT(corporatebatchs.created_at ,'%d/%m/%Y') AS date"),
                DB::raw("(SELECT COUNT(*) as count FROM medical_details WHERE cusmerbatchdetails_id=corporatebatchs.id AND cusmerbatchdetails_type='$medicalmodel')AS count")



            )
                ->join('company', 'corporatebatchs.company_id', '=', 'company.id')
                ->orderBy('corporatebatchs.created_at', 'DESC')
                ->get();










            $data = $corporateBatch;



            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" class="btn bg-primary btn-sm" style="color:white" data-bs-toggle="modal" href="' . url('corporate/consumer/?id=' . $row->batch_id) . '"  >View Reports</a>';
                    return $actionBtn;
                })->addIndexColumn()
                ->addColumn('remaing_test', function ($row) {
                    $actionBtn = ($row->total_test) - ($row->count);
                    return $actionBtn;
                })->addIndexColumn()
                ->rawColumns(['action', 'remaing_test'])
                ->make(true);
        }
        return view('dashboard.vertigo.corporatevertigoreport');
    }


    public function customerconsumervertigoreports(Request $request)
    {
        if ($request->ajax()) {
            $cusmerBatchDetails_id = $request->id;
            $customerBatchType = "App\Models\CustomerBatch";
            $data = MedicalDetail::
                select(
                    DB::raw("DATE_FORMAT(medical_details.created_at ,'%d/%m/%Y') AS date"),
                    'medical_details.certification_number as certification_no',
                    'medical_details.consumer_name as consumer_name',
                    'medical_details.consumer_mob_no as consumer_mob',
                    'medical_details.consumer_profile_image_name as image',
                    'medical_details.id as id',
                    DB::raw("(SELECT COUNT(*) as count FROM tests WHERE test_type_id=1 AND medical_details_id=medical_details.id AND test_status='1')AS count")
                )->where('cusmerbatchdetails_type', "App\Models\CustomerBatch")
                ->where('cusmerbatchdetails_id', $cusmerBatchDetails_id)
                ->orderBy('created_at', 'DESC')
                ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('consumerImage', function ($row) {


                    $consumerImage = '<img src="' . asset('public/images/' . $row->image) . '" width="100px" alt=""> ';
                    return $consumerImage;

                })->addIndexColumn()
                ->addColumn('consumerProfile', function ($row) {
                    $actionBtn = '<a type="button" class="btn bg-primary btn-sm" style="color:white" data-bs-toggle="modal" href="' . url('customer/consumer/profile/?id=' . $row->id) . '"  >View Profile</a>';
                    return $actionBtn;
                })->addIndexColumn()

                ->addColumn('consumertest', function ($row) {
                    $actionBtn = '<a type="button" class="btn bg-primary btn-sm" style="color:white" data-bs-toggle="modal" href="' . url('consumer/test/?id=' . $row->id) . '"  >View Test Reports</a>';
                    return $actionBtn;
                })->addIndexColumn()
                ->addColumn('consumertestcount', function ($row) {
                    if ($row->count == 8) {

                        $actionBtn = '<a type="button" href="javascript:void(0)" class="btn bg-success btn-sm" style="color:white">Complete</a>';
                        return $actionBtn;
                    } else {

                        $actionBtn = '<a type="button" href="javascript:void(0)" class="btn bg-danger btn-sm" style="color:white">Pending</a>';
                        return $actionBtn;
                    }
                })
                ->rawColumns(['consumerImage', 'consumerProfile', 'consumertest', 'consumertestcount'])
                ->make(true);
        }

        $certificationNumber = MedicalDetail::select('certification_number')->get();



        return view('dashboard.vertigo.customer-consumervertigoreport', ['certificationNumber' => $certificationNumber]);



    }


    public function corporateconsumervertigoreports(Request $request)
    {


        if ($request->ajax()) {

            $cusmerBatchDetails_id = $request->id;

            $customerBatchType = "App\Models\CorporateBatch";



            $data = MedicalDetail::
                select(
                    DB::raw("DATE_FORMAT(medical_details.created_at ,'%d/%m/%Y') AS date"),
                    'medical_details.certification_number as certification_no',
                    'medical_details.consumer_name as consumer_name',
                    'medical_details.consumer_mob_no as consumer_mob',
                    'medical_details.consumer_profile_image_name as image',
                    'medical_details.id as id',
                    DB::raw("(SELECT COUNT(*) as count FROM tests WHERE test_type_id=1 AND medical_details_id=medical_details.id AND test_status='1')AS count")



                )
                ->where('cusmerbatchdetails_type', "App\Models\CorporateBatch")

                ->where('cusmerbatchdetails_id', $cusmerBatchDetails_id)
                ->orderBy('created_at', 'DESC')
                ->get();

                


            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('consumerImage', function ($row) {
                    $consumerImage = '<img src="' . asset('public/images/' . $row->image) . '" width="100px" alt=""> ';
                    return $consumerImage;
                })->addIndexColumn()
                ->addColumn('consumerProfile', function ($row) {
                    $actionBtn = '<a type="button" class="btn bg-primary btn-sm" style="color:white" data-bs-toggle="modal" href="' . url('customer/consumer/profile/?id=' . $row->id) . '"  >View Profile</a>';
                    return $actionBtn;
                })->addIndexColumn()

                ->addColumn('consumertest', function ($row) {
                    $actionBtn = '<a type="button" class="btn bg-primary btn-sm" style="color:white" data-bs-toggle="modal" href="' . url('consumer/test/?id=' . $row->id) . '"  >View Test Reports</a>';
                    return $actionBtn;
                })->addIndexColumn()
                ->addColumn('consumertestcount', function ($row) {
                    if ($row->count == 8) {

                        $actionBtn = '<a type="button" href="javascript:void(0)" class="btn bg-success btn-sm" style="color:white">Complete</a>';
                        return $actionBtn;
                    } else {

                        $actionBtn = '<a type="button" href="javascript:void(0)" class="btn bg-danger btn-sm" style="color:white">Pending</a>';
                        return $actionBtn;
                    }
                })
                ->rawColumns(['consumerImage', 'consumerProfile', 'consumertest', 'consumertestcount'])
                ->make(true);
        }
        $certificationNumber = MedicalDetail::select('certification_number')->get();
        return view('dashboard.vertigo.corporate-consumervertigoreport', ['certificationNumber' => $certificationNumber]);
    }
    public function consumertestprofile(Request $request)
    {
        $consumer_id = $request->get('id'); 
        $corporateCompanyBatchName=MedicalDetail::select('name','batch_no')->join('corporatebatchs','corporatebatchs.id','=','medical_details.cusmerbatchdetails_id')->join('company','company.id','=','corporatebatchs.company_id')->where('medical_details.id',$consumer_id)->get();
        $examnationDetailsBeforeMedicalTest = MedicalDetail::where('id', $consumer_id)->get();
        $TestData = Test::where('medical_details_id', $consumer_id)->where('test_type_id', '1')->where('test_status', '1')->whereIn('features', ['bp', 'eyecheckup', 'rt', 'flatfoot', 'bppv', 'fukuda','hearingtest','eyedistance'])->pluck('data', 'features');
        $Testresult = Test::where('medical_details_id', $consumer_id)->where('test_type_id', '1')->where('test_status', '1')->pluck('test_results', 'features');
        $testremark=[];
        foreach($Testresult as $feature => $testresults){
            if($testresults == '0'){
                $remarks = Test::where('medical_details_id', $consumer_id)
                ->where('test_results', $testresults)
                ->where('features', $feature) 
                ->pluck('test_results_remarks')
                ->first(); 
                $testremark[$feature] = $remarks;
            }
        }
        $doctordata = Doctor::select('registration_number', 'name', 'id')->where('status', 'Active')->get();
        $AssignDoctor = MedicalDetail::select('doctors.sign as doctorsign', 'doctors.seal_of_doctor as doctorseal', 'doctors.registration_number as doctorregistration','doctor_final_result')->where('medical_details.id', $consumer_id)->join('doctors', 'medical_details.doctorid', '=', 'doctors.id')->get();
        $CountRisultGivenByDoctor=Test::where('medical_details_id',$consumer_id)->where('test_type_id', '1')->where('test_status', '1')->where('test_results','!=',null)->count(); 
        return view('dashboard.vertigo.consumer-test-profile', ['examnationDetailsBeforeMedicalTest' => $examnationDetailsBeforeMedicalTest, 'TestData' => $TestData, 'Testresult' => $Testresult, 'doctordata' => $doctordata, 'AssignDoctor' => $AssignDoctor,'CountRisultGivenByDoctor'=> $CountRisultGivenByDoctor,'corporateCompanyBatchName'=>$corporateCompanyBatchName,'testremarks'=>$testremark]);
    }
    public function consumertestresult(Request $request)
    {
        // testResultStatus: testResultStatus,
        // unfitRemark:unfitRemark,
        // testfeatures:"bp",
        // consumerid:consumerid
        // dd($request->all());
        $TestData = Test::where('medical_details_id', $request->consumerid)
            ->where('test_type_id', '1')
            ->where('test_status', '1')
            ->where('features', $request->testfeatures)->update([
                    'test_results' => $request->testResultStatus,
                    'test_results_remarks' => $request->unfitRemark,
                ]);
        $CountResultGivenByDoctor=Test::where('medical_details_id',$request->consumerid)->where('test_type_id', '1')->where('test_status', '1')
        ->where('test_results','!=',null)->count(); 
        return $CountResultGivenByDoctor;
    }
    public function doctordatabasesid(Request $request)
    {
       

        $doctordata = Doctor::select('sign', 'seal_of_doctor', 'registration_number', 'id')->where('id', $request->id)->get();
        return $doctordata;



    }



    public function doctorfinalresult(Request $request)
    {

        
        // $request->validate([
        //     'ResultCount' => [new CountResultGivenByDoctor($request->consumerid)],
           
        // ]);

       
       
      
        $validator = Validator::make($request->all(), [
            'ResultCount' => ['required',new CountResultGivenByDoctor($request->consumerId)],
           
        ]);


        if ($validator->fails()) {
            return response()->json([
                "status" => "error",
                "message" => $validator->errors()
            ], 403);
        }





        $doctorFinalReport = MedicalDetail::where('id', $request->consumerId)->update([
            'doctorid' => $request->doctorId,
            'doctor_final_result' => $request->doctorFinalResult,
            'doctor_submit_date'=>Carbon::now()->format('Y-m-d')

        ]);

        $consumerFinalVerticoDataByDoctor=MedicalDetail::select('certification_number',
        'doctor_final_result','consumer_name','consumer_addhar_number' ,'doctor_submit_date',
        'consumer_dob' ,'doctor_final_result','gender')
        ->where('id',$request->consumerId)
        ->get();

        $sendData=[];
        foreach($consumerFinalVerticoDataByDoctor as $k=>$value){
            $sendData['certification_number']=$value->certification_number;

            $blurredAadhar = 'xxxx-xxxx-' . substr($value->consumer_addhar_number, -4);

            $sendData['consumer_addharnumber']=$blurredAadhar;

            $carbonDate = Carbon::createFromFormat('Y-m-d', $value->doctor_submit_date);

            $consumerDob=Carbon::createFromFormat('Y-m-d', $value->consumer_dob);
            $formatedConsumerDob= $consumerDob->format('d-M-Y');


            $formattedDate = $carbonDate->format('d-M-Y');

            $carbonDate->addYear(); 
            $lastValidDate = $carbonDate->format('d-M-Y');


           

            $sendData['doctor_submit_date']=$formattedDate;
            $sendData['lastvalid_date']=$lastValidDate; 
            $sendData['consumerdob']= $formatedConsumerDob;
            $sendData['consumername']=$value->consumer_name;
            $sendData['gender']=$value->gender;

            if($value->doctor_final_result=='1'){
                $sendData['result']="FIT";
            }elseif($value->doctor_final_result=='0'){
                $sendData['result']="UNFIT";
            }elseif($value->doctor_final_result=='-1'){
                $sendData['result']="Temorarily UNFIT";
            }          

        }


        $consumerQrData = 'Name:' . $sendData['consumername'] . ' ' 
                     .'AdharNumber:' .$sendData['consumer_addharnumber'] .' '
                     .'DOB:'  .$sendData['consumerdob'] .' ' 
                    .'Valid up To:' .$sendData['lastvalid_date'] .' ' 
                    .'Gender:' .$sendData['gender'] .' ' 
                     .'Final Vertico Report:'  .$sendData['result'] .' ' ;


          $qrcodeConsumer=  QrCode::size(256)->generate( $consumerQrData);

          return  $qrcodeConsumer;




    }



}

