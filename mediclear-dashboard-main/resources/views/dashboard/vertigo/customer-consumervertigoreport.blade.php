@include('include.sidebar')
<a class="btn btn-primary ml-2" href="{{ url('/customers-vertigo-report') }}" role="button">Go Back</a>
<div class="container mt-5">
    <input type="hidden" id="consumer_id" value="{{ request()->get('id') }}" />

    @php

        $customerBatch = \App\Models\CustomerBatch::where('id', request()->get('id'))->value('batch_no');

    @endphp




    <h2 class="mb-4">Consumer Medical Details</h2>
    <h1>Batch No<small class="text-muted">---{{ $customerBatch }}</small></h1>

    <table class="table data-table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Created at </th>
                <th>CN Number</th>
                <th>Consumer Name</th>
                <th>Consumer Mobile Number</th>
                <th> Test Status</th>
                {{-- <th>Cunsumer Image</th> --}}
                <th>Consumer Test Report</th>









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
        let id = $('#consumer_id').val();
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        var table = $('.data-table').DataTable({


            processing: true,
            serverSide: true,

            ajax: {
                url: "{{ route('consumer-customer-vertigo-report') }}",
                type: "post",
                data: {
                    _token: csrfToken,
                    "id": id
                }
            },
            columns: [{
                    data: 'DT_RowIndex',

                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'certification_no',
                    name: 'certification_no'
                },
                {
                    data: 'consumer_name',
                    name: 'consumer_name'
                },
                {
                    data: 'consumer_mob',
                    name: 'consumer_mob'
                },

                {
                    data: 'consumertestcount',
                    name: 'consumertestcount'
                },

                {
                    data: 'consumertest',
                    name: 'consumertest',
                    orderable: false,
                    searchable: false
                },


            ]
        });



    });
</script>

@include('include.footer')
