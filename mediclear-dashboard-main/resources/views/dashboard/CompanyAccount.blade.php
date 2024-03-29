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
    <h3 class="h3 mb-2 text-gray-800">Company Account Section</h3>
    <form action="{{ route('Company-filter-account') }}" method="POST">
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
                            <a href="{{ route('company-account-section') }}" class="btn bg-gradient-success text-white shadow-lg ">Reset</a>
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
                    <th>Per Tests Amount <i class="fa fa-inr"></i></th>
                    <th>Total Amount</th>
                    <th>Recieved Amount</th>
                    <th>Pending Amount</th>
                    <th>Status</th>
                    <th>Report Status</th>
                    <th>Payment Terms Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($company as $companies)
                <tr data-consumer="{{$companies->id}}">
                    <td><b>{{$loop->iteration}}</b></td>
                    <td class="col-2">{{$companies->batch_no}}</td>
                    <td>{{$companies->test}}</td>
                    <td>{{$companies->corprateBelongCompany->name??''}}</td>
                    <td>{{$companies->corprateBelongCompany->mobile_no??''}}</td>
                    <td>{{$companies->corprateBelongCompany->email??''}}</td>
                    <td><input type="text" name="per_test_amount[]" class="form-control" value="{{$companies->per_test_amount}}" readonly></td>
                    <td></td>
                    <td><input type="text" name="recieved_amount[]" class="form-control received-amount" value="{{$companies->recieved_payment}}"></td>
                    <td><input type="text" name="pending_amount[]" class="form-control pending-amount" value="{{$companies->pending_payment}}" readonly></td>
                    <td>
                     <div class="select-dropdown">
                         <select id="payment-status" onchange="changestatus(this)">
                             <option disabled {{ $companies->payment_status == -1 ? 'selected' : '' }} selected >Select Status</option>
                             <option id="payment_pending" {{ $companies->payment_status == 0 ? 'selected' : '' }} value="0" >Pending</option>
                             <option id="payment_approved" {{ $companies->payment_status == 1 ? 'selected' : '' }} value="1" >Approved</option>
                         </select>
                     </div>
                    </td>
                    <td>
                        <div class="select-dropdown">
                            <select>
                                <option value="Option 2" selected>Hold</option>
                                <option value="Option 3">Send</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="select-dropdown">
                            <select>
                                <option value="Option 2" selected>Per Months</option>
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
    $(document).ready(function () {
        calculateTotal();
        function calculateTotal() {
            $('tbody tr').each(function () {
                var perTestAmount = parseFloat($(this).find('input[name^="per_test_amount"]').val()) || 0;
                var totalTests = parseFloat($(this).find('td:nth-child(3)').text()) || 0;
                var totalAmount = perTestAmount * totalTests;
                $(this).find('td:nth-child(8)').text(totalAmount.toFixed(2));
            });
        }
        $('.received-amount').on('input', function () {
            var row = $(this).closest('tr');
            var receivedAmount = parseFloat($(this).val()) || 0;
            var totalAmount = parseFloat(row.find('td:nth-child(8)').text()) || 0;
            var pendingAmount = totalAmount - receivedAmount;
            row.find('.pending-amount').val(pendingAmount.toFixed(2));
        }); 
    });
</script>
<script>
        function changestatus(selectElement) {
            var row = $(selectElement).closest('tr');
            var paymentStatus = $(selectElement).val();
            var receivedAmount = $(row).find('.received-amount').val();
            var pendingAmount = $(row).find('.pending-amount').val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var customerId = $(row).data('consumer');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/save-company-payment-details',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data: {
                    status: paymentStatus,
                    customer_id: customerId,
                    received_amount: receivedAmount,
                    pending_amount: pendingAmount
                },
                success: function (response) {
                    alert('Payment Status Changed');
                    location.reload()
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }
</script>

<script>
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('enddate').setAttribute('max', currentDate);
    document.getElementById('startdate').setAttribute('max', currentDate);
</script>
@include('include.footer')
