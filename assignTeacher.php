<?php include('header.php'); ?>

<style>
    .sideTable {
        border: 2px solid black;
    }

    .sideTable th,
    .sideTable td {
        border: 1px solid black !important;
    }

    .sideTable th,
    .sideTable td {
        padding: 5px;
        line-height: 3;
    }

    #sideTableContainer {
        max-width: 100%;
        overflow: hidden;
        margin-top: 42px;
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
<h1 style="margin: 52px 33px -48px 38% !important;">Teacher Assigned Form</h1>

<div class="row" style="margin-right: calc(0.5* var(--bs-gutter-x));margin-left: calc(0.2* var(--bs-gutter-x)); margin-top: 75px !important;">


    <div class="col-lg-12 col-md-12" id="sideTableContainer">
        <div class="card p-4 shadow-sm">
            <h5 class="fw-bold">List of Assigned Teachers Time Table</h5>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="grade" class="form-label fw-bold">Grade<span style="color: red;">*</span></label>
                    <select class="form-control form-control-solid border mandatory" id="grade" name="grade">
                        <option value="" disabled selected>Select Grade</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="section" class="form-label fw-bold">Section</label>
                    <select class="form-control form-control-solid border mandatory" id="section" name="section">
                        <option value="" disabled selected>Select Section</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="tableYear" class="form-label fw-bold">Year</label>
                    <select class="form-control form-control-solid border mandatory" id="tableYear" name="tableYear">
                        <option value="<?php echo date('Y') ?>" selected><?php echo date('Y') ?></option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary findBtn" style="border: 0;padding: calc(0.775rem + 1px) calc(4.5rem + 1px) !important;margin-top: 20px; margin-left:38px;">Find</button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered sideTable" style="text-align: center;">
                    <thead class="table-dark">
                        <tr>
                            <th>Timing</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                    </thead>
                    <tbody id="timeTable">

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script>
        const timetable = [{
                time: "8:00 - 8:45",
                id: "p1"
            },
            {
                time: "8:45 - 9:30",
                id: "p2"
            },
            {
                time: "9:30 - 10:15",
                id: "p3"
            },
            {
                type: "break",
                label: "Break"
            },
            {
                time: "10:30 - 11:15",
                id: "p4"
            },
            {
                time: "11:15 - 12:00",
                id: "p5"
            },
            {
                time: "12:00 - 12:45",
                id: "p6"
            },
            {
                type: "break",
                label: "Lunch Break"
            },
            {
                time: "1:30 - 2:15",
                id: "p7"
            },
            {
                time: "2:15 - 3:00",
                id: "p8"
            }
        ];

        const days = ["m", "t", "w", "th", "f"];
        const timetableBody = document.getElementById("timetableBody");

        timetable.forEach((slot, index) => {
            if (slot.type === "break") {
                const tr = document.createElement("tr");
                tr.innerHTML = `
                <td>${slot.label}</td>
                <td colspan="5" class="text-center table-warning">${slot.label}</td>
            `;
                timetableBody.appendChild(tr);
            } else {
                const tr = document.createElement("tr");
                let rowHTML = `<td>${slot.time}</td>`;
                days.forEach(day => {
                    rowHTML += `<td><button class="btn btn-secondary" id="${day}${slot.id}">+</button></td>`;
                });
                tr.innerHTML = rowHTML;
                timetableBody.appendChild(tr);
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "ajax/teacherAssignAjax.php",
                data: {
                    action: 'getGrade'
                },
                dataType: "json",
                success: function(data) {
                    $('#grade').empty();

                    $('#grade').append('<option selected>Select the Grade...</option>');

                    $.each(data[0], function(index, item) {
                        $('#grade').append('<option value="' + item.Grade_Name + '">' + item.Grade_Name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });

        $(document).ready(function() {
            $('#grade').change(function() {
                let gradeId = $(this).val();

                if (gradeId !== '') {
                    $.ajax({
                        type: "POST",
                        url: "ajax/teacherAssignAjax.php",
                        data: {
                            action: 'getSection',
                            grade_id: gradeId
                        },
                        dataType: "json",
                        success: function(data) {
                            $('#section').empty();
                            $('#section').append('<option selected>Select the Section...</option>');

                            let sectionsArray = data[0].Grade_Section.split(',').map(item => item.trim());

                            $.each(sectionsArray, function(index, section) {
                                $('#section').append('<option value="' + section + '">' + section + '</option>');
                            });
                        },
                    });
                }
            });
        })

        $(document).on('click', '.findBtn', function() {
            $('#timeTable').html('')
            var grade = $('#grade').val();
            var section = $('#section').val();
            var tableYear = $('#tableYear').val();

            $.ajax({
                type: "POST",
                url: "ajax/teacherAssignAjax.php",
                data: {
                    'action': 'showAction',
                    'grade': grade,
                    'section': section,
                    'year': tableYear
                },
                dataType: "json",
                success: function(res) {
                    $('#timeTable').append(res.html);

                }
            });

        });

        $(document).on('click', '.period1', function () {
            var timing = $(this).attr('timing')
            var date1 = $(this).attr('date1')
            alert(timing)
            alert(date1)
            
        });
    </script>
    <?php include('footer.php')  ?>