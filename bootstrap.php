<?php
//video 14
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// $pdo=Connection::make();              //**autes oi
// $query = new QueryBuilder($pdo); 	//**duo grammes einai idies

return new QueryBuilder(Connection::make()); //**me auto edw
?>