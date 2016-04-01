<?php
//Initialise each variable with:
if(isset($_Post['name'])) $name=$_Post['name'];
else $name = ("Not entered");
?>

<?php
//Sanitise input:
function sanitiseString($var)
{
    $var = stripslashes($var);
    $var =strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

function sanitiseMySQL($connection, $var)
{
    $var = $connection->real_escape_string($var);
    $var = sanitiseString($var);
    return $var
}


