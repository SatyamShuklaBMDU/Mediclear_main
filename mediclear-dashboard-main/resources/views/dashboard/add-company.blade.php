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
    @if (count($errors) > 0)
    <div id="ERROR_COPY" style="display: none;" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Page Heading -->
    <h3 class="h3 mb-2 text-gray-800">Company</h3>

    <!-- DataTales Example -->
<form action="{{url('/add-company')}}" method="post">
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
                            <div class="input-group date d-flex" id="datepicker1">
                                <input type="date" name="start" value="{{ $start ?? ''}}" class="form-control" id="startdate" placeholder="dd-mm-yyyy" />
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!--  -->
                        <div class="col-sm-3 end-date">
                            <p class="text-dark"><strong>Date to:</strong></p>
                            <div class="input-group date d-flex" id="datepicker2">
                                <input type="date" name="end" value="{{ $end ?? ''}}" class="form-control" id="endDate" placeholder="dd-mm-yyyy" />

                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:47px;">
                            <button class="btn   text-white shadow-lg bg-gradient-success "
                                type="submit">Filter</button>
                        </div>
                    </form>
                        <div class="col-md-1 " style="margin-left: -12px;  margin-top:47px;">
                            <a href="{{url('/add-company')}}" class="btn text-white  shadow-lg bg-gradient-success " >Reset</a>
                        </div>
                        <div class="col-sm-2" style="position: relative; top: 47px;">
                            <div class="Click-here"> <button class="btn  bg-gradient-success   text-white shadow-lg"
                                    type="button" style="padding: 4px 4px; font-size:17px; width:165px;"
                                    data-target="#mymodel" data-toggle="modal"> Add Company</button>
                                <!-- poppux box start -->
                                <div class="modal mt-4" id="mymodel">
                                    <div class="modal-dialog m-auto">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <form action="{{ url('/create-company') }}" method="post"
                                                    class="text-center">
                                                    @csrf
                                                    <span class="h3 mt-0 text-decoration-underline"> ADD COMPANY </span>
                                                    <br>
                                                    <br>
                                                    <label for="">Company Name </label>
                                                    <input type="text" required name="name" style="margin-right: 20px; margin-bottom:10px;" /> <br />
                                                    <label for="">City Name &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="text" required style="margin-bottom:10px;"
                                                        name="city" /> <br />
                                                    <label for="">Email ID &nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="email" required style="margin-bottom:10px;"
                                                        name="email" /> <br />
                                                    <label for="">Phone NO. &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="text" required style="margin-bottom:10px;"
                                                        name="mobile_no" /> <br />
                                                    <button type="submit" class="btn text-white bg-gradient-success"
                                                        style="margin-left: 378px">
                                                        ADD
                                                    </button>
                                                </form>
                                                <!-- <h5 class="text-dark"> Enter Number : </h5> -->
                                                <!-- <span style="margin:6px; padding:10px;" class="h4 text-dark">Company Name </span>
                <input type="text" placeholder="Enter Company"> -->
                                                <!-- <div class="d-flex flex row"> -->
                                                <!-- <div class="select ">
                    <select name="format" id="format" class="rounded p-2" style="width:241px; margin:5px;">

                        <option value="" disable selected hidden>Select Location</option>
                        <option value="1">Noida</option>
                        <option value="2">Faridabad</option>
                        <option value="3">Banglore</option>
                        <option value="4">Aligarh</option>
                    </select>
                    <input style="width:264px; margin-left:10px;" type="text" placeholder="Select Location " class="border iw m-1 border-secondary  rounded p-1" /> -->
                    <!-- <input style="width:241px;" type="text" placeholder="Enter Number " class="border  m-1 border-secondary  rounded p-1" />
            </div> -->
                    <!-- <button class="btn-sm" type="button" style="margin-top:106px; ">Submit</button> -->
                                                <button type="btn" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="card-body" style="width: -webkit-fill-available;">
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Create Date</th>
                                <th>Company Name</th>
                                <th>Phone Number</th>
                                <th>E-mail</th>
                                <th>City</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($company as $company)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $company->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $company->name }} </td>
                                    <td>{{ $company->mobile_no }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->city }}</td>
                                    {{-- <td>
                                            <div class="dropdown">
                                                <button class="btn btn-warning dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                Select
                                                </button>
                                                <div class="dropdown-menu animated--fade-in"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Active</a>
                                                    <a class="dropdown-item" href="#">Deactive</a>

                                                </div>
                                            </div>
                                        </td> --}}
                                    <td>
                                        @if ($company->status == 'Active')
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Active
                                                </button>
                                                <div class="dropdown-menu animated--fade-in bg-danger"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ url('updateStatusCompany/Deactive/' . $company->id) }}">Deactive</a>
                                                </div>
                                            </div>
                                        @elseif ($company->status == 'Deactive')
                                            <div class="dropdown mb-4">
                                                <button class="btn btn-danger dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Deactive
                                                </button>
                                                <div class="dropdown-menu animated--fade-in"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ url('updateStatusCompany/Active/' . $company->id) }}">Active</a>

                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                    <td> <i class="fa-solid fa-pen-to-square text-success"
                                        <i class="fa-solid fa-pen-to-square text-success"
                                        style="cursor: pointer"
                                        data-toggle="modal" data-target="#exampleModal1"
                                        style="font-size:1rem;"
                                        onclick="{document.getElementById('id').value={{ $company->id }}; document.getElementById('name').value='{{ $company->name }}'; document.getElementById('email').value='{{ $company->email }}'; document.getElementById('mobile_no').value={{ $company->mobile_no }}; document.getElementById('city').value='{{ $company->city }}';}"></i> &nbsp; <i
                                            class="fa-solid fa-trash text-danger" style="cursor: pointer"
                                            data-toggle="modal" data-target="#exampleModal" style="font-size:1rem;"
                                            onclick="{document.getElementById('id1').value={{ $company->id }}}""></i>
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
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/company/update') }}" method="post">
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
                                    <label for="recipient-name" class="col-form-label">City:</label>
                                    <input type="text" class="form-control" id="city" name="city">
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
                    <form action="{{ url('/company/delete') }}" method="post">
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
    document.getElementById('endDate').setAttribute('max', currentDate);
    document.getElementById('startdate').setAttribute('max', currentDate);
</script>
@include('include.footer')
