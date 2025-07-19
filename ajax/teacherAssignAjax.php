<?php include('../connection.php'); ?>
<?php
$action = $_POST['action'];

if ($action == 'getGrade') {
    $selectGrade = $conn->query("SELECT Grade_Name FROM `creategrade`");

    $grades = [];
    if ($selectGrade->num_rows > 0) {
        while ($fetchGrade = $selectGrade->fetch_all(MYSQLI_ASSOC)) {
            $grades[] = $fetchGrade;
        }
    }

    echo json_encode($grades);
}

if ($action == 'getSection') {
    $gradeId = $_POST['grade_id'];

    $getSection = $conn->query("SELECT Grade_Section FROM `creategrade` WHERE Grade_Name = '$gradeId'");
    $sections = [];
    if ($getSection->num_rows > 0) {
        while ($fetchSection = $getSection->fetch_assoc()) {
            $sections[] = $fetchSection;
        }
    }
    echo json_encode($sections);
}

if ($action == 'assignTeacher') {
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $subjects = implode(',', $_POST['subjects']);

    $assignTeacher = $conn->query("INSERT INTO `assign_teacher` (grade,section,subjects) VALUES ('$grade','$section','$subjects')");
    if ($assignTeacher) {
        $dataArray = [
            'message' => 'Teacher Successfully Assigned!',
            'status' => '200'
        ];
    }
    echo json_encode($dataArray);
}

if ($action == 'getTeachers') {
    $teachers = [];

    // Fetch teacher list from database
    $query = $conn->query("SELECT id, f_name FROM `create_teacher` ORDER BY f_name ASC");

    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            $teachers[] = [
                'id' => $row['id'],
                'name' => $row['f_name']
            ];
        }
        echo json_encode(['status' => 200, 'teachers' => $teachers]);
    } else {
        echo json_encode(['status' => 404, 'message' => 'No teachers found']);
    }
}

if ($action == 'showAction') {
    $html = '';
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $year = $_POST['year'];

    function teacher($id)
    {
        global $conn;
        $sql_teacher = $conn->query("SELECT f_name, l_name FROM create_teacher WHERE ID = '$id'");
        if ($sql_teacher && $teacherName = $sql_teacher->fetch_array()) {
            return $teacherName['f_name'] . ' ' . $teacherName['l_name'];
        } else {
            return ''; // Or handle as needed, e.g., return 'Unknown'
        }
    }


    $sql_selectTable = $conn->query("SELECT * FROM teacher_assign WHERE grade = '$grade' AND section = '$section' AND year = '$year'");

    if ($sql_selectTable->num_rows == 0) {
        // Insert records if not found
        $conn->query("INSERT INTO `teacher_assign` (`tid`, `grade`, `section`, `year`, `timing`, `d1`, `d2`, `d3`, `d4`, `d5`, `subject`) VALUES
        ('', '$grade', '$section', $year, '8:00 - 8:40', '', '', 'Monday', '1', '', ''),
        ('', '$grade', '$section', $year, '8:40 - 9:20', '', '', 'Tuesday', '2', '', ''),
        ('', '$grade', '$section', $year, '9:20 - 10:00', '', '', 'Wednesday', '3', '', ''),
        ('', '$grade', '$section', $year, '10:00 - 10:40', '', '', 'Thursday', '4', '', ''),
        ('', '$grade', '$section', $year, '10:40 - 11:20', '', '', 'Friday', '5', '', ''),
        ('', '$grade', '$section', $year, '11:20 - 12:00', '', '', 'Monday', '6', '', ''),
        ('', '$grade', '$section', $year, '12:00 - 12:40', '', '', 'Tuesday', '7', '', ''),
        ('', '$grade', '$section', $year, '12:40 - 13:00', '', '', 'Wednesday', '8', '', ''),
        ('', '$grade', '$section', $year, '8:00 - 8:40', '', '', 'Thursday', '9', '', ''),
        ('', '$grade', '$section', $year, '8:40 - 9:20', '', '', 'Friday', '10', '', ''),
        ('', '$grade', '$section', $year, '9:20 - 10:00', '', '', 'Monday', '11', '', ''),
        ('', '$grade', '$section', $year, '10:00 - 10:40', '', '', 'Tuesday', '12', '', ''),
        ('', '$grade', '$section', $year, '10:40 - 11:20', '', '', 'Wednesday', '13', '', ''),
        ('', '$grade', '$section', $year, '11:20 - 12:00', '', '', 'Thursday', '14', '', ''),
        ('', '$grade', '$section', $year, '12:00 - 12:40', '', '', 'Friday', '15', '', ''),
        ('', '$grade', '$section', $year, '12:40 - 13:00', '', '', 'Monday', '16', '', ''),
        ('', '$grade', '$section', $year, '8:00 - 8:40', '', '', 'Tuesday', '17', '', ''),
        ('', '$grade', '$section', $year, '8:40 - 9:20', '', '', 'Wednesday', '18', '', ''),
        ('', '$grade', '$section', $year, '9:20 - 10:00', '', '', 'Thursday', '19', '', ''),
        ('', '$grade', '$section', $year, '10:00 - 10:40', '', '', 'Friday', '20', '', ''),
        ('', '$grade', '$section', $year, '10:40 - 11:20', '', '', 'Monday', '21', '', ''),
        ('', '$grade', '$section', $year, '11:20 - 12:00', '', '', 'Tuesday', '22', '', ''),
        ('', '$grade', '$section', $year, '12:00 - 12:40', '', '', 'Wednesday', '23', '', ''),
        ('', '$grade', '$section', $year, '12:40 - 13:00', '', '', 'Thursday', '24', '', ''),
        ('', '$grade', '$section', $year, '8:00 - 8:40', '', '', 'Friday', '25', '', ''),
        ('', '$grade', '$section', $year, '8:40 - 9:20', '', '', 'Monday', '26', '', ''),
        ('', '$grade', '$section', $year, '9:20 - 10:00', '', '', 'Tuesday', '27', '', ''),
        ('', '$grade', '$section', $year, '10:00 - 10:40', '', '', 'Wednesday', '28', '', ''),
        ('', '$grade', '$section', $year, '10:40 - 11:20', '', '', 'Thursday', '29', '', ''),
        ('', '$grade', '$section', $year, '11:20 - 12:00', '', '', 'Friday', '30', '', ''),
        ('', '$grade', '$section', $year, '12:00 - 12:40', '', '', 'Monday', '31', '', ''),
        ('', '$grade', '$section', $year, '12:40 - 13:00', '', '', 'Tuesday', '32', '', ''),
        ('', '$grade', '$section', $year, '8:00 - 8:40', '', '', 'Wednesday', '33', '', ''),
        ('', '$grade', '$section', $year, '8:40 - 9:20', '', '', 'Thursday', '34', '', ''),
        ('', '$grade', '$section', $year, '9:20 - 10:00', '', '', 'Friday', '35', '', ''),
        ('', '$grade', '$section', $year, '10:00 - 10:40', '', '', 'Monday', '36', '', ''),
        ('', '$grade', '$section', $year, '10:40 - 11:20', '', '', 'Tuesday', '37', '', ''),
        ('', '$grade', '$section', $year, '11:20 - 12:00', '', '', 'Wednesday', '38', '', ''),
        ('', '$grade', '$section', $year, '12:00 - 12:40', '', '', 'Thursday', '39', '', ''),
        ('', '$grade', '$section', $year, '12:40 - 13:00', '', '', 'Friday', '40', '', '')");

        // Re-select after insert
        $sql_selectTable = $conn->query("SELECT * FROM teacher_assign WHERE grade = '$grade' AND section = '$section' AND year = '$year'");
    }

    // Generate HTML rows


    $timeSlots = [
        '8:00 - 8:40',
        '8:40 - 9:20',
        '9:20 - 10:00',
        '10:00 - 10:40',
        '10:40 - 11:20',
        '11:20 - 12:00',
        '12:00 - 12:40',
        '12:40 - 13:20'
    ];

    $i = 0;
    $html = '';

    while ($result = $sql_selectTable->fetch_array()) {
        // Start a new row every 5 records
        if ($i % 5 == 0) {
            if ($i != 0) {
                $html .= '</tr>';
            }
            $timeIndex = floor($i / 5);
            $html .= '<tr><td>' . $timeSlots[$timeIndex] . '</td>';
        }

        // Check if d2 is 'Assigned'
        if ($result['d2'] == 'Assigned') {
            $html .= '<td style="background-color: rgba(0, 128, 0, 0.2); font-weight: bold; color: black;">
            <a timing="' . $result['id'] . '" time="' . $result['timing'] . '" day="' . $result['d3'] . '" href="#" class="period1" style="color:black;">' . teacher($result['tid']) . ' - ' . $result['subject'] . '</a>
        </td>';
        } else {
            $html .= '<td><a timing="' . $result['id'] . '" timeVal="' . $result['timing'] . '" dayVal="' . $result['d3'] . '" href="#" class="period1"><i class="fa fa-plus"></i> ADD</a></td>';
        }

        $i++;
    }

    $html .= '</tr>';


    // Close the last row
    $html .= '</tr>';


    $res['html'] = $html;
    echo json_encode($res);
}

if ($action == 'sChange') {
    $thisId = $_POST['thisId'];

    $sql_teacher = $conn->query("SELECT tSubject FROM create_teacher WHERE Id = '$thisId'");
    $subject = $sql_teacher->Fetch_array();

    echo json_encode($subject[0]);
}

if ($action == 'aetTeacher') {
    $time = $_POST['time'];
    $teacherId = $_POST['teacherId'];
    $tSubject = $_POST['tSubject'];
    $timeVal = $_POST['timeVal'];
    $dayVal = $_POST['dayVal'];

    $sql_assignCheck = $conn->query("SELECT ID FROM teacher_assign WHERE tid = '$teacherId' AND timing = '$timeVal' AND d3 = '$dayVal'");
    if ($sql_assignCheck->num_rows > 0) {
        $res['status'] = 201;
        $res['message'] = 'Teacher already assigned for this slot';
    } else {
        $conn->query("UPDATE teacher_assign SET tid = '$teacherId', subject = '$tSubject', d2 = 'Assigned' WHERE id = '$time'");
        $res['status'] = 200;
    }
    echo json_encode($res);
}

?>