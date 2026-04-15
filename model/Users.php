<?php

class Users {
    private int $id;
    private string $name;
    private string $surname;
    private string $email;
    private string $password;
    private int $dateRegistration;
    private int $isAdmin;

    public function __construct(int $id, string $name, string $surname, string $email, string $password, int $dateRegistration, int $isAdmin) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->dateRegistration = $dateRegistration;
        $this->isAdmin = $isAdmin;
    }

    public function getId(): int {
        return $this->id = $id;
    }
    public function setId(): int {
        return $this->id = $id;
    }

    public function getName(): string {
        return $this->name = $name;
    }
    public function setName(): string {
        return $this->name = $name;
    }

    public function getSurname(): string {
        return $this->surname = $surname;
    }
    public function setSurname(): string {
        return $this->surname = $surname;
    }

    public function getEmail(): string {
        return $this->email = $email;
    }
    public function setEmail(): string {
        return $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password = $password;
    }
    public function setPassword(): string {
        return $this->password = $password;
    }

    public function getDateRegistration(): int {
        return $this->dateRegistration = $dateRegistration;
    }
    public function setDateRegistration(): int {
        return $this->dateRegistration = $dateRegistration;
    }

    public function getIsAdmin(): int {
        return $this->isAdmin = $isAdmin;
    }
    public function setIsAdmin(): int {
        return $this->isAdmin = $isAdmin;
    }
}