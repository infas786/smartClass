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

    $sql_selectTable = $conn->query("SELECT * FROM teacher_assign WHERE grade = '$grade' AND section = '$section' AND year = '$year'");

    if ($sql_selectTable->num_rows == 0) {
        // Insert records if not found
        $conn->query("INSERT INTO `teacher_assign` (`tid`, `grade`, `section`, `year`, `timing`, `d1`, `d2`, `d3`, `d4`, `d5`, `subject`) VALUES
        (201, '$grade', '$section', $year, '8:00 - 8:40', 'd1', 'd2', 'd3', 'd4', 'd5', ''),
        (202, '$grade', '$section', $year, '8:40 - 9:20', 'd1', 'd2', 'd3', 'd4', 'd5', ''),
        (203, '$grade', '$section', $year, '9:20 - 10:00', 'd1', 'd2', 'd3', 'd4', 'd5', ''),
        (204, '$grade', '$section', $year, '10:00 - 10:40', 'd1', 'd2', 'd3', 'd4', 'd5', ''),
        (205, '$grade', '$section', $year, '10:40 - 11:20', 'd1', 'd2', 'd3', 'd4', 'd5', ''),
        (206, '$grade', '$section', $year, '11:20 - 12:00', 'd1', 'd2', 'd3', 'd4', 'd5', ''),
        (207, '$grade', '$section', $year, '12:00 - 12:40', 'd1', 'd2', 'd3', 'd4', 'd5', ''),
        (208, '$grade', '$section', $year, '12:40 - 13:00', 'd1', 'd2', 'd3', 'd4', 'd5', '')");

        // Re-select after insert
        $sql_selectTable = $conn->query("SELECT * FROM teacher_assign WHERE grade = '$grade' AND section = '$section' AND year = '$year'");
    }

    // Generate HTML rows
    while ($result = $sql_selectTable->fetch_array()) {
        $html .= '
        <tr>
            <td>' . $result['timing'] . '</td>
            <td><a timing="' . $result['timing'] . '" date1="' . $result['d1'] . '" href="#" class="period1"><i class="fa fa-plus"></i> ADD</a></td>
            <td><a timing="' . $result['timing'] . '" date1="' . $result['d2'] . '" href="#" class="period1"><i class="fa fa-plus"></i> ADD</a></td>
            <td><a timing="' . $result['timing'] . '" date1="' . $result['d3'] . '" href="#" class="period1"><i class="fa fa-plus"></i> ADD</a></td>
            <td><a timing="' . $result['timing'] . '" date1="' . $result['d4'] . '" href="#" class="period1"><i class="fa fa-plus"></i> ADD</a></td>
            <td><a timing="' . $result['timing']  .'" date1="' . $result['d5'] . '" href="#" class="period1"><i class="fa fa-plus"></i> ADD</a></td>
        </tr>';
    }

    $res['html'] = $html;
    echo json_encode($res);
}

?>