<?php

class Router {

    public static function redirect() {
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case 'home' :
                    return './view/home.php';

                default :
                    return './view/error/404.php';
            }
        } else {
            return './view/home.php';
        }
    }

}