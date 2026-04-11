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
                    return './view/authentication/login.php';
                
                case 'register' :
                    return './view/authentication/register.php';

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