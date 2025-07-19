<?php include('../connection.php');

$action = $_POST['action'];

if ($action == 'saveTeacher') {
  $id = $_POST['tId'] ?? '';
  $tFname = $_POST['tFirstName'] ?? '';
  $tLname = $_POST['tLastName'] ?? '';
  $tEmail = $_POST['tEmail'] ?? '';
  $tContact = $_POST['tContact'] ?? '';
  $tAddress = $_POST['tAddress'] ?? '';
  $tGender = $_POST['gender'] ?? '';
  $tDoJ = $_POST['joiningDate'] ?? '';
  $tSubject = $_POST['tSubject'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $lastId = '';

  if ($id == '') {
    $teacherInsert = $conn->query(
      "INSERT INTO `create_teacher` (f_name, l_name, email, contact_num, address, gender, join_date, tSubject) 
            VALUES ('$tFname', '$tLname', '$tEmail', '$tContact', '$tAddress', '$tGender', '$tDoJ', '$tSubject')"
    );
    $lastId = $conn->insert_id;
    $conn->query("INSERT INTO `system_user` (username, password, user_id, type) VALUES ('$username', '$password', '$lastId', 'Teacher')");


    if ($teacherInsert) {
      $dataArray = ['message' => "Teacher Saved Successfully!", 'status' => 200];
    } else {
      $dataArray = ['message' => "Error: " . $conn->error, 'status' => 500];
    }
  } else {
    $teacherUpdate = $conn->query(
      "UPDATE `create_teacher` SET f_name = '$tFname', l_name = '$tLname', email = '$tEmail', 
            contact_num = '$tContact', address = '$tAddress', gender = '$tGender', join_date = '$tDoJ', tSubject = '$tSubject' 
            WHERE Id = '$id'"
    );
    $lastId = $id;
    $conn->query("UPDATE `system_user` SET username = '$username', password = '$password', type = 'Teacher' WHERE user_id = '$lastId'");


    if ($teacherUpdate) {
      $dataArray = ['message' => "Teacher Updated Successfully!", 'status' => 200];
    } else {
      $dataArray = ['message' => "Update Error: " . $conn->error, 'status' => 500];
    }
  }

  echo json_encode($dataArray);
  exit;
}


if ($action == 'retrvTeacherTable') {
  $retrvTeacher = $conn->query("SELECT * FROM `create_teacher`");

  $dataArray = [];

  while ($teachrRetrv = $retrvTeacher->fetch_assoc()) {
    $sql_assign = $conn->query("SELECT * FROM `assign_teacher` WHERE tId = '" . $teachrRetrv['Id'] . "'");
    $assign = $sql_assign->fetch_assoc();

    $teachrRetrv['grade'] = $assign ? $assign['grade'] : null;
    $dataArray[] = $teachrRetrv;
  }

  echo json_encode($dataArray);
}

if ($action == 'loadTeacherForm') {
  $clickId = $_POST['clickedId'];


  $loadTform = $conn->query("SELECT * FROM `create_teacher` WHERE Id = '$clickId'");
  $loadTeacher = $loadTform->fetch_assoc();

  $sql_user = $conn->query("SELECT * from system_user WHERE user_id = '$clickId'");
  $user = $sql_user->fetch_array();

  $res = [
    'teacherDet' => $loadTeacher,
    'user' => $user
  ];

  echo json_encode($res);
}

if ($action == 'deleteTeacher') {
  $deleteTeacherId = $_POST['delClickId'];

  $deleteTeacher = $conn->query("DELETE FROM create_teacher WHERE Id = '$deleteTeacherId'");
  if ($deleteTeacher) {
    $dataArray = [
      'success' => 200,
      'message' => "Teacher Delete Succussfully!",
    ];
  } else {
    $dataArray = [
      'message' => "Sorry something went wrong!",
    ];
  }
  echo json_encode($dataArray);
}
