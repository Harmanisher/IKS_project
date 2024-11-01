<?php

if(isset ($_POST['submit'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    
    if(!$con){
    echo "Error occured";
}
else{

    // echo"success";

    $username = $_POST['username'];
    $password = $_POST['password'];


$sql = "SELECT * FROM `admin`.`hod` WHERE `username` = '$username' AND `password` = '$password'";

$result = $con->query($sql);
if($result->num_rows == 1)
{    
?>

<script>
        window.location.replace('admin_dashboard.html');

</script>

<?php

    exit();
}
else{

?>

<script>
        alert("Wrong credentials filled");
        window.location.replace('admin_login.html');
</script>

<?php
    exit();
}

$con->close();
}
}

?>

