@include('include.sidebar')
<style>
    a {
        color: #fff;
    }
    a:hover {
        text-decoration: none !important;
        color: #ececec;
    }
</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <h3 class="h3 mb-2 text-gray-800">Report History</h3>
    <div class="row">
    </div>
    <div class="card-body" style="width: -webkit-fill-available;">
        <div class="row align-items-start">
            <div class="col" style="margin: 20px;border-radius: 16px;color: white;background-color: #1cc588;padding: 10px;font-size: xx-large;text-align: center;/* width: 8px !important; */">
                {{-- <a href="{{ url('consumer-payment-history-report/?consumertype=corporatehistory') }}">Company Payment History</a> --}}
                <a href="{{ route('consumer-payment-history-report', ['consumertype' => 'corporatehistory']) }}">Company Payment History</a>
            </div>
            <div class="col" style="margin: 20px;border-radius: 16px;color: white;background-color: #1cc588;padding: 10px;font-size: xx-large;text-align: center;/* width: 8px !important; */">
                {{-- <a href="{{ url('consumer-payment-history-report/?consumertype=customerhistory') }}">Customer Payment History</a> --}}
                <a href="{{ route('consumer-payment-history-report', ['consumertype' => 'customerhistory']) }}">Customer Payment History</a>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
