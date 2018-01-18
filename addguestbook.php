<?php
require 'controller.php';

$unname = $_POST['name'];
$uncomment = $_POST['comment'];

$patterns = array();
$patterns[0] = '/kaas/';
$patterns[1] = '/tomaat/';
$patterns[2] = '/melk/';
$patterns[3] = '/wortel/';

$con = new controller();

$name = preg_replace($patterns,'*',$unname);
$comment = preg_replace($patterns,'*',$uncomment);


$result = $con->queryInsert("INSERT INTO guestbook (name, comment)VALUES('$name','$comment')");

var_dump($result);
if($result){
header('Location: viewguestbook.php');
} else {
    echo "ERROR";
    var_dump($result);
}
?>
