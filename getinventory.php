<?
	include 'inc.header.html.php';
	include 'inc.header.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/shirtmaker.css" />
<link rel="stylesheet" href="libraries/flexslider/flexslider.css" type="text/css" />
<script src="libraries/jquery.js"></script>
<script src="libraries/flexslider/jquery.flexslider.js"></script>  
<script type="text/javascript">
	$(document).ready(function() {
			page = $('#pageWrapper')
	
	    function getContent(filename) {
	    inventory = $.ajax({
	        url: filename,
	        type: 'GET',
	        dataType: 'json',
	        beforeSend: function() {
	            
	        },
	        success: function(data, textStatus, xhr) {
		        	//console.log(data);
		        	showInventory(data);
		        	
	        },
	        error: function (xhr, textStatus, errorThrown) {
	            console.log('something failed');
	        }
	    });
	  };
	  
	  getContent('inventory.php');
	  console.log(inventory);
	  
	  var i = 0;
	  
	  function showInventory(inventory){
	  		
	  }
  });
  
  
</script>

<div id="pageWrapper">
</div>

<? 
	include 'inc.footer.php';
?>