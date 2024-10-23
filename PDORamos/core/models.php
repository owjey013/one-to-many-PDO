
<?php  

function insertChef($pdo, $Chef_Name, $Chef_Specialty) {

	$sql = "INSERT INTO Chef (Chef_Name, Chef_Specialty) VALUES(?,?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Chef_Name, $Chef_Specialty]);

	if ($executeQuery) {
		return true;
	}
}



function updateChef($pdo, $Chef_Name, $Chef_Specialty, $Chef_ID) {

	$sql = "UPDATE Chef
				SET Chef_Name = ?,
					Chef_Specialty = ?
				WHERE Chef_ID = ?
			";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Chef_Name, $Chef_Specialty, $Chef_ID]);
	
	if ($executeQuery) {
		return true;
	}

}


function deleteChef($pdo, $Chef_ID) {
	$deleteChefdi = "DELETE FROM Chef WHERE Chef_ID = ?";
	$deleteStmt = $pdo->prepare($deleteChefdi);
	$executeDeleteQuery = $deleteStmt->execute([$Chef_ID]);

	if ($executeDeleteQuery) {
		$sql = "DELETE FROM Chef WHERE Chef_ID = ?";
		$stmt = $pdo->prepare($sql);
		$executeQuery = $stmt->execute([$Chef_ID]);

		if ($executeQuery) {
			return true;
		}

	}
	
}




function getAllChef($pdo) {
	$sql = "SELECT * FROM Chef";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getChefByID($pdo, $Chef_ID) {
	$sql = "SELECT * FROM Chef WHERE Chef_ID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Chef_ID]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}





function getDishesByChef($pdo, $Chef_ID) {
	
	$sql = "SELECT 
				Dishes.Dishes_ID AS Dishes_ID,
				Dishes.Dishes_Menu AS Dishes_Menu,
				Dishes.Dishes_Cost AS Dishes_Cost,
				Dishes.date_added AS date_added,
				Chef.Chef_Name AS Dishes_Maker
			FROM Dishes
			JOIN Chef ON Dishes.Chef_ID = Chef.Chef_ID
			WHERE Dishes.Chef_ID = ? 
			GROUP BY Dishes.Dishes_Menu;
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Chef_ID]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}


function insertDishes($pdo, $Dishes_Menu, $Dishes_Cost, $Chef_ID) {
	$sql = "INSERT INTO Dishes (Dishes_Menu, Dishes_Cost, Chef_ID) VALUES (?,?,?)";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Dishes_Menu, $Dishes_Cost, $Chef_ID]);
	if ($executeQuery) {
		return true;
	}

}

function getDishesByID($pdo, $Dishes_ID) {
	$sql = "SELECT 
				Dishes.Dishes_ID AS Dishes_ID,
				Dishes.Dishes_Menu AS Dishes_Menu,
				Dishes.Dishes_Cost AS Dishes_Cost,
				Dishes.date_added AS date_added,
				Chef.Chef_Name AS Dishes_Maker
			FROM Dishes
			JOIN Chef ON Dishes.Chef_ID = Chef.Chef_ID
			WHERE Dishes.Dishes_ID  = ? 
			GROUP BY Dishes.Dishes_Menu";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Dishes_ID]);
	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function updateDishes($pdo, $Dishes_Menu, $Dishes_Cost, $Dishes_ID) {
	$sql = "UPDATE Dishes
			SET Dishes_Menu = ?,
				Dishes_Cost = ?
			WHERE Dishes_ID = ?
			";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Dishes_Menu, $Dishes_Cost, $Dishes_ID]);

	if ($executeQuery) {
		return true;
	}
}

function deleteDishes($pdo, $Dishes_ID) {
	$sql = "DELETE FROM Dishes WHERE Dishes_ID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$Dishes_ID]);
	if ($executeQuery) {
		return true;
	}
}




?>