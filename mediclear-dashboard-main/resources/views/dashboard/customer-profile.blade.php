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

    }
</style>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h3 mb-2 text-gray-800">Customers</h3>

    <!-- DataTales Example -->


    <!--  3 -row start block -->
    <div class="row dashboard-header">
        <div class="col-md-12">
            <div class="row mt-3">
                <div class="col-md-12 boder-danger me-5 pe-5">
                    <div class="row mb" style="margin-bottom: 30px;">
                        <div class="col-sm-1">
                            <p class="text-dark"><b><strong>Filters:</strong></b></p>
                        </div>
                        <!-- <div class="col-sm-3 end-date">
                       <p class="text-dark"><strong>Date From:</strong></p>
                       <div class="input-group date d-flex" id="datepicker">
                          <input type="text" class="form-control " id="date" placeholder="dd-mm-yyyy" />
                          <span class="input-group-append">
                             <span class="input-group-text bg-light d block ">
                                <i class="fa fa-calendar"></i>
                             </span>

                          </span>
                       </div>
                    </div> -->
                        <!--  -->
                        <!--  -->
                        <div class="col-sm-3 end-date">
                            <p class="text-dark"><strong>Date From:</strong></p>
                            <div class="input-group date d-flex" id="datepicker1">
                                <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy" />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!--  -->
                        <!--  -->
                        <!--  -->
                        <div class="col-sm-3 end-date">
                            <p class="text-dark"><strong>Date to:</strong></p>
                            <div class="input-group date d-flex" id="datepicker2">
                                <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy" />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:47px;">
                            <button class="btn   bg-gradient-success text-white shadow-lg "
                                type="submit">Filter</button>
                        </div>
                        <div class="col-md-1 " style="margin-left: -12px;  margin-top:47px;">
                            <button class="btn bg-gradient-success text-white shadow-lg " type="submit">Reset</button>
                        </div>




                        <div class="card-body" style="width: -webkit-fill-available;">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Registration Date</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>E-mail</th>
                                        <th>User ID</th>
                                        {{-- <th>Password</th> --}}
                                        <th>Status</th>
                                        {{-- <th>Action</th> --}}

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                        $i = 1;
                                    @endphp

                                    @foreach ($customer as $customer)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $customer->created_at->format('d/m/Y') }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->mobile_no }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->user_id }}</td>
                                            {{-- <td>*********23</td> --}}

                                            <td>


                                                @if ($customer->status == 'Pending')
                                                    <div class="dropdown mb-4">
                                                        <button class="btn btn-warning dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Pending
                                                        </button>
                                                        <div class="dropdown-menu animated--fade-in"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ url('updateStatusCustomer/Active/' . $customer->id) }}">Active</a>
                                                            <a class="dropdown-item"
                                                                href="{{ url('updateStatusCustomer/Deactive/' . $customer->id) }}">Deactive</a>

                                                        </div>
                                                    </div>
                                                @elseif ($customer->status == 'Active')
                                                    <div class="dropdown mb-4">
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Active
                                                        </button>
                                                        <div class="dropdown-menu animated--fade-in"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ url('updateStatusCustomer/Pending/' . $customer->id) }}">Pending</a>
                                                            <a class="dropdown-item"
                                                                href="{{ url('updateStatusCustomer/Deactive/' . $customer->id) }}">Deactive</a>

                                                        </div>
                                                    </div>
                                                @elseif ($customer->status == 'Deactive')
                                                    <div class="dropdown mb-4">
                                                        <button class="btn btn-danger dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Deactive
                                                        </button>
                                                        <div class="dropdown-menu animated--fade-in"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ url('updateStatusCustomer/Active/' . $customer->id) }}">Active</a>
                                                            <a class="dropdown-item"
                                                                href="{{ url('updateStatusCustomer/Pending/' . $customer->id) }}">Pending</a>

                                                        </div>
                                                    </div>
                                                @endif



                                            </td>
                                            {{-- <td> &nbsp; <i class="fa-solid fa-trash text-danger"
                                                    onclick="{document.getElementById('id1').value={{ $customer->id }}}"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    style="font-size:1rem;"></i></td> --}}
                                        </tr>

                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach







                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>





                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to delete?
                                <form action="{{ url('/customer/delete') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" id="id1">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- end model  --}}


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="medi-footer bg-gradient-success">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
    @include('include.footer')
