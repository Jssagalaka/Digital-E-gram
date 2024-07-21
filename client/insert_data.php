<?php
session_start();
include("header.php");
echo $hh;

$con= mysqli_connect("localhost","root","","e_gram");

if (isset($_POST['submit'])) 
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $address = $_POST["msg"];
    $hiddenFieldValue = $_POST['hiddenField'];


      // File paths
    $aadhar_card_path = "uploads/" . basename($_FILES['aadharCard']['name']);
    $photo_path = "uploads/" . basename($_FILES['photo']['name']);
    $reason_card_path = "uploads/" . basename($_FILES['resonCard']['name']);

    // Move uploaded files to the server
    move_uploaded_file($_FILES['aadharCard']['tmp_name'], $aadhar_card_path);
    move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
    move_uploaded_file($_FILES['resonCard']['tmp_name'], $reason_card_path);

    // SQL query to insert data into the database
    $sql="INSERT INTO insert_data(id, fname, lname, gender, address, aadhar, photo, resoncaed,hidden) VALUES (null,'$fname','$lname','$gender','$address','$aadhar_card_path','$photo_path','$reason_card_path',' $hiddenFieldValue')";

    if ($con->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close the connection
$con->close();
?>


<div class="section">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    
                    <!-- End Sidebar -->
                    <div class="col-sm-12 col-md-12 col-lg-8">

                        
                        <!-- <p class="subheading mb-4">"Assisting you in sustaining rural development through technology"</p> -->
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true" enctype="multipart/form-data">
                               
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" id="p_name" placeholder="Enter Your FirstName" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" id="p_name" placeholder="Enter Your LastName" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                  

                                    <div class="form-group">
                                    &nbsp;Gender:-&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="html" name="gender" value="male">
                                        <label for="male">Male</label>
                                         <input type="radio" id="css" name="gender" value="female">
                                        <label for="female">Female</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="p_message" name="msg" class="form-control" rows="6" placeholder="Enter Your Address"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                   
                                <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h3>Upload Documents</h3>
                                <!-- Aadhar Card -->
                                <label for="aadharCard">Aadhar Card:-</label>
                                <input type="file" name="aadharCard" id="aadharCard" accept=".jpg, .jpeg, .png"><br><br>

                                <!-- Photo -->
                                <label for="photo">Pan card:-</label>
                                <input type="file" name="photo" id="photo" accept=".jpg, .jpeg, .png"><br><br>

                                <!-- Bill -->
                                <label for="bill">Cupon:-</label>
                                <input type="file" name="resonCard" id="bill" accept=".pdf, .jpg, .jpeg, .png"><br><br>

                                <input type="hidden" name="hiddenField" value="pending">


                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <div id="success"></div>
                                <input type="submit" name="submit" value="Submit" class="btn btn-secondary">
                            </div>
                        </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>




<?php
echo $hf;
?>