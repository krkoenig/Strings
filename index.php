<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require "Manipulator.php";

if (isset($_GET["value"])) {
    $manipulator = new Manipulator($_GET["value"]);
}

// The string the will be echoed to the user.
$resultString = "";

// If there was a submission, dpeending on the button do something
// and save it in $resultString.
if (isset($_GET["btnAction"])) {
    $btnAction = $_GET["btnAction"];
    switch ($btnAction) {
        case "Reverse Words":
            $resultString = $manipulator->reverseWords();
            break;
        case "Reverse Characters":
            $resultString = $manipulator->reverseCharacters();
            break;
        case "Strip White Space":
            $resultString = $manipulator->stripWhiteSpace();
            break;
        case "Remove Duplicates":
            $resultString = $manipulator->removeDups();
            break;
        case "Find First Unique":
            $resultString = $manipulator->findFirstUnique();
            if($resultString == "") {
                $resultString = "No unique character found";
            }
            break;
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" action="index.php">
            <input type="text" value="Value" name="value"><br/>
            <input type="submit" value="Reverse Words" name="btnAction"><br/>
            <input type="submit" value="Reverse Characters" name="btnAction"><br/>
            <input type="submit" value="Strip White Space" name="btnAction"><br/>
            <input type="submit" value="Remove Duplicates" name="btnAction"><br/>
            <input type="submit" value="Find First Unique" name="btnAction"><br/>
        </form>

<?php
echo $resultString;
?>  
    </body>
</html>
