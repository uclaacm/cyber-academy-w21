<!DOCTYPE html>
<html>
 <head>
  <title>PHP Challenge-- type juggling two</title>
 </head>
 <body>
    <H1> Totally legit UCLA complaint form </H1>
    <form method="get">
      <h2> Name </h2>
      <input type="text" name="firstname"> <br> <br>
      <h2> Complaint </h2>
      <select name="complaint">
        <option value="midterms">Too many midterms</option>
        <option value="homework">Homework takes too much of your time</option>
        <option value="homework">Online learning is pain</option>
      </select> <br> <br>
      <h2> Major </h2>
      <select name="major">
        <option value="cs">CS</option>
        <option value="cse">CSE</option>
        <option value="meche">MechE</option>
        <option value="ee">EE</option>
        <option value="CogSci">CogSci</option>
        <option value="english">English</option>
        <option value="other">Other</option>
      </select> <BR> <BR>
      <input type="submit">
    </form>
    <?php
      if (isset($_GET['firstname']) && isset($_GET['complaint'])) {
        if (strlen($_GET['firstname']) === $_GET['major'] && is_string($_GET['complaint']) && !$_GET['firstname'] == $_GET['complaint']) {
          echo "Welcome chosen one. Your complaints have finally been heard";
          echo "<p> This is your flag: [FLAG GOES HERE]";
        } else {
          echo "Your feedback is appreciated and has definitely been processed";
          echo "<br>";
          echo "A human will definitely read this";
        }
      }
    ?>
 </body>
</html>