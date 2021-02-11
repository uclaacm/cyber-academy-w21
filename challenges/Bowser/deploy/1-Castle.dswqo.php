<html>
<title> Larry </title>
<head>
<link rel="stylesheet" href="style.css">
</head>
<h1>
    1-Castle: Larry
</h1>
<p> 5 worlds till Bowser, but your world ends here! >:) </p>
<img src="larry.png">
<p> &lt;?php
echo "\x62\165\x6c\x6c\145\164\x5f\167\x69\154\x6c\151\141\155"; ?>
 </p>

<FORM NAME ="form1" METHOD = "POST" ACTION = "">
<INPUT TYPE = "Text" placeholder = "answer" NAME = "note">
<input type="submit" value="Submit" name="Submit1" class="btn">
</FORM>

</html>
 
<?php if (isset($_POST['Submit1'])) {
    $answer = $_POST['note'];
    if ($answer == "bullet_william") {
        echo '<a href="2-Castle.GeJD8.php"> Next World --> </a>';
    }
    else {
        echo "Nice try, Mario, but you can't defeat me!";
    }
}
?>