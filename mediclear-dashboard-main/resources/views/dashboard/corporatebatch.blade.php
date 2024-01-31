@include('include.sidebar')
<!-- add company -->

<style>
    body {
        background-image: none;
    }

    .table,
    th {
        font-size: 15px !important;
        font-family: 'Poppins', sans-serif !important;
    }

    .dt-button {
        background-color: #1cc88a !important;
        background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%) !important;
        background-size: cover !important;
        color: #fff !important;
        border: none !important;

    }



    .content-wrapper {
        margin-left: 210px;
        font-size: 19px;

    }

    /*
    .btn {
        background-color: #1cc88a;
    }

    .btn:hover {
        background-color: #01796F !important;

    } */

    .sidebar-right-trigger {
        display: none;
    }

    @media(max-width:34em) {
        .main {
            min-width: 150px;
            width: auto;
        }
    }

    select {
        display: none !important;
    }

    .dropdown-select {
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
        background-color: #fff;
        border-radius: 6px;
        border: solid 1px #eee;
        box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        float: left;
        font-size: 14px;
        font-weight: normal;
        height: 42px;
        line-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 30px;
        position: relative;
        text-align: left !important;
        transition: all 0.2s ease-in-out;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap;
        width: auto;

    }

    .dropdown-select:focus {
        background-color: #fff;
    }

    .dropdown-select:hover {
        background-color: #fff;
    }

    .dropdown-select:active,
    .dropdown-select.open {
        background-color: #fff !important;
        border-color: #bbb;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
    }

    .dropdown-select:after {
        height: 0;
        width: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 4px solid #777;
        -webkit-transform: origin(50% 20%);
        transform: origin(50% 20%);
        transition: all 0.125s ease-in-out;
        content: '';
        display: block;
        margin-top: -2px;
        pointer-events: none;
        position: absolute;
        right: 10px;
        top: 50%;
    }

    .dropdown-select.open:after {
        -webkit-transform: rotate(-180deg);
        transform: rotate(-180deg);
    }

    .dropdown-select.open .list {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
        pointer-events: auto;
    }

    .dropdown-select.open .option {
        cursor: pointer;
    }

    .dropdown-select.wide {
        width: 100%;
    }

    .dropdown-select.wide .list {
        left: 0 !important;
        right: 0 !important;
    }

    .dropdown-select .list {
        box-sizing: border-box;
        transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
        -webkit-transform: scale(0.75);
        transform: scale(0.75);
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
        background-color: #fff;
        border-radius: 6px;
        margin-top: 4px;
        padding: 3px 0;
        opacity: 0;
        overflow: hidden;
        pointer-events: none;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 999;
        max-height: 250px;
        overflow: auto;
        border: 1px solid #ddd;
    }

    .dropdown-select .list:hover .option:not(:hover) {
        background-color: transparent !important;
    }

    .dropdown-select .dd-search {
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0.5rem;
    }

    .dropdown-select .dd-searchbox {
        width: 90%;
        padding: 0.5rem;
        border: 1px solid #999;
        border-color: #999;
        border-radius: 4px;
        outline: none;
    }

    .dropdown-select .dd-searchbox:focus {
        border-color: #12CBC4;
    }

    .dropdown-select .list ul {
        padding: 0; 
    }

    .dropdown-select .option {
        cursor: default;
        font-weight: 400;
        line-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 29px;
        text-align: left;
        transition: all 0.2s;
        list-style: none;
    }

    .dropdown-select .option:hover,
    .dropdown-select .option:focus {
        background-color: #f6f6f6 !important;
    }

    .dropdown-select .option.selected {
        font-weight: 600;
        color: #12cbc4;
    }

    .dropdown-select .option.selected:focus {
        background: #f6f6f6;
    }

    .dropdown-select a {
        color: #aaa;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
    }

    .dropdown-select a:hover {
        color: #666;
    }

    @media print {
        .hidden-element {
            display: none !important;
        }
    }

    /* input[type="file"] {
        display: none;

    } */

    /* .file {
        display: inline-block;
        color: #ffffff;
        background: orange;
        text-align: center;
        padding: 15px 40px;
    } */

    /* .input-group-text {
        margin-top: 5px;
    } */
</style>

<script>
    ///updated corporate Batch/////////////////////////////////////////////////////
    function updatecorporateData(button) {

        var bacthId = button.id.replace("edit", "");

        console.log(bacthId);

        $('#myModal').show();

        $('#closeBatchEditForm').on('click', function() {
            console.log('hhjh');
            $('#myModal').hide();
            $('#currentselect').html('');

        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: "{{ url('corporate-batch-edit') }}",
            data: {
                id: bacthId
            },
            success: (data) => {
                console.log(data[0]);


                $('#batch_no').val(data[0].batch_no);
                $('#corporate_test').val(data[0].test);
                $('#corporateBatchId').val(data[0].corporatebatchs_id);
                $('#corporateId').val(data[0].company_id);
                $('#currentselect').html(data[0].name);
                $('#editcompanyProfile').val(data[0].company_id)
                // companyProfile



                $('#myModal').show();

                $('#userUpdateButton').click(function(event) {
                    event.preventDefault();
                    console.log('dddd');


                    let corporateBatchNo = $('#batch_no').val();
                    let corporateTest = $('#corporate_test').val();
                    let corporateBatchId = $('#corporateBatchId').val();
                    let corporateId = $('#corporateId').val();
                    let companyId=$('#editcompanyProfile').val();
                   


                    let formData = {
                        corporateBatchNo: corporateBatchNo,
                        corporateTest: corporateTest,
                        corporateBatchId: corporateBatchId,
                        corporateId: corporateId,
                        companyId:companyId


                    }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'post',
                        url: "{{ url('corporate-batch-update') }}",
                        data: formData,
                        success: (data) => {
                          
                            $('#myModal').hide();
                            let currentselect=$('#currentselect').html('');
                            $('#editcompanyProfile').val('')

                         
                            

                            let updatedCorporateBatchDataWithCompany = data['corporateBatchWithComapny'];
                            let updatedCorporteBatchId=data['corporateBatchWithComapny'][0].corporatebatchs_id;

                         
        

                          


                            let updatedCompanyDate = data['corporateBatchWithComapny'][0].date;


                            let updatedCorporateBatchDataId =`tr${data['corporateBatchWithComapny'][0].corporatebatchs_id}`;
                                

                            let thScopId = `row${data['corporateBatchWithComapny'][0].corporatebatchs_id}`;

                            let thScopIdInnerHTML = $(`#${thScopId}`).html();

                              let updatedhtml = ` <th  scope="row" id="${thScopId}" class="sorting_1">${thScopIdInnerHTML}</th>
                                      <td>${updatedCompanyDate}</td>
                                      <td>${data['corporateBatchWithComapny'][0].company_name}</td>
                                      <td>${data['corporateBatchWithComapny'][0].corporatebatchs_batch_no}</td>
                                      <td>${data['corporateBatchWithComapny'][0].test}</td>
                                      <td>${data['corporateBatchWithComapny'][0].email}</td>
                                      <td>${data['corporateBatchWithComapny'][0].mobile_no}</td>
                                     <td>
                                         <button type="button" class="btn btn-primary" onclick="updatecorporateData(this)" id="edit${updatedCorporteBatchId}">
                                              <i class="fa-solid fa-pen-to-square" style="font-size:1rem;"></i>
                                          </button>
                                          <button type="button" class="btn btn-primary" onclick="deletecorporateData(this)" id="delete${updatedCorporteBatchId}">
                                              <i class="fa-solid fa-trash" style="font-size:1rem;"></i>
                                          </button>
                                      </td>`



                              $(`#${updatedCorporateBatchDataId}`).html(updatedhtml);







                        },
                        error: function(data) {
                            console.log(data);

                        }





                    });

                });


            },
            error: function(data) {
                console.log(data);
            }

        });

    };
    ///////////////////////////////////////////////////////////////////////////////
    function deletecorporateData(button) {
        if (confirm('Are you sure you want to delete this item?')) {
            let batchId = button.id.replace("delete", "");
            let deleteId = $(`#tr${batchId}`);
            console.log(batchId);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'post',
                url: "{{ url('corporate-batch-delete') }}",
                data: {
                    id: batchId
                },
                success: (data) => {

                    deleteId.attr("style", "@media print{display:none;}");

                    deleteId.hide();
                    location.reload();


                },
                error: (data) => {
                    console.log(data);

                }

            });


        }
    }
</script>



<div class="modal" id="myModal">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <button type="button" class="btn-close" aria-label="Close"
                            id="closeBatchEditForm">Close</button>
                        <h4 class="mt-4">Edit User Profile</h4>
                    </div>
                </div>

                <!-- Modal Header -->
                <div class="row dashboard-header" style="background: #e5e5e5;">
                    <div class="col-md-11  mx-auto">
                        <form class="notification-form shadow rounded" action="" method="post" id="userFormData">
                            <div class="form-group">

                                <label for="batch_no">Batch No</label>
                                <input type="text" name="batch_no" value="{{ old('batch_no') }}" class="form-control"
                                    id="batch_no" aria-describedby="textHelp" placeholder="please enter your batch id">

                                @if ($errors->has('batch_no'))
                                    <span class="help-block">{{ $errors->first('batch_no') }}</span>
                                @endif

                            </div>

                            <div class="form-group">

                                <label for="corporate_test">corporate Test</label>
                                <input type="text" name="cutomer_test" value="{{ old('cutomer_test') }}"
                                    class="form-control" id="corporate_test" aria-describedby="textHelp"
                                    placeholder="please enter your test">

                                @if ($errors->has('corporate_test'))
                                    <span class="help-block">{{ $errors->first('batch_no') }}</span>
                                @endif

                            </div>

                            <div class="form-group">
                                <div class="main">
                                    <label for="">Company List </label>
                                    {{-- <input type="text" style="margin-right: 20px; margin-bottom:10px;" /> <br /> --}}
                                      <input type="hidden" id="editcompany">
                                    <select class="form-select"
                                        aria-label="Default select example"
                                        style="margin-right:40px;margin-bottom:10px;"
                                        id="editcompanyProfile" name="company_id">
                                        <option selected disabled>Select Company</option>
                                        @foreach ($companyDetails as $company)
                                            <option value="{{ $company->id }}">
                                                {{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>






                            <input type="hidden" id="corporateBatchId" name="corporateBatchId" value="">

                            <input type="hidden" id="corporateId" name="corporateId" value="">


                            <!-- <div class="col-md-4"> -->

                    </div>
                    <button type="submit" class="btn btn-dark btn-md" style="margin: 30px 0px 0px;"
                        id="userUpdateButton">Update corporate Batch
                    </button>
                </div>
                </form>

            </div>

        </div>
    </div>
</div>



{{--
        <!-- Main content starts -->
        <div class="container-fluid">
s
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4 class="text-dark fw-bold   text-start h2" style="margin-top:80px;">corporate Batch</h4>
                            <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-white">
                                    <li class="breadcrumb-item"><a href="#"> <i class="fa-solid fa-house text-secondary"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> <span class="text-dark ">corporate Batch</span></li>
                                </ol>
                            </nav> -->

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-white">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house text-secondary"></i></a></li>
                                    <li class="breadcrumb-item text-decoration-none text-dark"><a href="#" class="text-dark">Batch Create</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">corporate Batch</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- butns -->

                <div class="row  " style="margin-top:100px;">
                    <div class="col-md-7 ">
                        <div class="row">
                            <div class="col-md-4  text-center d-flex multiple-btn">
                                <button class="btn text-white " type="submit" style="margin-left: 10px;">Copy</button>
                                <button class="btn text-white " type="submit" style="margin-left: 10px;">CSV</button>
                                <button class="btn  text-white " type="submit" style="margin-left: 10px;">Excel</button>
                                <button class="btn  text-white " type="submit" style="margin-left: 10px;">PDF</button>
                                <button class="btn text-white  " type="submit" style="margin-left: 10px;">Print</button>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!--  -->

            <!-- end
        </div>

 --}}



<!-- Begin Page Content -->
<div class="container-fluid">

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    @if ($errors->has('company_corporate_batch_no'))
        <div class="alert alert-danger">
            {{ $errors->first('company_corporate_batch_no') }}
        </div>
    @endif

    <!-- Page Heading -->
    <h3 class="h3 mb-2 text-gray-800">corporate Batch</h3>



    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house text-secondary"></i></a></li>
            <li class="breadcrumb-item text-decoration-none text-dark"><a href="#" class="text-dark">Batch
                    Create</a></li>
            <li class="breadcrumb-item active" aria-current="page">corporate Batch</li>
        </ol>
    </nav>

  


    <!--  3 -row start block -->
    <div class="row dashboard-header">
        <div class="col-md-12">
            <div class="row mt-3">
                <div class="col-md-12 boder-danger me-5 pe-5">
                    <div class="row mb" style="margin-bottom: 30px;">
                        <div class="col-sm-1">
                            <form action="{{url('corporate-batch-filterdata')}}" method="post" >
                                @csrf
                            <p class="text-dark"><b><strong>Filters:</strong></b></p>
                        </div>
                       
                        <div class="col-sm-3 end-date">
                            <p class="text-dark"><strong>Date From:</strong></p>
                            <div class="input-group date d-flex" id="">
                                <input type="date" value="@if(isset($corporatefilterBatchFilterdate)){{$corporatefilterBatchFilterdate['fromdate']}}@endif"  name="fromdate" class="form-control" id="fromdate" placeholder="dd-mm-yyyy" />
                              
                            </div>
                        </div> 

                        <!--  -->
                        <!--  -->
                        <!--  -->
                        <div class="col-sm-3 end-date">
                            <p class="text-dark"><strong>Date to:</strong></p>
                            <div class="input-group date d-flex" id="">
                                <input type="date" value="@if(isset($corporatefilterBatchFilterdate)){{$corporatefilterBatchFilterdate['todate']}}@endif" name="todate" class="form-control" id="todate" placeholder="dd-mm-yyyy">
                                
                            </div>
                        </div>

                        <!--  -->
                         <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:47px;">
                            <button class="btn  bg-gradient-success text-white shadow-lg "
                                type="submit">Filter</button>
                        </div>

                    </form>
                        <div class="col-md-1 " style="margin-left: -12px;  margin-top:47px;">
                            <button class="btn bg-gradient-success text-white shadow-lg "
                                type="submit"><a href="{{url('corporate-batch')}}" style="color: white">Reset</a></button>
                        </div>
                        <div class="col-sm-2" style="position: relative; top: 47px;">
                            <div class="Click-here"> <button class="btn    bg-gradient-success text-white shadow-lg"
                                    type="submit" style="padding: 4px 4px; font-size:17px; width:165px;"
                                    data-target=" #mymodel" data-toggle="modal">+ Add corporate</button>




                                <!-- poppux box start -->
                                <div class="modal mt-4" id="mymodel">
                                    <div class="modal-dialog m-auto">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <form action="{{ route('addcorporatebatch') }}" method="post"
                                                    class="text-center">
                                                    <span class="h3 mt-0 text-decoration-underline"> ADD corporate
                                                    </span>
                                                    <br />
                                                    <br />
                                                    @csrf
                                                    {{-- <input type="hidden" name="company_id" id="company_id" />
                                                    <div class="container">
                                                        <div class="main">
                                                            <label for="">corporate ID </label>
                                                            {{-- <input type="text" style="margin-right: 20px; margin-bottom:10px;" /> <br /> --}}
 
                                                            {{-- <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="margin-right:40px;margin-bottom:10px;"
                                                                id="corporateProfile" name="user_company_id">
                                                                <option selected disabled>Select corporate ID</option>
                                                                @foreach ($activecorporateId as $corporate)
                                                                    <option value="{{ $corporate->user_id }}">
                                                                        {{ $corporate->user_id }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div> --}}

                                                    <div class="container">
                                                        <div class="main">
                                                            <label for="">Company List </label>
                                                            {{-- <input type="text" style="margin-right: 20px; margin-bottom:10px;" /> <br /> --}}

                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="margin-right:40px;margin-bottom:10px;"
                                                                id="companyProfile" name="company_id">
                                                                <option selected disabled>Select Company</option>
                                                                @foreach ($companyDetails as $company)
                                                                    <option value="{{ $company->id }}">
                                                                        {{ $company->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    {{-- companyDetails --}}
                                                    <label for="">corporate Batch No. </label>
                                                    <input type="text" id="company_corporate_batch_no"
                                                        name="company_corporate_batch_no"
                                                        style="margin-right: 40px;margin-bottom:10px;" /> <br />



                                                    <label for="">Total Test </label>
                                                    <input type="text" name="company_test"
                                                        style="margin-left: 20px;margin-bottom:10px;" /> <br />
                                                  
                                                    <label for="">Email ID &nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="email" name="company_email" id="company_email"
                                                        style="margin-bottom:10px;" />
                                                    <br />
                                                    <label for="">Phone NO. &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="text" name="company_mob" id ="company_mob"
                                                        style="margin-bottom:10px;" />
                                                    <br />
                                                    <button type="submit" class="">
                                                        ADD
                                                    </button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>

 



                            </div>
                        </div>
                    </div>
                </div>

                <!--  -->


{{-- {{dd($corporateBatch)}}; --}}

                <div class="card-body" style=" width: -webkit-fill-available;">
                    <table class="display nowrap " id="example">
                        <thead class="text-white">
                            <tr style="border-bottom:3px solid black; font-weight:9px;">
                                <th scope="col">Sr. No.</th>
                                <th scope="col">Create Date</th>
                                
                                <th scope="col">company Name</th>
                                <th scope="col">corporate Batch No.</th>
                                <th scope="col">Total Test</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Phone No.</th>
                                {{-- <th scope="col">Status</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(isset($corporatefilterBatchFilter))
                            @foreach($corporatefilterBatchFilter as $k=>$data)

                            <tr id="tr{{ $data->corporatebatchs_id }}">
                                <th scope="row" id="row{{ $data->corporatebatchs_id }}">{{ ++$k }}</th>
                                <td>{{ $data->date}}</td>
                                <td>{{ $data->company_name }}</td>
                                <td>{{ $data->corporatebatchs_batch_no }}</td>
                                
                                <td>{{ $data->test }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->mobile_no }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary"
                                        onclick="updatecorporateData(this)" id="edit{{ $data->corporatebatchs_id }}">
                                        <i class="fa-solid fa-pen-to-square" style="font-size:1rem;"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                        onclick="deletecorporateData(this)" id="delete{{ $data->corporatebatchs_id}}">
                                        <i class="fa-solid fa-trash" style="font-size:1rem;"></i>
                                    </button>
                                </td>
                            </tr>



                            @endforeach


                            @endif
                            @if(isset($corporateBatch))
                            @foreach ($corporateBatch as $k => $batch)
                                <tr id="tr{{ $batch->id }}">
                                    <th scope="row" id="row{{ $batch->id }}">{{ ++$k }}</th>
                                    <td>{{ $batch->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $batch->corprateBelongCompany->name }}</td>
                                    <td>{{ $batch->batch_no }}</td> 
                                    <td>{{ $batch->test }}</td>
                                    <td>{{$batch->corprateBelongCompany->email}}</td>
                                    <td>{{ $batch->corprateBelongCompany->mobile_no }}</td>
                                    
                                    {{-- <td class="text-success" style="font-size:1rem;">
                                        <div class="select">
                                            <select name="format" id="format">
                                                <option value="pdf"
                                                    @if ($batch->corporates->status == 'Active') {{ 'selected' }} @endif>Active
                                                </option>
                                                <option value="txt"
                                                    @if ($batch->corporates->status == 'Deactive') {{ 'selected' }} @endif>
                                                    deactive</option>

                                            </select>
                                    </td> --}}
                                    <td>
                                        <button type="button" class="btn btn-primary"
                                            onclick="updatecorporateData(this)" id="edit{{ $batch->id }}">
                                            <i class="fa-solid fa-pen-to-square" style="font-size:1rem;"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary"
                                            onclick="deletecorporateData(this)" id="delete{{ $batch->id }}">
                                            <i class="fa-solid fa-trash" style="font-size:1rem;"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>





            <!-- datepicker code -->

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
            <script>
                // Initialize datepickers
                $('#datepicker1, #datepicker2, #datepicker3').datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true
                });


                let html = $('#corporateProfile').html();



                // $('#corporateProfile').change(function() {
                //     console.log('helllo');
                //     var selectedValue = $(this).val();


                //     console.log('Selected Value: ' + selectedValue);
                // });


                function create_custom_dropdowns() {
                    $('select').each(function(i, select) {
                        if (!$(this).next().hasClass('dropdown-select')) {
                            $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') +
                                '" tabindex="0"><span class="current" id="currentselect"></span><div class="list"><ul></ul></div></div>');
                            var dropdown = $(this).next();
                            var options = $(select).find('option');
                            var selected = $(this).find('option:selected');
                            dropdown.find('.current').html(selected.data('display-text') || selected.text());
                            options.each(function(j, o) {
                                var display = $(o).data('display-text') || '';
                                dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ?
                                        'selected' : '') + '" data-value="' + $(o).val() + '"id="' + $(o)
                                    .val() +
                                    '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                            });
                        }
                    });

                    $('.dropdown-select ul').before(
                        '<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>'
                    );
                }

                // Event listeners

                // Open/close
                $(document).on('click', '.dropdown-select', function(event) {
                    if ($(event.target).hasClass('dd-searchbox')) {
                        return;
                    }
                    $('.dropdown-select').not($(this)).removeClass('open');
                    $(this).toggleClass('open');
                    if ($(this).hasClass('open')) {
                        $(this).find('.option').attr('tabindex', 0);
                        $(this).find('.selected').focus();
                    } else {
                        $(this).find('.option').removeAttr('tabindex');
                        $(this).focus();
                    }
                });

                // Close when clicking outside
                $(document).on('click', function(event) {
                    if ($(event.target).closest('.dropdown-select').length === 0) {
                        $('.dropdown-select').removeClass('open');
                        $('.dropdown-select .option').removeAttr('tabindex');
                    }
                    event.stopPropagation();
                });

                function filter() {
                    var valThis = $('#txtSearchValue').val();
                    $('.dropdown-select ul > li').each(function() {
                        var text = $(this).text();
                        (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
                    });
                };
                // Search

                // Option click
                $(document).on('click', '.dropdown-select .option', function(event) {
                    console.log(event);
                    let companyId = event.target.id;
                   

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'post',
                        url: "{{ url('company-data-based-id') }}",
                        data: {
                            id: companyId
                        },
                        success: (data) => {

                             $('#company_id').val(data.company_data[0].id)
                             $('#company_email').val(data.company_data[0].email);
                             $('#company_mob').val(data.company_data[0].mobile_no);
                        



                        },
                        error: (data) => {

                        }

                    });


                    $(this).closest('.list').find('.selected').removeClass('selected');
                    $(this).addClass('selected');
                    var text = $(this).data('display-text') || $(this).text();
                    console.log(text);
                    $(this).closest('.dropdown-select').find('.current').text(text);
                    $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
                });

                // Keyboard events
                $(document).on('keydown', '.dropdown-select', function(event) {
                    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[
                        0]);
                    // Space or Enter
                    //if (event.keyCode == 32 || event.keyCode == 13) {
                    if (event.keyCode == 13) {
                        if ($(this).hasClass('open')) {
                            focused_option.trigger('click');
                        } else {
                            $(this).trigger('click');
                        }
                        return false;
                        // Down
                    } else if (event.keyCode == 40) {
                        if (!$(this).hasClass('open')) {
                            $(this).trigger('click');
                        } else {
                            focused_option.next().focus();
                        }
                        return false;
                        // Up
                    } else if (event.keyCode == 38) {
                        if (!$(this).hasClass('open')) {
                            $(this).trigger('click');
                        } else {
                            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                                '.list .option.selected')[0]);
                            focused_option.prev().focus();
                        }
                        return false;
                        // Esc
                    } else if (event.keyCode == 27) {
                        if ($(this).hasClass('open')) {
                            $(this).trigger('click');
                        }
                        return false;
                    }
                });

                $(document).ready(function() {
                    create_custom_dropdowns();
                });
            </script>









            @include('include.footer')
