<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Food Store</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Welcome to Foodtripan ni Owjey. Add new Chef!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="Chef_Name">Chef Name</label> 
			<input type="text" name="Chef Name">
		</p>
		<p>
			<label for="Chef_Specialty">Chef Specialty</label> 
			<input type="text" name="Chef_Specialty">

			<input type="submit" name="insertCBtn">
		</p>


		
	</form>
	<?php $getAllChef  = getAllChef ($pdo); ?>
	<?php foreach ($getAllChef  as $row) { ?>
		<div class="container" style="border-style: solid;  margin-left: -1px; ">
		<h3>Chef Name: <?php echo $row['Chef_Name']; ?></h3>
		<h3>Chef Specialty: <?php echo $row['Chef_Specialty']; ?></h3>
		<h3>Date Added: <?php echo $row['date_added']; ?></h3>


		<div class="editAndDelete">
			<a href="viewDishes.php?Chef_ID=<?php echo $row['Chef_ID']; ?>">View Dishes</a>
			<a href="editChef.php?Chef_ID=<?php echo $row['Chef_ID']; ?>">Edit</a>
			<a href="deleteChef.php?Chef_ID=<?php echo $row['Chef_ID']; ?>">Delete</a>

			
		


	
	<?php } ?>
</body>
</html>