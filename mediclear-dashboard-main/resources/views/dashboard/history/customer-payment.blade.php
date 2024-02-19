@include('include.sidebar')
{{-- <div class="container-fluid">
    <div class="row">
       <div class="col-sm-12 p-0">
          <div class="main-header">
             <h4 class="text-dark">User Status</h4>
             <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item">
                   <a href="index.html">
                   <i class="icofont icofont-home"></i>
                   </a>
                </li>
                <li class="breadcrumb-item "><a href="#" style="color: black;">User Status</a>
                </li>
                <li class="breadcrumb-item"><a href="panding-user-status.html" style="color: rgb(2, 2, 78);">Pending</a>
                </li>
             </ol>
          </div>
       </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row dashboard-header">
       <div class="col-md-12">
          <div class="row mt-3" >
             <div class="col-md-12 boder-danger me-5 pe-5">
                <div class="row mb" style="margin-bottom: 30px;">
                   <div class="col-md-1">
                      <p class="text-dark"><b><strong>Filters:</strong></b></p>
                   </div>
                   <div class="col-sm-3 end-date">
                      <p class="text-dark"><strong>Date From:</strong></p>
                      <div class="input-group date d-flex" id="datepicker">
                         <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy"/>
                         <span class="input-group-append">
                         <span class="input-group-text bg-light d-block">
                         <i class="fa fa-calendar"></i>
                         </span>
                         </span>
                      </div>
                   </div>
                   <div class="col-sm-3 end-date">
                      <p><strong class="text-dark">Date to:</strong></p>
                      <div class="input-group date d-flex" id="datepicker1">
                         <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy"/>
                         <span class="input-group-append">
                         <span class="input-group-text bg-light d-block">
                         <i class="fa fa-calendar"></i>
                         </span>
                         </span>
                      </div>
                   </div>
                   <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:20px;">
                      <button class="btn " type="submit" >Filter</button>
                   </div>
                   <div class="col-md-1 " style="margin-left: -12px;  margin-top:20px;" >
                      <button class="btn " type="submit" >Reset</button>
                   </div>
                </div>
             </div>
          </div>
          <div class="row pt-4">
             <div class="col-md-7 ">
                <div class="row">
                   <div class="col-md-4  text-center d-flex multiple-btn">
                      <button class="btn " type="submit" style="margin-left: 10px;">Copy</button>
                      <button class="btn " type="submit" style="margin-left: 10px;">CSV</button>
                      <button class="btn  " type="submit" style="margin-left: 10px;">Excel</button>
                      <button class="btn  " type="submit" style="margin-left: 10px;">PDF</button>
                      <button class="btn  " type="submit" style="margin-left: 10px;">Print</button>
                   </div>
                </div>
             </div>
             <div class="col-md-3" >
                <input class="form-control border-none me-2" type="search" placeholder="Search" aria-label="Search" >
             </div>
             <div class="col-md-2" style="margin-left: -25px; margin-top: 1.5px;">
                <button class="btn " type="submit" >Search</button>
             </div>
          </div>
          <div class="row mt-3 px-4">
             <div class="col">
                <table class="table responsive-table">
                   <thead>
                      <tr class="">
                         <th scope="col"><input type="checkbox" name="" id=""></th>
                         <th scope="col">Sr.No.</th>
                         <th scope="col ">Registration Date</th>
                         <th scope="col">CIN Number</th>
                         <th scope="col ">Payment Mode</th>
                         <th scope="col ">Detail</th>
                         <th scope="col ">Rerquest Amount</th>
                         <th scope="col ">Available Point</th>
                         <th scope="col">Action</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <th scope="row"><input type="checkbox" name="" id=""></th>
                         <td><b>1</b></td>
                         <td class="col-2">
                           20/10/2023
                         </td>
                         <td>CIN001234</td>
                         <td>Phone Pay </td>
                         <td class="col-2">
                            <div class="col-sm-2" style="position: relative; top: 50px;">
          <div class="Click-here">  <button class="btn " type="submit" style="padding: 8px 20px; font-size:12px;">+ Create QR Code</button></div>
          <div class="custom-model-main">
             <div class="custom-model-inner">
                <div class="close-btn ">×</div>
                <div class="custom-model-wrap">
                   <div class="pop-up-content-wrap">
                      <div class="container mt-2 p-5">
                         <div class="row justify-content-center">
                            <div class="col-12  " id="form" >
                               <h3 class="mt-2 "> Create New QR Code</h3>
                               <form action="" class="mt-3">
                                  <div class="form-group">
                                     <input type="text" name=" " class="form-control"  placeholder="QR Code*">
                                  </div>
                                  <div class="form-group">
                                     <input type="text" name=" " class="form-control"  placeholder="Points*">
                                  </div>
                               </form>
                               <div class="buttton mt-3 ">
                                  <button type="button" class="btn-1 px-3 py-1">Save</button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="bg-overlay"></div>
          </div>
       </div>
                         </td>
                         <td>20,000</td>
                         <td>
                            234
                         </td>
                         <td>
                            <div class="select">
                               <select name="format" id="format">
                                  <option selected disabled>Choose a option</option>
                                  <option value="txt">Approved</option>
                                  <option value="pdf">Faild</option>
                               </select>
                            </div>
                         </td>
                      </tr>
                     
                   </tbody>
                </table>
             </div>
          </div>
          <div class="row mt-5  px-3 pb-5">
             <div class="col-md-7">
                <div class="showing-numb" style="margin-top: 10px;">
                   <p class="text-dark">Showing 1 to 10 of 57 entries</p>
                </div>
             </div>
             <div class="col-md-5">
                <nav aria-label="Page navigation example">
                   <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                         <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                         <a class="page-link" href="#">Next</a>
                      </li>
                   </ul>
                </nav>
             </div>
          </div>
       </div>
    </div>
    <!-- 4-blocks row end -->
</div> --}}


@if (session()->has('message'))
    <script>
        alert('{{ session()->get('message') }}');
    </script>

    {{ session()->forget('message') }}
@endif
<style>
    .dt-button {
        background-color: #1cc88a !important;
        background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%) !important;
        background-size: cover !important;
        color: #fff !important;
        border: none !important;
        /* display: none !important; */
    }
    .select-dropdown,
    .select-dropdown * {
        margin: 0;
        padding: 0;
        position: relative;
        box-sizing: border-box;
    }
    .select-dropdown {
        position: relative;
        background-color: #E6E6E6;
        border-radius: 4px;
    }
    .select-dropdown select {
        font-size: 1rem;
        font-weight: normal;
        max-width: 100%;
        padding: 8px 24px 8px 10px;
        border: none;
        background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
        appearance: none;
    }
    .select-dropdown select:active, .select-dropdown select:focus {
        outline: none;
        box-shadow: none;
    }
    .select-dropdown:after {
        content: "";
        position: absolute;
        top: 50%;
        right: 8px;
        width: 0;
        height: 0;
        margin-top: -2px;
        border-top: 5px solid #aaa;
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
    }
</style>
<div class="container-fluid">
    <h3 class="h3 mb-2 text-gray-800">Customer Payment History</h3>
    <form action="{{ route('Customer-filter-payment-history') }}" method="POST">
        @csrf
        <div class="row dashboard-header">
            <div class="col-md-12">
                <div class="row mt-3">
                    <div class="col-md-12 boder-danger me-5 pe-5">
                        <div class="row mb" style="margin-bottom: 30px;">
                            <div class="col-sm-1">
                                <p class="text-dark"><b><strong>Filters:</strong></b></p>
                            </div>
                            <div class="col-sm-3 end-date">
                                <p class="text-dark"><strong>Date From:</strong></p>
                                <div class="input-group date d-flex" id="datepicker1">
                                    <input type="date" class="form-control" name="start" id="startdate"
                                        value="{{ $start ?? '' }}" placeholder="dd-mm-yyyy" />
                                </div>
                            </div>
                            <div class="col-sm-3 end-date">
                                <p class="text-dark"><strong>Date to:</strong></p>
                                <div class="input-group date d-flex" id="datepicker2">
                                    <input type="date" name="end" class="form-control" id="enddate"
                                        value="{{ $end ?? '' }}" placeholder="dd-mm-yyyy" />
                                </div>
                            </div>
                            <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:47px;">
                                <button class="btn bg-gradient-success text-white shadow-lg"
                                    type="submit">Filter</button>
                            </div>
    </form>
    <div class="col-md-1 " style="margin-left: -12px;  margin-top:47px;">
        <a href="{{ route('consumer-payment-history-report', ['consumertype' => 'customerhistory']) }}" class="btn bg-gradient-success text-white shadow-lg ">Reset</a>
    </div>
    <div class="row"></div>
    <div class="card-body" style="width: -webkit-fill-available;">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>Date of Approved</th>
                    <th>Batch Number</th>
                    <th>Total Reports/Tests</th>
                    <th>Customer No.</th>
                    <th>Customer Name</th>
                    <th>Customer Phone</th>
                    <th>Customer Email</th>
                    <th>Per Tests Amount <i class="fa fa-inr"></i></th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Report Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer as $customers)
                <tr>
                    <td><b>{{$loop->iteration}}</b></td>
                    <td>{{ \Carbon\Carbon::parse($customers->date_of_approved)->format('d-m-Y') }}</td>
                    <td class="col-2">{{$customers->batch_no}}</td>
                    <td>{{$customers->test}}</td>
                    <td>{{$customers->customers->user_id??''}}</td>
                    <td>{{$customers->customers->name??''}}</td>
                    <td>{{$customers->customers->mobile_no??''}}</td>
                    <td>{{$customers->customers->email??''}}</td>
                    <td><input type="text" class="form-control" value="{{$customers->per_test_amount}}" readonly/></td>
                    <td>{{$customers->recieved_payment}}</td>
                    <td>
                     <div class="select-dropdown">
                         <select>
                             {{-- <option value="Option 2" {{ $customers->payment_status == 0 ? 'selected' : '' }} selected>Pending</option> --}}
                             <option value="Option 3" {{ $customers->payment_status == 1 ? 'selected' : '' }}>Approved</option>
                         </select>
                     </div>
                 </td>
                    <td>
                        <div class="select-dropdown">
                            <select>
                                {{-- <option value="Option 2" selected>Hold</option> --}}
                                <option value="Option 3" selected>Send</option>
                            </select>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!--end table-->
    </div>
</div>
<!-- 4-blocks row end -->
{{-- <script>
   $(document).ready(function () {
       calculateTotal();
       function calculateTotal() {
           $('tbody tr').each(function () {
               var perTestAmount = parseFloat($(this).find('input[name^="per_test_amount"]').val()) || 0;
               var totalTests = parseFloat($(this).find('td:nth-child(3)').text()) || 0;
               var totalAmount = perTestAmount * totalTests;
               $(this).find('td:nth-child(10)').text(totalAmount.toFixed(2));
           });
       }
   });
</script> --}}
<script>
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('enddate').setAttribute('max', currentDate);
    document.getElementById('startdate').setAttribute('max', currentDate);
</script>
@include('include.footer')
