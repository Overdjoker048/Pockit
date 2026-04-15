<?php

class Router {

    public static function redirect() {
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case 'home' :
                    return './view/home.php';
                case 'contact' :
                    return './view/contact.php';

                // Authentication

                case 'login' :
                    $controller = new UsersController();
                    $controller->login();
                    return null;
                
                case 'register' :
                    $controller = new UsersController();
                    $controller->register();
                    return null;

                case 'logout' :
                    return './view/authentication/logout.php';

                default :
                    return './view/error/404.php';
            }
        } else {
            return './view/home.php';
        }
    }

}