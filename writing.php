<?php

include_once 'head.html';

require_once 'config.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  $message = test_input($_POST["message"]);
}

$id = str_shuffle('0123456789qwertyuiopasdfghjklzxcvbnm');
$id = mb_substr(str_shuffle($id), 0, 15);

$sql = "INSERT INTO messages VALUES ('$id', '$message');";

$added = false;

if(!$conn->query($sql))
{
    echo $conn->error;
}
else
{
    $added = true;
}
$conn->close();

if($id != '' && $added)
{
    session_start();
    $_SESSION["link"] = "http://garbage_cms.dev/auto/reading.php?id=$id"; 
    header('Location: link.php');
}
else 
{
header('Location: index.php');
exit;
}

include_once 'foot.html';