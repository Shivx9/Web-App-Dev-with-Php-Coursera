<html>
<head>
<title>Guessing Game for Shivendra Singh RA1911028010017</title>
</head>
<body>
<h1>Welcome to my guessing game by Shivendra Singh RA1911028010017</h1>
<p>
<?php
$correct=39; 
if(isset($_GET['guess']))
{
    if (is_numeric($_GET['guess'])===FALSE)
    {
        echo "Your guess is not a number";
    }
    else if ($_GET['guess']<$correct)
    {
        echo "Your guess is too low";
    }
    else if ($_GET['guess']>$correct)
    {
        echo "Your guess is too high";
    }
    else if ($_GET['guess']==$correct)
    {
        echo "Congratulations - You are right";
    }
}
else if(is_null$_GET['guess']===TRUE)
{
    echo "Your guess is too short"
}
else
{
    echo "Missing guess parameter";
}
?>
</body>
</html>
