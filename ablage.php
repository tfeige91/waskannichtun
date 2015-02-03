<?php
				
				if(isset($_GET['search']))
					{
						
						$list->show();
					}
				else
					{
						return false;
					}
				
				 
				 
				 ?>
				 
				 
				 
				 
				 
				 
	<?php
				
				if(isset($_GET['search']))
					{
						$query = "SELECT * FROM beruf WHERE `name` = '" .($_GET['search']). "'";
				
						$results = $db->select($query);
				
						$row = $results->fetch_assoc();
						
						$query_n = "SELECT * FROM taetigkeiten WHERE `familie` = '" .($row['familie']). "'";
						
						$results_n = $db->select($query_n);
						
						$row_n = $results_n->fetch_assoc();
						
						echo "<div class='ergebnis-wrapper'>";
						
						
						echo $row_n['name'];
						
						echo "<br><br>";
						
						echo $row['familie']; 
						
						echo "<br><br>";
						
						echo $row_n['inhalt'];
						
						echo "</div>";
					}
				else
					{
						return false;
					}
				
				 
				 
				 ?>
			
			 