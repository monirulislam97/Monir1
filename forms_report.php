<?php
session_start();

if ($_SESSION["Login"] != "YES")
header("Location: login.php");

if ($_SESSION["LEVEL"] == 2) {

?>

	<html>
	<head><title>Viewing Student Data</title><head>
	<body>

	<h1>View Student Details</h1>

		<?php
	     require ("config.php");

	     $sql = "SELECT * FROM form";
		 $result = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($result) > 0) { 	?>

		<table width="600" border="1" cellspacing="0" cellpadding="3">

		<tr>
		<td align="center"><strong>Name</strong></td>
		<td align="center"><strong>ID</strong></td>
		<td align="center"><strong>Days</strong></td>
    <td align="center"><strong>Reason</strong></td>
		</tr>

		<?php
			while($rows = mysqli_fetch_assoc($result)) {
		?>

	     <tr>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['days']; ?></td>
      <td><?php echo $rows['reason']; ?></td>
      <td align="center"> <a href="Approve.php?id=<?php echo $rows['id']; ?>">Approval</a> </td>
		</tr>

		<?php }

			}
		} else {
			echo "<h3>There are no records to show</h3>";
			}

	     mysqli_close($conn);
	   ?>

	    </table>


		<br><br>
	    <a href="logout.php">LOGOUT</a>

	</body>
	</html>
