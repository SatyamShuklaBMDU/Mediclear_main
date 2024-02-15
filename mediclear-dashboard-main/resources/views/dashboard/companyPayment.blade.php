@include('include.sidebar')
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
    <h3 class="h3 mb-2 text-gray-800">Company Payment</h3>
    <form action="{{ route('company-filter-payment') }}" method="POST">
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
                            <a href="{{ route('company-payment') }}" class="btn bg-gradient-success text-white shadow-lg ">Reset</a>
                        </div>
    <div class="row"></div>
    <div class="card-body" style="width: -webkit-fill-available;">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>Batch Number</th>
                    <th>Total Reports/Tests</th>
                    <th>Company Name</th>
                    <th>Company Phone</th>
                    <th>Company Email</th>
                    <th>Status</th>
                    <th>Per Tests Amount</th>
                    <th>Total Amount</th>
                    <th>Report Status</th>
                    <th>Payment Terms Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($company as $companies)
                <tr>
                    <td><b>{{$loop->iteration}}</b></td>
                    <td class="col-2">{{$companies->batch_no}}</td>
                    <td>{{$companies->test}}</td>
                    <td>{{$companies->corprateBelongCompany->name??''}}</td>
                    <td>{{$companies->corprateBelongCompany->mobile_no??''}}</td>
                    <td>{{$companies->corprateBelongCompany->email??''}}</td>
                    <td>
                        <div class="select-dropdown">
                            <select>
                                <option value="Option 1" selected disabled>Select Status</option>
                                <option value="Option 2">Pending</option>
                                <option value="Option 3">Approved</option>
                            </select>
                        </div>
                    </td>
                    <td>200.00</td>
                    <td>4000.00</td>
                    <td>
                        <div class="select-dropdown">
                            <select>
                                <option value="Option 1" selected disabled>Report Status</option>
                                <option value="Option 2">Hold</option>
                                <option value="Option 3">Send</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="select-dropdown">
                            <select>
                                <option value="Option 1" selected disabled>Select Payment</option>
                                <option value="Option 2">Per Months</option>
                                <option value="Option 3">Per Tests</option>
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
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> --}}
<script>
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('enddate').setAttribute('max', currentDate);
    document.getElementById('startdate').setAttribute('max', currentDate);
</script>
@include('include.footer')
