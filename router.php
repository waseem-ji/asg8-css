<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    "/" => base_path("controllers/index.php"),
    
    "/login" => base_path("controllers/login.php"),
    "/logout" => base_path("controllers/logout.php"),
    "/dashboard" => base_path("controllers/dashboard.php"),
    "/profile" => base_path("controllers/profile.php"),
    "/update-profile" => base_path("controllers/update-profile.php"),
    "/update-post" => base_path("controllers/update-post.php"),
    "/forms" => base_path("controllers/form-handle.php"),
    "/settings" => base_path("controllers/user-registration.php"),
    "/delete" => base_path("controllers/delete.php"),
    "/tag" => base_path("controllers/tags.php")

];


function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "controller/{$code}.php";

    die();
}

routeToController($uri, $routes);