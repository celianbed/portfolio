<div class="modal fade" id="ModalCertificat" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Ecocert Certificat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="sujet">
                    <h5><u>L'entreprise : </u></h5><br>
                    <p>L'entreprise <b><i>Ecocert</i></b>, SA au capital de 4 500 000 €, est leader sur le marché
                        français des couettes et oreillers.
                        Elle produit chaque jour plus de 35 000 couettes, couvertures, oreillers et alèses et fournit
                        différents acteurs</p>

                    <ul>
                        <li>les distributeurs, sous marque "distributeur"</li>
                        <li>l'hôtellerie</li>
                        <li>les collectivités (hôpitaux principalement), sous marque propre</li>
                        <li>les grands acteurs de la VPC (La Redoute, 3Suisses...)</li>
                        <li>de la VPC (La Redoute, 3Suisses...)</li>
                        <li>les particuliers.</li>
                    </ul>
                    <p>Sa force est de travailler sur des textiles innovants et écologiques (antiacariens,
                        antibactériens, Oeko-Tex...). </p>
                </div>
                <br>
                <div class="description">
                    <h5><u>Description du projet : </u></h5><br>
                    <p>
                        Lors du troisième semèstre, j'ai réalisé un projet appelé "Ecocert-Certificat".
                        J'ai pu découvrir le FrameWork CodeIgniter qui est un FrameWork PHP

                    </p>
                </div>
                <br>
                <div class="EnvDev">
                    <h5><u>Environnement de développement :</u></h5><br>
                    <ul>
                        <li><b>Front-End : </b> HTML/CSS ainsi que le FrameWork Bootstrap 5</li>
                        <li><b>Back-End : </b>PHP</li>
                        <li><b>Données : </b>MariaDB géré avec PhpMyAdmin</li>
                    </ul>
                    <br>
                    <div class="img">
                        <img src="assets/img/Modals/Millenuit/MILLENUITbootstrap.png" alt="bootstrap icone">
                        <img src="assets/img/Modals/Millenuit/MILLENUITjquery.png" alt="bootstrap icone">
                        <img src="assets/img/Modals/Millenuit/MILLENUITMariaDB.png" alt="bootstrap icone">
                        <img src="assets/img/Modals/Millenuit/MILLENUITPHP.png" alt="bootstrap icone">
                    </div>
                </div>
                <br>
                <div class="BDD">
                    <h5><u>La base de données : </u></h5><br>
                    <p>Pour créer et gérer les données de l'application, nous avons utilisé une base de données SQL.
                        La modélisation de la base de données a été réalisée de manière à stocker les informations
                        pertinentes pour chaque informations,
                        telles que les distributeurs, les commerciaux, ou encore les produits proposés. Nous avions un
                        début de script de base de donnée
                        mais il nous a fallut l'améliorer
                    </p>
                    <div class="row mb-8 d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="mt-4 d-flex justify-content-center">
                                <a class=" d-flex justify-content-center my-button"
                                   href="assets/pdf/ModalsPDF/MIILENUITDocTechniqueBDD.pdf" target="_blank">
                                    Analyse de l'évolution de la bdd&nbsp;<i class="bi bi-box-arrow-up-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-4 d-flex justify-content-center">
                                <a class=" d-flex justify-content-center my-button"
                                   href="assets/img/Modals/Millenuit/MILLENUITSchemaBDD.png">
                                    Voir le nouveau schéma relationnel&nbsp;<span
                                        class="bi bi-box-arrow-up-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="GestionProjet">
                        <h5><u>La gestion de projet: </u></h5><br>
                        <p>Le projet est réalisé selon la méthode Agile, où les tâches sont rangées dans des
                            tableaux.<br>
                            L'outil de gestion de projet utilisé est Trello.
                        </p><br>
                        <div class="mt-4">
                            <a class="my-button" href="assets/img/Modals/Millenuit/MILLENUITTrello.png">
                                Voir le tableu Trello&nbsp;<span class="bi bi-box-arrow-up-right"></span></a>
                        </div>
                        <div class="img">
                            <img src="assets/img/Modals/Millenuit/MILLENUITTrello-Logo.png" alt="Logo Millenuit">
                        </div>
                    </div>
                    <br>
                    <div class="Missions">
                        <h5><u>Les missions : </u></h5><br>
                        <p>Afin de mener à bien le projet nous devions donner des livrables à des dates précises. Nous
                            nous sommes partagé les différentes tâches à réaliser dans chacun des livrables, ce qu'on
                            appel des tickets.
                        </p>
                        <h6>Mes tickets : </h6>
                        <p>Après la répartitons des fonctionalités j'avais donc des tâches à réaliser : </p>
                    </div>
                    <br>
                    <div class="tableauTaches">
                        <div class="mt-4 ">
                            <a class="my-button" href="#" data-bs-toggle="collapse"
                               data-bs-target="#taches" aria-expanded="false">
                                <i class="bi bi-chevron-down"></i>&nbsp;Voir les fonctionnalités réalisées</a>
                        </div>
                        <div class="collapse" id="taches">
                            <?php include 'Tableau/Millenuit/TableauTaches.php'; ?>
                        </div>
                    </div>
                    <div class="tableauCompetences">
                        <div class="mt-4 ">
                            <a class="my-button" href="#" data-bs-toggle="collapse"
                               data-bs-target="#competences" aria-expanded="false">
                                <i class="bi bi-chevron-down"></i>&nbsp;Voir les compétences mobilisées</a>
                        </div>
                        <div class="collapse" id="competences">
                            <?php include 'Tableau/Millenuit/TableauCompetences.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

