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
		
		if($input::exists('post'))
			{
				$query = "SELECT * FROM `einschraenkungen`";
				$this->_results = $this->_db->select($query);
				
				echo "<div class='checkbox-wrapper'>";
				echo "<form class='einschraenkungen' method='post' action='../results.php' accept-charset='utf-8'>";
				
				while($row = $this->_results->fetch_assoc()) : ?>
							
							<label for="einschraenkung1">
							<input type="checkbox" name="einschraenkung" value="1" id="<?php echo $row['id']; ?>">
							<?php echo $row['name']; ?>
							</label>
							
				<?php endwhile; 
						
				echo "</form>";	
				echo "</div>";	
			
					
			}
		
		

		
	}

}
	
?>