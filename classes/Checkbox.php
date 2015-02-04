<?php
	
class Checkbox{

	//properties
	
	private $_db = null;
	public $_results;
	public $_input;

	public $test = 4;
	
	//methods
	
	public function __construct (){
		$this->_db = new DB();
		$this->_input = new Input();

	}
	
	public function getEinschraenkungen(){
		
		$input = new Input();
		
		if($input::exists('get'))
			{
				$query = "SELECT * FROM `einschraenkungen` Order by `id` ASC";
				$this->_results = $this->_db->select($query);
				
				echo "<div class='checkbox-wrapper'>";
				echo "<form class='einschraenkungen' method='post' action='../results.php' accept-charset='utf-8'>";
				
				while($row = $this->_results->fetch_assoc()) 
					{
							echo"<label for='".$row['id']."'><input type='checkbox' id='".$row['id']."' value='1' name='" .$row['id']."'>"
							.$row['name']."</label>";
					}		 
						
				echo "</form>";	
				echo "</div>";	
			}
					
	}
		
		

		
	
}
	
?>