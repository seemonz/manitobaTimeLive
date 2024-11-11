<!doctype html>
<html>

<head>
    <title>Writings</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <div id="sidebar">
        <h3 id="sidebar-title"><a href="/">manitobaTime</a></h3>
        <a href="/simonPelletier.html" id="sidebar-button">simonPelletier</a><br>
				<a href="/maddie.html" id="sidebar-button">maddieMW</a><br>
        <a href="/writings.php" id="sidebar-button">Writings</a><br>
        <a href="/art" id="sidebar-button">Art</a><br>
    </div>

    <div id="content">
        <h1>My Writings</h1>
				<p>A collection of complete and half-baked writings.</p>
        <ul style="list-style-type: none">
            <?php
            $dir = '/Users/simon/newManitobaTime/writings';  // Update this path
            $files = scandir($dir);

						foreach ($files as $file) {
							if ($file !== '.' && $file !== '..' && pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
								$fileName = pathinfo($file, PATHINFO_FILENAME);  // Get the file name without the .pdf extension
								echo '<li><a href="writings/' . $file . '" target="_blank">' . $fileName . '</a></li>';
							}
						}
						?>
        </ul>
    </div>
</body>

</html>

