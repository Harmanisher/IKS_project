<?php 
        // ************* For uploading sem 1 sessionals of computer

    if(isset($_POST['submit'])){
        $server = 'localhost';
        $username = 'root';
        $password = '';

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            echo "Error in connecting database";
        }
        else{
            // echo"success";
            $rollno = $_POST['rollno'];
            $BOM = $_POST['BOM'];
            $VBNet = $_POST['VBNet'];
            $AI = $_POST['AI'];
            $IMTCN = $_POST['IMTCN'];
            $MC = $_POST['MC'];


            $sql = "INSERT INTO `uploadsessionals`.`6semcomses` (`Rollno`, `BOM`, `VB.Net`, `AI`, `IMTCN`, `MC`) VALUES ('$rollno', '$BOM', '$VBNet', '$AI', '$IMTCN', '$MC')";


            $Harman= $con->query($sql);



            $con->close();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="addSessionals.css">
</head>
<body>
    <div id="bar">
        <div class="color" style="background-color: #4B49AC;"></div>
        <div class="color" style="background-color: #7CA0FA;"></div>
        <div class="color" style="background-color: #7878EA;"></div>
        <div class="color" style="background-color: #F37A7E;"></div>
        <div class="color" style="background-color: #F5F7FF;"></div>
        <div class="color" style="background-color: #000000;"></div>
        <div class="color" style="background-color: #98BCFF;"></div>
        <div class="color" style="background-color: #FFFFFF;"></div>
        <div class="color" style="background-color: #555555;"></div>
        <div class="color" style="background-color: #777777;"></div>
    </div>
    <main>    
        <aside>
            <div id="aside">
                <div class="toggle">
                    <div id="goToHome">
                        <a href="Sessionals.html">
                            <i class="ri-arrow-left-s-line"></i>
                            <h3>Home</h3>
                        </a>
                    </div>
                    <div class="close" id="close-btn">
                        <!-- hamburger here booom -->
                    </div>
                </div>
                <div class="sidebar">
                    <a href="admin_dashboard.html" class="active">
                        <i class="ri-dashboard-line"></i>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="StudentsCS.html">
                        <i class="ri-id-card-line"></i>
                        <h3>Students (CS)</h3>
                    </a>
                    <a href="admin_addstudentsCS.html">
                        <i class="ri-add-box-line"></i>
                        <h3>Add Students (CS)</h3>
                    </a>
                    <a href="StudentsIT.html">
                        <i class="ri-id-card-line"></i>
                        <h3>Students (IT)</h3>
                    </a>
                    <a href="admin_addstudentsIT.html">
                        <i class="ri-add-box-line"></i>
                        <h3>Add Students (IT)</h3>
                    </a>
                    <a href="Sessionals.html">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3>Sessionals</h3>
                    </a>
                    <a href="admin_login.html">
                        <i class="ri-logout-box-r-line"></i>
                        <h3>Logout</h3>
                    </a>
                </div>
            </div>
        </aside>
        
        <div id="sessionals">
            <div id="title">
                <h3>Add Sessionals Marks</h3>
                <h4>Computer Science</h4>
            </div>
            <div class="container box_shadow">
            <form action="Sessionals_CS_6.php" method = "post">
                    <h2>6th Sem Students</h2>
                    <div class="input">
                        <label for="">Roll No: </label><input type="number" name = "rollno">
                    </div>
                     <!-- <div class="input">
                         <label for="">Name: </label><input type="text">
                     </div> -->
                    <h4>Subjects (Give Marks Out of 30)</h4>
                    <div class="input">
                        <label for="">Basics of Management: </label><input type="number" name = "BOM" min="0" max="30" oninput="checkMaxValue(this)">
                    </div>
                    <div class="input">
                        <label for="">Visual programming using .Net: </label><input type="number" name = "VBNet" min="0" max="30" oninput="checkMaxValue(this)">
                    </div>
                    <div class="input">
                        <label for="">artificial intelligence: </label><input type="number" name = "AI" min="0" max="30" oninput="checkMaxValue(this)">
                    </div>
                    <div class="input">
                        <label for="">IMTCN: </label><input type="number" name = "IMTCN" min="0" max="30" oninput="checkMaxValue(this)">
                    </div>
                    <div class="input">
                        <label for="">Mobile computing: </label><input type="number" name = "MC" min="0" max="30" oninput="checkMaxValue(this)">
                    </div>
                    <div id="button" class="box_shadow">
                        <button name="submit" id="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function checkMaxValue(input) {
                if (input.value > 30) {
                input.value = 30;
                }
            }
        </script>
    </main>
    </body>
    </html>