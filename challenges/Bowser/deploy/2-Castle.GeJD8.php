<html>
<title> Lemmy </title>
<head>
<link rel="stylesheet" href="style.css">
</head>
<h1>
    2-Castle: Lemmy
</h1>

<p> Boing! Boing! Bounce away, since you're never going to find Peach! </p>
<img src="lemmy.png">
<p> &lt;?php eval(base64_decode("ZWNobyAidGhlX3Rod29tcF9nb2VzX3Rod29tcCI7")); ?>
<FORM NAME ="form2" METHOD = "POST" ACTION = "">
<INPUT TYPE = "Text" placeholder = "answer" NAME = "note">
<input type="submit" value="Submit" name="Submit1">
</FORM>

</html>
 
<?php if (isset($_POST['Submit1'])) {
    $answer = $_POST['note'];
    if ($answer == "the_thwomp_goes_thwomp") {
        echo '<a href="3-Castle.1sjlR.php"> Next World --> </a>';
    }
    else {
        echo "Nice try, Mario, but you can't defeat me!";
    }
}
?>