<?php include('header.php')  ?>

<style>
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
</style>
<h1 style="margin: 52px 33px -48px 38% !important;">Parent Create Form</h1>

<!--begin:Menu sub-->
<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-10" style="margin: 100px;">
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
            <div class="menu-item menu-lg-down-accordion me-0 me-lg-2 invoices-tabs" id="medicalInfo">
                <span class="menu-link py-3 tab-btn" data-target="#medical-info">Medical Info</span>
            </div>
            <div class="menu-item menu-lg-down-accordion me-0 me-lg-2 invoices-tabs" id="emergencyCon1">
                <span class="menu-link py-3 tab-btn" data-target="#emergencyCon">Emergency Contact Info</span>
            </div>
        </div>
        <form class="p-lg-10" id="parentForm">
            <!-- Parent Details Tab -->
            <div class="tab-content active" id="parent-details">
                <div class="row ">
                    <div class="col-md-4 mb-6 ">
                        <label for="fName" class="form-label fw-bold">Father's Full Name</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="fName" placeholder="Enter father's Full Name" name="fName" autocomplete="new-password">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="fContact" class="form-label fw-bold">Father's Contact</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="fContact" placeholder="Enter fathers's contact no" name="fContact">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="fOccupation" class="form-label fw-bold">Father's Occupation</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="fOccupation" placeholder="Enter fathers's occupation" name="fOccupation">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="mName" class="form-label fw-bold">Mother's Full Name</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="mName" placeholder="Enter mother's full name" name="mName" autocomplete="new-password">
                    </div>

                    <div class="col-md-4 mb-6">
                        <label for="mContact" class="form-label fw-bold">Mother's Contact</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="mContact" placeholder="Enter mother's contact no" name="mContact">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="mOccupation" class="form-label fw-bold">Mother's Occupation</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="mOccupation" placeholder="Enter mathers's occupation" name="mOccupation">
                    </div>
                    <div class="col-md-6 mb-6">
                        <label for="aContact" class="form-label fw-bold">Alternative Contact</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="aContact" placeholder="Enter an alternative contact no" name="aContact">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="randomEmail" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control form-control-solid border mandatory " id="randomEmail" placeholder="Enter email address" name="randomEmail" autocomplete="new-password">
                    </div>
                    <div class="col-md-12 mb-8">
                        <label for="randomAddress" class="form-label fw-bold">Address</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="randomAddress" placeholder="Enter the street address" name="randomAddress" autocomplete="new-password">
                    </div>
                    <div class="col-md-12 mb-8">
                        <input type="address2" class="form-control form-control-solid border mandatory " id="address2" placeholder="Enter the street address line 2" name="address2">
                    </div>
                    <div class="col-md-4 mb-10">
                        <label for="state" class="form-label fw-bold">State</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="state" placeholder="Enter the state" name="state" autocomplete="new-password">
                    </div>
                    <div class="col-md-4 mb-10">
                        <label for="province" class="form-label fw-bold">Province</label>
                        <input type="text" class="form-control form-control-solid border mandatory " id="province" placeholder="Enter the province" name="province" autocomplete="new-password">
                    </div>
                    <div class="col-md-4 mb-10">
                        <label for="country" class="form-label fw-bold">Country</label>
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
                    <div class="col-md-4 mb-6">
                        <label for="childfName" class="form-label fw-bold">Child's First Name</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="childfName" placeholder="Enter Child's First Name" name="childfName" autocomplete="new-password">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="childlName" class="form-label fw-bold">Child's Last Name</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="childlName" placeholder="Enter Child's Last Name" name="childlName" autocomplete="new-password">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="cNationality" class="form-label fw-bold">Nationality</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="cNationality" placeholder="Enter Child's Nationality" name="cNationality" autocomplete="new-password">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="childRid" class="form-label fw-bold">Child's Resident ID</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="childRid" placeholder="Enter Child's Resident ID" name="childRid" autocomplete="new-password">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="childDob" class="form-label fw-bold">Child's Date Of Birth</label>
                        <input type="date" class="form-control form-control-solid border mandatory" id="childDob" placeholder="Enter Child's Date Of Birth" name="childDob" autocomplete="new-password">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label class="form-label fw-bold">Enrolment Grade</label>
                        <select id="enrolgrade" name="enrolgrade" class="form-control form-control-solid border mandatory">
                            <option selected>Select the Grade...</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label class="form-label fw-bold">Section</label>
                        <select id="enrolsection" name="enrolsection" class="form-control form-control-solid border madatroy">
                            <option selected>Select the Section...</option>
                        </select>
                    </div>
                    <div class="col-md-6 position-relative mb-8" style="min-height: 50px;">
                        <button type="button" class="btn btn-secondary fw-semibold chPreviousBtn">Previous tab</button>
                    </div>
                    <div class="col-md-6 position-relative mb-8" style="min-height: 50px;">
                        <button type="button" class="btn btn-secondary fw-semibold CnextBtn" style="position: absolute;right: 10px;">Next tab</button>
                    </div>
                </div>
            </div>
            <!-- Medical Info Tab -->
            <div class="tab-content" id="medical-info" style="display: none;">
                <div class="row">
                    <div class="col-md- 12 mb-4">
                        <label for="medicalCondition" class="form-label fw-bold">Medical Condition</label>
                        <textarea type="text" class="form-control form-control-solid border mandatory" id="medicalCondition" placeholder="Enter Medical Condition" name="medicalCondition"></textarea>
                    </div>
                    <div class="col-md- 12 mb-4">
                        <label for="allergySpecification" class="form-label fw-bold">Allergy Specification</label>
                        <textarea type="text" class="form-control form-control-solid border mandatory" id="allergySpecification" placeholder="Enter If there is any food/medication allergies" name="allergySpecification"></textarea>
                    </div>
                    <div class="col-md-6 position-relative mb-8" style="min-height: 50px;">
                        <button type="button" class="btn btn-secondary fw-semibold medPreviousBtn ">Previous tab</button>
                    </div>
                    <div class="col-md-6 position-relative mb-8" style="min-height: 50px;">
                        <button type="button" class="btn btn-secondary fw-semibold nextBtnM " style="position: absolute;right: 10px;">Next tab</button>
                    </div>
                </div>

            </div>
            <!-- Permissions Tab -->
            <div class="tab-content" id="emergencyCon" style="display: none;">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="emConName1">Emergency Contact Name</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="emConName1" placeholder="Enter an emergency contact name" name="emConName1">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="emConNum1">Emergency Contact 1</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="emConNum1" placeholder="Enter an emergency contact no" name="emConNum1">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="relationship1">Relationship</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="relationship1" placeholder="Relationship to the child" name="relationship1">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="emConName2">Emergency Contact Name</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="emConName2" placeholder="Enter an emergency contact name" name="emConName2">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="emConNum2">Emergency Contact 2</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="emConNum2" placeholder="Enter an emergency contact no" name="emConNum2">
                    </div>
                    <div class="col-md-4 mb-6">
                        <label for="relationship2">Relationship</label>
                        <input type="text" class="form-control form-control-solid border mandatory" id="relationship2" placeholder="Relationship to the child" name="relationship2">
                    </div>
                    <div class="col-6 position-relative mb-8" style="min-height: 50px;">
                        <button type="button" class="btn btn-secondary fw-semibold emPreviousBtn">Previous tab</button>
                    </div>

                </div>

            </div>
            <button type="submit" class="btn btn-primary w-100 saveParentBtn">Save Parent</button>
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.saveParentBtn').prop('disabled', true);

        // Parent Details Tab
        $('.nextBtnP').click(function(e) {
            e.preventDefault();

            let parentNextButton = $(this);
            parentNextButton.text('Next >>>> ');
            setTimeout(function() {
                parentNextButton.text('Next')
            }, 1500);

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
                    $('.tab-btn[data-target="#parent-details"]').removeClass('active');
                    $('.tab-btn[data-target="#child-association"]').addClass('active');
                    $('#parent-details').hide();
                    $('#child-association').show();
                }
            }
        });

        //Child Association Tab
        $('.CnextBtn').on('click', function(e) {
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
                if (isValid) {
                    $('.tab-btn[data-target = "#child-association"]').removeClass('active');
                    $('.tab-btn[data-target = "#medical-info"]').addClass('active');
                    $('#child-association').hide();
                    $('#medical-info').show();

                }
            }
        });
        //Medical Info Tab
        $(document).on('click', '.nextBtnM', function(e) {
            e.preventDefault();
            if ($('.tab-btn[data-target="#medical-info"]').hasClass('active')) {
                isValid = true;
                $('#medical-info .mandatory').each(function() {
                    if ($(this).val().trim() === '') {
                        $(this).removeClass('border').css('border', '1px solid red');
                        if (!$(this).next('.error_message').length) {
                            $(this).after('<span class= "error_message" style="color:red; font-size:12px;">This filed is required!</span>')
                        }
                        isValid = false;
                    } else {
                        $(this).css('border', '');
                        $(this).next('.error_message').remove();
                    }
                });
                if (isValid) {
                    $('.tab-btn[data-target="#medical-info"]').removeClass('active');
                    $('.tab-btn[data-target="#emergencyCon"]').addClass('active');
                    $('#medical-info').hide();
                    $('#emergencyCon').show();
                    // $('.saveParentBtn').prop('disabled', false);
                }
            }
        });
        // Emergency tab 
        $(document).on('click', '.saveParentBtn', function(e) {
            e.preventDefault();
            if ($('.tab-btn[data-target="#emergencyCon"]').hasClass('active')) {
                let isValid = true;

                $('#emergencyCon .mandatory').each(function() {
                    if ($(this).val().trim() === '') {
                        $(this).removeClass('border').css('border', '1px solid red');
                        if (!$(this).next('.error_message').length) {
                            $(this).after('<span class="error_message" style="color:red; font-size:12px">This field is required!</span>');
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
                        alert(res.message);
                        $('#parentForm')[0].reset();
                    } else {
                        alert(res.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log("AJAX Error: " + error);
                    alert("An error occurred. Please try again.");
                }
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

        tabs.forEach(tab => {
            tab.addEventListener("click", function() {
                tabs.forEach(t => t.classList.remove("active"));

                contents.forEach(content => content.style.display = "none");

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
                alert(gradeId)
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

    $(document).on('click', '.emPreviousBtn', function() {
        $('#medicalInfo .menu-link').click();
        $('.saveParentBtn').prop('disabled', true);
    });
    $(document).on('click', '.medPreviousBtn', function() {
        $('#childAssociation .menu-link').click();
    });
    $(document).on('click', '.chPreviousBtn', function() {
        $('#parentDetails .menu-link').click();
    });
</script>
<?php include('footer.php')  ?>