<html>
<title> Ludwig </title>
<head>
<link rel="stylesheet" href="style.css">
</head>
<h1>
    3-Castle: Ludwig
</h1>

<p> Be jealous of my hair, and also the fact that I'll still be alive after I'm done with you! </p>
<img src="ludwig.png">
<p> &lt;?php<br>
$code = str_replace('y', '*', $code); <br>
$code = str_replace('u', '(', $code);<br>
$code = str_replace('r', ';', $code);<br>
$code = str_replace('_', 'A', $code);<br>
$code = str_replace('s', 'j', $code);<br>
$code = str_replace('o', '&', $code);<br>
echo $code;<br>
?>
</p>
<br>
<p>
*(mA*(mAm(jh;&&mj
</p>

<FORM NAME ="form2" METHOD = "POST" ACTION = "">
<INPUT TYPE = "Text" placeholder = "answer" NAME = "note">
<input type="submit" value="Submit" name="Submit1">
</FORM>

</html>
 
<?php if (isset($_POST['Submit1'])) {
    $answer = $_POST['note'];
    if ($answer == "yum_yum_mushrooms") {
        echo '<a href="4-Castle.NJwUj.php"> Next World --> </a>';
    }
    else {
        echo "Nice try, Mario, but you can't defeat me!";
    }
}
?>