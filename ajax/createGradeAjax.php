<?php include('../connection.php'); ?>
<?php
$action = $_POST['action'];

if ($action == 'saveGrade') {
    $gradeOrder = $_POST['gradeOrder'];
    $gradeName = $_POST['gradeName'];
    $gradeSections = $_POST['gradeSection'];

    $response = [];
    $validEntries = 0;
    foreach ($gradeOrder as $index => $order) {
        $name = $gradeName[$index];
        $section = $gradeSections[$index];

        if (!empty($order) && !empty($name) && !empty($section)) {
            $validEntries++;
        } else {
            $response[] = [
                'Message' => "All fields are mandatory for row $index!",
                'Status' => 400
            ];
        }
    }
    if ($validEntries > 0) {
        $conn->query("DELETE FROM `creategrade`");
    }
    foreach ($gradeOrder as $index => $order) {
        $name = $gradeName[$index];
        $section = $gradeSections[$index];

        if (!empty($order) && !empty($name) && !empty($section)) {
            $insertGrade = $conn->query("INSERT INTO `creategrade` (Grade_Order, Grade_Name, Grade_Section) VALUES ('$order', '$name', '$section')");

            if ($insertGrade) {
                $response[] = [
                    'Message' => "Row $index inserted successfully!",
                    'Status' => 200
                ];
            } else {
                $response[] = [
                    'Message' => "Insertion Failed for Row $index: " . $conn->error,
                    'Status' => 404
                ];
            }
        }
    }
    echo json_encode($response);
    exit;
}



if ($action == 'loadGrade') {
    $loadGradeQuery = $conn->query("SELECT * FROM `creategrade`");
    $result = $loadGradeQuery->Fetch_all(MYSQLI_ASSOC);

    echo json_encode($result);
}

if($action == 'deleteGrade'){

    $deleteId = $_POST['clickedId'];

    $deleteGrade = $conn->query("DELETE FROM `creategrade` WHERE Id = '$deleteId' ");
    
    if ($deleteGrade) {
        $showMessage[] = [
            'message' => 'Deleted Successfully!',
            'status' => true
        ];
        echo json_encode(['success' => true, 'showMessage' => $showMessage]);
    } else {
        $showMessage[] = [
            'message' => 'Failed to delete!',
            'status' => false
        ];
        echo json_encode(['success' => false, 'showMessage' => $showMessage]);
    }
}
?>


