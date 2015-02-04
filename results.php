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
		
		<div class="body-wrapper">
			<form class="searchform" action="results.php" method="get" accept-charset="utf-8">
				<div class="searchbar">
				<input id="search" type="search" name="search" placeholder="mein Beruf" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>" onclick="this.value =''">				
				<button class="magnify hidden" type="submit"></button>
				</div>
			</form>
		</div>
		
		
	<?php include_once('includes/checkboxes.php'); ?>	
		
		<!--
		
		<div class="checkbox-wrapper">
		
			<form class="einschraenkungen" method="post" action="results.php" accept-charset="utf-8">
				<label for="einschraenkung1">
				<input type="checkbox" name="einschraenkung" value="1" id="einschraenkung1">
				Keine schweren Lasten
				</label>
				
				<label for="einschraenkung2">
				<input type="checkbox" name="einschraenkung" value="1" id="einschraenkung2">
				Wechsel: Stehen/Gehen/Sitzen
				</label>
				
				<label for="einschraenkung3">
				<input type="checkbox" name="einschraenkung" value="1" id="einschraenkung3">
				Kein über Kopf arbeiten
				</label>
				
				<label for="einschraenkung4">
				<input type="checkbox" name="einschraenkung" value="1" id="einschraenkung4">
				Keine Zwangshaltungen (bspw. dauerhaftes Bücken)
				</label>
				
				<label for="einschraenkung5">
				<input type="checkbox" name="einschraenkung" value="1" id="einschraenkung5">
				keine Nässe/Kälte
				</label>
				
				<label for="einschraenkung6">
				<input type="checkbox" name="einschraenkung" value="1" id="einschraenkung6">
				keine Schichtarbeit
				</label>
			</form>	
		
		</div>	
			
		-->	
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
	