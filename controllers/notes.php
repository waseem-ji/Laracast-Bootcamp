<?php 
 $config = require('./config.php');
 $db = new  Database($config,'root','root');
 $heading = "My Notes";
 $notes = $db->query_entered("select * from notes where user_id =1")->fetchAll();
//  dd($notes);
require "./views/notes.view.php";