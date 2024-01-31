@include('include.sidebar')

<div class="container mt-5">
    <h2 class="mb-4">Corporate Medical Details</h2>
    <table class="table data-table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Created at </th>
                <th>Company Name</th>
                <th>Batch No</th>
                <th>Email </th>
                <th>Total Test</th>
                <th>Remaing Test</th>
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
            ajax: "{{ route('corporate-vertigo-report') }}",
            columns: [{
                    data: 'DT_RowIndex',

                },
                {
                    data: 'date',
                    name: 'date'
                },

                {
                    data: 'company_name',
                    name: 'company_name'
                },
                {
                    data: 'company_batch_no',
                    name: 'company_batch_no'
                },
                {
                    data: 'company_email',
                    name: 'company_email'
                },
                {
                    data: 'total_test',
                    name: 'total_test'
                },
                {
                    data: 'remaing_test',
                    name: 'remaing_test'
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

    function viewProfile(id) {


    }
</script>

@include('include.footer')
