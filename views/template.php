<!DOCTYPE html>

<html lang="fr">

<head>
  <title>Les farfadet ont du talent</title>
  <link rel="icon" href="/Images/BDE.png">
  <link href="../css/accueil.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
  <header class="image-container">
    <img class="image-epsi" src="../Images/EPSI.png" />
    <img class="image-fartadet " src="../Images/BDE.png" />
    <img class="image-wis " src="../Images/WIS.png" />
  </header>

  <section class="navigation">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-static-top">
      <div class="container-fluid">
        <a class="navbar-brand activeMenu tab active-tab" href="accueil.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="activeMenu tab"><a class="nav-link" aria-current="page" href="./propos.html">btn1</a></li>
            <li class="activeMenu tab"><a class="nav-link" aria-current="page" href="./polyculture.html">btn2</a></li>
            <li class="activeMenu tab"><a class="nav-link" aria-current="page" href="./pensions.html">btn3</a></li>
          </ul>
          <button type="button" class="btn btn-success tab" id="idBtnS"><a class="idBtn" href="./identifier.html">
              S'identifier</a></button>
        </div>
      </div>
    </nav>
  </section>

  <?= $content ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>