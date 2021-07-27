<?php

//Connect to Database
$database = new Database;
$db = $database->connectToDb();

//Get all table
$statement = $db->prepare("SELECT * FROM trashcan ORDER BY Start_Time");
$statement->execute();
$list = $statement->fetchAll( PDO::FETCH_OBJ);

//Today variable
$Today = getdate()['weekday'];

//Get daily trash
$dailyTrash = $db->prepare("SELECT * FROM trashcan WHERE Day = '".$Today."';");
$dailyTrash->execute();
$DT = $dailyTrash->fetchAll(PDO::FETCH_OBJ);
