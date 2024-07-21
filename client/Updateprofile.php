<?php
session_start();
if(isset($_SESSION['email']))
{
include("header.php");
echo $hh;

$con= mysqli_connect("localhost","root","","e_gram");
$uid=$_SESSION["email"];

if(isset($_POST["submit"]))
{
    $img=$_POST['image'];
    $fnm=$_POST['fname'];
    $lnm=$_POST['lname'];
    $dob=$_POST['dob'];
    $gn=$_POST['gender'];
    $pn=$_POST['phone'];
    $pin=$_POST['pinno'];
    $ad=$_POST['add1'];

   
   $que="UPDATE register SET Image='$img',Firstname='$fnm',Lastname='$lnm', DOB='$dob',Gender='$gn',Phone='$pn',Pinno='$pin',Address='$ad' WHERE Email='$uid'";

    // $query="insert into register(Image,DOB,Pinno)values ('$img','$dob','$pin')";
    mysqli_query($con,$que);
}
            $que="select * from register where Email='$uid'";
//echo $que;
$res=mysqli_query($con,$que);
$row=mysqli_fetch_row($res);
?>

<div class="section">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    
                    <!-- End Sidebar -->
                    <div class="col-sm-12 col-md-12 col-lg-8">

                        <h2 class="section-heading">
                          Update Registraction
                        </h2>
                       
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                   
                 <img src="https://technosmarter.com/assets/icon/user.png"> 
                                <div class="form-group">
                                <label>Upload Image &#8595;</label>
                <input class="form-control" type="file" name="image" style="width:100%;" >
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" id="p_name" placeholder="Enter FirstName" required="" value='<?php echo $row[2];?>'>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" id="p_name" placeholder="Enter LastName" required="" value='<?php echo $row[3];?>'>
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
                                        
                                    &nbsp;<b>Gender:-</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="html" name="gender" value="male" 
                                    <?php
                                    if ($row[5]=="male")
                                    {
                                        echo "checked";
                                    }
                                    ?>>
                                        <label for="male">Male</label>
                                         <input type="radio" id="css" name="gender" value="female"
<?php
                                    if ($row[5]=="female")
                                    {
                                        echo "checked";
                                    }
                                    ?>>
                                        <label for="female">Female</label>
                                       
                                        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="p_email" placeholder="Enter Email" required="" value='<?php echo $row[9];?>'>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="p_phone" placeholder="Enter Phone Number" value='<?php echo $row[6];?>'>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                        <input type="text" name="pinno" class="form-control" id="p_name" placeholder="Enter your village pin number" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                            <div class="form-group">
                                <textarea id="p_message" name="add1" class="form-control" rows="6" placeholder="Enter Your Address"><?php echo $row[8]; ?></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            
                            <div class="form-group">
                                <div id="success"></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                            <input type="submit" name="submit" value="submit" class="btn btn-secondary">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
echo $hf;
}
else
	header("Location:../login.php");
?>




