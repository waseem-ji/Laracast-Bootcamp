<?php 
 $config = require('./config.php');
 $db = new  Database($config,'root','root');
 $heading = "Note";
$id = $_GET['id'];
$note = $db->query_entered("select * from notes where id = $id")->fetch();
//  dd($notes);
require "./views/single-note.view.php";