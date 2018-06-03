<?php 

//video 14
class Connection{
	
	public static function make(){
		try{

	return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','root');

	} catch(PDOException $e){

		die($e->getMessage());

	}

	}
}

// $connection = new Connection();
// $connection->make();//otan mia class einai public etsi kaloume mia function ths

//Connection::make(); //otan mia class einai public static etsi kaloume mia function
				   //(*den xreiazetai dhmiourgia antikeimenou me new) 

?>