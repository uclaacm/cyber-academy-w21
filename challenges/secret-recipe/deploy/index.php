<?php
    $is_admin = False;
    $is_chef = False;
    $filename = NULL;
    $username = NULL;

    class User
    {
        private $name;

        function __construct($name)
        {
            $this->name = $name;
        }

        public function get_name()
        {
            return $this->name;
        }
    }

    if(!isset($_COOKIE['user']))
    {
        setcookie('user', base64_encode(serialize(new User('default_user'))));
        $username = "default_user";
    }
    else
    {
        $curr_user = unserialize(base64_decode($_COOKIE['user']));
        $username = $curr_user->get_name();
    }
?>
<!DOCTYPE html>
<html>
<header>
    
</header>

<body>
Search file below:
<FORM NAME ="file_search" METHOD ="POST" ACTION = "index.php">
    <INPUT TYPE = "Text" Name = "view_file" VALUE ="">
    <INPUT TYPE = "Submit" Name = "">
</FORM>

<?php
    echo nl2br("Logged in as $username\n\n");
    if($username == "admin")
    {
        echo nl2br("admin can view:\nusers.txt\npasswords.txt\n\n");
        $is_admin = True;
    }
    else if($username == "th3_gr34T5st_Ch3F")
    {
        echo nl2br("th3_gr34T5st_Ch3F can view:\nsecret_recipe.txt\nfunny_chef_jokes.txt\n\n");
        $is_chef = True;
    }
    else
        echo nl2br("$username can't view anything\n\n");

    if(isset($_POST['view_file']))
    {
        $filename = $_POST['view_file'];
        if($is_admin)
        {
            if($filename == "passwords.txt" || $filename == "users.txt")
            {
                $contents = file_get_contents($filename);
                echo nl2br("Showing '$filename':\n");
                echo nl2br($contents);
            }
            else if($filename == "secret_recipe.txt" || $filename == "funny_chef_jokes.txt")
            {
                echo nl2br("$username can't view '$filename'\n");
            }
            else
                echo nl2br("'$filename' doesn't exist\n");
        }
        else if($is_chef)
        {
            if($filename == "secret_recipe.txt" || $filename == "funny_chef_jokes.txt")
            {
                $contents = file_get_contents($filename);
                echo nl2br("Showing '$filename':\n");
                echo nl2br($contents);                
            }
            else if($filename == "passwords.txt" || $filename == "users.txt")
            {
                echo nl2br("Only admin can view '$filename'\n");
            }
            else
                echo nl2br("'$filename' doesn't exist\n");
        }
        else
        {
            if($filename == "passwords.txt" || $filename == "users.txt")
            {
                echo nl2br("Only admin can view '$filename'\n");
            }
            else if($filename == "secret_recipe.txt" || $filename == "funny_chef_jokes.txt")
            {
                echo nl2br("$username can't view '$filename'\n");
            }
            else
                echo nl2br("'$filename' doesn't exist\n");
        }
    }
?>
</br>
</body>
</html>