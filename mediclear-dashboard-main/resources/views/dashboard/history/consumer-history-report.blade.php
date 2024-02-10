@include('include.sidebar')
<a class="btn btn-primary ml-2" href="{{ url()->previous() }}" role="button">Go Back</a>
<div class="container mt-5">
    <input type="hidden" id="consumer_type" value="{{ request()->get('consumertype') }}" />


    <h2 class="mb-4">History</h2>
    <div class="col-md-12 table-responsive"
        style="display: block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch">
        <table class="table data-table table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Created at </th>
                    <th>Valid up to</th>
                    <th>Batch Number</th>

                    <th> Total Test</th>

                    @if (request()->get('consumertype') == 'corporatehistory')
                        <th>Company Name</th>
                    @endif
                    @if (request()->get('consumertype') == 'customerhistory')
                        <th>Customer Name</th>
                    @endif
                    @if (request()->get('consumertype') == 'corporatehistory')
                        <th>Company Email</th>
                    @endif
                    @if (request()->get('consumertype') == 'customerhistory')
                        <th>Customer Email</th>
                    @endif



                    <th>Certification Number</th>
                    <th>Payment Status</th>
                    <th>Consumer Report</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


</div>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function() {
        var consumerType = $('#consumer_type').val();
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        var table = $('.data-table').DataTable({


            processing: true,
            serverSide: true,

            ajax: {
                url: "{{ route('consumer-history-report') }}",
                type: "post",
                data: {
                    _token: csrfToken,
                    consumerType: consumerType
                }
            },
            success: (data) => {

                console.log(data);


            },
            columns: [{
                    data: 'DT_RowIndex',

                },
                {
                    data: 'submitdate',
                    name: 'submitdate'
                },
                {
                    data: 'validupto',
                    name: 'validupto'
                },
                {
                    data: 'batch_no',
                    name: 'batch_no'
                },

                {
                    data: 'test',
                    name: 'test'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'certification_number',
                    name: 'certification_number'
                },
                {
                    data: 'payment_status',
                    name: 'payment_status'
                },
                {
                    data: 'report',
                    name: 'report',
                    orderable: false,
                    searchable: false
                },


            ]


        });



    });
</script>

@include('include.footer')
