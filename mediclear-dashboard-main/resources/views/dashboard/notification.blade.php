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
            <div class="col-md-12">
            <form class="notification-form shadow rounded"  method="get" action="{{url('/customer-notification')}}">
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
                                                        value="" placeholder="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3 end-date">
                                                <p class="text-dark"><strong>Date to:</strong></p>
                                                <div class="input-group date d-flex" id="datepicker2">
                                                    <input type="date" name="end" class="form-control" id="enddate"
                                                        value="" placeholder="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:47px;">
                                                <button class="btn   bg-gradient-success text-white shadow-lg "
                                                    type="submit">Filter</button>
                                            </div>
                                            <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:47px;">
                                            <button class="reset btn bg-gradient-success text-white shadow-lg ml-5"  type="submit">Reset</button>
                                        </div>

                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                       
                
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input checks" type="radio" onclick="filterDatas(this)" name="for" id="inlinefilterRadio1" value="all">
                        <label class="form-check-label" for="inlinefilterRadio1">All</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input checks" type="radio" onclick="filterDatas(this)" name="for" id="inlinefilterRadio2" value="corporate">
                        <label class="form-check-label" for="inlinefilterRadio2">For Employee</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input checks" type="radio" onclick="filterDatas(this)" name="for" id="inlinefilterRadio3" value="customer">
                        <label class="form-check-label" for="inlinefilterRadio3">For Customer</label>
                    </div>
                </form>
            </div>
                <!--end form-->
                <!--start Table-->
                <table class="table table-striped table-hover table-hover border shadow border-light mt-4" id="notifications">
                    <thead>
                        <tr>
                            <th >Sr.No.</th>
                            <th >For</th>
                            <th >Date</th>
                            <th >Subject</th>
                            <th >Messages</th>
                            {{-- <th >Action</th> --}}
                        </tr>
                    </thead>
                    <tbody id="filtervala">
                        @php
                            $i=1;
                        @endphp
                        @foreach ( $notification as $notify )
                        <tr>
                            <td >{{$i}}</td>
                            <td>{{$notify->for}}</td>
                            <td >{{$notify->created_at->format('m/d/Y')}}</td>
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
                <!-- Add a separate table for filter data -->
            <table id="filterDataTable" style="display: none;">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>For</th>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filtered data will be displayed here -->
                </tbody>
            </table>

            </div>
        </div>
        <!-- 4-blocks row end -->
        <!-- Add a div to display filter data -->

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
    </div>
    <script>
   function resetFunction(){
    $("input[type=radio]").prop('checked', false);
   }
</script>
<script>
    $(document).ready(function() {
        var tableNotifications = $('#notifications').DataTable({
            scrollX: true
        });
    });
    function filterDatas(element) {
        var filterVal = element.value;
        var tbody = document.querySelector('#filterDataTable tbody');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'get',
            url: "{{ url('filter_notification') }}",
            data: {
                filterVal: filterVal
            },
            success: function(data) {
                if (data.status == "success") {
                    $('#notifications').closest('.dataTables_wrapper').hide();
                    tbody.innerHTML = '';
                    $('#filterDataTable').show();
                    let filterLength = data.notifications.length;
                    for (let i = 0; i < filterLength; i++) {
                        var htmls = "<tr>";
                        htmls += "<td>" + (i + 1) + "</td>";
                        htmls += "<td>" + data.notifications[i].for + "</td>";
                        var createdAt = new Date(data.notifications[i].created_at);
                        var date = createdAt.toLocaleDateString();
                        htmls += "<td>" + date + "</td>";
                        htmls += "<td>" + data.notifications[i].subject + "</td>";
                        htmls += "<td>" + data.notifications[i].message + "</td>";
                        htmls += "</tr>";
                        $("#filterDataTable tbody").append(htmls);
                    }
                    if ($.fn.DataTable.isDataTable('#filterDataTable')) {
                        $('#filterDataTable').DataTable().destroy();
                    }
                    $('#filterDataTable').DataTable({
                        scrollX: true,
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
</script>
@include('include.footer')
