<?php

function dd($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

function checkage($age){
	if($age>=21){
		echo 'You can pass';
	}else{
		echo "You aren't permited to pass";
	}
}
//video 13
// function connectToDb(){
// 	try{

// 	return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','root');

// 	} catch(PDOException $e){

// 		die($e->getMessage());

// 	}
// }
//video 13
// function fetchAllTasks($pdo){

// 	$statement=$pdo->prepare('select * from todos');

// 	$statement->execute();

// 	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
// }

?>