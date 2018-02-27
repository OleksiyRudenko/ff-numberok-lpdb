<?php
	include_once('../ff-numberok-lpdb/time-tz-reset.php');
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
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h1>Simple NumberOK LP DB Manager</h1>
        <nav>
            <a href="?page=connect">Connect DB</a>
            <a href="?page=groups">Manage groups</a>
            <a href="?page=lp">Manage LPs</a>
            <a href="?page=lpimport">Import LPs</a>
        </nav>
    </header>
    <main>
        <h2>Connecting to DB</h2>
    </main>
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
    <footer>
        <a href="https://github.com/OleksiyRudenko/ff-numberok-lpdb" target="_blank">GitHub</a>
        <a href="/index-dflt.php" target="_blank">Local Server info</a>
        <p>
            <small>Styled with
                <a href="https://github.com/OleksiyRudenko/default-beauty.css" target="_blank">
                    <i class="fas fa-heart"></i> Default-Beauty.css <i class="fab fa-github-square"></i>
                </a>
                and
                <a href="https://github.com/OleksiyRudenko/normalize.css" target="_blank">
                    normalize.css fork <i class="fab fa-github-square"></i>
                </a></small>
        </p>
    </footer>
</body>
</html>
