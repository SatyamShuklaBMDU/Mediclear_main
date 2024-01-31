@include('include.sidebar')

<div class="container mt-5">
    <h2 class="mb-4">Corporate Report History</h2>
    <table class="table data-table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Created at </th>
                <th>User Id </th>
                <th>Batch No</th>
                <th>Customer Name</th>
                <th>Mobile Number </th>
                <th>Total Test</th>
                <th>Remaing Test</th>
                {{-- <th> Email</th> --}}
                {{-- <th> Remaing Test</th> --}}


                {{-- <th>Consumer Image</th> --}}
                <th>Report</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
 $(function() {
var table = $('.data-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('customer-vertigo-report') }}",
    columns: [{
            data: 'DT_RowIndex',
        },
        {
            data: 'created_at',
            name: 'created_at'
        },
        {
            data: 'unique_id',
            name: 'unique_id'
        },
        {
            data: 'batch_no',
            name: 'batch_no'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'mobile_no',
            name: 'mobile_no'
        },
        {
            data:'total_test',
            name:'total_test'
        },
        {
            data:'remaing_test',
            name:'remaing_test'
        },
        //  {
        //      data: 'email',
        //       name: 'email'
        //  },

        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        },

    ]
});



});

function viewProfile(id){


}


    </script>

@include('include.footer')
