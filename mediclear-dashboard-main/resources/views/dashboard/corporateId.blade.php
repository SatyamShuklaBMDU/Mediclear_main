@include('include.sidebar')

<style>
    a.dropdown-item:hover {
        background: red;
    }
</style>
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



@error('name')
    <script>
        alert(' {{ $message }}');
    </script>
    {{-- <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span> --}}
@enderror


@error('user_id')
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
    <h3 class="h3 mb-2 text-gray-800">Employee ID</h3>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/corporateID') }}" method="post">
                @csrf
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
                                        <div class="input-group date d-flex">
                                            <input type="date" name="start" class="form-control" id="startdate"
                                                value="{{ $start ?? '' }}" placeholder="dd-mm-yyyy" />
                                        </div>
                                        @error('start')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-sm-3 end-date">
                                        <p class="text-dark"><strong>Date to:</strong></p>
                                        <div class="input-group date d-flex">
                                            <input type="date" class="form-control" name="end" id="endDate"
                                                value="{{ $end ?? '' }}" placeholder="dd-mm-yyyy" />
                                        </div>
                                        @error('end')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:47px;">
                                        <button class="btn   text-white shadow-lg bg-gradient-success "
                                            type="submit">Filter</button>
            </form>
        </div>
        <div class="col-md-1 " style="margin-left: -12px;  margin-top:47px;">
            <a href="{{ url('/corporateID') }}" class="btn text-white  shadow-lg bg-gradient-success ">Reset</a>
        </div>
        <div class="col-sm-2" style="position: relative; top: 47px;">
            <div class="Click-here"> <button class="btn  bg-gradient-success   text-white shadow-lg" type="button"
                    style="padding: 4px 4px; font-size:17px; width:180px;" data-target=" #mymodel" data-toggle="modal">
                    Add Employee ID</button>
                <!-- poppux box start -->
                <div class="modal mt-4" id="mymodel">
                    <div class="modal-dialog m-auto">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form action="{{ url('/addCorporateID') }}" method="post" class="text-center">
                                    @csrf

                                    <span class="h3 mt-0 text-decoration-underline">
                                        ADD Employee ID
                                    </span> <br> <br>
                                    <label for=""> Name </label>
                                    <input type="text" name="name" style="margin-left:50px; margin-bottom:10px;">
                                    <br>
                                    <label for="">Phone No. &nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;</label>
                                    <input type="number" name="mobile_no" style="margin-bottom:10px;"> <br>


                                    <label for="">Email ID &nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="email" name="email" style="margin-bottom:10px;"> <br>
                                    <label for="">User ID
                                        &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="text" name="user_id" style="margin-left:30px; margin-bottom:10px;">
                                    <br>
                                    <label for="">Password&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="password" name="password" style="margin-bottom:10px;"> <br>
                                    <button type="submit" class="btn bg-gradient-success text-white shadow-lg"
                                        style="margin-left:378px">ADD</button>

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
<div class="row">
</div>
<div class="card-body" style="width: -webkit-fill-available;">
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Create Date</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>E-mail</th>
                <th>User ID</th>
                {{-- <th>Password</th> --}}
                <th>Status</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>



            @php
                $i = 1;
            @endphp

            @foreach ($corporate as $corporate)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $corporate->created_at->format('d-m-Y') }}</td>
                    <td>{{ $corporate->name }} </td>
                    <td>{{ $corporate->mobile_no }}</td>
                    <td>{{ $corporate->email }}</td>
                    <td>{{ $corporate->user_id }}</td>
                    {{-- <td>{{ $corporate->password }}</td> --}}

                    <td>

                        @if ($corporate->status == 'Active')
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Active
                                </button>
                                <div class="dropdown-menu animated--fade-in bg-danger"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="{{ url('updateStatusCorporateID/Deactive/' . $corporate->id) }}">Deactive</a>

                                </div>
                            </div>
                        @elseif ($corporate->status == 'Deactive')
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Deactive
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="{{ url('updateStatusCorporateID/Active/' . $corporate->id) }}">Active</a>

                                </div>
                            </div>
                        @endif

                    </td>
                    <td> <i class="fa-solid fa-pen-to-square text-success" style="cursor: pointer"
                            data-toggle="modal" data-target="#exampleModal1" style="font-size:1rem;"
                            onclick="{document.getElementById('id').value={{ $corporate->id }}; document.getElementById('name').value='{{ $corporate->name }}'; document.getElementById('email').value='{{ $corporate->email }}'; document.getElementById('mobile_no').value={{ $corporate->mobile_no }};}"></i>
                        &nbsp; <i class="fa-solid fa-trash text-danger" style="cursor: pointer" data-toggle="modal"
                            data-target="#exampleModal" style="font-size:1rem;"
                            onclick="{document.getElementById('id1').value={{ $corporate->id }}}"></i>
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
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('/corporateID/update') }}" method="post">

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
                    <input type="hidden" name="id" id="id">
            </div>
            <div class="modal-footer  btn-start">
                <button type="submit" class="btn bg-gradient-success text-white shadow-lg">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- end model  --}}
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
                <form action="{{ url('/corporateID/delete') }}" method="post">
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




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $('#datepicker1, #datepicker2, #datepicker3').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    });
</script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap5'
    });
</script>
<script>
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('endDate').setAttribute('max', currentDate);
    document.getElementById('startdate').setAttribute('max', currentDate);
</script>

@include('include.footer')
