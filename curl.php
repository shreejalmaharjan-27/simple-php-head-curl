<?php
//get domain query
if (isset($_POST['domain']))
{   
    //get domain from input
    $domain = $_POST['domain'];
    
    // disallow connection if domain has other than letters, numbers, and hyphens
    if (preg_match("/^[\/:.A-Za-z0-9-]+$/", $domain)) {
                //execute shell command
                //debug
                echo $domain;
                $shellexec = shell_exec("curl -I $domain");
                echo '<pre>'.$shellexec.'</pre>';
    } else {
    // display error
    echo 'Error Occured!';
    }
}
?>