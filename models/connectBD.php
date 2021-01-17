 <?php
 	function connectaBD(){
	$servidor = "localhost"; 
	$usuari = "tdiw-i5"; 
	$clau = "NoG6U4Sd";
	
	try{
		$connexio = new PDO("mysql:host=$servidor;dbname=tdiwi5;charset=UTF8", $usuari, $clau); $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //obliga a llançar excepcions $consulta = $connexio->prepare("SELECT camp1, camp2, camp3 FROM taula");
		
	}catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}

	return($connexio);
}
?>
