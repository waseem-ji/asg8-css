<?php

$tags = listTags();

if($_SERVER['REQUEST_METHOD'] == "POST" )
    
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['tag']))
    {
        // dd($_SERVER["REQUEST_URI"]);
        // dd("Location: ".$base."?tag=".$_POST['tag']);
        header("Location: ".$_POST['base']."?tag=".$_POST['tag']);
        
    }

view("tags.view.php",[
    'tags' => $tags
]);