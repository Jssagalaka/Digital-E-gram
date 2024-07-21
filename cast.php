<?php
session_start();
include("header.php");
echo $hh;

$con= mysqli_connect("localhost","root","","e_gram");

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $hometown = $_POST['hometown'];
    $caste = $_POST['caste'];
    $main_reason = $_POST['main_reason'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

        // File paths
        $aadhar_card_path = "uploads/" . basename($_FILES['aadharCard']['name']);
        $photo_path = "uploads/" . basename($_FILES['photo']['name']);
        $reason_card_path = "uploads/" . basename($_FILES['resonCard']['name']);
    
        // Move uploaded files to the server
        move_uploaded_file($_FILES['aadharCard']['tmp_name'], $aadhar_card_path);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
        move_uploaded_file($_FILES['resonCard']['tmp_name'], $reason_card_path);
    
        // SQL query to insert data into the database
        $sql="INSERT INTO cast_certificate(id, name, hometown, cast, reson, gender, address, aadhar, photo, resoncaed) VALUES ('$fname','$hometown',' $caste',' $main_reason','$gender','$address','$address','$aadhar_card_path','$photo_path','$reason_card_path')";

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
                   <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading">
                          Cast Certificate
                        </h2>
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                        <div class="row">
                            <div class="col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control" id="p_name" placeholder="Enter  Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Home town" class="form-control" id="p_name" placeholder="Enter  Hometown" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="Caste" name="Caste" class="form-control" id="p_name" placeholder="Enter  Caste" required="">
                                    <div class="help-block with-errors"></div>
                                </div>


                                <div class="form-group">
                                    <input type="Caste" name="Main Reason" class="form-control" id="p_name" placeholder="Enter Main Reason " required="">
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
                                    <label for="aadharCard">Aadhar Card:</label>
                                    <input type="file" name="aadharCard" id="aadharCard" accept=".jpg, .jpeg, .png"><br><br>

                                    <!-- Photo -->
                                    <label for="photo">Photo:</label>
                                    <input type="file" name="photo" id="photo" accept=".jpg, .jpeg, .png"><br><br>

                                    <!-- Reson Card-->
                                    <label for="resoncard">Reson Card:</label>
                                    <input type="file" name="Reson Card" id="Reson Card" accept=".jpg, .jpeg, .png"><br><br>
                                    <div class="form-group">
                                        <div id="success"></div>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-secondary">
                                    </div>
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
