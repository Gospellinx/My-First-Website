<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="assets/css/formstyle.css">
<link rel="stylesheet" type="text/css" href="stle.css">
</head>
<body >
	
<div class="contact">
	<table >
<tr >
<td >S/N</td>
<td >surname</td>
<td >firstname</td>
<td >Email</td>
<td >Phone number</td>
<td >gender</td>
<td >Service</td>
<td >Email</td>
<td >Method</td>
<td>Delete</td>
</tr>
<?php
include("config2020/linx.php");
$count=1;
$sel_query="SELECT * FROM photos.contact ORDER BY id desc";
$result = mysqli_query($handle_event,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $count;  ?></td>
<td><?php echo $row["surname"]; ?></td>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["service"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["method"]; ?></td>
<td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>

</table>
</div>
</body>
</html>