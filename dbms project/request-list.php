<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Request list</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td{
            width:200px;
            height:150 px;
            padding-top:20px;;
        }
        </style>
</head>
<header>
<div class="full">
    <div class="inner_full">
        <div id="header"><h2>Blood Bank Management System</h2>
        <nav>
        <a href="admin-home.php"> Dashboard</a>
            <a href="donor-list.php"> Donors</a>
            <a href="patient-list.php"> Patients</a>
            <a href="donation-list.php"> Donations</a>
            <a href="request-list.php"> Requests</a>
            <a href="logout.php"> logout</a>
        </nav>
    </div>
    </div>     
</div>
</header>
<body>
    <div id="body"><br><br><br><br><br>
  <center><h1><u>Manage Blood Request</u></h1></center>
    <center> <div id="form">
        <table>
            <tr>
               <td><center><b>Request Id</b></center></td> 
                <td><center><b>Patient Name</b></center></td>
                <td><center><b>Mobile no.</b></center></td>
                <td><center><b>Blood Group</b></center></td>
                <td><center><b>Units(in ml)</b></center></td>
                <td><center><b>Reason</b></center></td>
                
            </tr>
            
            <?php
            $q=$db->query("SELECT *  FROM patients,request WHERE PID=PATIENT_ID ");
            while($r1=$q->fetch(PDO::FETCH_OBJ))
            {
                ?>
                <tr>
                    <td><center><b><font color="black"><?=$r1->RID; ?></center></td>
                    <td><center><b><font color="black"><?=$r1->NAME; ?> </center></td>
                    <td><center><b><font color="black"><?=$r1->MOBILE; ?> </center></td>
                    <td><center><b><font color="black"><?=$r1->BLOOD_GROUP; ?> </center></td>
                    <td><center><b><font color="black"><?=$r1->NO_OF_UNITS; ?></center></td>
                    <td><center><b><font color="black"><?=$r1->REASON; ?></center></td>
                    
                </tr>
                <?php


            }
            ?>
</table>

</div>
        </body>
<footer>


        <div id="footer"></div>
        </footer>

</html>