<?php 

        $server = 'localhost';
        $username = 'root';
        $password = '';

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            echo "Error in connecting database";
        }
        else{
            // echo"success";

            $sql = "SELECT * FROM `addstudents`.`additstudents` WHERE `Semester`='6'";
            $Harman = $con->query($sql);


        }
      
    
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="SDetails.css">
    <link rel="stylesheet" href="SDetails2.css">
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
                        <a href="StudentsCS.html">
                            <i class="ri-arrow-left-s-line"></i>
                            <h3>Home</h3>
                        </a>
                    </div>
                    <div class="close" id="close-btn">
                        <!-- hamburger here booom -->
                    </div>
                </div>
                <div class="sidebar">
                    <a href="admin_dashboard.html">
                        <i class="ri-dashboard-line"></i>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="StudentsCS.html" class="active">
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
        <div id="students_list">
            <div class="container box_shadow">
                <div id="title">
                    <h2>List of Students</h2>
                    <h3>Information Technology 6th Sem</h3>

                </div>
                <div id="details">

                    <Table class="tbl">
                        <tr>
                            <th>Name</th>
                            <th>RollNo</th>
                            <th>Semester</th>
                        </tr>

                        <?php
                        while($row = mysqli_fetch_assoc($Harman))
                        {
                            ?>

                        <tr class="hoverrow">
                            <td>
                                <?php echo $row['Name']; ?>
                            </td>
                            <td>
                                <?php echo $row['Rollno']; ?>
                            </td>
                            <td>
                                <?php echo $row['Semester']; ?>
                            </td>
                        </tr>

                        <?php 
                        }
                            ?>
                    </Table>


            </div>
        </div>
    </main>
    <script>
        let search = document.querySelector("#search");
        let inpt = document.querySelector("input");
        let btn = document.querySelector("#button");

        search.addEventListener('click', function () {
            event.stopPropagation();
            search.style.width = '30%';
            inpt.style.display = 'inline-block';
            btn.style.width = '15%';
        })
        document.addEventListener('click', function () {
            search.style.width = '4%';
            inpt.style.display = 'none';
            btn.style.width = '100%';
        })

    </script>
</body>

</html>