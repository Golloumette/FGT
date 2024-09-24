<?php

require_once("../models/Student.php");

$student = new Student(1,"caro","38",1,1,1,"24/09/2024","maphoto.jpeg","joueuse pro");


echo "id student".$student->getIdStudent()."<br>";
echo "prenom client ".$student->getPrenom()."<br>";
echo "interview".$student->getDateInterview()."<br>";
echo "id du campus".$student->getCampusID()."<br>";
echo "age etudiant ".$student->getAge()."<br>";
echo "id du cursus ".$student->getCampusID()."<br>";
echo "id de l'école  ".$student->getEcoleID()."<br>";
echo "mon talent ".$student->getTalent()."<br>";
echo "votre photo ".$student->getPhoto()."<br>";



?>