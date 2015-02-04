//accordion slider


$(function() {
    $( "#accordion" ).accordion({
      collapsible: true,
      active: false,
      heightStyle: "content"
    });
  });
  



//AJAX Checkboxes

	//Eventlistener

$("document").ready(function() {
	$(".einschraenkungen :checkbox").change(function(){
		
		var id = this.id;
		
		/*
		var selected = [];
		var checkboxes = $(".einschraenkungen :checkbox");
		
		
		for (var i=0; i<checkboxes.length; i++) 
			{
				if (checkboxes[i].checked) 
					{
						selected.push(checkboxes[i].id);
    				}
			}
		*/
	
		if(this.checked) //delete
			{		
				$.ajax({
					type: 'POST',
					url: "helpers/ajaxhelper.php",
					data: {einschraenkung_id : id},
					success:(function(ID){
						var trimID = ID.trim();
						var filteredTaetigkeiten =  trimID.split("clu");
						
						
						filteredTaetigkeiten.forEach(function(taetigkeit){
							$("."+taetigkeit).addClass('hidden');
						});
					})	
				});
				
					
			}
		else //bring back
			{
					
				$.ajax({
					type: 'POST',
					url: "helpers/ajaxhelper.php",
					data: {einschraenkung_id : id},
					success:(function(ID){
						var trimID = ID.trim();
						var filteredTaetigkeiten =  trimID.split("clu");
						
						
						filteredTaetigkeiten.forEach(function(taetigkeit){
							$("."+taetigkeit).removeClass('hidden');
						});
					})	
				});
			}	
	});
});



/*
$("document").ready(function() {
	$(".einschraenkungen :checkbox").change(function(){
		if(this.checked)
			{
				$(".taetigkeit1").addClass('hidden');
			}
		else
			{
				if($(".taetigkeit1").hasClass('hidden'))
					{
						$(".taetigkeit1").removeClass('hidden');
					}
			}	
	});
});







if(this.checked) //delete
			{		
				$.ajax({
					type: 'POST',
					url: "helpers/ajaxhelper.php",
					data: {einschraenkung_id : selected},
					success:(function(ID){
						var trimID = ID.trim();
						var filteredTaetigkeiten =  trimID.split("clu");
						
						
						filteredTaetigkeiten.forEach(function(taetigkeit){
							$("."+taetigkeit).addClass('hidden');
						});
					})	
				});
				
					
			}
		else //bring back
			{
					
				$.ajax({
					type: 'POST',
					url: "helpers/ajaxhelper.php",
					data: {einschraenkung_id : selected},
					success:(function(ID){
						var trimID = ID.trim();
						var filteredTaetigkeiten =  trimID.split("clu");
						
						
						filteredTaetigkeiten.forEach(function(taetigkeit){
							$("."+taetigkeit).removeClass('hidden');
						});
					})	
				});
			}




*/