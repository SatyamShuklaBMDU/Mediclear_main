<!-- headr-file-start -->
@include('include.sidebar')

@if (session()->has('message'))
    <script>
        alert('{{ session()->get('message') }}');
    </script>

    {{ session()->forget('message') }}
@endif



<style>
    .notification-form {
        padding: 40px;
        margin: 40px 0px 40px 0px;
    }

    .content-wrapper {
        margin-left: 210px;
    }

    .sidebar-right-trigger {
        display: none;
    }
</style>
    <!-- Main content starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Notification</h4>
            </div>
        </div>
        <!-- 4-blocks row start -->
        <div class="row dashboard-header" style="background: #e5e5e5;">
            <div class="col-md-11  mx-auto">
                <form class="notification-form shadow rounded" method="post" action="{{url('/sendNotification')}}">
                    @csrf
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="for" id="inlineRadio1" value="all">
                        <label class="form-check-label" for="inlineRadio1">All</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="for" id="inlineRadio2" value="corporate">
                        <label class="form-check-label" for="inlineRadio2">For Employee</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="for" id="inlineRadio3" value="customer">
                        <label class="form-check-label" for="inlineRadio3">For Customer</label>
                    </div>
                    <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                        <label class="form-check-label" for="inlineRadio4">For Customer</label>
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject</label>
                        <input type="text" class="form-control" id="exampleInputsubject" name="subject" aria-describedby="textHelp" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Notification Message</label>
                        <textarea class="form-control" placeholder="Type Message" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                </form>
                <h3> History</h3>
                <!--end form-->
                <!--start Table-->
                <table class="table table-striped table-hover table-hover border shadow border-light mt-4">
                    <thead>
                        <tr>
                            <th >Sr.No.</th>
                            <th >For</th>
                            <th >Subject</th>
                            <th >Messages</th>
                            {{-- <th >Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ( $notification as $notify )
                        <tr>
                            <td >{{$i}}</td>
                            <td>{{$notify->for}}</td>
                            <td >{{$notify->subject}}</td>
                            <td >{{$notify->message}}</td>
                            {{-- <td class="text-center"><i class="fa-solid fa-trash text-danger"  onclick="{document.getElementById('id1').value={{ $notify->id }}}" data-toggle="modal" data-target="#exampleModal"></i></td> --}}
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <!--end table-->
            </div>
        </div>
        <!-- 4-blocks row end -->
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
                <form action="{{ url('/notification/delete') }}" method="post">
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
    <!-- Main content ends -->
    <!-- Container-fluid ends -->




<!-- footer-file-start -->
@include('include.footer')
<!-- footer-file-start -->
