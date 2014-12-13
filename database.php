<?php


//Crea un paciente
function insert_patient($patient_name,$patient_surname,$nhc){

	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "silverskin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql="INSERT INTO paciente (`Nombre`, `Apellido`, `nhc`, `id`) VALUES ('".$patient_name."', '".$patient_surname."', '".$nhc."', NULL);";

	$result = $conn->query($sql);
	if ($conn->query($sql) === TRUE) {	
		return 0;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		return -1;
	}

	$conn->close();
}



function id_patient_name($patient_name,$patient_surname){
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "silverskin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
} 

	$sql="SELECT id FROM `paciente` WHERE `Nombre`='".$patient_name."' AND `Apellido`='".$patient_surname."';";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc(); 
		return $row["id"];
		
	} else {
		return -1;
	}
	$conn->close();


}

function id_patient_nhc($nhc){

	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "silverskin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
} 

	$sql="SELECT id FROM `paciente` WHERE `nhc`='".$nhc."';";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc(); 
		return $row["id"];
		
	} else {
		return -1;
	}
	$conn->close();



}

function insert_study($patient_id,$study_uid){


	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "silverskin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
    $sql="INSERT INTO study (`id`, `Study_UID`, `patient_id`) VALUES (NULL, '".$study_uid."', ".$patient_id.");";

	$result = $conn->query($sql);
	if ($conn->query($sql) === TRUE) {	
		return 0;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		return -1;
	}

	$conn->close();

}

function insert_serie($patient_id,$study_uid,$serie_uid,$modalidad){

	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "silverskin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
    $sql="INSERT INTO serie (`id`, `Serie_UID`, `patient_id`,`modalidad`) VALUES (NULL, '".$serie_uid."', ".$patient_id.",'".$modalidad."');";

	$result = $conn->query($sql);
	if ($conn->query($sql) === TRUE) {	
		return 0;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		return -1;
	}

	$conn->close();
}

function id_cita(){

$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "silverskin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

$sql="INSERT INTO id_cita (id) values (NULL)";
	$result = $conn->query($sql);

    $id=$conn->insert_id;
	$conn->close();
  return $id;

}

//insert_patient("Mike","McFlurrin",12313);
//echo id_patient_name("Mike","McFlurrin");
//echo id_patient_nhc(12313);
//echo insert_study(2,"123.45.324432.34");
//echo insert_serie();
echo id_cita();
?>
