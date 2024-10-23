<?php require_once 'core/dbConfig.php'; ?>
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
	<?php $getDishesByID = getDishesByID($pdo, $_GET['Dishes_ID']); ?>
	<h1>Are you sure you want to delete this Dishes from the Menu?</h1>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Dishes Menu: <?php echo $getDishesByID['Dishes_Menu'] ?></h2>
		<h2>Dishes Cost: <?php echo $getDishesByID['Dishes_Cost'] ?></h2>
		<h2>Dishes Maker: <?php echo $getDishesByID['Dishes_Maker'] ?></h2>
		<h2>Date Added: <?php echo $getDishesByID['date_added'] ?></h2>

		<div class="deleteCBtn" style="float: right; margin-right: 10px;">

			<form action="core/handleForms.php?Dishes_ID=<?php echo $_GET['Dishes_ID']; ?>&Chef_ID=<?php echo $_GET['Chef_ID']; ?>" method="POST">
				<input type="submit" name="deleteCBtn" value="Delete">
			</form>			
			
		</div>	

	</div>
</body>
</html>