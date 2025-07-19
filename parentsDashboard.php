<?php
include('header.php');
$tpid = $_SESSION['tpid'];
?>


    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                } else {
                    if (localStorage.getItem("data-theme") !== null) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
        </noscript>
        <?php
        if ($_SESSION['type'] == 'Parent') {
        ?>
            <div class="d-flex flex-column flex-root">
                <div class="page d-flex flex-row flex-column-fluid">
                    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                        <?php
                        if ($_SESSION['type'] == 'Teacher') {
                            echo '';
                        }
                        ?>
                        <!-- child div -->
                        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                            <div class="content flex-row-fluid" id="kt_content">
                                <div class="row g-5 g-xl-8">
                                    <div class="col-xl-8">
                                        <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
                                            <div class="col-xl-3">

                                            </div>

                                        </div>
                                        <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">

                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-5 g-xl-8">
                                </div>
                                <div class="row gy-5 g-xl-8">
                                    <div class="col-xl-4">
                                    </div>
                                    <div class="col-xl-4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                            <div class="content flex-row-fluid" id="kt_content">
                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    <div class="col-xl-8">
                                        <div class="row">
                                            <!-- START LOOP -->
                                            <?php
                                            $date = date('Y-m-d');
                                            $sql_child = $conn->query("SELECT * FROM child_association WHERE pId = '$tpid'");
                                            $sql_attendance = $conn->query("SELECT ID FROM attendance WHERE pId = '$tpid' AND date = '$date' AND checkIn = 1");
                                            while ($parent = $sql_child->fetch_array()) {
                                                $sql_attendance1 = $conn->query("SELECT * FROM attendance WHERE pId = '$parent[pId]' AND date = '$date'");
                                                $parent1 = $sql_attendance1->fetch_array();
                                                echo '
                                                <div class="col-md-4 mb-4 childDiv" style="cursor:pointer;" cDate="' . $parent1['date'] . '" cTime="' . $parent1['time'] . '" cRemark="' . $parent1['checkinRemark'] . '" oDate="' . $parent1['checkoutDate'] . '" oTime="' . $parent1['checkoutTime'] . '" oRemark="' . $parent1['checkoutRemark'] . '" cName="' . $parent['child_fname'] . ' ' . $parent['child_lname'] . '">
                                                <div class="position-relative border rounded shadow p-4 bg-white h-100">
                                                    <!-- Notification Icon -->
                                                    <div class="position-absolute top-0 end-0 mt-3 me-3">
                                                        <span class="position-relative">
                                                            <i class="fas fa-bell text-secondary fs-4"></i> <!-- fs-4 = font-size: 1.5rem -->
                                                            <span id="notification" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger fs-6">
                                                                ' . $sql_attendance->num_rows . '
                                                            </span>
                                                        </span>
                                                    </div>

                                                    <!-- Child Details -->
                                                    <h5 class="fw-bold mb-2" style="font-size: 1.3rem;">' . $parent['child_fname'] . ' ' . $parent['child_lname'] . '</h5>
                                                    <p class="mb-1" style="font-size: 1.1rem;"><strong>' . $parent['enrol_grade'] . ':</strong> </p>
                                                    <p class="mb-0" style="font-size: 1.1rem;"><strong>Section ' . $parent['section'] . '</p>
                                                </div>
                                            </div>
                                                ';
                                            }
                                            ?>

                                            <!-- END LOOP -->
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="card bg-primary h-xl-50" style="height:64% !important;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>

            <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
                <script>
                    var defaultThemeMode = "light";
                    var themeMode;
                    if (document.documentElement) {
                        if (document.documentElement.hasAttribute("data-theme-mode")) {
                            themeMode = document.documentElement.getAttribute("data-theme-mode");
                        } else {
                            if (localStorage.getItem("data-theme") !== null) {
                                themeMode = localStorage.getItem("data-theme");
                            } else {
                                themeMode = defaultThemeMode;
                            }
                        }
                        if (themeMode === "system") {
                            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                        }
                        document.documentElement.setAttribute("data-theme", themeMode);
                    }
                </script>
                <noscript>
                    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
                        style="display:none;visibility:hidden"></iframe>
                </noscript>
                <div class="d-flex flex-column flex-root">
                    <div class="page d-flex flex-row flex-column-fluid">
                        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                                <div class="content flex-row-fluid" id="kt_content">
                                    <div class="row g-5 g-xl-8">
                                        <div class="col-xl-8">
                                            <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
                                                <div class="col-xl-3">

                                                </div>

                                            </div>
                                            <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-5 g-xl-8">
                                    </div>
                                    <div class="row gy-5 g-xl-8">
                                        <div class="col-xl-4">
                                        </div>
                                        <div class="col-xl-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                                <div class="content flex-row-fluid" id="kt_content">
                                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                        <div class="col-xl-8">
                                            <div class="card h-xl-80">
                                                <div class="card-header position-relative py-0 border-bottom-2">
                                                    <div class="fs-5 text-black-400" style="margin-top: 20px; background:#f3fdfe; margin-top: 22px;background: #f3fdfe;margin-bottom: 14px;padding: 9px;font-weight: 700 !important;">Hello <?php echo $_SESSION['type']  ?></div>

                                                    <div class="card-toolbar">
                                                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                                            class="btn btn-sm btn-light d-flex align-items-center px-4">
                                                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                                                            <span class="svg-icon svg-icon-1 ms-2 me-0">

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content mb-2">
                                                        <div class="tab-pane fade" id="kt_table_widget_7_tab_content_1">
                                                            <!-- Begin: Kid Tiles -->
                                                            <div class="d-flex flex-column gap-4">
                                                                <!-- Kid Tile 1 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/boy.png" alt="Kid 1" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Ayaan Mohammed+++</div>
                                                                        <div class="text-gray-500">Grade 2 | Age: 7</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 2 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/images.png" alt="Kid 2" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Sara Khan</div>
                                                                        <div class="text-gray-500">Grade 3 | Age: 8</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 3 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/side pony.png" alt="Kid 3" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Zain Ali</div>
                                                                        <div class="text-gray-500">Grade 1 | Age: 6</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Tuesday -->
                                                        <div class="tab-pane fade" id="kt_table_widget_7_tab_content_2">
                                                            <div class="d-flex flex-column gap-4">
                                                                <!-- Kid Tile 1 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/boy.png" alt="Kid 1" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Ayaan Mohammed+++</div>
                                                                        <div class="text-gray-500">Grade 2 | Age: 7</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 2 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/images.png" alt="Kid 2" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Sara Khan</div>
                                                                        <div class="text-gray-500">Grade 3 | Age: 8</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 3 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/side pony.png" alt="Kid 3" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Zain Ali</div>
                                                                        <div class="text-gray-500">Grade 1 | Age: 6</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade show active" id="kt_table_widget_7_tab_content_3">
                                                            <div class="d-flex flex-column gap-4">
                                                                <!-- assigned teacher -->
                                                                <?php
                                                                $date = date('Y-m-d');
                                                                $day = date('l', strtotime($date));
                                                                $sql_assign = $conn->query("SELECT * FROM teacher_assign WHERE tid = '$tpid' AND d3 = '$day' ORDER BY ID DESC");
                                                                while ($user = $sql_assign->fetch_array()) {
                                                                    // $sql_teacher = $conn->query("SELECT * FROM create_teacher WHERE ID = '$user[tid]'");
                                                                    // $teacher = $sql_teacher->fetch_array();
                                                                    echo '
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                <div class="symbol symbol-60px me-4">
                                                                    <img src="assets/boy.png" alt="Kid 1" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-bold fs-5 text-gray-800">' . $user['grade'] . ' -' . $user['section'] . ' -' . $user['subject'] . ' - ' . $user['timing'] . '</div>
                                                                    <div class="text-gray-500">' . $date . '</div>
                                                                </div>
                                                                <div>
                                                                    <a tid="' . $user['tid'] . '" grade="' . $user['grade'] . '" section="' . $user['section'] . '" timing="' . $user['timing'] . '" id="timetable"  href="#" class="btn btn-sm btn-primary">Attendance</a>
                                                                </div>
                                                            </div>
                                                                ';
                                                                }
                                                                ?>


                                                                <!-- Kid Tile 2 -->

                                                            </div>
                                                        </div>

                                                        <!-- Thursday -->
                                                        <div class="tab-pane fade" id="kt_table_widget_7_tab_content_4">
                                                            <div class="d-flex flex-column gap-4">
                                                                <!-- Kid Tile 1 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/boy.png" alt="Kid 1" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Ayaan Mohammed+++</div>
                                                                        <div class="text-gray-500">Grade 2 | Age: 7</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 2 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/images.png" alt="Kid 2" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Sara Khan</div>
                                                                        <div class="text-gray-500">Grade 3 | Age: 8</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 3 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/side pony.png" alt="Kid 3" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Zain Ali</div>
                                                                        <div class="text-gray-500">Grade 1 | Age: 6</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Friday -->
                                                        <div class="tab-pane fade" id="kt_table_widget_7_tab_content_5">
                                                            <div class="d-flex flex-column gap-4">
                                                                <!-- Kid Tile 1 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/boy.png" alt="Kid 1" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Ayaan Mohammed+++</div>
                                                                        <div class="text-gray-500">Grade 2 | Age: 7</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 2 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/images.png" alt="Kid 2" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Sara Khan</div>
                                                                        <div class="text-gray-500">Grade 3 | Age: 8</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Kid Tile 3 -->
                                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                                    <div class="symbol symbol-60px me-4">
                                                                        <img src="assets/side pony.png" alt="Kid 3" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="fw-bold fs-5 text-gray-800">Zain Ali</div>
                                                                        <div class="text-gray-500">Grade 1 | Age: 6</div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card bg-primary h-xl-50" style="height:64% !important;">
                                                <div class="card-body d-flex flex-column pt-10 pb-12">
                                                    <div class="m-0">
                                                        <h1 class="fw-semibold text-white text-center lh-lg mb-9">
                                                            <span class="animate__animated animate__fadeInDown animate__slow animate__infinite">
                                                                Welcome to Your Parent Dashboard
                                                            </span>
                                                            <br>
                                                            <span class="fw-bolder d-block animate__animated animate__fadeInRight animate__slower animate__delay-4s animate__infinite" style="font-family: 'Dancing Script', cursive; font-size: 3.3rem;">
                                                                Stay Connected. Stay Informed. Support Your Child’s Success.
                                                            </span>
                                                        </h1>


                                                        <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12 animate__animated animate__zoomIn animate__slower animate__delay-4s animate__infinite"
                                                            style="background-image:url('../assets/media/svg/illustrations/easy/6.svg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
            ?>
            <div class="modal fade" id="timeTableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="tidVal">
                            <input type="hidden" id="gradeVal">
                            <input type="hidden" id="sectionVal">
                            <input type="hidden" id="timingVal">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Remark</th>
                                            <th>Check-In</th>
                                            <th>Check-Out</th>
                                        </tr>
                                    </thead>
                                    <tbody id="attTable"></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="childModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h2 style="text-align:center;"><span id="activity"></span> Activity</h2>
                            <table class="table attTable">

                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <?php include('footer.php') ?>

            <script>
                $(document).on('click', '#timetable', function() {
                    var tid = $(this).attr('tid');
                    var grade = $(this).attr('grade');
                    var section = $(this).attr('section');
                    var timing = $(this).attr('timing');

                    $('#timeTableModal').modal('show');
                    loadStudents(tid, grade, section); // corrected call

                    $('#tidVal').val(tid);
                    $('#gradeVal').val(grade);
                    $('#sectionVal').val(section);
                    $('#timingVal').val(timing);
                });

                function loadStudents(tid, grade, section) {
                    $('#attTable').html('');
                    $.ajax({
                        type: "POST",
                        url: "ajax/attendanceAjax.php",
                        data: {
                            'action': 'stdLoad',
                            'tidVal': tid,
                            'gradeVal': grade,
                            'sectionVal': section
                        },
                        dataType: "json",
                        success: function(res) {

                            $('#attTable').append(res);
                        }
                    });
                }

                $(document).on('click', '.checkIn', function() {
                    let row = $(this).closest('tr');

                    let childId = $(this).attr('childId');
                    let grade = $(this).attr('grade');
                    let section = $(this).attr('section');
                    let remark = row.find('.remark').val();
                    let tid = $(this).attr('tid');
                    let pId = $(this).attr('pId'); // corrected from 'pid'

                    $.ajax({
                        url: "ajax/attendanceAjax.php",
                        type: 'POST',
                        data: {
                            'action': 'attendance',
                            childId: childId,
                            grade: grade,
                            section: section,
                            remark: remark,
                            tid: tid,
                            pId: pId
                        },
                        success: function(res) {
                            // $('#timeTableModal').modal('show');
                            loadStudents(tid, grade, section)
                        }
                    });
                });

                $(document).on('click', '.checkOut', function() {
                    let row = $(this).closest('tr');

                    let childId = $(this).attr('childId');
                    let grade = $(this).attr('grade');
                    let section = $(this).attr('section');
                    let remark = row.find('.remark').val(); // checkout remark
                    let tid = $(this).attr('tid');
                    let pId = $(this).attr('pId'); // make sure this matches input attribute

                    $.ajax({
                        url: "ajax/attendanceAjax.php",
                        type: 'POST',
                        data: {
                            'action': 'checkout',
                            childId: childId,
                            grade: grade,
                            section: section,
                            remark: remark,
                            tid: tid,
                            pId: pId
                        },
                        success: function(res) {
                            console.log('Checked out successfully');
                        }
                    });
                });

                $(document).on('click', '.childDiv', function() {
                    $('#notification').hide()
                    $('.attTable').html('')
                    $('#childModal').modal('show')
                    var cDate = $(this).attr('cDate')
                    var cTime = $(this).attr('cTime')
                    var cRemark = $(this).attr('cRemark')

                    var oRemark = $(this).attr('oRemark')
                    var oDate = $(this).attr('oDate')
                    var oTime = $(this).attr('oTime')

                    var activity = $(this).attr('cName')
                    $('#activity').html(activity)
                    $('.attTable').append(`
                        <tr>
                            <td>Check-In: ` + cDate + ` ` + cTime + ` ` + cRemark + `</td>
                        </tr>
                        <tr>
                            <td>Check-Out: ` + oDate + ` ` + oTime + ` ` + oRemark + `</td>
                        </tr>
                    `)
                });
            </script>