<?php

class UsersController {

    public function register() {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $surname = trim($_POST['surname'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if (empty($name) || empty($surname) || empty($email) || empty($password)) {
                $errors['general'] = "Tous les champs sont obligatoires.";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Format d'email invalide.";
            }

            if (strlen($password) < 10) {
                $errors['password'][] = "Le mot de passe doit contenir au moins 10 caractères.";
            }
            if (!preg_match('/[A-Z]/', $password)) {
                $errors['password'][] = "Le mot de passe doit contenir au moins une majuscule.";
            }
            if (!preg_match('/[a-z]/', $password)) {
                $errors['password'][] = "Le mot de passe doit contenir au moins une minuscule.";
            }
            if (!preg_match('/\d/', $password)) {
                $errors['password'][] = "Le mot de passe doit contenir au moins un chiffre.";
            }
            if (!preg_match('/[\W_]/', $password)) {
                $errors['password'][] = "Le mot de passe doit contenir au moins un caractère spécial.";
            }

            $urepo = new UsersRepository();
            if ($urepo->emailExists($email)) {
                $errors['email'] = "L'email est déjà utilisé !";
            }

            if (empty($errors)) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $urepo->createUser($name, $surname, $email, $hashedPassword);
                $_SESSION['register_success'] = "Votre inscription a bien été prise en compte ! Connectez-vous.";
                header('Location: ./index.php?page=login');
                exit();
            }
        }

        require_once('./view/authentication/register.php');
    }

    public function login() {
        $errorsLogin = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if (empty($email) || empty($password)) {
                $errorsLogin['general'] = "Tous les champs sont obligatoires.";
            } else {
                $urepo = new UsersRepository();
                $user = $urepo->findByEmail($email);

                if (!$user || !password_verify($password, $user['password'])) {
                    $errorsLogin['incorrects'] = "Identifiants incorrect !";
                } else {
                    $_SESSION['idUser'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['surname'] = $user['surname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['dateRegistration'] = $user['dateRegistration'];
                    $_SESSION['isAdmin'] = $user['isAdmin'];
                    header('Location: ./index.php?page=home');
                    exit();
                }
            }
        }

        require_once('./view/authentication/login.php');
    }

}