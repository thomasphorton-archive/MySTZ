<?

	include('../inventory.php');
	
	$data = $_POST['data'];
	
	$response = array();
	
	foreach($data as $item){
		foreach($inventory as $inventory_item){
			if ($item == $inventory_item['id']){
				$response[] = $inventory_item['basePrice'];	
			}
		}
	}
	
	echo json_encode($response);

?>