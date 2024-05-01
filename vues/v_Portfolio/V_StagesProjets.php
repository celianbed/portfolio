<section id="StagesProjets" class="align-items-center mn-3 col-sm-auto col-xl-auto col-md-auto">
    <div class="container">
        <div class="ProjetPro">
            <h2 > Les projets réalisés en cours</h2>
            <div class="row ">
                <div class="card col-md-4">
                    <img src="assets/img/Logo_mille_nuits.png" class="card-img-top" alt="millenuitProjet">
                    <div class="card-body">
                        <h5 class="card-title">MILLENUIT </h5>
                        <a data-bs-target="#ModalMillenuit" data-bs-toggle="modal"
                           class="btn btn-primary btnCard">En savoir plus</a>
                    </div>
                </div>
                <div class="card col-md-4 ">
                    <img src="assets/img/ecocert.png" class="card-img-top" alt="ecocertProjet">
                    <div class="card-body  ecocert" >
                        <h5 class="card-title">Ecocert- Certificats</h5>
                        <a data-bs-target="#ModalCertificat" data-bs-toggle="modal" class="btn btn-primary btnCard">En savoir plus</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="assets/img/ecocert.png" class="card-img-top" alt="ecocertProjet">
                    <div class="card-body align-items-end ecocert ">
                        <h5 class="card-title">Ecocert - Simultateur </h5>
                        <a class="btn btn-primary btnCard">Non disponible</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="assets/img/ecocert.png" class="card-img-top" alt="ecocertProjet">
                    <div class="card-body y align-items-end ecocert ">
                        <h5 class="card-title">Ecocert - Traitements</h5>
                        <a  class="btn btn-primary btnCard">Non disponible</a>
                    </div>
                </div>
            </div>
            <br>
            <?php include 'Modals/ModalMillenuits.php'; ?>
            <?php include 'Modals/ModalEcoCertficat.php'; ?>

            <h2>Mes projets personnels et mes stages</h2>
            <div class="row">
                <div class="card col-md-4">
                    <img src="assets/img/GenMdp.jpg" class="card-img-top" alt="Générateur de mots de passe">
                    <div class="card-body">
                        <h5 class="card-title">Password generator</h5>
                        <a data-bs-target="#GenMdp" data-bs-toggle="modal"  class="btn btn-primary btnCard">En
                            savoir plus</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="assets/img/hebergementweb.jpg" class="card-img-top" alt="hebergementweb">
                    <div class="card-body">
                        <h5 class="card-title">Hébergement web </h5>
                        <a data-bs-target="#Hebergement" data-bs-toggle="modal"  class="btn btn-primary btnCard">En
                            savoir plus</a>
                    </div>
                </div>
                    <!---<div class="vr"></div>-->
                <div class="card col-md-4">
                    <img src="assets/img/Tours.png" class="card-img-top" alt="Stage à la Mairie de Tours">
                    <div class="card-body">
                        <h5 class="card-title">Mairie de Tours</h5>
                        <a data-bs-target="#StageMairie" data-bs-toggle="modal"  class="btn btn-primary btnCard">En savoir plus</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="assets/img/HM.png" class="card-img-top" alt="Stage chez Harmonie Mutuelle">
                    <div class="card-body">
                        <h5 class="card-title">Harmonie Mutuelle</h5>
                        <a data-bs-target="" data-bs-toggle="modal"  class="btn btn-primary btnCard ">Non disponible</a>
                    </div>
                </div>
                <?php include 'Modals/ModalGenMdp.php'; ?>
                <?php include 'Modals/ModalHebergementWeb.php'; ?>
                <?php include  'Modals/ModalStageMairie.php';?>
            </div>

        </div>
    </div>
</section>
