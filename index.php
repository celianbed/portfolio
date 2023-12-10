<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">        <title>Mon portfolio</title>
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/styleAccueil.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/pageStyle.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/header.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/AproposStyle.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/BTSSIO.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>        
        <script src ="assets/JS/ScrollToTop.js"></script>


    </head>
    <body class = "area">
        <header id = "header">
            <?php
            include 'vues/v_Portfolio/V_Nav.php';
            ?>
        </header>
        <main class = "content-2">
            <div class="context">
                <?php
                include 'vues/v_Portfolio/V_Accueil.php';
                include 'vues/v_Portfolio/V_MonProfil.php';
                include 'vues/v_Portfolio/V_BTSSIO.php';
                include 'vues/v_Portfolio/V_Docs.php';
                include 'vues/v_Portfolio/V_SituationProfessionnelle.php';
                include 'vues/v_Portfolio/V_GestPat.php';
                include 'vues/v_Portfolio/V_VeilleTechno.php';
                ?>
            </div>
           <!-- comment 
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>-->
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src ="assets/JS/rota/dist/twreplace.min.js"></script>
    </body>
</html>
