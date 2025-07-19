<?php include('../connection.php');
$action = $_POST['action'];

if ($action == 'stdLoad') {
    $tidVal = $_POST['tidVal'];
    $gradeVal = $_POST['gradeVal'];
    $sectionVal = $_POST['sectionVal'];

    $html = '';

    $sql_children = $conn->query("SELECT * FROM child_association WHERE enrol_grade='$gradeVal' AND section='$sectionVal'");

    while ($student = $sql_children->fetch_array()) {
        $check = $conn->query("SELECT * FROM attendance WHERE cId='{$student['Id']}' AND tid='$tidVal' AND grade='{$student['enrol_grade']}' AND section='{$student['section']}'");
        if ($check->num_rows == 0) {
            $conn->query("INSERT INTO attendance (cId, tid, grade, section, checkin, checkinRemark, checkout, checkoutRemark, date, time, pId)
        VALUES ('{$student['Id']}', '$tidVal', '{$student['enrol_grade']}', '{$student['section']}', '0', '', '0', '', '', '', '{$student['pId']}')");
        }
    }


    $sql_list = $conn->query("SELECT a.cId, a.tid, a.grade, a.section, a.checkin, a.checkinRemark, a.checkout, a.checkoutRemark, a.date, a.time, ca.child_fname, ca.pId, ca.Id 
        FROM attendance a
        JOIN child_association ca ON a.cId = ca.Id
        WHERE a.grade = '$gradeVal' AND a.section = '$sectionVal'");

    while ($list = $sql_list->fetch_array()) {
        $html .= '
        <tr>
            <td>' . $list['child_fname'] . ' ' . $list['cId'] . '</td>
            <td><input type="text" name="remark" id="remark" class="form-control remark"></td>';
        if ($list['checkin'] == 0) {
            $html .= '<td><input type="button" value="Check-In" pId="' . $list['pId'] . '" childId="' . $list['cId'] . '" grade="' . $list['grade'] . '" section="' . $list['section'] . '" tid="' . $tidVal . '" class="btn btn-success btn-sm checkIn"></td>';
        } else if ($list['checkin'] == 1 && $list['checkout'] == 0) {
            $html .= '<td><input type="button" value="Check-Out" pId="' . $list['pId'] . '" childId="' . $list['Id'] . '" grade="' . $list['grade'] . '" section="' . $list['section'] . '" tid="' . $tidVal . '" class="btn btn-danger btn-sm checkOut"></td>';
        } else if ($list['checkin'] == '1' && $list['checkout'] == '1') {
            $html .= '<td><span style="color:red; font-weight:bold;">Already checked out</span></td>';
        }


        $html .= '

            
</td>
        </tr>';
    }

    echo json_encode($html);
}


if ($action == 'attendance') {
    $cId = $_POST['childId'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $remark = $_POST['remark'];
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $tid = $_POST['tid'];
    $pId = $_POST['pId'];

    echo "UPDATE attendance 
        SET checkin = '1', 
            checkinRemark = '$remark', 
            time = '$time', 
            date = '$date' 
        WHERE cId = '$cId' 
            AND tid = '$tid' ";

    $conn->query("UPDATE attendance 
        SET checkin = '1', 
            checkinRemark = '$remark', 
            time = '$time', 
            date = '$date' 
        WHERE cId = '$cId' 
            AND tid = '$tid' ");

    $res['status'] = 200;
    echo json_encode($res);
}



if ($action == 'checkout') {
    $cId = $_POST['childId'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $remark = $_POST['remark']; // this is checkout remark
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $tid = $_POST['tid'];
    $pId = $_POST['pId'];

    // Update latest check-in record for this student on the same day
    $conn->query("UPDATE attendance 
        SET checkout = '1', 
            checkoutRemark = '$remark', 
            checkoutTime = '$time', 
            checkoutDate = '$date' 
        WHERE cId = '$cId' 
            AND tid = '$tid' ");

    $res['status'] = 200;
    echo json_encode($res);
}
