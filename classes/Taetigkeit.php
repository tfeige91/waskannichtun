<?php

class Taetigkeit{
	
	//properties
	
	private $_db = null;
	public $_results;
	
	public $test = 4;
	
	//methods
	
	public function __construct (){
		$this->_db = new DB();
	}
	
	public function show (){
		
		$input = new Input();
		
		if($input::exists('get'))
		
		echo $test;
			{
				$query = "SELECT * FROM `taetigkeiten`";
				$this->_results = $this->_db->select($query);
				 
				echo "<div class='ergebnis-wrapper'>";
				 
				while($row = $this->_results->fetch_assoc())
				 	{
					 	echo $row['name']. "<br><br>". $row['inhalt'] . "<br><br>";
					 	
					}
				echo "</div>";

			}
		
	}
	
	
	
	
	
}	
?>