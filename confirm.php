<?php
include('config2020/linx.php');
ob_start;
$status = "";
if(array_key_exists("submit", $_POST)){
$id = $_POST['id'];
$fn = $_POST['fn'];
$surname =$_POST["surname"];
$firstname =$_POST ["firstname"];><px 4px 4px 4px #000; color: silver">
	<tr>
    <td colspan="2" align="center">REQUISITION FORM</td>
	</tr>
	<tr>
    <td colspan="2" align="center"></td>
	</tr>
	<tr>
    <td>Surname</td>
    <td><input type="text" name="fn" value="<?php echo $row['fn'];?>" required="required" style="width: 300px; height: 35px; border-radius:15px 15px 0px 0px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
    <td>First name</td>
    <td><input type="text" name="resad" value="<?php echo $row['resad'];?>" required="required" style="width: 300px; height: 35px; border-radius:0px 0px 15px 15px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
    <td>Email</td>
    <td><input type="text" name="deliad" value="<?php echo $row['deliad'];?>" required="required" style="width: 300px; height: 35px; border-radius:15px 15px 0px 0px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
    <td>Phone number</td>
    <td><input type="num" name="phone" required="required" value="<?php echo $row['phone'];?>" style="width: 300px; height: 35px; border-radius:0px 0px 15px 15px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
    <td>Service/Product</td>
    <td><input type="num" name="size" required="required" value="<?php echo $row['size'];?>" style="width: 300px; height: 35px; border-radius:15px 15px 0px 0px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
    <td>Gender</td>
    <td><input type="num" name="codenumber" required="required" value="<?php echo $row['codenumber'];?>" style="width: 300px; height: 35px; border-radius:15px 15px 0px 0px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
    <td>Method of contact</td>
    <td><input type="num" name="codeorder" required="required" value="<?php echo $row['codeorder'];?>" style="width: 300px; height: 35px; border-radius:15px 15px 0px 0px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
   
    <td>APPROVEDBY </td>
    <td><input type="text" name="approvedby" required="required" value="<?php echo $row['approvedby'];?>" style="width: 300px; height: 35px; border-radius:15px 15px 0px 0px; text-align: center; text-decoration-color: cyan" /></td>
	</tr>
	<tr>
    <td colspan="2" align="center"><input name="submit" type="submit" value="approve" /></td>
	</tr>
	
</table>	
</form>

</div>
</body>
</html>