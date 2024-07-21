<?php
session_start();

	include 'includes/header.php';

	include 'includes/sidebar.php';
	include 'includes/topbar.php';

?>
<style>
nav{
   float:right;

}
.cart_menu{
	background-color:#33FFFC;
}
</style>
<section id="cart_items"><!--form-->
	<div class="container">
		<div class="col-sm-11"  style = "margin:0 0 0 90px;">
			  <div class="table-responsive cart_info">
			  <nav>
				<table class='table table-condensed'>

			
		
				<thead>
					
						<tr class='cart_menu'>
							<td class='id'><center>Id</center></td>
							<td class='id'><center>Image</center></td>
							<td class='fnm'><center>FirstName</center></td>
							<td class='lnm'><center>LastName</center></td>
							<td class='bdate'><center>BirthDate</center></td>
							<td class='gen'></center>Gender</center></td>
							<td class='phono'><center>Phone</center></td>
							<td class='pin'><center>pinCode</center></td>
							<td class='add'></center>Address</center></td>
							<td class='mail'><center>EmailID</center></td>
							<td></td>
						</tr>
					</thead>
				<tbody>	
				<?php
				$id=$_REQUEST["id"];
				$res=mysqli_query($con,"select * from register where id=$id");
				while($row=mysqli_fetch_row($res))
				{
					echo "<tr>";
					echo "<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>$row[4]</td>
					<td>$row[5]</td>
					<td>$row[6]</td>
					<td>$row[7]</td>
					<td>$row[8]</td>
					<td>$row[9]</td>";
					echo "</tr>";
				}
				?>
				</tbody>
				</table>
				</div>
				</div>
			</div>
			</nav>
	</section><!--/form-->
<?php
  include 'includes/footer.php';


?>