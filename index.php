<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <title>Mon portfolio</title>
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/styleAccueil.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/pageStyle.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/header.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/AproposStyle.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/BTSSIO.css">
        <link rel="stylesheet" href="vues/v_Portfolio/CSS/projetsCompetences.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">        <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>        
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
                include 'vues/v_Portfolio/V_StagesProjets.php';
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src ="assets/JS/rota/dist/twreplace.min.js"></script>
    </body>
</html>
