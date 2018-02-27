<?php
	include_once('../php-listener/time-tz-reset.php');
    $autorefresh = TRUE;
	if (array_key_exists('autorefresh',$_GET))
	   $autorefresh = $_GET['autorefresh'];
    $purgedb = FALSE;
    if (array_key_exists('db',$_GET) && $_GET['db'] === 'purge')
	   $purgedb = TRUE;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Simple NumberOK LP DB Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Overpass%20Mono' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/OleksiyRudenko/normalize.css/28e3dc36/normalize.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/OleksiyRudenko/default-beauty.css/482728bd/default-beauty.css">
</head>
<body>
	<h1>Simple HTTP listener</h1>
	<a href='/index-dflt.php' target="_blank">Server info</a>
	<?php
    /*
	include_once('../php-listener/db-connect.php');
	include_once('../php-listener/db-create.php');
	if ($purgedb) include_once('../php-listener/db-purge.php');
	?>
	<p>Requests are listened at URL 
	   <input id="url-src" type="text" size="48" 
	   onchange="handleUrlChange()"
	   value="<?=$_SERVER['REQUEST_SCHEME']?>://<?=$_SERVER['SERVER_ADDR']?>:<?=$_SERVER['SERVER_PORT']?>/listener.php"
	   />
	</p>
	<p>NB! If IP address is missing in URL above, please, re-access this service using IP address of the computer that hosts
	   this web-server.
	</p>
		
	<div><form id="post-form" method="POST" action="listener.php" target="_blank"
		onsubmit="setTimeout(function(){window.location.reload();},250)">
		<input type="text" name="userTextInput" value="Test POST" />
		<input type="Submit" name="action" value="Send test POST" />
	</form></div>
	<div><form id="get-form" method="GET" action="listener.php" target="_blank" 
		onsubmit="setTimeout(function(){window.location.reload();},250)">
		<input type="text" name="userTextInput" value="Test GET" />
		<input type="Submit" name="action" value="Send test GET" />
	</form></div>
	<p>
		<a href="/?autorefresh=<?=($autorefresh)?0:1?>">Turn autorefresh <?=($autorefresh)?'OFF':'ON'?></a>
		<?php
			if (!$autorefresh) {
		?>
			/ <a href="/?autorefresh=0">Refresh once</a>
		<?php
			}
		?>
	</p>
    */
    ?>
</body>
</html>
