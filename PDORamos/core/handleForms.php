<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertCBtn'])) {

	$query = insertChef($pdo,  $_POST['Chef_Name'],  $_POST['Chef_Specialty'], );

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}


if (isset($_POST['editCBtn'])) {
	$query = updateChef($pdo,  $_POST['Chef_Name'],  $_POST['Chef_Specialty'], $_GET['Chef_ID']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Edit failed";;
	}

}




if (isset($_POST['deleteCBtn'])) {
	$query = deleteChef($pdo, $_GET['Chef_ID']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Deletion failed";
	}
}




if (isset($_POST['insertNewCBtn'])) {
	$query = insertDishes($pdo, $_POST['Dishes_Menu'], $_POST['Dishes_Cost'], $_GET['Chef_ID']);

	if ($query) {
		header("Location: ../viewdishes.php?Chef_ID=" .$_GET['Chef_ID']);
	}
	else {
		echo "Insertion failed";
	}
}




if (isset($_POST['editCBtn'])) {
	$query = updateDishes($pdo, $_POST['Dishes_Menu'], $_POST['Dishes_Cost'], $_GET['Dishes_ID']);

	if ($query) {
		header("Location: ../viewdishes.php?Chef_ID=" .$_GET['Chef_ID']);
	}
	else {
		echo "Update failed";
	}

}




if (isset($_POST['deleteCBtn'])) {
	$query = deleteDishes($pdo, $_GET['Dishes_ID']);

	if ($query) {
		header("Location: ../viewdishes.php?Chef_ID=" .$_GET['Chef_ID']);
	}
	else {
		echo "Deletion failed";
	}
}




?>