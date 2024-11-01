<?php 
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
            $name = $_POST['name'];  
            $branch = $_POST['branch'];
            $sem = $_POST['semester'];

          
 
        
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="viewMarks.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head> 
<body>
    <main>
        <!-- <div id="navbar"></div> -->
        <div id="back">
            <a href="viewSessionals.html">
                <i class="ri-arrow-left-s-line"></i>
                <h3>Back</h3>
            </a>
        </div>
        <div id="viewMarks">
            <div class="container box_shadow">

                <div id="title">
                    <!-- ******************* 1sem computers -->
                <?php
                            if($branch=='Computer Engineering' && $sem=='1'){

                                $sql = "SELECT * FROM `uploadsessionals`.`1semcomses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>English</th>
                                <td><?php echo $row['English'] ?></td>
                            </tr>
                            <tr>
                                <th>Maths</th>
                                <td><?php echo $row['Maths'] ?></td>
                            </tr>
                            <tr>
                                <th>Physics</th>
                                <td><?php echo $row['Physics'] ?></td>
                            </tr>
                            <tr>
                                <th>BIT</th>
                                <td><?php echo $row['BIT'] ?></td>
                            </tr>
                            <tr>
                                <th>Engineering Drawing</th>
                                <td><?php echo $row['EngineeringDrawing'] ?></td>
                            </tr>
                            </table>
                        </div>
                    </div>
                            <?php
                            }
                        }
                        

                        // *****************1 sem it

                        elseif($branch=='Information Technology' && $sem=='1'){
                            $sql = "SELECT * FROM `uploadsessionals`.`1semitses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>English</th>
                                <td><?php echo $row['English'] ?></td>
                            </tr>
                            <tr>
                                <th>Maths</th>
                                <td><?php echo $row['Maths'] ?></td>
                            </tr>
                            <tr>
                                <th>Physics</th>
                                <td><?php echo $row['Physics'] ?></td>
                            </tr>
                            <tr>
                                <th>BIT</th>
                                <td><?php echo $row['BIT'] ?></td>
                            </tr>
                            <tr>
                                <th>Engineering Drawing</th>
                                <td><?php echo $row['EngineeringDrawing'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }
                        
                        
// *********************   2sem computers
                        elseif($branch=='Computer Engineering' && $sem=='2'){
                            $sql = "SELECT * FROM `uploadsessionals`.`2semcomses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>English</th>
                                <td><?php echo $row['English'] ?></td>
                            </tr>
                            <tr>
                                <th>Maths</th>
                                <td><?php echo $row['Maths'] ?></td>
                            </tr>
                            <tr>
                                <th>Physics</th>
                                <td><?php echo $row['Physics'] ?></td>
                            </tr>
                            <tr>
                                <th>Basic of Electrical Engineering</th>
                                <td><?php echo $row['BEE'] ?></td>
                            </tr>
                            <tr>
                                <th>Basics of Electronics</th>
                                <td><?php echo $row['BE'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }


// ************************************   2sem it
                        elseif($branch=='Information Technology' && $sem=='2'){
                            $sql = "SELECT * FROM `uploadsessionals`.`2semitses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>English</th>
                                <td><?php echo $row['English'] ?></td>
                            </tr>
                            <tr>
                                <th>Maths</th>
                                <td><?php echo $row['Maths'] ?></td>
                            </tr>
                            <tr>
                                <th>Physics</th>
                                <td><?php echo $row['Physics'] ?></td>
                            </tr>
                            <tr>
                                <th>Basic of Electrical Engineering</th>
                                <td><?php echo $row['BEE'] ?></td>
                            </tr>
                            <tr>
                                <th>Basics of Electronics</th>
                                <td><?php echo $row['BE'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }



// ********************************  3sem computers
                        elseif($branch=='Computer Engineering' && $sem=='3'){
                            $sql = "SELECT * FROM `uploadsessionals`.`3semcomses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Digital Electronics</th>
                                <td><?php echo $row['DE'] ?></td>
                            </tr>
                            <tr>
                                <th>C programming</th>
                                <td><?php echo $row['C'] ?></td>
                            </tr>
                            <tr>
                                <th>Relational database Management system</th>
                                <td><?php echo $row['RDBMS'] ?></td>
                            </tr>
                            <tr>
                                <th>Operating systems</th>
                                <td><?php echo $row['OS'] ?></td>
                            </tr>
                            <tr>
                                <th>Multimedia and Applications</th>
                                <td><?php echo $row['Multimedia'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }


// ************************************   3sem it
                        elseif($branch=='Information Technology' && $sem=='3'){
                            $sql = "SELECT * FROM `uploadsessionals`.`3semitses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Digital Electronics</th>
                                <td><?php echo $row['DE'] ?></td>
                            </tr>
                            <tr>
                                <th>C programming</th>
                                <td><?php echo $row['C'] ?></td>
                            </tr>
                            <tr>
                                <th>Relational database Management system</th>
                                <td><?php echo $row['RDBMS'] ?></td>
                            </tr>
                            <tr>
                                <th>Operating systems</th>
                                <td><?php echo $row['OS'] ?></td>
                            </tr>
                            <tr>
                                <th>Multimedia and Applications</th>
                                <td><?php echo $row['Multimedia'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }

//*****************************************  4sem computers
                        elseif($branch=='Computer Engineering' && $sem=='4'){
                            $sql = "SELECT * FROM `uploadsessionals`.`4semcomses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Generic skills and Enterpreneurship Development</th>
                                <td><?php echo $row['GSED'] ?></td>
                            </tr>
                            <tr>
                                <th>Data structures in C</th>
                                <td><?php echo $row['DSA'] ?></td>
                            </tr>
                            <tr>
                                <th>OOPS in C++</th>
                                <td><?php echo $row['OOPS'] ?></td>
                            </tr>
                            <tr>
                                <th>Software Engineering</th>
                                <td><?php echo $row['SE'] ?></td>
                            </tr>
                            <tr>
                                <th>Microprocessors</th>
                                <td><?php echo $row['Microprocessors'] ?></td>
                            </tr>
                            <tr>
                                <th>Computer Networks</th>
                                <td><?php echo $row['CN'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }


// ************************************   4sem it
                        elseif($branch=='Information Technology' && $sem=='4'){
                            $sql = "SELECT * FROM `uploadsessionals`.`4semitses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Generic skills and Enterpreneurship Development</th>
                                <td><?php echo $row['GSED'] ?></td>
                            </tr>
                            <tr>
                                <th>Data structures in C</th>
                                <td><?php echo $row['DSA'] ?></td>
                            </tr>
                            <tr>
                                <th>OOPS in C++</th>
                                <td><?php echo $row['OOPS'] ?></td>
                            </tr>
                            <tr>
                                <th>Software Engineering</th>
                                <td><?php echo $row['SE'] ?></td>
                            </tr>
                            <tr>
                                <th>Microprocessors</th>
                                <td><?php echo $row['Microprocessors'] ?></td>
                            </tr>
                            <tr>
                                <th>Computer Networks</th>
                                <td><?php echo $row['CN'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }




//**********************************************  5sem computers
                        elseif($branch=='Computer Engineering' && $sem=='5'){
                            $sql = "SELECT * FROM `uploadsessionals`.`5semcomses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Computer peripherals and Interfacing</th>
                                <td><?php echo $row['CPI'] ?></td>
                            </tr>
                            <tr>
                                <th>Java programming</th>
                                <td><?php echo $row['Java'] ?></td>
                            </tr>
                            <tr>
                                <th>Internet and web technologies</th>
                                <td><?php echo $row['IWT'] ?></td>
                            </tr>
                            <tr>
                                <th>Advance Database Management system</th>
                                <td><?php echo $row['ADBMS'] ?></td>
                            </tr>
                            <tr>
                                <th>Wireless communication</th>
                                <td><?php echo $row['WC'] ?></td>
                            </tr>

                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }


// ************************************   5sem it
                        elseif($branch=='Information Technology' && $sem=='5'){
                            $sql = "SELECT * FROM `uploadsessionals`.`5semitses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Java programming</th>
                                <td><?php echo $row['Java'] ?></td>
                            </tr>
                            <tr>
                                <th>Wireless communication</th>
                                <td><?php echo $row['WC'] ?></td>
                            </tr>
                            <tr>
                                <th>Internet and web tecgnologies</th>
                                <td><?php echo $row['IWT'] ?></td>
                            </tr>
                            <tr>
                                <th>Software testing and quality assurance</th>
                                <td><?php echo $row['STQA'] ?></td>
                            </tr>
                            <tr>
                                <th>E-commerce</th>
                                <td><?php echo $row['Ecommerce'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }

                        

//************************************************  6sem computers
                        elseif($branch=='Computer Engineering' && $sem=='6'){
                            $sql = "SELECT * FROM `uploadsessionals`.`6semcomses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Basics of Management</th>
                                <td><?php echo $row['BOM'] ?></td>
                            </tr>
                            <tr>
                                <th>Visual programming using .Net</th>
                                <td><?php echo $row['VB.Net'] ?></td>
                            </tr>
                            <tr>
                                <th>Artificial intelligence</th>
                                <td><?php echo $row['AI'] ?></td>
                            </tr>
                            <tr>
                                <th>Installation , Maintenence and troubleshooting of Computer Networks</th>
                                <td><?php echo $row['IMTCN'] ?></td>
                            </tr>
                            <tr>
                                <th>Mobile Computing</th>
                                <td><?php echo $row['MC'] ?></td>
                            </tr>

                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }


// ************************************   6sem it
                        elseif($branch=='Information Technology' && $sem=='6'){
                            $sql = "SELECT * FROM `uploadsessionals`.`6semitses` WHERE `Rollno` = $rollno";
                    
                                $Harman= $con->query($sql);
                            while($row = mysqli_fetch_assoc($Harman))
                            {
                            ?>
                    <h2>Sessionals Marks</h2>
                    <h3>RollNo : <?php echo $row['Rollno'] ?></h3>
                    <h3>Branch :<?php echo $_POST['branch'] ?> </h3>
                    <h3>Name : <?php echo $_POST['name'] ?></h3>
                    <h3>Sem : <?php echo $_POST['semester'] ?></h3>
                </div>  
                <div id="details">
                    <div class="box">
                        <h3>1st Sessionals</h3>
                        <table>
                            
                            <tr>
                                <th>Basics of Management</th>
                                <td><?php echo $row['BOM'] ?></td>
                            </tr>
                            <tr>
                                <th>Visual Programming using .Net</th>
                                <td><?php echo $row['VB.Net'] ?></td>
                            </tr>
                            <tr>
                                <th>Advance Database Management system</th>
                                <td><?php echo $row['ADBMS'] ?></td>
                            </tr>
                            <tr>
                                <th>Mobile Computing</th>
                                <td><?php echo $row['MC'] ?></td>
                            </tr>
                            <tr>
                                <th>Artificial Intelligence</th>
                                <td><?php echo $row['AI'] ?></td>
                            </tr>
                            </table>  
                        </div>
                    </div>
                            <?php
                            }
                        }


                    else{
                        echo "Invalid Credentials entered";
                    }
                }
            }
            ?>

            </div>
        </div>
    </div>
</main>

<script>
$("#navbar").load("navbar.html");
let nav = document.querySelector("#nav");
let navItems = document.querySelector("nav");

window.addEventListener("scroll", function(){
    nav.classList.remove('navAni');
    navItems.classList.remove('navItemsAni');
})
</script>
</body>
</html> 

            