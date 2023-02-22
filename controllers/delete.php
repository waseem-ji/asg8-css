<?php

if(isset($_GET['id'])) {
    // dd($_GET['id']);
    unlink("uploads/");
    deletePost($_GET['id']);

    header("location: /profile");
}