<div class="modal fade" id="ModalCertificat" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark">Ecocert Certificat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="sujet">
                    <h5><u>L'entreprise : </u></h5><br>
                </div>
                <br>
                <div class="description">
                    <h5><u>Description du projet : </u></h5><br>
                    <p>
                        Lors du troisième semestre, j'ai réalisé un projet appelé "Ecocert-Certificat".
                        J'ai pu découvrir le FrameWork CodeIgniter qui est un FrameWork PHP, il nous a permit de developer plus facilement notre application,
                        notamment au niveau de la sécurité, car ce FrameWork dispose déja de méthode qui permettent de sécuriser uje application
                        Web.

                    </p>
                </div>
                <br>
                <div class="EnvDev">
                    <h5><u>Environnement de développement :</u></h5><br>
                    <ul>
                        <li><b>Front-End : </b> HTML/CSS ainsi que le FrameWork Bootstrap 5</li>
                        <li><b>Back-End : </b>Code Igniter et Jquery</li>
                        <li><b>Données : </b>Sql Server géré par Sql Server Management Studio</li>
                    </ul>
                    <br>
                    <div class="img">
                        <img src="assets/img/Modals/Millenuit/MILLENUITbootstrap.png" alt="photo bootstrap">
                        <img src="assets/img/Modals/Millenuit/MILLENUITjquery.png" alt="photo jquery">
                        <img src="assets/img/Modals/Ecocert/SQLServer.png" alt="photo  SQLServer">
                        <img src="assets/img/Modals/Ecocert/codeIgniter.png" alt="photo Code Igniter">
                    </div>
                </div>
                <br>
                <div class="BDD">
                    <h5><u>La base de données : </u></h5><br>
                    <p>Pour créer et gérer les données de l'application, nous avons utilisé une base de données SQL Server.
                        La modélisation de la base de données a été réalisée de manière à stocker les différentes informations des
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
                            L'outil de gestion de projet utilisé est Jira.
                            Chaque ticket est disponible dans ce que l'ont appel la "BackLog".
                            On a la possibilité de déplacé les tickets dans différente partie du sprint selon l'avancement du ticket.
                        </p><br>
                        <div class="mt-4">
                            <a class="my-button" href="https://slam-equipe-celian-plc.atlassian.net/jira/software/projects/JGCEC/boards/1/backlog?atlOrigin=eyJpIjoiNWUxMDljY2I2NGY3NGRiMTkwZjAzYjI5NzU2ZjZkMmEiLCJwIjoiaiJ9">
                                Voir la BackLog&nbsp;<span class="bi bi-box-arrow-up-right"></span></a>
                        </div>
                        <div class="img">
                            <img style="width: 40vh; height: 20vh" src="assets/img/Modals/Ecocert/Jira.png" alt="Logo Millenuit">
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

