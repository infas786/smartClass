<?php include('header.php') ?>
<?php include('function.php') ?>

<style>
    .cGrade {
        font-size: 20px;
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
<h1 style="margin: 52px 33px -48px 38% !important;">Grade Create Form</h1>
<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-10" style="margin: 100px;">
    <div class="menu-active-bg px-4 px-lg-0" id="gradeContainer">
        <div class="d-flex w-100 overflow-auto">
            <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 active text-active-primary cGrade" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">Create Grades</a>
                </li>
            </ul>
        </div>
        <form class="p-lg-10 multiGrade " id="gradeForm">
        </form>
        <div class="mb-4">
            <button type="button" class="btn btn-primary w-100" id="addGradeBtn">Add +</button>
        </div>
        <hr>
        <div id="gradeList" class="mt-3" style="padding:10px; background-color:none;"></div>
        <button class=" mb-4 btn btn-primary saveGradeBtn" style="float: inline-end; margin-right:30px; position:sticky;">Save Grade</button>
    </div>
</div>
<script>
    $(document).on('click', '#addGradeBtn', function() {
        let button = $(this);
        button.text("Adding.....");

        setTimeout(function() {
            button.text("Add +");
        }, 1500);

        button.prop("disabled", true);
        setTimeout(function() {
            button.text("Add +").prop("disabled", false);
        }, 1500);

        $('.multiGrade').append(`
            <div class="row mb-3">
                <div class="col-md-3">
                    <label class="form-label fw-bold">Grade Order</label>
                    <input type="number" class="form-control form-control-solid" placeholder="Enter Order" name="gradeOrder[]" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Grade Name</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter Grade Name" name="gradeName[]" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Grade Section</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter Sections (A,B,C)" name="gradeSection[]" required>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger delBtn" deltbutn style="margin: 25px 62px 15px 59px; padding: 12px 15px 11px 17px;"><i class="bi bi-trash"></i></button>
                </div>
            </div>
        `);
    });



    $(document).on('click', '.saveGradeBtn', function() {
        let sbutton = $(this);
        sbutton.text("Grade Saving.....");

        setTimeout(function() {
            sbutton.text("Save Grade");
        }, 1500);

        sbutton.prop("disabled", true);
        setTimeout(function() {
            sbutton.text("Save Grade").prop("disabled", false);
        }, 1500);

        var form = $('#gradeForm')[0];
        var formdata = new FormData(form);
        formdata.append('action', 'saveGrade')

        $.ajax({
            type: "POST",
            url: "ajax/createGradeAjax.php",
            data: formdata,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function(response) {
                let success = true;
                let messages = [];

                response.forEach(function(res) {
                    messages.push(res.Message);
                    if (res.Status !== 200) {
                        success = false;
                    }
                });

                showAlert(messages.join("\n"), success ? 'success' : 'error', true);

                if (success) {
                    $('#gradeForm')[0].reset();
                    loadGrade();
                }
            },
            error: function() {
                showAlert("An error occurred. Please try again.", "error", true);
            }
        });
    });

    $(document).ready(function() {
        loadGrade();

        function loadGrade() {
            $.ajax({
                type: "POST",
                url: "ajax/createGradeAjax.php",
                data: {
                    action: 'loadGrade'
                },
                dataType: "json",
                success: function(response) {
                    $('.multiGrade').empty();

                    response.forEach(function(gOrder) {

                        $('.multiGrade').append(`
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-label fw-bold">Grade Order</label>
                                <input type="number" class="form-control form-control-solid" placeholder="Enter Order" name="gradeOrder[]" value="${gOrder.Grade_Order}" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-bold">Grade Name</label>
                                <input type="text" class="form-control form-control-solid" placeholder="Enter Grade Name" name="gradeName[]" value="${gOrder.Grade_Name}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Grade Section</label>
                                <input type="text" class="form-control form-control-solid" placeholder="Enter Sections (A,B,C)" name="gradeSection[]" value="${gOrder.Grade_Section}" required>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger delBtn" deltbutn style="margin: 25px 62px 15px 59px; padding: 12px 15px 11px 17px;" data-id="${gOrder.Id}"><i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                    `);
                    });
                },
            });
        }
    });
    $(document).on("click", ".delBtn", function() {
        let row = $(this).closest('.row');

        row.animate({
            opacity: 0,
            transform: "scale(0.5)"
        }, 300, function() {
            row.slideUp(400, function() {
                row.remove();
            });
        });
    });
</script>
<?php include('footer.php')  ?>