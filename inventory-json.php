<?

// $line = $_POST['line'];

// $line = '\*';

// $db = new PDO('mysql:host=localhost;dbname=mystz;charset=utf8', 'root', 'root');

// $sql = 'SELECT * FROM inventory WHERE line=:line';
// // $sql = 'SELECT * FROM inventory';

// $foo = $db->prepare($sql);
// $foo->execute(array(
//     ':line' => $line
//   ));
// // $foo->execute();

// $results = $foo->fetchAll(PDO::FETCH_ASSOC);

// $json = json_encode($results);

// echo $json;

include 'inventory.php';

echo json_encode($inventory);

?>