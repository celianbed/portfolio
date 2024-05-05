<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <title>Mon portfolio</title>
        <link rel="stylesheet" href="style/CSS/styleAccueil.css">
        <link rel="stylesheet" href="style/CSS/pageStyle.css">
        <link rel="stylesheet" href="style/CSS/header.css">
        <link rel="stylesheet" href="style/CSS/AproposStyle.css">
        <link rel="stylesheet" href="style/CSS/BTSSIO.css">
        <link rel="stylesheet" href="style/CSS/stagesProjets.css">
        <link rel="stylesheet" href="style/CSS/Modals/ModalMillenuits.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="icon" href="assets/img/logo.ico">
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
                include 'vues/v_Portfolio/V_StagesProjets.php';
                include 'vues/v_Portfolio/V_Certifications.php';
                include 'vues/v_Portfolio/V_VeilleTechno.php';
                ?>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src ="assets/JS/rota/dist/twreplace.min.js"></script>
        <script src="assets/JS/animationBar.js"></script>
        <script>
            $(document).on("keypress", document, function (e) {
                if (e.which === 13) {
                    location.reload(true);
                }
            });
        </script>
        <script src ="assets/JS/ScrollToTop.js"></script>
    </body>
</html>
