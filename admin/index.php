<?
session_start();

include_once 'admin.includes/admin.header.php';

function dbclean($str)
{
    return $str;
}
if (isset($_SESSION['user_name'])) {
?>
<div id=wrapper class=clearfix>
	<ul class="adminPanel clearfix">
		<a href="inventory.admin.php"><li class="adminItem clearfix">Edit Inventory</li></a>
		<a href="https://api.instagram.com/oauth/authorize/?client_id=535c248a286d4dc2ae6c72b649d54031&redirect_uri=http://thomasphorton.com/stz/admin/model.instagram.php&response_type=code"><li class="adminItem clearfix">Instagram Tools</li></a>
		<a href="/"><li class="adminItem clearfix"></li></a>
	</ul>
</div>
<?
} else {
    $error = $user = $pass = "";
    
    if (isset($_POST['user'])) {
        $user = dbclean($_POST['user']);
        $pass = hash('sha256', dbclean($_POST['pass']));
        
        if ($user == "" || $pass == "") {
            $error = "Not all fields were entered<br />";
        } else {
            $sql = "SELECT COUNT(*) FROM users WHERE user_name=? and hashed_pass=?";
            $q   = $pdo->prepare($sql);
            $q->execute(array(
                $user,
                $pass
            ));
            
            $success = (bool) $q->fetchColumn(0);
            if ($success) {
?>	
			
				<div id=wrapper class=clearfix>
					<ul class="adminPanel clearfix">
						<a href="inventory.admin.php"><li class="adminItem clearfix">Edit Inventory</li></a>
						<a href="https://api.instagram.com/oauth/authorize/?client_id=535c248a286d4dc2ae6c72b649d54031&redirect_uri=http://thomasphorton.com/stz/admin/model.instagram.php&response_type=code"><li class="adminItem clearfix">Instagram Tools</li></a>
						<a href="/"><li class="adminItem clearfix"></li></a>
					</ul>
				</div>
				
			<?
                $_SESSION['user_name']  = $user;
                $_SESSION['hashedPass'] = $pass;
            } else {
                echo 'Login failed.<br><a href="index.php">Try again.</a>';
            }
        }
    } else {
?>
		<div id="wrapper" class="clearfix">
			<form method=post action="index.php">
			
			<div class="ticketLine clearfix">
				<label for="user">User:</label>
				<input type="text" id="user" name="user">
			</div>
			
			<div class="ticketLine clearfix">
				<label for="pass">Password:</label>
				<input type="password" id="pass" name="pass">
			</div>
			
			<input type="submit" class="submit" value="Log In" >
			
			</form>
		</div>
	<?
    }
}
include_once 'admin.includes/admin.footer.php';
?>