<?php session_start();
	include_once 'admin.includes/admin.header.php';
	if (isset($_SESSION['user_name'])) {

	$artist_ID = $_POST['artistID'];
	$artist_name = $_POST['artistName'];
	$facebook_URL = $_POST['facebookURL'];
	$twitter_URL = $_POST['twitterURL'];
	$youtube_URL = $_POST['youtubeURL'];
	$soundcloud_URL = $_POST['soundcloudURL'];
	$hypem_URL = $_POST['hypemURL'];
	$back_pic_URL = $_POST['backPicURL'];
	$bio = $_POST['bio'];
	$hidden = $_POST['hidden'];

	if ($hidden ==1){
		$hide_flag =1;
	}
	else{
		$hide_flag=0;
	}
	
	if ($_FILES["frontPic"]["name"]!=""){
		if ($_FILES["frontPic"]["error"] > 0) {
			echo "Error: " . $_FILES["frontPic"]["error"] . "<br />";
		}
		else
		{
			$front_ext = end(explode('.', $_FILES["frontPic"]['name']));
			$target = "../images/";
			$target .= $artist_name.'_front.'.$ext;
			echo $target;
			if(move_uploaded_file($_FILES["frontPic"]["tmp_name"],$target))
			{
				echo "The file ". basename($_FILES['frontPic']['name']). " has been uploaded";
				$front_pic_URL = $artist_name.'_front.'.$ext;
			}
		}
	}
		
	if ($_FILES["backPic"]["name"]!=""){
		if ($_FILES["backPic"]["error"] > 0) {
			echo "Error: " . $_FILES["backPic"]["error"] . "<br />";
		}
		else
		{
			$back_ext = end(explode('.', $_FILES["backPic"]['name']));
			$target = "../images/";
			$target .= $artist_name.'_back.'.$back_ext;
			echo $target;
			if(move_uploaded_file($_FILES["backPic"]["tmp_name"],$target))
			{
				echo "The file ". basename($_FILES['backPic']['name']). " has been uploaded";
				$back_pic_URL = $artist_name.'_back.'.$ext;
			}
		}
	}
		
	$front_pic_URL = $artist_name.'_front.'.$front_ext;
	$back_pic_URL = $artist_name.'_back.'.$back_ext;
	
	
	$sql = "UPDATE roster SET artist_name=?, facebook_url=?, twitter_url=?, youtube_url=?, soundcloud_url=?, hypem_url=?, back_pic_url=?, front_pic_url=?, bio=?, hidden=? WHERE artist_ID=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($artist_name,$facebook_URL,$twitter_URL,$youtube_URL,$soundcloud_URL,$hypem_URL,$back_pic_URL,$front_pic_URL,$bio,$hide_flag,$artist_ID));
	
?>
	<div id=wrapper>
		<p>
			<?=$artist_name;?>'s information has been updated.
		</p>
		
		<p>
			<a href="model.edit.record.php?artist_id=<?=$artist_ID;?>">Edit <?=$artist_name;?>'s information again</a>
		</p>
		
		<p>
			<a href="index.php">Back to Admin Panel</a>
		</p>
		
		<p>
			<a href="../index.php">View Roster Site</a>
		</p>
	</div>


<?
}
else{
	include 'please.log.in.php';
}
	include_once 'admin.includes/admin.footer.php';
?>