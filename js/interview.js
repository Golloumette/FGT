let currentIndex = 0;

function updateStudentInfo() {
    const prenomElement = document.getElementById('prenom');
    const ageElement = document.getElementById('age');
    const talentElement = document.getElementById('talent');
    const cursusElement = document.getElementById('nom_cursus');
    const ecoleElement = document.getElementById('nom');
    const campusElement = document.getElementById('ville_campus');
    const photoElement = document.getElementById('photo');

    if (listStudent && listStudent.length > 0) {
        prenomElement.textContent = listStudent[currentIndex]['prenom'];
        ageElement.textContent = listStudent[currentIndex]['age'];
        talentElement.textContent = listStudent[currentIndex]['talent'];
        cursusElement.textContent = listStudent[currentIndex]['nom_cursus'];
        ecoleElement.textContent = listStudent[currentIndex]['nom'];
        campusElement.textContent = listStudent[currentIndex]['ville_campus'];
        photoElement.src = "../images/portrait/" + listStudent[currentIndex]['photo'];   
        currentIndex = (currentIndex + 1) % listStudent.length;
      } else {
        console.error("Aucune donnée disponible");
    }
}


// Appeler la fonction updateStudentInfo toutes les 60 secondes (60000 millisecondes)
setInterval(updateStudentInfo, 10000);

// Appeler immédiatement la fonction pour afficher la première valeur dès le chargement
document.addEventListener("DOMContentLoaded", updateStudentInfo);