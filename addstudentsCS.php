<!-- <script>
    window.location = "admin_addstudentsCS.html";
</script> -->

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

$sql = "INSERT INTO `addstudents`.`addcsestudents` (`Name`, `Rollno`, `Semester`) VALUES ('$Name', '$Rollno', '$Semester')"; 

$con->query($sql);
    
    ?>
    <script>
    alert("Student added successfully");
    window.location = "admin_addstudentsCS.html";
    </script>
    <?php

// *************** Displaying total number of students
// $pql = "Select count(*) from `addstudents`.`addcsestudents`";
// $result = $con->query($pql);

// while($row = mysqli_fetch_array($result)){
//     echo $row['count(*)'];
// }

$con->close();
}
?>

