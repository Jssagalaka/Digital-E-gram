<?php
session_start();
include 'includes/header.php';

	// include 'includes/sidebar.php';
	// include 'includes/topbar.php';
$con= mysqli_connect("localhost","root","","e_gram");

$id=$_REQUEST["id"];
if(isset($_POST['submit']))
{	
    $service_name = $_POST['service_name'];
    $category = $_POST['category'];
    $eligibility = $_POST['eligibility'];
    $required_documents = $_POST['required_documents'];
    $time_limit = $_POST['time_limit'];

	$sql="UPDATE services SET services='$service_name',category='$category',eligibility=' $eligibility',req_document='$required_documents',timelimit='$time_limit' WHERE 1";
	//	echo $sql;
	$res=mysqli_query($con,$sql);
	header("Location:services.php");
}
$res=mysqli_query($con,"select * from services where id=$id");
$row=mysqli_fetch_row($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Form</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Service Information Form</h2>

    <form action="#" method="post">
        <table>
            <!-- Service Name -->
            <tr>
                <td><label for="service_name">Service Name:</label></td>
                <td><input type="text" id="service_name" name="service_name" value="<?php echo $row[1];?>" required></td>
            </tr>

            <!-- Category -->
            <tr>
                <td><label for="category">Category:</label></td>
                <td><input type="text" id="category" name="category" value="<?php echo $row[2];?>" required></td>
            </tr>

            <!-- Eligibility -->
            <tr>
                <td><label for="eligibility">Eligibility:</label></td>
				<td><input type="text" id="service_name" name="eligibility" value="<?php echo $row[3];?>" required></td>
                
            </tr>

            <!-- Required Documents -->
            <tr>
                <td><label for="required_documents">Required Documents:</label></td>
                <td><textarea id="required_documents" name="required_documents"  rows="4" required><?php echo $row[4]; ?></textarea></td>
            </tr>

            <!-- Time Limit -->
            <tr>
                <td><label for="time_limit">Time Limit:</label></td>
                <td><input type="text" id="time_limit" name="time_limit" value="<?php echo $row[5];?>" required></td>
            </tr>
        </table>

        <!-- Submit Button -->
       &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  
       <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>

<?php
 include 'includes/footer.php';
?>