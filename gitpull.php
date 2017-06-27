<?php
/*
 * This Handles the pulling of updates to the server without using SSH
 * Results of pull will be printed here
 */

echo "<pre>" . execPrint("git pull origin master") . "</pre>";

function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        echo $line . "<br/>";
    }
}