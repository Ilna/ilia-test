<?php

//video 14
$query = require 'bootstrap.php';
// require 'database/Connection.php';
// require 'database/QueryBuilder.php';
// require 'functions.php';
// require 'Task.php';


//  $pdo=Connection::make();

// $query = new QueryBuilder($pdo);

$tasks = $query->selectAll("todos");


//video 13
// $pdo=connectToDb();

// $tasks=fetchAllTasks($pdo);

// var_dump($results[0]->description);

// var_dump($tasks[3]->foobar());

//video 12

// class Task{

// 	public $description;
// 	public $completed=false;
	
// 	public function __construct($description)
// 	{
// 		$this->description=$description;
// 	}

// 	public function complete(){

// 		return $this->completed=true;
// 	}


// 	public function isCompleted(){

// 		return $this->completed;
// 	}


// }

// $task = new Task('Go to my class'); //a new task object

// $task->completed();//complete the task

// dd($task);
// 

// $tasks =[

// 	new Task('Go to my class'),
// 	new Task('Date Chris'),
// 	new Task('Go to a roadtrip')

// ];

// $tasks[1]->complete();




//ola ta apo katw einai ews to video 11

// $animals =['dog','cat'];

// dd($animals);


// $clientage= 21;
// checkage($clientage);

//$greetings="Hello, World";

// $names = [
// 	'Ilia',
// 	'Mary',
// 	'Megi'
// 	];
// $person =[
// 	'age' => 22,
// 	'hair' => 'blonde',
// 	'career' => 'university student'
// ];
	
// $person['name']='Ilia';
// unset($person['age']);


// die(var_dump($person));

// echo $person['age'];

// $task=[
// 	'title' => '123',
// 	'due' => 'today',
// 	'asigned to' => 'Ilia',
// 	'complieted' => true
// ];

require 'index.view.php';


?>