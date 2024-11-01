<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    echo("Error occured");
}

else{

$Name = $_POST['name'];
$Rollno = $_POST['rollno'];
$Semester = $_POST['semester'];

$sql = "INSERT INTO `addstudents`.`additstudents` (`Name`, `Rollno`, `Semester`) VALUES ('$Name', '$Rollno', '$Semester')"; 

$con->query($sql);

    
?>
<script>
alert("Student added successfully");
window.location = "admin_addstudentsIT.html";
</script>
<?php


$con->close();
}
?>
