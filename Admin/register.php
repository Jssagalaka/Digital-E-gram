<?php
session_start();
if(isset($_SESSION['email']))
{
    include 'includes/header.php';

    include 'includes/sidebar.php';
    include 'includes/topbar.php';				
?>
<section id="cart_items"><!--form-->
	<div class="container">
		<div class="col-sm-10"  style = "margin:0 0 0 100px;">
			  <div class="table-responsive cart_info">
				<table class='table table-condensed'>
					<thead>
						<tr class='cart_menu'>
							<td class='id'><center>Id</center></td>
							<td class='fnm'><center>FirstName</center></td>
							<td class='lnm'><center>LastName</center></td>
							<td class='add'></center>Address</center></td>
							<td class='cit'><center>City</center></td>
							<td class='con'><center>ContectNo</center></td>
							<td class='mail'><center>EmailID</center></td>
							
							<td class='detail'><center>More details</center></td>
						
							<td class='ope'><center>&nbsp&nbsp&nbsp&nbsp&nbsp operation</center></td>
							<td></td>
						</tr>
					</thead>
				<tbody>	
				<?php
				$res=mysqli_query($cn,"select * from registration");
				while($row=mysqli_fetch_row($res))
				{
					echo "<tr>";
					echo "<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[5]</td>
					<td>$row[6]</td>
					<td>$row[9]</td>
					<td>$row[11]</td>
					<td><b><a href='view_rdetail.php?id=$row[0]'><center>view</center></b></a>
					<td><b><a href='up_registration.php?id=$row[0]'><center>Update</center></b></a>
					<td><b><a href='del_registration.php?id=$row[0]'><center>Delete</center></b></a>";
					echo "</tr>";
				}
				?>
				</tbody>
				</table>
				</div>
				</div>
			</div>
	</section><!--/form-->
<?php
 include 'includes/footer.php';
}
else
	header("Location:index.php");

?>