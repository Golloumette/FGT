<?php

class Student {
    // Propriété
    private int $idStudent;
    private string $prenom;
    private string $age;
    private int $ecoleID;
    private int $cursusID;
    private int $campusID;
    private string $dateInterview;
    private string $photo;
    private string $talent;

    //Constructeur
    public function __construct(
        int $idStudent = 0, 
        string $prenom = "", 
        string $age = "", 
        int $ecoleID = 0,
        int $cursusID = 0, 
        int $campusID = 0, 
        string $dateInterview = "", 
        string $photo = "", 
        string $talent = ""
    ) {
        $this->idStudent = $idStudent;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->ecoleID = $ecoleID;
        $this->cursusID = $cursusID;
        $this->campusID = $campusID;
        $this->dateInterview = $dateInterview;
        $this->photo = $photo;
        $this->talent = $talent;
    }
    
    // Getters and Setters

    public function getIdStudent(): int {
        return $this->idStudent;
    }

    public function setIdStudent(int $idStudent): void {
        $this->idStudent = $idStudent;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function getAge(): string {
        return $this->age;
    }

    public function setAge(string $age): void {
        $this->age = $age;
    }

    public function getEcoleID(): int {
        return $this->ecoleID;
    }

    public function setEcoleID(int $ecoleID): void {
        $this->ecoleID = $ecoleID;
    }

    public function getCursusID(): int {
        return $this->cursusID;
    }

    public function setCursusID(int $cursusID): void {
        $this->cursusID = $cursusID;
    }

    public function getCampusID(): int {
        return $this->campusID;
    }

    public function setCampusID(int $campusID): void {
        $this->campusID = $campusID;
    }

    public function getDateInterview(): string {
        return $this->dateInterview;
    }

    public function setDateInterview(string $dateInterview): void {
        $this->dateInterview = $dateInterview;
    }

    public function getPhoto(): string {
        return $this->photo;
    }

    public function setPhoto(string $photo): void {
        $this->photo = $photo;
    }

    public function getTalent(): string {
        return $this->talent;
    }

    public function setTalent(string $talent): void {
        $this->talent = $talent;
    }



}