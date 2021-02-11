<html>
<title>
    toomblr
</title>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>
    Welcome to my lair >:)
</h1>

<p>
    My name is pukicho and I am your ultimate ruler. Prepare to bow down before me or you shall suffer. Enjoy my legendary wit, but not too much. 
</p>

<img src="bug.jpg"><br>
<img src="candy.jpg"><br>
<img src="render.jpg"><br>
<img src="jello.jpeg"><br>
<img src="bones.jpeg"> <br>
<img src="teeth.jpg"><br>

<p>
    I have one weakness, but you'll never find it. In fact, I'll give you the code for this entire page because I am so confident. 
</p>
<br>
<?php
  $flag = fopen("top/secret/file/system/flag.txt", "r"); 
  if (false) {
    $ptr = fgets($flag);
    echo $ptr;
    echo "<br>";
  }
  fclose($flag);
  echo highlight_file(__FILE__, true); 
?>
</body>
</html>