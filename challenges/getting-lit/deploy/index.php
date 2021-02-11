<html>
<title> Cyber and Cats are C-uwu-l </title>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> STORYTIME </h1>
<p> 
    HOLD your horses because I have a story to tell: So I was doing my homework for my analysis of literature in the 21st century class at 11:59 PM like any normal human would. Right before I had to submit, my cat May (short for Mayonnaise) jumped over my keyboard and my text editor autocompleted some code for me. I didn't really see where she changed things, but she was obsessed with those seashells on my desk yesterday and kept playing with it. There were 30 seconds left as I copied and pasted my last little bit, hoping for an A. Actually, I would probably settle for a B, considering the amount of time I spent on the two week long project (not enough).
</p>
<p>
    I just submitted the files like 20 seconds ago and I didn't have time to double check my work, so hopefully there's no way to access them. Right?
</p>
<!-- $_GET['cmd'] = 'echo "Right?"' -->

<?php 
$command = 'echo "Right?"';
if (isset($_GET['cmd'])) {
    $temp = $_GET['cmd'];
    $is_ls = substr($temp, 0, 2) == "ls";
    $is_cat = substr($temp, 0, 3) == "cat";
    $is_grep = substr($temp, 0, 4) == "grep";
    $is_open = substr($temp, 0, 4) == "open";
    $is_pwd = substr($temp, 0, 3) == "pwd";
    if ($is_ls || $is_cat || $is_grep || $is_open || $is_pwd) {
        $command = $_GET['cmd'];
    }
    else {
        echo "<!-- Plz don't try to change or delete the files :( We want everyone to be able to find the flag uwu-->";
        echo "<!-- Maybe try cats? or grapes! -->";
    }
}
system($command);
?>

<h1> MORE ABOUT MY CAT </h1>
<p>
    I won't pass up the chance to talk about my cat so here is a picture of her ʕ•ᴥ•ʔ:
</p>
<img src="mayo.jpg">
<p>
    She is very smart and eats a lot, just like me. [For clarification, I meant eats a lot like me.] She is obsessed with greps. Oops typo, sorry I meant grapes. Ok, I know cats are carnivores and you should never feed them fruits/vegetables, but she loves playing with them like balls of yarn.
    
    On the topic of her intelligence, I swear sometimes she knows more CS than me. She is always next to me during lectures for moral support. One time I asked her what the integral of sin x from 0 to pi was and she meowed twice. :o I was so stunned I almost threw away my calculator so May could have more room on my desk.
</p>
</body>
</html>