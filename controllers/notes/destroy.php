<?php 
use Core\Database;
 $config = require base_path('config.php');
 $db = new  Database($config,'root','root');
//  $heading = "Note";
$current_user_id = 1;


    //Form was submitted , delete teh mote
    $id = $_POST['id'];
    $note = $db->query_entered("select * from notes where id = $id")->findOrFail();
    //  dd($notes);
    authorize($note['user_id'] === $current_user_id);
   
    // dd($id);

    $db->query_entered("DELETE FROM notes WHERE id=$id");

    header('location: /notes');
    exit();
