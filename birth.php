<?php
include('header.php');
echo $hh;
?>

<div class="section">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    
                    <!-- End Sidebar -->
                    <div class="col-sm-12 col-md-12 col-lg-8">

                        <h2 class="section-heading">
                          Birth Certificate
                        </h2>
                        <!-- <p class="subheading mb-4">"Assisting you in sustaining rural development through technology"</p> -->
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                               
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" id="p_name" placeholder="Enter Your Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" id="p_name" placeholder="Enter Your FatherName" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" id="p_name" placeholder="Enter Your MotherName" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <table>
                                    <tr>
                                        <th>DOB:-</th>
                                       
                                        <td> 
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <div class="form-group">
                                            
                                        <input type="date" name="dob" class="form-control" id="p_name"  required="">
                                        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                        </td>
                                    </tr>
                                   </table><BR>

                                   <div class="form-group">
                                        <input type="text" name="lname" class="form-control" id="p_name" placeholder="Enter Place of Birth" required="">
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

                                <!-- Bill -->
                                <label for="bill">Electricity Bill:</label>
                                <input type="file" name="bill" id="bill" accept=".pdf, .jpg, .jpeg, .png"><br><br>

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
