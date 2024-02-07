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



<script>
    function showModal(button) {
        var userId = button.id;
        $("input[type='checkbox']:checked").prop("checked", false);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: "{{ url('edit-users') }}",
            data: {
                id: userId
            },
            success: (data) => {
                console.log(data);
                $('#userName').val(data.name);
                $('#userStatus').val(data.status);
                $('#userRole').val(data.role);
                $('#userId').val(data.id);
                let permissionData = data.permissions;
                let permissionDataLength = permissionData.length;
                for (let i = 0; i < permissionDataLength; i++) {
                    if (permissionData[i] == "all") {
                        console.log(permissionData[i]);
                        $("input[type='checkbox']").prop("checked", true);
                    }
                    $(`#${permissionData[i]}`).prop("checked", true);
                }
                $('#myModal').modal('show');
                $('#userUpdateButton').click(function(event) {
                    event.preventDefault();
                    var checkedValues = $("input[type='checkbox']:checked").map(function() {
                        return $(this).val();
                    }).get();

                    let userName = $('#userName').val();
                    let userStatus = $('#userStatus').val();
                    let userRole = $('#userRole').val();

                    let userId = $('#userId').val();;
                    let formData = {
                        userName: userName,
                        userStatus: userStatus,
                        userRole: userRole,
                        userPermission: checkedValues,
                        userId: userId,
                    }
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'post',
                        url: "{{ url('update-users') }}",
                        data: formData,
                        success: (data) => {
                            console.log(data.updatedUserData);
                            let updatedUserDataId = `tr${data.updatedUserData.id}`;
                            let thScopId = `row${data.updatedUserData.id}`;
                            let thScopIdInnerHTML = $(`#${thScopId}`).html();
                            let userTotalPermission = data.updatedUserData.permissions;
                            let UserTotalPermissionLength = userTotalPermission.length;
                            let UserPermissionString = "";
                            for (let i = 0; i < UserTotalPermissionLength; i++) {
                                UserPermissionString = userTotalPermission[i] + ',' +
                                    UserPermissionString;
                            }
                            console.log(UserPermissionString);
                            console.log($(`#${updatedUserDataId}`).html());
                            console.log(thScopIdInnerHTML);
                            // $(`#${updatedUserDataId}`).html()
                            let updatedHTML = ` <th scope="row" id="${thScopId}">${thScopIdInnerHTML}</th>
                                                                     <td>${data.updatedUserData.name}</td>
                                                                     <td>${data.updatedUserData.role}</td>

                                                                     <td>${UserPermissionString}</td>
                                        <td><button type="button" class="btn btn-primary" onclick="showModal(this)" id="${data.updatedUserData.id}" fdprocessedid="cjf9v">
                                                       Edit
                                         </button></td>`;

                            $(`#${updatedUserDataId}`).html(updatedHTML);
                        },
                        error: function(data) {
                            console.log(data);
                        }





                    });

                });


            },
            error: function(data) {
                console.log(data);
            }

        });

    };
</script>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4 class="mt-4">Edit User Profile</h4>
                    </div>
                </div>

                <!-- Modal Header -->
                <div class="row dashboard-header" style="background: #e5e5e5;">
                    <div class="col-md-11  mx-auto">
                        <form class="notification-form shadow rounded" action="" method="post" id="userFormData">
                            <div class="form-group">

                                <label for="exampleInputEmail1">User Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="userName" aria-describedby="textHelp" placeholder="please enter your name">

                                @if ($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif

                            </div>

                            <div class="form-group">

                                <label for="userStatus">User Status</label>
                                <select class="form-select" aria-label="Default select example" name="status" id="userStatus">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <input type="hidden" id="userId" value="">
                            <div class="form-group">
                                <label for="userRole">Role</label>
                                <input type="text" name="role" class="form-control" id="userRole"
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
                                    <input class="form-check-input " type="checkbox" value="corporatebatch"
                                        id="corporatebatch" name="permission[]">
                                    <label class="form-check-label" for="corporatebatch">
                                        Corporate Batch
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="customerbatch"
                                        id="customerbatch" name="permission[]">
                                    <label class="form-check-label" for="customerbatch">
                                        Customer Batch
                                    </label>
                                </div>
                                <!-- <div class="col-md-4"> -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="notification"
                                        id="notification" name="permission[]">
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
                                    <input class="form-check-input" type="checkbox" value="vertigoreport"
                                        id="vertigoreport" name="permission[]">
                                    <label class="form-check-label" for="vertigoreport">
                                        Vertigo Report
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="adminmanages"
                                        id="adminmanages" name="permission[]">
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
                                    <input class="form-check-input" type="checkbox" value="complaints"
                                        id="complaints" name="permission[]">
                                    <label class="form-check-label" for="complaints">
                                        Complaints
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark btn-md" style="margin: 30px 0px 0px;"
                                id="userUpdateButton">Update User Profile
                            </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="conatiner-fluid">
    <h3>User List</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">User Assign Roles</th>
                <th scope="col">User Assign Permissions</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $k => $user)
                <tr id="tr{{ $user->id }}">
                    <th scope="row" id="row{{ $user->id }}">{{ $k + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    @php
                        $userpermission = $user->permissions;
                        $count = count($user->permissions);
                        $allpermission = '';
                        for ($i = 0; $i < $count; $i++) {
                            $allpermission = $userpermission[$i] . ',' . $allpermission;
                        }
                    @endphp
                    <td>{{ $allpermission }}</td>
                    <td><button type="button" class="btn btn-primary" onclick="showModal(this)"
                            id="{{ $user->id }}">
                            Edit
                        </button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
