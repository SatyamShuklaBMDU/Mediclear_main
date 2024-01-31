{{-- start sidebar --}}
@include('include.sidebar')
{{-- end sidebar --}}


@if (session()->has('message'))
    <script>
        alert('{{ session()->get('message') }}');
    </script>

    {{ session()->forget('message') }}
@endif




<style>




    .dt-button{
        background-color: #1cc88a !important;
        background-image: linear-gradient(180deg,#1cc88a 10%,#13855c 100%) !important;
        background-size: cover !important;
        color: #fff !important;
        border: none !important;

    }
    </style>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h3 class="h3 mb-2 text-gray-800">Complaint</h3>



<div class="row">

</div>
<div class="card-body" style="width: -webkit-fill-available;">
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Create Date</th>
                <th>Subject</th>
                <th>Complaint</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
@php
    $i=1;
@endphp

@foreach ( $complaint as $complaint )


            <tr>
                <td>{{$i}}</td>
                <td>{{$complaint->created_at->format('d/m/Y')}}</td>

                <td>{{$complaint->subject}}</td>
                <td>{{$complaint->message}}</td>
                <!-- <td><img src="./images/avatar-1.png"></td> -->
                <td class="text-center"><i class="fa-solid fa-trash text-danger"  data-toggle="modal" data-target="#exampleModal"
                    style="font-size:1rem; cursor: pointer;"
                    onclick="{document.getElementById('id').value={{ $complaint->id }}}" ></i></td>



            </tr>

@php
    $i++;
@endphp
            @endforeach

            {{-- <tr>
                <td>2</td>
                <td>Lorem Ipsum SImple dummy text</td>
                <td>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to .</td>
                <!-- <td><img src="./images/avatar-1.png"></td> -->
                <td class="text-center"><i class="fa-solid fa-trash text-dark"></i></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lorem Ipsum SImple dummy text</td>
                <td>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to .</td>
                <!-- <td><img src="./images/avatar-1.png"></td> -->
                <td class="text-center"><i class="fa-solid fa-trash text-dark"></i></td>
            </tr> --}}
        </tbody>
    </table>
    <!--end table-->
</div>


</div>
<!-- 4-blocks row end -->







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
                            <form action="{{ url('/complaint/delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="id">
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







{{-- // start footer --}}
@include('include.footer')
{{-- // end footer  --}}
