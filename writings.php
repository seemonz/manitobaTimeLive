<!doctype html>
<html>

<head>
    <title>Writings</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
		<!-- sidebar for laptop-->
    <div id="sidebar">
      <a href="/"><h3 id="sidebar-title">manitobaTime</h3></a>
      <a href="/simonPelletier.html" id="sidebar-button">simonPelletier</a><br>
      <a href="/maddie.html" id="sidebar-button">maddieMW</a><br>
      <a href="/writings.php" id="sidebar-button">Writings</a><br>
      <a href="/art" id="sidebar-button">Art</a><br>
    </div>

    <!-- sidebar for phone -->
    <div id="phoneBar">
      <div id="barLinks">
        <h1 id="sidebar-title"><a href="/">manitobaTime</a></h1>
        <a href="/simonPelletier.html" id="sidebar-button">simonPelletier</a>
        <a href="/maddie.html" id="sidebar-button">maddieMW</a><br>
        <a href="/writings.php" id="sidebar-button">Writings</a>
        <a href="/art" id="sidebar-button">Art</a>
      </div>
    </div>

    <div id="content">
        <h1>My Writings</h1>
        <p>A collection of complete and half-baked writings.</p>
        <ul style="list-style-type: none">
            <?php
            // Set the directory path based on the environment
            if ($_SERVER['SERVER_ADDR'] === '127.0.0.1' || $_SERVER['SERVER_NAME'] === 'localhost') {
                // Local development path
                $writings_dir = '/Users/simon/newManitobaTime/writings';
            } else {
                // Production server path
                $writings_dir = '/var/www/html/writings';
            }

            // Scan the directory for PDF files
            $files = scandir($writings_dir);

            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                    $fileName = pathinfo($file, PATHINFO_FILENAME); // Get the file name without .pdf extension
										echo '<li><a href="/writings/' . str_replace('+', '%20', urlencode($file)) . '" target="_blank">' . $fileName . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</body>

</html>

