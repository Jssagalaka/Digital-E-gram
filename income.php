<?php
session_start();
include("header.php");
echo $hh;

$con= mysqli_connect("localhost","root","","e_gram");

if (isset($_POST['submit'])) {
    // Retrieve form data
    $full_name = $_POST['nm'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $purpose = $_POST['nm'];
    $business = $_POST['nm'];
    $annual_income = $_POST['income_amount'];
    $pin = $_POST['pin'];
    $address = $_POST['msg'];
   

    // File paths (change these based on your file upload directory)
     $aadhar_card_path = "uploads/" . basename($_FILES['aadharCard']['name']);
     $photo_path = "uploads/" . basename($_FILES['photo']['name']);
     $bill_path = "uploads/" . basename($_FILES['bill']['name']);

    // // Move uploaded files to the upload directory
    move_uploaded_file($_FILES['aadharCard']['tmp_name'], $aadhar_card_path);
    move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
    move_uploaded_file($_FILES['bill']['tmp_name'], $bill_path);

    // Insert data into the database
    $sql = "INSERT INTO income_certificate (full_name, email, phone, purpose, business, annual_income, pin, address, aadhar_cart, photo, electricity_bill)
            VALUES ('$full_name', '$email', '$phone', '$purpose', '$business', $annual_income, '$pin', '$address', '$aadhar_card_path', '$photo_path', '$bill_path')";


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
            <div class="col-sm-12 col-md-12 col-lg-8">
                <h2 class="section-heading">
                    Generate Income Certificate
                </h2>
                <form method="post" action="#" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="nm" class="form-control" id="p_name" placeholder="Enter full Name" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="p_phone" placeholder="Enter Phone number" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="nm" class="form-control" id="p_name" placeholder="Purpose of Certificate:" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="nm" class="form-control" id="p_name" placeholder="Enter Your Business:" required="">
                                <div class="help-block with-errors"></div>
                             </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="income_amount"><b>Annual Income:</b></label>
                                <input type="number" name="income_amount" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="pin" class="form-control" id="p_name" placeholder="Enter Your Village Pin Number" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea id="p_message" name="msg" class="form-control" rows="6" placeholder="Enter Your Address"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>

<?php
echo $hf;
?>