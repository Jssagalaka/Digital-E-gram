<?php
session_start();
include 'includes/header.php';

	// include 'includes/sidebar.php';
	// include 'includes/topbar.php';
$con= mysqli_connect("localhost","root","","e_gram");

$id=$_REQUEST["id"];
if(isset($_POST['submit']))
{	
    $hiddenFieldValue = $_POST['hiddenField'];

	$sql="UPDATE insert_data SET hidden='$hiddenFieldValue' WHERE $id";
	//	echo $sql;
	$res=mysqli_query($con,$sql);
	header("Location:request.php");
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

  

    <form action="#" method="post">
        <table>
            <!-- Service Name -->
            <tr>
                <td><label for="status">Status:-</label></td>
                <td><input type="text" name="hiddenField"></td>
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