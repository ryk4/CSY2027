	



<?php
function top($name,$cssFile){
	echo'<!DOCTYPE html><html>
		<head><link rel="stylesheet" href="'.$cssFile.'" /><title>'.$name.'</title>
		</head>
	<body>';
	
	
}

function makeHeader(){
	echo('<header>
		<div id="nav">	
			<ul>
				<p1> Charity Web </p1>
				<img class="logo" src="images/hand220.png" alt="charityLogo"> 
				<li><a href="#">Get involved</a></li>
				<li><a href="#">Donate</a></li>
				<li><a href="#">What we do</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
		
	</header>
	');
	
}




function bottom2(){
	
	echo'</main><footer>Copyright 2016</footer>
	
		</body>
	</html>';
}







function html($type,$name){
	
		return'<'.$type.'>'.$name.'</'.$type.'>';
	
}

$server = '192.168.56.2';//this is the server that we use connect to DB
$username = 'student';
$password = 'student';
$schema = 'assignment1';//name of database

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
	
	
$categories = $pdo->query('SELECT * FROM categories');
$jobs = $pdo->query('SELECT * FROM jobs');

	



?>	
	