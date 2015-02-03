<?php

require_once 'core/init.php';

$db = new DB();
$row = array();
$search = "";
$list = new Taetigkeit();



?>

<?php include_once('includes/header.php'); ?>

<body>
	
<?php include_once('includes/topbar.php'); ?>
	
	<div class="container">
		
		<?php include_once('includes/searchform.php'); ?>
		
			
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
	
	</div>
	
</body>
	