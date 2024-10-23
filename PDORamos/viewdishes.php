<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Food Store</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="index.php">Return to home</a>
	<h1>Add New Dishes</h1>
	<form action="core/handleForms.php?Chef_ID=<?php echo $_GET['Chef_ID']; ?>" method="POST">
		<p>
			<label for="firstName">Dishes Menu</label> 
			<input type="text" name="Dishes_Menu">
		</p>
		<p>
			<label for="firstName">Dishes Cost</label> 
			<input type="text" name="Dishes_Cost">
			<input type="submit" name="insertNewCBtn">
		</p>
	</form>

	<table style="width:75%; margin-top: 25px;">
	  <tr>
	    <th>Dishes ID</th>
	    <th>Dishes Menu</th>
		<th>Dishes Cost</th>
	    <th>Dishes Maker</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $getDishesByChef = getDishesByChef($pdo, $_GET['Chef_ID']); ?>
	  <?php foreach ($getDishesByChef as $row) { ?>
	  <tr>
	  	<td><?php echo $row['Dishes_ID']; ?></td>	  	
	  	<td><?php echo $row['Dishes_Menu']; ?></td>	  	
	  	<td><?php echo $row['Dishes_Cost']; ?></td>	  	
	  	<td><?php echo $row['Dishes_Maker']; ?></td>	  	
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editDishes.php?Dishes_ID=<?php echo $row['Dishes_ID']; ?>&Chef_ID=<?php echo $_GET['Chef_ID']; ?>">Edit</a>

	  		<a href="deleteDishes.php?Dishes_ID=<?php echo $row['Dishes_ID']; ?>&Chef_ID=<?php echo $_GET['Chef_ID']; ?>">Delete</a>
	  	</td>	  	
	  </tr>
	<?php } ?>
	</table>

	
</body>
</html>