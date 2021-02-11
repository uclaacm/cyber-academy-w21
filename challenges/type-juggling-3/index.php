<!DOCTYPE html>
<html>
 <head>
  <title>PHP Challenge-- type juggling three</title>
 </head>
 <body>
    <H1> Hash my string </H1>

    <form method="get">
      <select name="crypto">
        <option value="sha1">Sha1</option>
        <option value="sha256">Sha256</option>
        <option value="ripemd128">Ripemd128</option>
        <option value="crc32">Crc32</option>
      </select>
      <input type="text" name="data"><br><br>
      <input type="submit">
    </form>

    <?php
      if (isset($_GET['crypto']) && isset($_GET['data'])) {
        if(is_string($_GET['crypto']) && is_string($_GET['data'])) {
          if(in_array($_GET['crypto'], hash_algos(), true)) {
            if(hash($_GET['crypto'], $_GET['data']) == $_GET['data']) {
              echo "Wow, how did you manage to hash a value to itself!";
              echo "<p> This is your flag: [FLAG GOES HERE]</p>";
            } else {
              echo htmlspecialchars(hash($_GET['crypto'], $_GET['data']));
            }
          } else {
            echo "Not a supported hash algorithm";
          }
        } else {
          echo "Might want to give some legit values here";
        }
      }
    ?>
 </body>
</html>