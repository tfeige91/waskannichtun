<?php

require_once 'DB.php';
require_once 'Input.php';

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
					 	echo "<h3 class='taetigkeit".$row['id']."'>" .$row['name']. "</h3><div class='taetigkeit".$row['id']."'>". $row['inhalt'] . "</div>";
					 	
					}
				echo "</div>";
				echo "</div>";

			}
		
	}
	
	public function filterByEinschraenkung($where){
		
		if($this->_input->exists('post'))
			{					
				
					{
					
						$query = "SELECT `id_taetigkeit` FROM taetigkeit_einschraenkung WHERE id_einschraenkung = {$where}";
						$this->_results = $this->_db->select($query);
						if($this->_results)
							{
								while($row = $this->_results->fetch_assoc())
								{
									echo "taetigkeit".$row['id_taetigkeit']."clu";
								
								}	
							}
						else
							{
								return false;
							}	
					
					}
					
				
				
			}
		
	}
	
	
	
	
	
}	
?>