<?php 
use Core\Database;
 $config = require base_path('config.php');
 $db = new  Database($config,'root','root');
 $heading = "Note";
 $current_user_id = 1;
 $id = $_GET['id'];
 $note = $db->query_entered("select * from notes where id = $id")->findOrFail();
 //  dd($notes);
 authorize($note['user_id'] === $current_user_id);

 view("notes/show.view.php",[
    'heading' => 'My notes',
    'note' => $note
]);