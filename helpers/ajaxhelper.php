<?php
require_once '../classes/Taetigkeit.php';

$taetigkeit = new Taetigkeit();	

$result = "";

//$result = $taetigkeit->show();

if(isset($_POST['einschraenkung_id']))
	{
		
		
		$einschraenkung_id = $_POST['einschraenkung_id'];
		

		
		for($i = 0; $i < count($einschraenkung_id); $i++)
			{
				foreach ($einschraenkung_id as $key => $id)
				{
					
					$result = $taetigkeit->filterByEinschraenkung($id);
					
				} 	
				
			}
				


	}
else
	{
		$result = $taetigkeit->show();
	}
	

echo $result; //echo $result; //returns String


?>