
<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "OnlineAdmissionSystem";

$conn = mysqli_connect($server, $user, $pass, $database);







if (isset($_POST['submit'])) {

    $applicant_name = $_POST['applicant_name'];
    $department = $_POST['department'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $blood_group = $_POST['blood_group'];
    $nationality = $_POST['nationality'];
    $national_id = $_POST['national_id'];
    $email = $_POST['email'];
    $present_address = $_POST['present_address'];
    $permanent_address = $_POST['permanent_address'];
    $ssc_exam_type = $_POST['ssc_exam_type'];
    $ssc_board = $_POST['ssc_board'];
    $ssc_roll_no = $_POST['ssc_roll_no'];
    $ssc_result = $_POST['ssc_result'];
    $ssc_group = $_POST['ssc_group'];
    $ssc_pass_year = $_POST['ssc_pass_year'];
    $hsc_exam_type = $_POST['hsc_exam_type'];
    $hsc_board = $_POST['hsc_board'];
    $hsc_roll_no = $_POST['hsc_roll_no'];
    $hsc_result = $_POST['hsc_result'];
    $hsc_group = $_POST['hsc_group'];
    $hsc_pass_year = $_POST['hsc_pass_year'];




    $query = "INSERT INTO `students` (`applicant_name`,`department`, `father_name`, `mother_name`, `date_of_birth`, `mobile`, `gender`, `religion`, `blood_group`, `nationality`, `national_id`, `email`, `present_address`, `permanent_address`, `ssc_exam_type`, `ssc_board`, `ssc_roll_no`, `ssc_result`, `ssc_group`, `ssc_pass_year`, `hsc_exam_type`, `hsc_board`, `hsc_roll_no`, `hsc_result`, `hsc_group`, `hsc_pass_year`) 
    VALUES ('$applicant_name','$department', '$father_name', '$mother_name', '$date_of_birth', '$mobile', '$gender', '$religion', '$blood_group', '$nationality', '$national_id', '$email', '$present_address', '$permanent_address', '$ssc_exam_type', '$ssc_board', '$ssc_roll_no', '$ssc_result', '$ssc_group', '$ssc_pass_year', '$hsc_exam_type', '$hsc_board', '$hsc_roll_no', '$hsc_result', '$hsc_group', '$hsc_pass_year')";

    $result = mysqli_query($conn, $query);

    echo "Your application has been received!";
}
?>