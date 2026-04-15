<?php
session_start();

require_once('./config/Database.php');

require_once('./model/Users.php');
require_once('./controller/UsersController.php');
require_once('./repository/UsersRepository.php');

require_once('./config/Router.php');

ob_start();

include('./view/layout/head.php');

include('./view/layout/header.php');

$page = Router::redirect();
if (is_string($page)) {
    include $page;
}

$pageName = $_GET['page'] ?? 'home';

include('./view/layout/footer.php');

ob_end_flush();

?>