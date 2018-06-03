<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>



<!-- video 12 and 13-->
	<ul>
		<?php foreach ($tasks as $task) : ?>
			
			<li>
				
				<?php if($task->completed) : ?>

					<strike><?=$task->description; ?></strike>

				<?php else: ?>

					<?=$task->description; ?>

				<?php endif; ?>
			</li>

		<?php endforeach; ?>
	</ul>







<!-- ola ta apo katw einai ews to video 11 -->
	<!-- <header>
		<h1><?php

		$name = $_GET['name'];
		$greetings="Hello";
		echo $greetings ." ,      " .$name ;
		?>
	</h1>
	<h1>
		<?= "Hello" .htmlspecialchars($_GET['name']); ?>
	</h1> -->
	<!-- <h1><?= $greetings; ?></h1>
	</header> -->
		<!-- <ul>
		<?php /* foreach ($names as $name){
			echo "<li>$name</li>";}*/?> -->
		
		<!-- <?php foreach($names as $name) : ?>
			<li><?=$name; ?></li>
		<?php endforeach; ?>	 -->
		<!-- </ul> --> 
		
		<!-- <ul>
			<?php foreach ($person as $feature => $value) : ?>
			<li><strong><?=$feature; ?></strong><?=$value; ?></li>
			<?php endforeach; ?>
		</ul> -->
		
		<!-- <h1>Task For The Day</h1>
		<ul>
			<?php foreach ($task as $heading => $value) : ?>
				<li>
					<strong><?= ucwords($heading); ?> :</strong><?=$value; ?>
				</li>
			<?php endforeach; ?>
		</ul> -->
		<!-- <h1>Task For The Day</h1>
		<ul>

			<li>
				<strong>Name: </strong><?= $task['title']; ?>
			</li>
			<li>
				<strong>Due date: </strong><?= $task['due']; ?>
			</li>
			<li>
				<strong>Assing to: </strong><?= $task['asigned to']; ?>
			</li>
			<li>

				<strong>Status: </strong>
				<?php if($task['completed']) : ?>
					
					<span class="icon">&#9989;</span>
				
				<?php endif; ?>
			</li>		

		</ul>
 -->
</body>
</html>