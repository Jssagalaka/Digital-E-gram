<?php
session_start();
$con= mysqli_connect("localhost","root","","e_gram");
if(isset($_SESSION['email']))
{
include('header.php');
echo $hh;
?>
<style>
    .cart_menu{
	background-color:#33FFFC;
}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 100%;
    padding-right: 7.5px;
    padding-left: 7.5px;
    margin-right: 40px;
    margin-left: -40px;
}
</style>
<section id="cart_items"><!--form-->
	<div class="container">
		<div class="col-sm-11"  style = "margin:0 0 0 260px;">
			  <div class="table-responsive cart_info">
				<table class='table table-condensed'>
					<thead>
						<tr class='cart_menu'>
						     <td class='id'><center>Id</center></td>
						   <td class='name'><center>First name</center></td>
						  <td class='lname'><center>Last name</center></td>
                            <td class='gen'><center>Gender</center></td>
							<td class='ope'><center>Address</center></td>
                            <td class='ope'><center>Aadhar card</center></td>
                            <td class='ope'><center>Pan card</center></td>
                            <td class='ope'><center>Ration card</center></td>
							<td class='ope'><center>Status</center></td>
							
							<td></td>
						</tr>
					</thead>
				<tbody>	
			<?php
			$res=mysqli_query($con,"Select * from insert_data");
			while($row=mysqli_fetch_row($res))
			{
				echo "<tr><td><center>$row[0]</center></td><td><center>$row[1]</center></td><td><center>$row[2]</center></td><td><center>$row[3]</center></td><td><center>$row[4]</center></td>
				
				<td><center><img  class='table-avatar' height=100px width=100px src='../client/$row[5]'></center></td>


				<td><center><img  class='table-avatar' height=100px width=100px src='../client/$row[6]'></center></td>

				<td><center><img  class='table-avatar' height=100px width=100px src='../client/$row[7]'></center></td>
				
				<td><center>$row[8]</center></td>
				
				</tr>";
			}
			?>
				</tbody>
            </table>
			
	
		
				</div>
				
				</div>
			</div>
	</section><!--/form-->
<?php
echo $hf;
}
else
header("Location:../login.php");

?>
