<?php
include_once('connection.php')
$query="SELECT*FROM mydb";
$result=mysql_query($query);
?>
<!DOCTYPE html>
<head align="center" text:align="center"><h1><b>EMPLOYEE's ATTENDANCE INFORMATION</b></h1></head>
<main><body>
<table align="center" border="1px" style="width:600px; line-height:40px;" text:align="center">
<tr>
<td><H2>ID</H2></td>
<td><h2>NAME</h2></td>
<td><h2>ENTRY</h2></td>
<td><h2>DATE</h2></td>
</tr>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
    <tr>
    <td><?php echo$row['COL 1'];?></td>
    <td><?php echo$row['COL 2'];?></td>
    <td><?php echo$row['COL 3'];?></td>
    <td><?php echo$row['COL 4'];?></td>
    </tr>
<?php
}
?>
</table>
</body></main>

</html>
