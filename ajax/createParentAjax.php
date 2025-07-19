<?php include('../connection.php'); ?>
<?php
$action = $_POST['action'];

if ($action == 'saveParentDetails') {
    $fathersFname = $_POST['fName'];
    $fathersContact = $_POST['fContact'];
    $fathersOccupation = $_POST['fOccupation'];
    $mothersFname = $_POST['mName'];
    $mothersContact = $_POST['mContact'];
    $mothersOccupation = $_POST['mOccupation'];
    $altContact = $_POST['aContact'];
    $email = $_POST['randomEmail'];
    $address = $_POST['randomAddress'];
    $state = $_POST['state'];
    $province = $_POST['province'];
    $country = $_POST['randomCountry'];
    $emContName = $_POST['emConName1'];
    $emContact = $_POST['emConNum1'];
    $relation = $_POST['relationship1'];
    $emContName2 = $_POST['emConName2'];
    $emContact2 = $_POST['emConNum2'];
    $relation2 = $_POST['relationship2'];
    $pId = $_POST['pId'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $childFirstName = $_POST['childFirstName'];
    $childDob = $_POST['childDob'];
    $childRid = $_POST['childRid'];
    $enrolGrade = $_POST['enrolGrade'];
    $enrolSection = $_POST['enrolSection'];
    $childLastName = $_POST['childLastName'];
    $childNationality = $_POST['childNationality'];
    $medicalCond = $_POST['medicalCond'];
    $allergySpecification = $_POST['allergySpecification'];
    $lastParentId = '';

    //Parent Insert
    if (empty($pId)) {
        $parentInsert = $conn->query("INSERT INTO `createparent` (father_name, father_contact, father_occu, mother_name, mother_contact, mother_occu, alt_contact, email, address, state, province, country, em_contName1, em_cont1, relation1, em_contName2, em_cont2, relation2) VALUES ('$fathersFname','$fathersContact','$fathersOccupation','$mothersFname','$mothersContact','$mothersOccupation','$altContact','$email','$address','$state','$province','$country','$emContName','$emContact','$relation','$emContName2','$emContact2','$relation2')");
        $lastParentId = $conn->insert_id;
        $conn->query("INSERT INTO `system_user` (username, password, user_id, type) VALUES ('$username', '$password', '$lastParentId', 'Parent')");

        if ($parentInsert) {
            $response = [
                'message' => "Parent and Child Saved Successfully!",
                'status' => 200
            ];
        }
    } else {
        //Parent Update
        $updateParent = $conn->query("UPDATE `createparent` SET father_name='$fathersFname', father_contact='$fathersContact', father_occu='$fathersOccupation', mother_name='$mothersFname', mother_contact='$mothersContact', mother_occu='$mothersOccupation', alt_contact='$altContact', 
        email='$email', address='$address', state='$state', province='$province', country='$country', em_contName1='$emContName', em_cont1='$emContact', relation1='$relation', em_contName2='$emContName2', em_cont2='$emContact2', relation2='$relation2' WHERE Id='$pId'");
        $lastParentId = $pId;
        $conn->query("UPDATE `system_user` SET username = '$username', password = '$password', type = 'Parent' WHERE user_id = '$lastParentId'");

        if ($updateParent) {
            $response = [
                'message' => "Parent and Child Updated Successfully!",
                'status' => 200
            ];
        }
    }
    //Child array insert using foreach loop , first existing child delete then insert 
    $conn->query("DELETE FROM `child_association` WHERE pId='$lastParentId'");
    foreach ($childFirstName as $key => $tb) {
        $conn->query("INSERT INTO `child_association` (pId, child_fname, child_lname, nationality, child_id, child_dob, enrol_grade, section, medical_con, allergy_spec) VALUES ('$lastParentId', 
        '{$conn->real_escape_string($childFirstName[$key])}', 
        '{$conn->real_escape_string($childLastName[$key])}', 
        '{$conn->real_escape_string($childNationality[$key])}', 
        '{$conn->real_escape_string($childRid[$key])}', 
        '{$conn->real_escape_string($childDob[$key])}', 
        '{$conn->real_escape_string($enrolGrade[$key])}', 
        '{$conn->real_escape_string($enrolSection[$key])}', 
        '{$conn->real_escape_string($medicalCond[$key])}', 
        '{$conn->real_escape_string($allergySpecification[$key])}')");
    }

    echo json_encode($response);
}


//Fetch grades from the database to the drop down
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
//Fetch setction of the respected grade to drop down
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
//load parent details to the table
if ($action == 'loadParentDetails') {
    $loadParentDet = $conn->query("SELECT Id, father_name,mother_name,father_contact,email FROM `createparent`");
    $parentDetails = [];

    if ($loadParentDet->num_rows > 0) {
        while ($rowByrow = $loadParentDet->fetch_assoc()) {
            $parentDetails[] = $rowByrow;
        }
        echo json_encode($parentDetails);
    } else {
        echo "No records found!";
    }
}

//edit Parent
if ($action == 'editParent') {
    $lastClickedId = $_POST['clickedId'];


    $getParentQuery = $conn->query("SELECT * FROM `createparent` WHERE Id = '$lastClickedId'");
    $getParentDet = $getParentQuery->fetch_assoc();

      $sql_user = $conn->query("SELECT * from system_user WHERE user_id = '$lastClickedId'");
  $user = $sql_user->fetch_array();

    $getChildQuery = $conn->query("SELECT * FROM `child_association` WHERE pId = '$lastClickedId'");
    $getChildDet = [];
    while ($row = $getChildQuery->fetch_assoc()) {
        $getChildDet[] = $row;
    }


    $dataArray = array(
        'parentDet' => $getParentDet,
        'childDet' => $getChildDet,
        'user' => $user
    );
    echo json_encode($dataArray);
}

//Edit Child

if ($action == 'editChild') {
    $clickedChildId = $_POST['lastClickChild'];

    $getChildTableQuery = $conn->query("SELECT * FROM `child_association` WHERE Id = '$clickedChildId'");
    $getlastClickedChild = $getChildTableQuery->fetch_assoc();

    $dataArray = [
        'getChildRow' => $getlastClickedChild
    ];
    echo json_encode($dataArray);
}

if ($action == 'deleteParent') {
    $lastClickParent = $_POST['lastClickedPId'];

    $deleteQuery = $conn->query("DELETE FROM `createparent` WHERE Id='$lastClickParent'");

    if ($deleteQuery) {
        $deleteQueryChild = $conn->query("DELETE FROM `child_association` WHERE pId = '$lastClickParent'");

        if ($deleteQueryChild) {
            $dataArray = [
                'message' => "Parent and associated children deleted successfully!",
                'status' => "200"
            ];
        } else {
            $dataArray = [
                'message' => "Parent deleted, but error deleting children: " . $conn->error,
                'status' => "500"
            ];
        }
    } else {
        $dataArray = [
            'message' => "Error deleting parent: " . $conn->error,
            'status' => "500"
        ];
    }

    echo json_encode($dataArray);
}
