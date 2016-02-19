<?php
require 'functions.php';

session_start();

top('JobsForU','style.css');

makeHeader();


chooseNavBar();



	

	


	

if (isset($_POST['SubmitPassword'])) {
	
	$name = $_POST['loginID'];
	$pass = $_POST['password'];

	
	
	$users22 = $pdo->query('SELECT * FROM users WHERE loginID="'.$name.'"');
	if( empty( $users22)){
		echo('Sorry mate!');
	}
	else{
	
		foreach($users22 as $s){
			
			if($name!=''&&$pass==$s['password']){
				$_SESSION['loggedin'] = true;
				echo html('p','Your are now logged in as <u>'.$s['firstname'].' '.$s['surname'].'</u>');
				echo html('p','Restart to see changes!');
			}
		
		}		
	}
		
}
	
else{
	echo('

		<form action="login.php" method="POST" class="myForm">
			Login ID:<input type="text" name="loginID"><br>
			Password:<input type="password" name="password"><br>
			Login:<input type="submit" name="SubmitPassword"><br>
		</form>');	
			
}	





bottom2();

?>