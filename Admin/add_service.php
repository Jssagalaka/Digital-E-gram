<?php
session_start();
if(isset($_SESSION['email']))
{
$con= mysqli_connect("localhost","root","","e_gram");
	include 'includes/header.php';

	
	include 'includes/topbar.php';
	if (isset($_POST['submit'])) {

   $service_name = $_POST['service_name'];
    $category = $_POST['category'];
    $eligibility = $_POST['eligibility'];
    $required_documents = $_POST['required_documents'];
    $time_limit = $_POST['time_limit'];

	    // SQL query to insert data into the database
		$sql = "INSERT INTO services (ID, services, category,eligibility, req_document, timelimit) VALUES (null,'$service_name', '$category', '$eligibility', '$required_documents', '$time_limit')";

		// Check if the query was successful
		if ($con->query($sql) === TRUE) {
			echo "Record inserted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	
		// Close the database connection
		$con->close();
	}

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
                <td><input type="text" id="service_name" name="service_name" required></td>
            </tr>

            <!-- Category -->
            <tr>
                <td><label for="category">Category:</label></td>
                <td><input type="text" id="category" name="category" required></td>
            </tr>

            <!-- Eligibility -->
            <tr>
                <td><label for="eligibility">Eligibility:</label></td>
				<td><input type="text" id="service_name" name="eligibility" required></td>
                
            </tr>

            <!-- Required Documents -->
            <tr>
                <td><label for="required_documents">Required Documents:</label></td>
                <td><textarea id="required_documents" name="required_documents" rows="4" required></textarea></td>
            </tr>

            <!-- Time Limit -->
            <tr>
                <td><label for="time_limit">Time Limit:</label></td>
                <td><input type="text" id="time_limit" name="time_limit" required></td>
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
}
else
  header("Location:index.php");


?>