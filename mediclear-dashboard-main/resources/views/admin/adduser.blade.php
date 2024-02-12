<!-- headr-file-start -->
@include('include.sidebar')


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

    /* .form-check-label {
        margin-bottom: 0;
        width: 30rem;
    } */
    .Modules {
        flex-wrap: wrap;
    }

    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
    }
</style>

<!-- Button trigger modal -->


<!-- Modal -->
<!-- The Modal -->


<!-- headr-file-end-->
<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <!-- Main content starts -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container-fluid">

        <div class="row">
            <div class="main-header">
                <h4 class="mt-4">Manage Admins</h4>
            </div>
        </div>
        <div class="row dashboard-header" style="background: #e5e5e5;">
            <div class="col-md-11  mx-auto">
                <form class="notification-form shadow rounded" action="{{ route('admin.addusers') }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                            id="exampleInputsubject" aria-describedby="textHelp" placeholder="please enter your name">
                        @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                            id="exampleInputsubject" aria-describedby="textHelp" placeholder="Please enter your email">
                        @if ($errors->has('email'))
                            <script type="text/javascript">
                                alert(`{{ $errors->first('email') }}`)
                            </script>
                        @endif
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Create Password</label>
                        <input type="password" name="password" class="form-control" id="password-field"
                            aria-describedby="textHelp" placeholder="*****">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role</label>
                        <input type="text" name="role" class="form-control" id="exampleInputsubject"
                            aria-describedby="textHelp" placeholder="Role">
                        @if ($errors->has('role'))
                            <span class="help-block">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                    <h6>Assign Modules</h6>
                    <div class="col-md-12  Modules d-flex justify-content-around">

                        <div class="form-check" style="">
                            <input class="form-check-input" type="checkbox" value="alluser" id="alluser"
                                name="permission[]" checked>
                            <label class="form-check-label" for="alluser">
                                All User
                            </label>
                        </div>
                        <div class="form-check" style="">
                            <input class="form-check-input" type="checkbox" value="adddoctor" id="adddoctor"
                                name="permission[]">
                            <label class="form-check-label" for="adddoctor">
                                ADD Doctor
                            </label>
                        </div>
                        <div class="form-check" style="">
                            <input class="form-check-input" type="checkbox" value="addcompany" id="addcompany"
                                name="permission[]">
                            <label class="form-check-label" for="addcompany">
                                ADD Company
                            </label>
                        </div>

                        <!-- <div class="col-md-4"> -->

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="corporateid" id="corporateid"
                                name="permission[]">
                            <label class="form-check-label" for="corporateid">
                                Corporate ID
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-around ">
                        <div class="form-check ">
                            <input class="form-check-input " type="checkbox" value="corporatebatch" id="corporatebatch"
                                name="permission[]">
                            <label class="form-check-label" for="corporatebatch">
                                Corporate Batch
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="customerbatch" id="customerbatch"
                                name="permission[]">
                            <label class="form-check-label" for="customerbatch">
                                Customer Batch
                            </label>
                        </div>


                        <!-- <div class="col-md-4"> -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="notification" id="notification"
                                name="permission[]">
                            <label class="form-check-label" for="notification">
                                Notification
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="payment" id="payment"
                                name="permission[]">
                            <label class="form-check-label" for="payment">
                                Payment
                            </label>
                        </div>
                    </div>


                    <div class="col-md-12 d-flex justify-content-around">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="vertigoreport" id="vertigoreport"
                                name="permission[]">
                            <label class="form-check-label" for="vertigoreport">
                                Vertigo Report
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="adminmanages" id="adminmanages"
                                name="permission[]">
                            <label class="form-check-label" for="adminmanages">
                                Admin Manages
                            </label>
                        </div>


                        <!-- <div class="col-md-4"> -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="feedback" id="feedback"
                                name="permission[]">
                            <label class="form-check-label" for="feedback">
                                Feedback
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="complaints" id="complaints"
                                name="permission[]">
                            <label class="form-check-label" for="complaints">
                                Complaints
                            </label>
                        </div>
                    </div>








                    <button type="submit" class="btn btn-dark btn-md" style="    margin: 30px 0px 0px;">Assign
                        Roles</button>
            </div>
            </form>

        </div>
    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {



        $(".toggle-password").click(function() {


            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));

            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        if ($("#alluser").is(":checked")) {
            $("input[type=checkbox]").prop('checked', true);
        }      

        $("#alluser").click(function(){ 
                
        $("input[type=checkbox]").prop('checked', $(this).prop('checked'));

        });


        

    });
</script>


<!-- footer-file-start -->

<!-- footer-file-end -->
