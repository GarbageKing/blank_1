<?php
include_once 'head.html'; 

require_once 'config.php';

$id = "";

$id = test_input($_GET['id']);

$sql = "SELECT message FROM messages WHERE id = '$id';";

$result = $conn->query($sql);
$result = mysqli_fetch_assoc($result);

if($result['message']!='')
{
    $res = $result['message'];
    echo "<form class='pure-form'><textarea class='pure-input-1-2'>$res</textarea></form>";
}
else
{ 
    header('Location: index.php');
    exit;
}

$sql = "DELETE FROM messages WHERE id = '$id';";
$conn->query($sql);

$conn->close();

include_once 'foot.html';