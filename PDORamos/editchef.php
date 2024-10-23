<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getChefByID = getChefByID($pdo, $_GET['Chef_ID']); ?>
	<h1>Edit the Chef!</h1>
	<form action="core/handleForms.php?Chef_ID=<?php echo $_GET['Chef_ID']; ?>" method="POST">
		<p>
			<label for="Chef_Name">Chef Name</label> 
			<input type="text" name="Chef_Name" value="<?php echo $getChefByID['Chef_Name']; ?>">
		</p>
		<p>
			<label for="Chef_Specialty">Chef Specialty</label> 
			<input type="text" name="Chef_Specialty" value="<?php echo $getChefByID['Chef_Specialty']; ?>">
		</p>
			<input type="submit" name="editCBtn">
		</p>
	</form>
</body>
</html>