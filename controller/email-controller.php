<?php  

require 'db.php';

if (isset($_POST['send'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$massage = $_POST['massage'];

	$sql = "INSERT INTO sendbox (`name`, `email`, `massage`) VALUES ('$name', '$email', '$massage')";
	$query = $conn->query($sql);
	if ($query == TRUE) {
		header('Location: ../contact.php?success=Massage send successfully');
	}else{
		header('Location: ../contact.php?error=Massage send is failed!');
	}
}



?>