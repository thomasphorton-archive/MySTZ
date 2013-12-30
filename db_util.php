<?

include 'inventory.php';

$db = new PDO('mysql:host=localhost;dbname=mystz;charset=utf8', 'root', 'root');

$sql = "INSERT INTO inventory (line,title,base_price,description,small_description,image_name,options) VALUES (:line,:title,:base_price,:description,:small_description,:image_name,:options)";

foreach ($inventory as $product) {

  if ($product['line']) {
    $line = $product['line'];
  } else {
    $line = '';
  }

  if ($product['title']) {
    $title = $product['title'];
  } else {
    $title = '';
  }

  if ($product['basePrice']) {
    $price = $product['basePrice'];
  } else {
    $price = '';
  }

  if ($product['description']) {
    $desc = $product['description'];
  } else {
    $desc = '';
  }

  if ($product['small_description']) {
    $small_desc = $product['small_description'];
  } else {
    $small_desc = '';
  }

  if ($product['images']['thumb']) {
    $img = $product['images']['thumb'];
  } else {
    $img = '';
  }

  echo 'Line: ' . $line . '<br>';
  echo 'Title: ' . $title . '<br>';
  echo 'Base Price: ' . $price . '<br>';
  echo 'Description: ' . $desc . '<br>';
  echo 'Small Description: ' . $small_desc . '<br>';
  echo 'Image Name: ' . $img . '<br>';
  echo 'Options: ' . json_encode($product['options']) . '<br>';
  echo '<br>';
  
  $foo = $db->prepare($sql);
  $foo->execute(array(':line'=>$line,
                    ':title'=>$title,
                    ':base_price'=>$price,
                    ':description'=>$desc,
                    ':small_description'=>$small_desc,
                    ':image_name'=>$img,
                    ':options'=>json_encode($product['options'])
                    ));
}

?>