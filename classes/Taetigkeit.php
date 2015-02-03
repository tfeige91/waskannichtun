<?php

class Taetigkeit{
	
	//properties
	
	private $_db = null;
	public $_input;
	public $_results;
	public $test = 4;
	
	//methods
	
	public function __construct (){
		$this->_db = new DB();
		$this->_input = new Input();
	}
	
	public function show (){
		
		if($this->_input->exists('get'))
		
			{
				$query = "SELECT * FROM `taetigkeiten`";
				$this->_results = $this->_db->select($query);
				 
				echo "<div class='ergebnis-wrapper'>";
				echo "<div id='accordion'>";
				 
				while($row = $this->_results->fetch_assoc())
				 	{
					 	echo "<h3>" .$row['name']. "</h3><div>". $row['inhalt'] . "</div>";
					 	
					}
				echo "</div>";
				echo "</div>";

			}
		
	}
	
	
	
	
	
}	
?>