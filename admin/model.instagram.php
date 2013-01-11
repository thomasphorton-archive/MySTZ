<?
session_start();

include_once 'admin.includes/admin.header.php';

include_once '../libraries/instagram/Instagram.php';

$config = array( 
        'site_url' => 'https://api.instagram.com/oauth/access_token', 
        'client_id' => '535c248a286d4dc2ae6c72b649d54031', // Your client id 
        'client_secret' => '16dd265b00e849c6a97770ab1b88227d', // Your client secret 
        'grant_type' => 'authorization_code', 
        'redirect_uri' => 'http://thomasphorton.com/stz/admin/model.instagram.php', // The redirect URI you provided when signed up for the service 
     ); 
     
$instagram = new Instagram($config);     
     
$targetTagJson = $instagram->getRecentTags('stzlife');     

$targetTag = json_decode($targetTagJson, true);

//var_dump($targetTag);

foreach ($targetTag['data'] as $data){

	$id = $data['id'];
	$username = $data['user']['username'];
	$url = $data['images']['thumbnail']['url'];
	$hashtag = $data['tags'];

	echo '<p>'.$id.'<br>'.$username.'<br>'.$url.'</p>';

	//$sql = "UPDATE instagram SET ;
            $q   = $pdo->prepare($sql);
            $q->execute(array(
                $id,
                $username,
                $url
                ));
    }

include_once 'admin.includes/admin.footer.php';
?>