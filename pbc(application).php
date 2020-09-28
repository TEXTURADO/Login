<?php
$connection=mysqli_connect("localhost","root","","demo");
$sql="SELECT * FROM application";
$query=mysqli_query($connection,$sql);


?>


<!DOCTYPE html>
<html>
<head>
	<title>APPLICATION TABLE FOR PBC</title>
	<link rel="stylesheet" type="text/css" href="application.css">
</head>
<body>

	<h1>P B C</h1>
	<h2>APPLICATION TABLE</h2>
	
	<table>
		<thead>
		<tr>
			<th>NUMBER</th>
			<th>DATE OF REJECTION</th>
			<th>DATE APPLIED</th>
			<th>LORRY NUMBER</th>
			<th>SHED</th>
			<th>STATION</th>
			<th>INTERNAL WAYBILL</th>
			<th>EXTERNAL WAYBILL</th>
			<th>LOCATION</th>
			<th>QUANTITY REJECTED</th>
			<th>QUANTITY APPLIED</th>
			<th>REASON FOR REJECTION</th>
			<th>CROP YEAR</th>
			<th>ACCUMULATED REJECTION</th>
			<th>REP NAME</th>
			<th>TEL NUM</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
	</thead>
	<tbody>
		<?php
        if(mysqli_num_rows($query)>0){
          while($row=mysqli_fetch_assoc($query))
        {

		?>


<tr>
	<td><?php echo $row['number']; ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>

</tr>
<?php
 }
 }

 else{
           echo "no record found";
}

?>

</tbody>


	</table>

</body>
</html>