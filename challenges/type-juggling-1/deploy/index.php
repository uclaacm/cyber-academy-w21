<!DOCTYPE html>
<html>
 <head>
  <title>PHP Challenge-- type juggling one </title>
 </head>
 <body>
    <H1> Try me! </H1>
    <form method="get">
      <input type="text" name="inOne">
      <input type="text" name="inTwo">
      <br><br>
      <input type="submit">
      
    </form>
    <?php
      
      if (!is_string($_GET['inOne']) && is_string($_GET['inTwo']) && strlen($_GET['inOne']) === 0  && $_GET['inOne'] == $_GET['inTwo']) {
        echo "<p> This is your flag: flag{start1ng_t0_juggle} </p>";
      } else {
        echo "Php is crazy dude";
        echo "</br>";
        echo "You gave me";
        echo "</br>";
        echo "<pre>" . htmlentities(print_r($_GET['inOne'], true)) . "</pre>";
        echo "and </br>";
        echo "<pre>" . htmlentities(print_r($_GET['inTwo'], true)) . "</pre>";
      }
    ?>
 </body>
</html>