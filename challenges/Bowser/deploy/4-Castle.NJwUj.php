<html>
<title> Bowser Jr. </title>
<head>
<link rel="stylesheet" href="style.css">
</head>

<h1>
    4-Castle: Bowser Jr.
</h1>
<p> You know, Mario, sometimes it's hard when you're always in your father's shadow. Especially since he's 8'7 and I'm 3'11. Wait what am I blabbering about? You shall not pass here! </p>
<img src="bowser-jr.png">
<p> &lt;?php
eval(gzinflate(base64_decode(str_rot13('SMX1ehELNNH/M2syjNkKdjaZoopM2cPZmZmL/ic9p6VGyxcIaRa/d3dnfrlGisvIWygORK/lVcil4gr2e3/JnHski28gmy///C7qhvDA83DOjmQRAbbtea5wVuJ6Q/baIn6DfTjSHWQOPI0u5WdrQf9QhqiVIyvC+NgeKP8mknEd7iMbj6DcOvB0ihFP8AhnhAepdvcbiC1esBi4yMHpt4nWI+lezh86/GnElNSMgFtAHeRidzFFXFBGFccs0HnLMAlko0HF5IH7CcFrq/RUVOFrLz+rv+9I3oFHoFl3Yssv1fXL7qIVxnOiZ2ZtKLZ62ALpvrGE4ZPyKU0mD5j/+9tzMtwNShujSipeMmNabKD5MyECQ9+U7HbuJH7uquoEL1uXpw8raEVDj5ooMGjK92UMxhybed4oqrNSpQ8wx+byFPIeVai/kE+VBPUgrQzx74thJJlS6ayPOM/ie7mLMV0luDS0EvvK7eycpXf6OMVCrk75q9ywgaczH6prOFEP0+01TsXhSYm9qt6G8IEWLpRwhajH/+A+rX8CWP+cgFPuSVmhLZcn7NWu+1vPj1zDchclxwFaOg8KDkTHAhA6KC+NQQJc8BmWIHG8JNjCryaNshAW+xmA6O106XjCYemGWmQHPeBLXSjj+xYDY4PRjZOfUaH7tn/bn9bj3A2NUWkIdHn5uXHVmihUCwxhBnAg6UyY9+CNU8BiYZQr4ASEp+SdcVa6g+b3O7iVDTCq5ZEUEne7gtt2E59N1aUWS4+a6ob1rEZ9gEms3bbFWa6kcKLpX4/n5GWjIV77pxjgWktr2+uklMlX8kEgQUMf0M66wJyLqaFO0qo507wwqO8WM4KW5M5ex0kQc1u91jnU+ityKdH3VRA4EL5Gx4PBMc5mJV9iGkjIwSfEOKBJcxI7Ilg8XcJfSh3MmeLdx0BklrdOmKBFca2Nm0iGGHGyoAIFxlACWhomkqfKDiRZ+4AA2iep8ZKkpEFqS+ecAyaV+xPsFEml8YjqABH+l/KNtyz+pPTr6zcEPEA9w+zY1+sojvo36+DXXV9bCI9HDcL+B2Gccw5g2VsZbupds5XPDgThy7/UDL5wS9SKnrDXk+g6bUNWyb35SjhozRMgW+ogSzUkh4SSQuYX8AIjrP/M1uT8Jv1Fiy2sksJzZdl5RMbc4QG2Ufi72TJZz1E3RSTxGXFm8pNMhsW5fNrfi3phgRD9XO3rcJSYBbhv3ruO3/kCNA+rCcBw9c7SCIhmIFSwFeaFYBjgFINVoYqzWqO7G3kG80RkZ/pp51UqzBu3yIHA1fRgk+7pZxY1bv2aK3dCfj5B+61/6NWOigQl2hkk+TT7GoX7hr4zovUW826g3XDYUjt/PHFTNqP+cO2Yvv6vXzR3mvI1N3nQreGWt25eE16wwYpu4lpMKk/WgrxlNrDxDJFxyCkxeKNJKD1FXR7bWCEKNlvBpyiqJ+7BoBOyKns2EM9wolJjm4ve27cJw5uh2bzm2KwWZfZvUtBeochPAqNo5OZwd0fwRvlIO/w3Dx6MrxVUmmn7ZdSyDY8K68kMZvilLvbh3LhYOuduFQwrnFlhgd66zVO1liBJuX5sHUXvrNpGY/7ZS1ucbPnBISqtnhmWMzzsglzgrwpnP9qIb8rvNvGFbmFsTkLx8/LkyPVaqeHVgGGvMGJw8zLLXiJY8TL7aw8S2HM4U8L7hq21ODoTymhjuw0+TVIKVvamgYktMtg6Uc0L1WmjTSDuB/fSTZtgcOEvkGywx4TnsG5SVqnJ1S5tqMzVKZ168KMGgz+qrc8HyRhslHuJnSk1NOHHJnqH8hViuKk3SDlUz0qwZX7DJ4VpWRCPT7LhmROshEvPImFtAWl+bFSjkyUoQ0sUJwaDPpmbF32kCu2UqsQYZSDkY3kLx//59+/++k8='))));
?>
 </p>
<FORM NAME ="form2" METHOD = "POST" ACTION = "">
<INPUT TYPE = "Text" placeholder = "answer" NAME = "note">
<input type="submit" value="Submit" name="Submit1">
</FORM>

</html>
 
<?php if (isset($_POST['Submit1'])) {
    $answer = $_POST['note'];
    if ($answer == "red_shell_blue_shell") {
        echo '<a href="5-Castle.Fjji1.php"> Next World --> </a>';
    }
    else {
        echo "Nice try, Mario, but you can't defeat me!";
    }
}
?>