<? 
  $hostname = $_SERVER['HTTP_HOST'];
  if ($hostname === 'localhost' || $hostname === 'beta.mystz.com') {
    $dev = true;
  }
?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta http-equiv="Content-Type" Content="text/html; charset=UTF-8">
<meta charset="UTF-8" />
<meta property="og:image" content="http://beta.mystz.com/images/index/instagram-logo.png" />
<meta property="og:site_name" content="MySTZ"/>
<meta property="og:description" content="Get the latest and greatest custom gear for wake, skate, surf and snow" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<? if ($dev) { ?>
<script src="/js/build/production.js"></script>
<? } else { ?>
<script src="/js/build/production.min.js"></script>
<? } ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31771252-1', 'mystz.com');
  ga('send', 'pageview');

</script>

<script>
  
$('body').on('resource.requested', function(requestData, resource) {

  console.log(requestData);

  console.log(resource);

});

</script>