<?php 
use Core\Database;
 $config = require base_path('config.php');
 $db = new Database($config,'root','root');

 $notes = $db->query_entered("select * from notes where user_id =1")->fetchAll();
//  dd($notes);
view("notes/index.view.php",[
    'heading' => 'My notes',
    'notes' => $notes
]);