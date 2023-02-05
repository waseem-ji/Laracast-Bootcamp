<?php 

use Core\Database;
    use Core\Validator;
//  require base_path("Validator.php");
 $config = require base_path('config.php'); 
 $db = new Database($config,'root','root');


$errors = [];
if(! Validator::string($_POST['body'],1,1000)) {
    $errors['body'] = "A note of less than 1000 charactors is required required";
}

// if(strlen($_POST['body']) > 1000 ) {
//     $errors['body'] = "Note cannot be more than 1000 charactors!";
//     }

if(!empty($errors)) {
    return view("notes/create.view.php",[
        'heading' => 'Create Note',
        'errors' => [] 
    ]);
}

$note = $_POST['body'];
$db->query_entered("INSERT INTO notes(note,user_id) VALUES('$note',1)");


header("location: /notes");
die();