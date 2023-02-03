<?php 
    use Core\Database;
 require base_path("Validator.php");
 $config = require base_path('config.php'); 
 $db = new Database($config,'root','root');
 $heading = "Create Note";
//  dd($_SERVER);
// dd(Validator::email('waseemji@gmail.com'));
$errors = [];
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // $validator = new Validator();  No need coz its defined as static coz it is a pure function

    if(! Validator::string($_POST['body'],1,1000)) {
        $errors['body'] = "A note of less than 1000 charactors is required required";
    }

    // if(strlen($_POST['body']) > 1000 ) {
    //     $errors['body'] = "Note cannot be more than 1000 charactors!";
    //     }
    

    if(empty($errors)) {
        $note = $_POST['body'];
        $db->query_entered("INSERT INTO notes(note,user_id) VALUES('$note',1)");
    }



 }

 view("notes/create.view.php",[
    'heading' => 'Create Note',
    'errors' => $errors
]);