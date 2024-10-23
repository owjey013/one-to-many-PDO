<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="viewDishes.php?Chef_ID=<?php echo $_GET['Chef_ID']; ?>">
	View The Dishes</a>
	<h1>Edit the Dishes!</h1>
	<?php $getDishesByID = getDishesByID($pdo, $_GET['Dishes_ID']); ?>
	<form action="core/handleForms.php?Dishes_ID=<?php echo $_GET['Dishes_ID']; ?>
	&Chef_ID=<?php echo $_GET['Chef_ID']; ?>" method="POST">
		<p>
			<label for="firstName">Dishes Menu</label> 
			<input type="text" name="Dishes_Menu" 
			value="<?php echo $getDishesByID['Dishes_Menu']; ?>">
		</p>
		<p>
			<label for="firstName">Dishes Cost</label> 
			<input type="text" name="Dishes_Cost" 
			value="<?php echo $getDishesByID['Dishes_Cost']; ?>">
			<input type="submit" name="editCBtn">
		</p>
	</form>
</body>
</html>