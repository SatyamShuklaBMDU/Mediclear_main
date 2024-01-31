<?php

namespace App\Http\Controllers;
use App\Models\MedicalDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use DataTables;

class ConsumerHistoryController extends Controller
{
    public function showReport(){
        return view('dashboard.history.consumer-history');

    }
 
    public function consumerHistoryReport(Request $request){
        if ($request->ajax()) {

            if($request->consumerType=='customerhistory'){
             $data=  MedicalDetail::select('customerbatchs.batch_no as batch_no','medical_details.id as consumer_id','customers.name as customername','customers.email as customeremail',
                'medical_details.certification_number as certification_number',
                'customerbatchs.test as test','customerbatchs.payment_status as payment_status',
                \DB::raw("DATE_FORMAT(DATE_ADD(medical_details.doctor_submit_date,INTERVAL 1 YEAR) ,'%d/%b/%Y') AS validupto"),
                \DB::raw("DATE_FORMAT(medical_details.doctor_submit_date ,'%d/%b/%Y') AS submitdate"))
                ->join('customerbatchs','customerbatchs.id','=','medical_details.cusmerbatchdetails_id')
                ->join('customers','customers.id','=','customerbatchs.customer_id')
                ->where('doctor_final_result','!=',null)
                ->orderBy('medical_details.doctor_submit_date', 'DESC')
                ->get();

                
                           
             
            }elseif($request->consumerType=='corporatehistory'){

                $data=  MedicalDetail::select('corporatebatchs.batch_no as batch_no','medical_details.id as consumer_id','company.name as company_name','company.email as companyemail',
                'medical_details.certification_number as certification_number',
                'corporatebatchs.test as test','corporatebatchs.payment_status as payment_status',
                \DB::raw("DATE_FORMAT(DATE_ADD(medical_details.doctor_submit_date,INTERVAL 1 YEAR) ,'%d/%b/%Y') AS validupto"),
                \DB::raw("DATE_FORMAT(medical_details.doctor_submit_date ,'%d/%b/%Y') AS submitdate"))
                ->join('corporatebatchs','corporatebatchs.id','=','medical_details.cusmerbatchdetails_id')
                ->join('company','company.id','=','corporatebatchs.company_id')
                ->where('doctor_final_result','!=',null)
                ->orderBy('medical_details.doctor_submit_date', 'DESC')
                ->get();



            }

           
               

                return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('payment_status', function ($row) {
                    if($row->payment_status=='0'){
                    $actionBtn = '<a type="button" class="btn bg-danger btn-sm" style="color:white" data-bs-toggle="modal" href="javascript:void(0)">Pending</a>';
                    }else{
                        $actionBtn = '<a type="button" class="btn bg-primary btn-sm" style="color:white" data-bs-toggle="modal" href="javascript:void(0)">Complete</a>';   
                    }
                    return $actionBtn;
                })->addIndexColumn()
              
                ->addColumn('report', function ($row) {
                 $report='<button onclick="generatePDF()" id="'.$row->consumer_id.'" class="btn btn-danger btn-sm" style="
                 padding: 3px 20px;
             "><i class="fa fa-print"
                                    style="font-size:22px"></i></button>';
                 return $report;                   
                   
                })->addIndexColumn()

                ->addColumn('name', function ($row) {
                    if(isset($row->company_name)){
                        $name=$row->company_name;

                    }

                    if(isset($row->customername)){
                        $name=$row->customername;

                    }

                                   
                      return $name;
                   })->addIndexColumn()

                   ->addColumn('email', function ($row) {
                    if(isset($row->companyemail)){
                        $name=$row->companyemail;

                    }else{
                        $name="NULL";
                    }

                    if(isset($row->customeremail)){
                        $name=$row->customeremail;

                    }else{
                        $name="NULL";
                    }

                                   
                      return $name;
                   })->addIndexColumn()

                ->rawColumns(['payment_status','report','name','email'])
                ->make(true);
        




            }


        
       return view('dashboard.history.consumer-history-report');
    }
}
