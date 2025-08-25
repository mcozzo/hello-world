<html>
<head><Center><h1>Temporary Web Server</h1></Center></head>

<body>
<hr>
<?php
 #echo 'PHP<br>';
 #$localIP = getHostByName(getHostName());
 #echo "<pre>";

 if ($handle = opendir('.')) {
    $blacklist = array('.', '..', '.DS_Store', 'index.php');
    echo "<ul>";
    while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $blacklist)) {
            echo "<li> <a href='./$file'>$file</a></li>";
        }
    }
    echo "</ul>";
    closedir($handle);
}
?>
<hr>
<left>
    <B>Name</B> <br>
    Role <a href="https://url/">Company</a><br>
    E: <a href= "mailto:email">email</a><br>
    P: <a href="tel:+1.###.###.####">###.###.####</a>
</left>
</body>
</html>
