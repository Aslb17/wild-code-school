<?php session_start(); 
require('controller/frontend.php');

if (isset($_GET['action'])) {
    	if  ($_GET['action'] == 'newMember')  {
			if (!empty($_POST['name'])) {
				addMember($_POST['name']);
			    }
			else {
				echo 'Erreur : tu as oublié d\'écrire un nom !';
				echo $_POST['name'];
			    }
		}
	else {
		echo 'Erreur';
	}
}
else {
    listMembers();
}