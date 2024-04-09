@include('include.sidebar')



@if (session()->has('message'))
    <script>
        alert('{{ session()->get('message') }}');
    </script>

    {{ session()->forget('message') }}
@endif



@error('mobile_no')
    <script>
        alert(' {{ $message }}');
    </script>
    {{-- <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span> --}}
@enderror



@error('email')
    <script>
        alert(' {{ $message }}');
    </script>
    {{-- <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span> --}}
@enderror




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
    <h3 class="h3 mb-2 text-gray-800">Doctor</h3>
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <!-- DataTales Example -->

    <form action="{{ url('/add-docter') }}" method="POST">
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
                                <button class="btn   bg-gradient-success text-white shadow-lg "
                                    type="submit">Filter</button>
                            </div>
    </form>
    <div class="col-md-1 " style="margin-left: -12px;  margin-top:47px;">
        <a href="{{ url('/add-docter') }}" class="btn bg-gradient-success text-white shadow-lg ">Reset</a>
    </div>
    <div class="col-sm-2" style="position: relative; top: 47px;">
        <div class="Click-here"> <button class="btn   bg-gradient-success text-white shadow-lg" type="button"
                style="padding: 4px 8px; font-size:17px;" data-target=" #mymodel" data-toggle="modal"> Add
                Doctor</button>
            <!-- poppux box start -->
            <div class="modal mt-4" id="mymodel">
                <div class="modal-dialog m-auto">
                    <div class="modal-content">
                        <div class="modal-header">
                            <form action="{{ url('adddocter') }}" enctype="multipart/form-data" method="POST"
                                class="text-center">
                                @csrf
                                <span class="h3 mt-0 text-decoration-underline">
                                    ADD DOCTOR
                                </span> <br> <br>
                                <label for="">Doctor Name </label>
                                <input type="text" name="name" style="margin-left:9px; margin-bottom:10px"> <br>
                                <label for="">Post Name &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="post" style="margin-bottom:10px;"> <br>
                                <label for="">Email ID &nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="email" style="margin-bottom:10px;"> <br>
                                <label for="">Phone NO. &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="mobile_no" style="margin-bottom:10px;"> <br>
                                <label for="">Registration Number. &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="registration_number" style="margin-bottom:10px;"> <br>
                                <div class="d-flex ">
                                    <span style="margin-left:50px; f">Sign Upload</span>&nbsp;&nbsp;
                                    <input style="width:240px; margin-bottom:5px; margin-bottom:10px" name="sign"  type="file" id="formFileMultiple">
                                </div>
                                <div class="d-flex ">
                                    <span style="margin-left:50px; f">Seal of Doctor</span>&nbsp;&nbsp;
                                    <input style="width:240px; margin-bottom:5px; margin-bottom:10px" name="seal" type="file">
                                </div>
                                <button type="submit" class="btn bg-gradient-success text-white shadow-lg" style="margin-left:378px">ADD</button>
                            </form>
                            <button type="btn" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  -->
<div class="card-body">
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Create Date</th>
                <th>Doctor Name</th>
                <th>Post</th>
                <th>Registration Number</th>
                <th>Sign</th>
                <th>Seal of doctor</th>
                {{-- <th>User ID</th> --}}
                {{-- <th>Password</th> --}}
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($doctor as $doctor)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $doctor->created_at->format('d-m-Y') }}</td>
                    <td>{{ $doctor->name }} </td>
                    <td>{{ $doctor->post }}</td>
                    <td>{{ $doctor->registration_number }}</td>
                    <td> <img src="{{ asset('images/' . $doctor->sign) }}" width="40px" alt=""> </td>
                    <td> <img src="{{ asset('images/' . $doctor->seal_of_doctor) }}" width="100px" alt=""> </td>
                    {{-- <td>MED001</td> --}}
                    {{-- <td>*********23</td> --}}
                    <td>
                        @if ($doctor->status == 'Active')
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Active
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="{{ url('updateStatusDoctor/Deactive/' . $doctor->id) }}">Deactive</a>
                                </div>
                            </div>
                        @elseif ($doctor->status == 'Deactive')
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Deactive
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="{{ url('updateStatusDoctor/Active/' . $doctor->id) }}">Active</a>
                                </div>
                            </div>
                        @endif
                    </td>
                    <td> <i class="fa-solid fa-pen-to-square text-success" style="cursor: pointer"
                            data-toggle="modal" data-target="#exampleModal1" style="font-size:1rem;"
                            onclick="{document.getElementById('id').value={{ $doctor->id }}; document.getElementById('name').value='{{ $doctor->name }}';
                                            document.getElementById('post').value='{{ $doctor->post }}';
                                            document.getElementById('email').value='{{ $doctor->email }}'; 
                                            document.getElementById('registration_number').value='{{ $doctor->registration_number }}'; 
                                            document.getElementById('mobile_no').value={{ $doctor->mobile_no }};}"></i>
                        &nbsp;
                        <i class="fa-solid fa-trash text-danger" data-toggle="modal" data-target="#exampleModal"
                            style="font-size:1rem;"
                            onclick="{document.getElementById('id1').value={{ $doctor->id }}}"></i>
                    </td>
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
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <form action="{{ url('/doctor/delete') }}" method="post">
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
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/doctor/update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Post:</label>
                        <input type="text" class="form-control" id="post" name="post">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Registration Number:</label>
                        <input type="text" class="form-control" id="registration_number"
                            name="registration_number">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sign:</label>
                        <input type="file" class="form-control" id="sign" name="sign">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Seal of Doctor:</label>
                        <input type="file" class="form-control" id="seal" name="seal">
                    </div>
                    <input type="hidden" name="id" id="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-success text-white shadow-lg">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- end model  --}}
<!-- Footer -->
<footer class="medi-footer bg-gradient-success">
    <div class="container my-auto">
        <div class="copyright text-center my-auto text-white">
            <span>Copyright &copy; Your Website 2024</span>
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
<script>
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('enddate').setAttribute('max', currentDate);
    document.getElementById('startdate').setAttribute('max', currentDate);
</script>
@include('include.footer')
