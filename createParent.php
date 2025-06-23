<?php include('header.php')  ?>

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

    .saveParentBtn:disabled {
        background-color: lightgrey;
        color: white;
        cursor: not-allowed;
        opacity: 0.9;
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
            <!-- <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}"> -->
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
<h1 style="margin: 52px 33px -48px 38% !important;">Parent Create Form</h1>

<div class="row" style="margin-right: calc(0.5* var(--bs-gutter-x));
    margin-left: calc(0.2* var(--bs-gutter-x)); margin-top: 75px !important;">
    <div class="col-lg-7 col-md-7">
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-10">
            <!--begin:Pages menu-->
            <div class="menu-active-bg px-4 px-lg-0">
                <!--begin:Tabs nav-->
                <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0 invoices-main-tabs" id="kt_header_menu" data-kt-menu="true">
                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2 invoices-tabs" id="parentDetails">
                        <span class="menu-link py-3 tab-btn active" data-target="#parent-details">Parents Details</span>
                    </div>
                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2 invoices-tabs" id="childAssociation">
                        <span class="menu-link py-3 tab-btn" data-target="#child-association">Child Association</span>
                    </div>
                </div>
                <form class="p-lg-10" id="parentForm">
                    <!-- Parent Details Tab -->
                    <div class="tab-content active" id="parent-details">
                        <div class="row ">
                            <div class="col-md-4 mb-6 ">
                                <label for="fName" class="form-label fw-bold">Father's Full Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="fName" placeholder="Enter father's Full Name" name="fName" autocomplete="new-password">
                                <input type="hidden" class="form-control form-control-solid border" id="pId" name="pId" value="">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="fContact" class="form-label fw-bold">Father's Contact<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="fContact" placeholder="Enter fathers's contact no" name="fContact">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="fOccupation" class="form-label fw-bold">Father's Occupation<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="fOccupation" placeholder="Enter fathers's occupation" name="fOccupation">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="mName" class="form-label fw-bold">Mother's Full Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="mName" placeholder="Enter mother's full name" name="mName" autocomplete="new-password">
                            </div>

                            <div class="col-md-4 mb-6">
                                <label for="mContact" class="form-label fw-bold">Mother's Contact<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="mContact" placeholder="Enter mother's contact no" name="mContact">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="mOccupation" class="form-label fw-bold">Mother's Occupation<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="mOccupation" placeholder="Enter mathers's occupation" name="mOccupation">
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="aContact" class="form-label fw-bold">Alternative Contact</label>
                                <input type="text" class="form-control form-control-solid border" id="aContact" placeholder="Enter an alternative contact no" name="aContact">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="randomEmail" class="form-label fw-bold">Email<span style="color: red;">*</span></label>
                                <input type="email" class="form-control form-control-solid border mandatory " id="randomEmail" placeholder="Enter email address" name="randomEmail" autocomplete="new-password">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="emConName1" class="form-label fw-bold">Emergency Contact Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="emConName1" placeholder="Enter an emergency contact name" name="emConName1">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="emConNum1" class="form-label fw-bold">Emergency Contact 1<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="emConNum1" placeholder="Enter an emergency contact no" name="emConNum1">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="relationship1" class="form-label fw-bold">Relationship<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory" id="relationship1" placeholder="Relationship to the child" name="relationship1">
                            </div>

                            <div class="col-md-4 mb-4">
                                <label for="emConName2" class="form-label fw-bold">Emergency Contact Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border" id="emConName2" placeholder="Enter an emergency contact name" name="emConName2">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="emConNum2" class="form-label fw-bold">Emergency Contact 2<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border" id="emConNum2" placeholder="Enter an emergency contact no" name="emConNum2">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="relationship2" class="form-label fw-bold">Relationship<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border" id="relationship2" placeholder="Relationship to the child" name="relationship2">
                            </div>
                            <div class="col-md-12 mb-8">
                                <label for="randomAddress" class="form-label fw-bold">Address<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="randomAddress" placeholder="Enter the street address" name="randomAddress" autocomplete="new-password">
                            </div>
                            <div class="col-md-12 mb-8">
                                <input type="address2" class="form-control form-control-solid border  " id="address2" placeholder="Enter the street address line 2" name="address2">
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="state" class="form-label fw-bold">State<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="state" placeholder="Enter the state" name="state" autocomplete="new-password">
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="province" class="form-label fw-bold">Province<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="province" placeholder="Enter the province" name="province" autocomplete="new-password">
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="country" class="form-label fw-bold">Country<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border mandatory " id="country" placeholder="Enter the country" name="randomCountry" autocomplete="new-password">
                            </div>
                            <div class="col-12 position-relative mb-8" style="min-height: 50px;">
                                <button type="button" class="btn btn-secondary fw-semibold nextBtnP" style="position: absolute;right: 10px;">Next tab</button>
                            </div>
                        </div>
                    </div>
                    <!-- Child Association Tab -->
                    <div class="tab-content" id="child-association" style="display: none;">
                        <div class="row">
                            <input type="hidden" name="childId" id="childId">
                            <div class="col-md-6 mb-6">
                                <label for="childfName" class="form-label fw-bold">Child's First Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border " id="childfName" placeholder="Enter Child's First Name" name="childfName" autocomplete="new-password">
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="childlName" class="form-label fw-bold">Child's Last Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border " id="childlName" placeholder="Enter Child's Last Name" name="childlName" autocomplete="new-password">
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="cNationality" class="form-label fw-bold">Nationality<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border " id="cNationality" placeholder="Enter Child's Nationality" name="cNationality" autocomplete="new-password">
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="childRid" class="form-label fw-bold">Child's Resident ID<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-solid border " id="childRid" placeholder="Enter Child's Resident ID" name="childRid" autocomplete="new-password">
                            </div>
                            <div class="col-md-4 mb-6">
                                <label for="childDob" class="form-label fw-bold">Child's Date Of Birth<span style="color: red;">*</span></label>
                                <input type="date" class="form-control form-control-solid border " id="childDob" placeholder="Enter Child's Date Of Birth" name="childDob" autocomplete="new-password">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-bold">Enrolment Grade<span style="color: red;">*</span></label>
                                <select id="enrolgrade" name="enrolgrade" class="form-control form-control-solid border ">
                                    <option selected>Select the Grade...</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-bold">Section<span style="color: red;">*</span></label>
                                <select id="enrolsection" name="enrolsection" class="form-control form-control-solid border ">
                                    <option selected>Select the Section...</option>
                                </select>
                            </div>
                            <div class="col-md- 12 mb-4">
                                <label for="medicalCondition" class="form-label fw-bold">Medical Condition<span style="color: red;">*</span></label>
                                <textarea type="text" class="form-control form-control-solid border " id="medicalCondition" placeholder="Enter Medical Condition" name="medicalCondition"></textarea>
                            </div>
                            <div class="col-md- 12 mb-4">
                                <label for="allergySpecification" class="form-label fw-bold">Allergy Specification<span style="color: red;">*</span></label>
                                <textarea type="text" class="form-control form-control-solid border " id="allergySpecification" placeholder="Enter If there is any food/medication allergies" name="allergySpecification"></textarea>
                            </div>
                            <div class="col-md-12 position-relative mb-8" style="min-height: 50px;">
                                <button type="button" class="btn btn-primary fw-semibold addChildBtn">Add Child +</button>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-5" id="childTable">
                                <div class="card p-4 shadow-sm">
                                    <div class="table-responsive">
                                        <table class="table table-striped  sideTable">
                                            <thead>
                                                <tr>
                                                    <th class="fw-bold">Name</th>
                                                    <th class="fw-bold">DOB</th>
                                                    <th class="fw-bold">ID Number</th>
                                                    <th class="fw-bold">Grade</th>
                                                    <th class="fw-bold">Section</th>
                                                    <th class="fw-bold">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="childData">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative mb-8" style="min-height: 50px;">
                                <button type="button" class="btn btn-secondary fw-semibold chPreviousBtn">Previous tab</button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 saveParentBtn">Save Parent</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Right Side: Table -->
    <div class="col-lg-5 col-md-5" id="sideTableContainer">
        <div class="card p-4 shadow-sm">
            <h5 class="fw-bold">Parents List</h5>
            <div class="table-responsive">
                <table class="table table-striped  sideTable">
                    <thead>
                        <tr>
                            <th class="fw-bold">Father's Name</th>
                            <th class="fw-bold">Mother's Name</th>
                            <th class="fw-bold">Contact No</th>
                            <th class="fw-bold">Email</th>
                            <th class="fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="parentData">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('.saveParentBtn').prop('disabled', true);

        // Parent Details Tab
        $('.nextBtnP').click(function(e) {
            e.preventDefault();

            if ($('.tab-btn[data-target="#parent-details"]').hasClass('active')) {
                let isValid = true;
                $('#parent-details .mandatory').each(function() {
                    if ($(this).val().trim() === '') {
                        $(this).removeClass('border').css('border', '1px solid red');
                        if (!$(this).next('.error_message').length) {
                            $(this).after('<span class="error_message" style="color: red; font-size: 12px;">This field is required!</span>');
                        }
                        isValid = false;
                    } else {
                        $(this).css('border', '');
                        $(this).next('.error_message').remove();
                    }
                });

                if (isValid) {
                    let parentNextButton = $(this);
                    parentNextButton.text('Next >>>> ');
                    setTimeout(function() {
                        parentNextButton.text('Next')
                    }, 1500);
                    $('.tab-btn[data-target="#parent-details"]').removeClass('active');
                    $('.tab-btn[data-target="#child-association"]').addClass('active');
                    $('#parent-details').hide();
                    $('#child-association').show();
                }
            }
        });

        //Append Children
        $(document).on('click', '.addChildBtn', function() {
            let childId = $('#childId').val();
            let childFirstName = $('#childfName').val();
            let childLastName = $('#childlName').val();
            let childNationality = $('#cNationality').val();
            let childDob = $('#childDob').val();
            let childRid = $('#childRid').val();
            let enrolGrade = $('#enrolgrade').val();
            let enrolSection = $('#enrolsection').val();
            let medicalCond = $('#medicalCondition').val();
            let allergySpecification = $('#allergySpecification').val();

            let childFullName = childFirstName + ' ' + childLastName;

            if (childFirstName !== '' && childLastName !== '' && childDob !== '' && childRid !== '' && enrolGrade !== '' && enrolSection !== '') {
                $('.childData').append(
                    `<tr>
                        <td>
                            ${childFirstName}
                            <input type="hidden" name="childId[]" value="${childId}">
                            <input type="hidden" name="childFirstName[]" value="${childFirstName}">
                            <input type="hidden" name="childLastName[]" value="${childLastName}">
                            <input type="hidden" name="childNationality[]" value="${childNationality}">
                            <input type="hidden" name="medicalCond[]" value="${medicalCond}">
                            <input type="hidden" name="allergySpecification[]" value="${allergySpecification}">
                        </td>
                        <td>
                            ${childDob}
                            <input type="hidden" name="childDob[]" value="${childDob}">
                        </td>
                        <td>
                            ${childRid}
                            <input type="hidden" name="childRid[]" value="${childRid}">
                        </td>
                        <td>
                            ${enrolGrade}
                            <input type="hidden" name="enrolGrade[]" value="${enrolGrade}">
                        </td>
                        <td>
                            ${enrolSection}
                            <input type="hidden" name="enrolSection[]" value="${enrolSection}">
                        </td>
                        <td>
                            <a href ="#" class="childDel"><i class="fa fa-trash"></i></a>
                            <a href ="#" class="childEdit"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>`
                )
            } else {
               Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            text: "Please fill all required filds!",
                            confirmButtonColor: '#3085d6'
                        });
            }
        });

        //Child Association Tab
        $(document).on('click', '.saveParentBtn', function(e) {
            e.preventDefault();
            if ($('.tab-btn[data-target="#child-association"]').hasClass('active')) {
                isValid = true;
                $('#child-association .mandatory').each(function() {
                    if ($(this).val().trim() === '') {
                        $(this).removeClass('border').css('border', '1px solid red');
                        if (!$(this).next('error-message').length) {
                            $(this).after('<span class="error_message" style="color: red; font-size: 12px;">This field is required!</span>')
                        }
                        isValid = false;
                    } else {
                        $(this).css('border', '');
                        $(this).next('.error_message').remove();
                    }
                });
            }
            var formdata = new FormData($('#parentForm')[0]);
            formdata.append('action', 'saveParentDetails');

            $.ajax({
                type: "POST",
                url: "ajax/createParentAjax.php",
                data: formdata,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(res) {
                    if (res.status == 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: res.message,
                            confirmButtonColor: '#3085d6'
                        });
                        $('#parentForm')[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: res.message || 'Something went wrong!',
                            confirmButtonColor: '#d33'
                        });
                    }
                    loadParentData();

                },
            });

        });
        $('.mandatory').keyup(function() {
            $(this).addClass('border').css('border', '');
            $(this).next('.error_message').remove();

            let allInputFilled = true;


            $('.mandatory').each(function() {
                if ($(this).val().trim() === '') {
                    allInputFilled = false;
                }
            });
            if (allInputFilled) {
                $('.saveParentBtn').prop('disabled', false);
            } else {
                $('.saveParentBtn').prop('disabled', true);
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        let tabs = document.querySelectorAll(".tab-btn");
        let contents = document.querySelectorAll(".tab-content");
        // let sideTable = document.querySelector("#sideTableContainer");

        tabs.forEach(tab => {
            tab.addEventListener("click", function() {
                tabs.forEach(t => t.classList.remove("active"));

                contents.forEach(content => content.style.display = "none");
                // sideTable.forEach(sideTable => sideTable.style.display = "none");

                this.classList.add("active");

                let target = document.querySelector(this.getAttribute("data-target"));
                if (target) target.style.display = "block";
            });
        });
    });
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "ajax/createParentAjax.php",
            data: {
                action: 'getGrade'
            },
            dataType: "json",
            success: function(data) {
                $('#enrolgrade').empty();

                $('#enrolgrade').append('<option selected>Select the Grade...</option>');

                $.each(data[0], function(index, item) {
                    $('#enrolgrade').append('<option value="' + item.Grade_Name + '">' + item.Grade_Name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
    });
    $(document).ready(function() {
        $('#enrolgrade').change(function() {
            let gradeId = $(this).val();

            if (gradeId !== '') {
                $.ajax({
                    type: "POST",
                    url: "ajax/createParentAjax.php",
                    data: {
                        action: 'getSection',
                        grade_id: gradeId
                    },
                    dataType: "json",
                    success: function(data) {
                        $('#enrolsection').empty();
                        $('#enrolsection').append('<option selected>Select the Section...</option>');

                        let sectionsArray = data[0].Grade_Section.split(',').map(item => item.trim());

                        $.each(sectionsArray, function(index, section) {
                            $('#enrolsection').append('<option value="' + section + '">' + section + '</option>');
                        });
                    },
                });
            }
        });
    })

    $(document).on('click', '.chPreviousBtn', function() {
        $('#parentDetails .menu-link').click();
    });
    loadParentData();

    function loadParentData() {
        $(document).ready(function() {

            $.ajax({
                type: "POST",
                url: "ajax/createParentAjax.php",
                data: {
                    action: 'loadParentDetails'
                },
                dataType: "json",
                success: function(response) {
                    let tableRow = '';
                    $.each(response, function(index, parent) {
                        tableRow += `<tr>
                                    <td>${parent.father_name}</td>
                                    <td>${parent.mother_name}</td>
                                    <td>${parent.father_contact}</td>
                                    <td>${parent.email}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-trash deleteParentBtn" deleteParentBtn="${parent.Id}"  style="font-size:10px;"></i>
                                            <i class="fa fa-edit editParentBtn" editParentBtn="${parent.Id}"  style="font-size:10px;"></i>
                                            <i class="fa fa-eye" data-id="${parent.Id}"  style="font-size:10px;"></i>
                                        </a>
                                    </td>
                                </tr>`;
                    });
                    $('.parentData').html(tableRow);
                },
                error: function(xhr, status, error) {}
            });


        });
    }


    $(document).on('click', '.editParentBtn', function() {
        $('.saveParentBtn').prop('disabled', false);

        var editId = $(this).attr('editParentBtn');
        $.ajax({
            type: "POST",
            url: "ajax/createParentAjax.php",
            dataType: "json",
            data: {
                action: 'editParent',
                clickedId: editId
            },
            success: function(response) {
                if (response.parentDet) {
                    $('#pId').val(response.parentDet.Id);
                    $('#fName').val(response.parentDet.father_name);
                    $('#fContact').val(response.parentDet.father_contact);
                    $('#fOccupation').val(response.parentDet.father_occu);
                    $('#mName').val(response.parentDet.mother_name);
                    $('#mContact').val(response.parentDet.mother_contact);
                    $('#mOccupation').val(response.parentDet.mother_occu);
                    $('#aContact').val(response.parentDet.alt_contact);
                    $('#randomEmail').val(response.parentDet.email);
                    $('#emConName1').val(response.parentDet.em_contName1);
                    $('#emConNum1').val(response.parentDet.em_cont1);
                    $('#relationship1').val(response.parentDet.relation1);
                    $('#emConName2').val(response.parentDet.em_contName2);
                    $('#emConNum2').val(response.parentDet.em_cont2);
                    $('#relationship2').val(response.parentDet.relation2);
                    $('#randomAddress').val(response.parentDet.address);
                    $('#state').val(response.parentDet.state);
                    $('#province').val(response.parentDet.province);
                    $('#country').val(response.parentDet.country);
                }

                if (response.childDet.length > 0) {
                    $('.childData').html('');
                    response.childDet.forEach(function(child) {
                        $('.childData').append(`
                            <tr>
                                <td>
                                    ${child.child_fname}
                                    <input type="hidden" name="childId[]" value="${child.childId}">
                                    <input type="hidden" name="childFirstName[]" value="${child.child_fname}">
                                    <input type="hidden" name="childLastName[]" value="${child.child_lname}">
                                    <input type="hidden" name="childNationality[]" value="${child.nationality}">
                                    <input type="hidden" name="medicalCond[]" value="${child.medical_con}">
                                    <input type="hidden" name="allergySpecification[]" value="${child.allergy_spec}">
                                </td>
                                <td>
                                    ${child.child_dob}
                                    <input type="hidden" name="childDob[]" value="${child.child_dob}">
                                </td>
                                <td>
                                    ${child.child_id}
                                    <input type="hidden" name="childRid[]" value="${child.child_id}">
                                </td>
                                <td>
                                    ${child.enrol_grade}
                                    <input type="hidden" name="enrolGrade[]" value="${child.enrol_grade}">
                                </td>
                                <td>
                                    ${child.section}
                                    <input type="hidden" name="enrolSection[]" value="${child.section}">
                                </td>
                                <td>
                                    <a href="#" class="childDel"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="childEdit" childEdit=${child.Id}><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        `);
                    });
                }
                $('.saveParentBtn').html('Update');

            }
        })
    });

    //Delete parent
    $(document).on('click', '.deleteParentBtn', function() {
        var deleteParentId = $(this).attr('deleteParentBtn');
        $.ajax({
            type: "POST",
            url: "ajax/createParentAjax.php",
            dataType: "json",
            data: {
                action: 'deleteParent',
                lastClickedPId: deleteParentId
            },
            success: function(response) {
                if (response.status == 200) {
                    Swal.fire({
                            icon: 'error',
                            title: 'Deletion Success',
                            text: response.message,
                            confirmButtonColor: '#3085d6'
                        });;
                } else {
                    Swal.fire({
                            icon: 'error',
                            title: 'Failed',
                            text: response.message,
                            confirmButtonColor: '#3085d6'
                        });
                }

            }

        })
    });

    //child edit delete
    $(document).on('click', '.childDel', function(e) {
        e.preventDefault();
        $(this).closest('tr').remove();
    });
    $(document).on('click', '.childEdit', function(e) {
        e.preventDefault();
        var editChildBtn = $(this).attr('childEdit');

        $.ajax({
            type: "POST",
            url: "ajax/createParentAjax.php",
            data: {
                action: 'editChild',
                lastClickChild: editChildBtn
            },
            dataType: "json",
            success: function(response) {
                if (response.getChildRow) {
                    $('#childId').val(response.getChildRow.Id);
                    $('#childfName').val(response.getChildRow.child_fname);
                    $('#childlName').val(response.getChildRow.child_lname);
                    $('#childDob').val(response.getChildRow.child_dob);
                    $('#childRid').val(response.getChildRow.child_id);
                    $('#cNationality').val(response.getChildRow.nationality);
                    $('#medicalCondition').val(response.getChildRow.medical_con);
                    $('#allergySpecification').val(response.getChildRow.allergy_spec);
                    $('#enrolgrade').val(response.getChildRow.enrol_grade);
                    $('#enrolsection').val(response.getChildRow.section);
                }
            }
        })
    });
</script>
<?php include('footer.php')  ?>