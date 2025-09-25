<?php
$sec30=60*60*24*30+time();
setcookie('lastvisit',date("g:i:s-d/m/y"),$sec30);
?>
<html>
<body>
<p style="color:red">hello
<?php
$visit=$_COOKIE['lastvisit'];
if(isset($_COOKIE['lastvisit']))
	echo "your last visit was=" .$visit;
else echo "you have got some stale cookies!";
?>
</p>
</body>
</html>
