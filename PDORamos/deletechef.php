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
	<h1>Are you sure you want to delete this Chef?</h1>
	<?php $getChefByID = getChefByID($pdo, $_GET['Chef_ID']); ?>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Chef Name: <?php echo $getChefByID['Chef_Name']; ?></h2>
		<h2>Chef Specialty: <?php echo $getChefByID['Chef_Specialty']; ?></h2>
		

		<div class="deleteCBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?Chef_ID=<?php echo $_GET['Chef_ID']; ?>" method="POST">
				<input type="submit" name="deleteCBtn" value="Delete">
			</form>			
		</div>	

	</div>
</body>
</html>