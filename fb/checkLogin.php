<?

  $data = ($_POST['data']);

  $pdo = new PDO("mysql:host=inkfinity.powwebmysql.com;dbname=mystz", 'tclark', 'clarkquint12');

  $id = $data['id'];

  $sql = "SELECT * from users";
  $q = $pdo->prepare($sql);
  $q = ->execute();

  var_dump($pdo);

//  $sql = "INSERT INTO users (fb_id) VALUES (:id)";
//  $q = $pdo->prepare($sql);
//  $q->execute(array(':id'=>$id));

?>