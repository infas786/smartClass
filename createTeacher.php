<?php include('header.php')   ?>
<style>
    .sideTable th,
    .sideTable td {
        padding: 5px;
        line-height: 3;
    }

    #sideTableContainer {
        max-width: 100%;
        overflow: hidden;
    }

    .table-responsive {
        width: 100%;
        overflow-x: auto;
    }

    @media (max-width: 820px) {
        .sideTable {
            width: 100%;
            table-layout: fixed;
        }
    }

    .menu-sub {
        display: block !important;
    }

    h1 {
        margin: 50px 30px -50px 45%;
        color: whitesmoke;
    }

    .menu-title:hover {
        color: rgb(54, 103, 227) !important;
        background-color: rgb(172, 174, 178);
        padding: 5px 10px;
        border-radius: 5px;
        transition: all 0.5s ease;
    }
</style>

<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
    <div class="page-title d-flex flex-column me-3">

        <div class="d-flex align-items-stretch" id="kt_header_nav">
            <div class="header-menu align-items-stretch">
                <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
                    id="#kt_header_menu" data-kt-menu="true">
                    <div data-kt-menu-trigger="{default: 'click', lg: 'click'}"
                        data-kt-menu-placement="bottom-start"
                        class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2"
                        onclick="window.location.href='Dashboard.php';">
                        <span class="menu-link py-3">
                            <span class="menu-title fw-bold" style="color:white;">Dashboards</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'click'}"
                        data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2"
                        onclick="window.location.href='adminDashboard.php';">
                        <span class="menu-link py-3">
                            <span class="menu-title fw-bold" style="color:white;">Admin</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'click'}"
                        data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2"
                        onclick="window.location.href='createTeacher.php';">
                        <span class="menu-link py-3">
                            <span class="menu-title fw-bold" style="color:white;">Teachers</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'click'}"
                        data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2"
                        onclick="window.location.href ='createParent.php';">
                        <span class="menu-link py-3">
                            <span class="menu-title fw-bold" style="color:white;">Parents</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'click'}"
                        data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2"
                        onclick="window.location.href='createGrade.php';">
                        <span class="menu-link py-3">
                            <span class="menu-title fw-bold" style="color:white;">Grades</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'click'}"
                        data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2"
                        onclick="window.location.href='assignTeacher.php';">
                        <span class="menu-link py-3">
                            <span class="menu-title fw-bold" style="color:white;">Assign
                                Teacher</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center py-3 py-md-1">
        <div class="me-4">
        </div>
    </div>
</div>
<h1 style="margin: 52px 33px -48px 38% !important;">Teacher Create Form</h1>

<div class="row" style="margin-right: calc(0.5* var(--bs-gutter-x));
    margin-left: calc(0.2* var(--bs-gutter-x)); margin-top: 75px !important;">

    <div class="col-lg-7 col-md-7">
        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-10">
            <div class="menu-active-bg px-4 px-lg-0">
                <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0 invoices-main-tabs" id="kt_header_menu" data-kt-menu="true">
                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2 invoices-tabs" id="teacherDetails" style="margin-left: 30px;">
                        <span class="menu-link py-3 tab-btn active" data-target="#teacher-details">Teachers Details</span>
                    </div>
                </div>

                <form class="p-lg-10" id="teacherForm">
                    <div class="tab-content active" id="teacher-details">
                        <div class="row">
                            <input type="hidden" class="form-control form-control-solid border" id="tId" name="tId">
                            <div class="col-md-6 mb-6">
                                <label for="tFirstName" class="form-label fw-bold">Teacher's First Name<span style="color: red;">*</span></label>
                                <input class="form-control form-control-solid border mandatory" id="tFirstName" name="tFirstName">
                                </input>
                            </div>

                            <div class="col-md-6 mb-6">
                                <label for="tLastName" class="form-label fw-bold">Teacher's Last Name</label>
                                <input type="text" class="form-control form-control-solid border" id="tLastName" placeholder="Enter last name" name="tLastName">
                            </div>

                            <div class="col-md-6 mb-6">
                                <label for="tEmail" class="form-label fw-bold">Email<span style="color: red;">*</span></label>
                                <input type="email" class="form-control form-control-solid border mandatory" id="tEmail" placeholder="Enter email address" name="tEmail">
                            </div>

                            <div class="col-md-6 mb-6">
                                <label for="tContact" class="form-label fw-bold">Contact Number<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="tContact" placeholder="Enter contact number" name="tContact">
                            </div>

                            <div class="col-md-12 mb-6">
                                <label for="tAddress" class="form-label fw-bold">Address<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="tAddress" placeholder="Enter address" name="tAddress">
                            </div>
                            <div class="col-md-12 mb-6">
                                <label for="tAddress" class="form-label fw-bold">Subjects<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="tSubject" placeholder="Enter address" name="tSubject">
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="gender" class="form-label fw-bold">Gender<span style="color: red;">*</span></label>
                                <select class="form-control form-control-solid border mandatory" id="gender" name="gender">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-8">
                                <label for="joiningDate" class="form-label fw-bold">Joining Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control form-control-solid border mandatory" id="joiningDate" name="joiningDate">
                            </div>
                            <div class="col-md-6 mb-8">
                                <label for="joiningDate" class="form-label fw-bold">Username<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="username" name="username">
                            </div>
                            <div class="col-md-6 mb-8">
                                <label for="joiningDate" class="form-label fw-bold">Password<span style="color: red;">*</span></label>
                                <input type="password" class="form-control form-control-solid border mandatory" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 saveParentBtn mt-8 saveTeacherBtn">Save Teacher</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Right Side: Table -->
    <div class="col-lg-5 col-md-5" id="sideTableContainer">
        <div class="card p-4 shadow-sm">
            <h5 class="fw-bold">Teachers List</h5>
            <div class="table-responsive">
                <table class="table table-striped sideTable">
                    <thead>
                        <tr>
                            <th class="fw-bold">Teacher's Name</th>
                            <th class="fw-bold">Contact No</th>
                            <th class="fw-bold">Assigned Class</th>
                            <th class="fw-bold">Email</th>
                            <th class="fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="teacherData">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.saveTeacherBtn', function(e) {
        e.preventDefault();

        var formdata = new FormData($('#teacherForm')[0]);
        formdata.append('action', 'saveTeacher');

        $.ajax({
            type: "POST",
            url: "ajax/createTeacherAjax.php",
            data: formdata,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonColor: '#3085d6'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message || 'Something went wrong!',
                        confirmButtonColor: '#d33'
                    });
                }
                loadTeacherTable()
            },
        });
    });

    loadTeacherTable()

    function loadTeacherTable() {
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "ajax/createTeacherAjax.php",
                data: {
                    action: 'retrvTeacherTable'
                },
                dataType: "json",
                success: function(response) {
                    let rows = '';
                    if (response.length > 0) {
                        response.forEach(function(data) {
                            rows += '<tr>';
                            rows += '<td>' + data.l_name + '</td>';
                            rows += '<td>' + data.contact_num + '</td>';
                            rows += '<td>' + data.grade + '</td>';
                            rows += '<td>' + data.email + '</td>';
                            rows += '<td>';
                            rows += '<span style="cursor:pointer; margin-right:10px;"><i class="fa fa-edit editBtn" editAttr="' + data.Id + '"></i></span>';
                            rows += '<span style="cursor:pointer;"><i class="fa fa-trash deleteBtn" deleteAttr = "' + data.Id + '"></i></span>';
                            rows += '</td>';
                            rows += '</tr>';
                        });
                    } else {
                        rows = '<tr><td colspan="5">No teachers found</td></tr>';
                    }
                    $('.teacherData').html(rows);
                }

            });
        });
    }

    $(document).on('click', '.editBtn', function() {
        var clickedId = $(this).attr('editAttr');
        $('.saveTeacherBtn').text('Update');
        $.ajax({
            type: "POST",
            url: "ajax/createTeacherAjax.php",
            data: {
                action: 'loadTeacherForm',
                clickedId: clickedId
            },
            dataType: "json",
            success: function(response) {
                const teacher = response.teacherDet;

                if (teacher) {
                    $('#tId').val(teacher.Id);
                    $('#tFirstName').val(teacher.f_name);
                    $('#tLastName').val(teacher.l_name);
                    $('#tEmail').val(teacher.email);
                    $('#tContact').val(teacher.contact_num);
                    $('#tAddress').val(teacher.address);
                    $('#gender').val(teacher.gender);
                    $('#joiningDate').val(teacher.join_date);
                    $('#tSubject').val(teacher.tSubject)
                    $('#username').val(response.user.username);
                    $('#password').val(response.user.password);

                } else {
                    alert("No teacher data found!");
                }
            },
        });
    });

    $(document).on('click', '.deleteBtn', function() {
        var clickId = $(this).attr('deleteAttr');
        alert(clickId);

        $.ajax({
            method: "POST",
            url: "ajax/createTeacherAjax.php",
            data: {
                action: 'deleteTeacher',
                delClickId: clickId
            },
            dataType: "json",
            success: function(response) {
                if (response.sccess == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonColor: '#3085d6'
                    });

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message || 'Something went wrong!',
                        confirmButtonColor: '#d33'
                    });
                }
                loadTeacherTable();
            }
        })

    });
</script>
<?php include('footer.php')  ?>