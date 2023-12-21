<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MILLENUIT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="sujet">
                    <h5><u>L'entreprise : </u></h5><br>
                    <p>L'entreprise <b><i>Mille Nuits</i></b>, SA au capital de 4 500 000 €, est leader sur le marché français des couettes et oreillers.
                        Elle produit chaque jour plus de 35 000 couettes, couvertures, oreillers et alèses et fournit différents acteurs:</p>

                    <ul>
                        <li>les distributeurs, sous marque "distributeur" </li>
                        <li>l'hôtellerie</li>
                        <li>les collectivités (hôpitaux principalement), sous marque propre</li>
                        <li>les grands acteurs de la VPC (La Redoute, 3Suisses...)</li>
                        <li>de la VPC (La Redoute, 3Suisses...)</li>
                        <li>les particuliers. </li>
                    </ul>
                    <p>Sa force est de travailler sur des textiles innovants et écologiques (antiacariens, antibactériens, Oeko-Tex...). </p>
                </div><br>
                <div class="description">
                    <h5><u>Description du projet : </u></h5><br>
                    <p>
                        En première année, j'ai réalisé un projet appelé "Mille Nuits", qui a été ma première expérience en PHP. 
                        Il s'agissait d'une application Web qui permetait au commerciaux d'assurer un meilleur suivi des visites
                        réalisées auprès des distributeurs, élaborer une meilleure démarche de
                        communication et mieux répartir les budgets consacrés à l'activité de représentation.<br><br>
                        L'interface du site était conçue pour offrir aux utilisateurs une expérience utilisateur agréable et intuitive. 
                        Elle comprenait une page d'accueil,une page de connexion ainsi que des catégories clairement affichées pour faciliter la navigation. 
                    </p>
                </div><br>  
                <div class="EnvDev">
                    <h5><u>Environnement de développement :     </u></h5><br>
                    <ul>
                        <li><b>Front-end : </b> HTML/CSS ainsi que le FrameWork Bootstrap 5 </li>
                        <li><b>Back-End : </b>PHP</li>                     
                        <li><b>Données : </b>MariaDB géré avec PhpMyAdmin</li>                      
                    </ul><br>
                    <div class="img">      
                        <img src="assets/img/Modals/MILLENUITbootstrap.png"  alt="bootstrap icone">
                        <img src="assets/img/Modals/MILLENUITjquery.png"  alt="bootstrap icone">
                        <img src="assets/img/Modals/MILLENUITMariaDB.png" alt="bootstrap icone">
                        <img src="assets/img/Modals/MILLENUITPHP.png"  alt="bootstrap icone"> 
                    </div>
                </div><br>
                <div class="BDD">
                    <h5><u>La base de données : </u></h5><br>
                    <p>Pour créer et gérer les données de l'application, nous avons utilisé une base de données SQL.
                        La modélisation de la base de données a été réalisée de manière à stocker les informations pertinentes pour chaque informations, 
                        telles que les distributeurs, les commerciaux, ou encore les produits proposés. Nous avions un début de script de base de donnée 
                        mais il nous a fallut l'améliorer
                    </p>
                    <div class="row mb-8 d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="mt-4 d-flex justify-content-center">
                                <a class=" d-flex justify-content-center my-button" href="assets/pdf/ModalsPDF/MIILENUITDocTechniqueBDD.pdf" target="_blank">
                                    Analyse de l'évolution de la bdd&nbsp;<i class="bi bi-box-arrow-up-right"></i></a> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-4 d-flex justify-content-center">
                                <a class=" d-flex justify-content-center my-button" href="assets/img/Modals/MILLENUITSchemaBDD.png">
                                    Voir le nouveau schéma relationnel&nbsp;<span class="bi bi-box-arrow-up-right"></span></a> 
                            </div>
                        </div>
                    </div>
                    <div class="GestionProjet">
                        <h5><u>La gestion de projet: </u></h5><br>
                        <p>Le projet est réalisé selon la méthode Agile, et où les tâches sont rangées dans des tableaux.<br>
                            L'outil de gestion de projet utilisé est Trello.
                        </p><br>
                        <div class="mt-4">
                            <a class="  my-button" href="assets/img/Modals/MILLENUITTrello.png">
                                Voir le tableu Trello&nbsp;<span class="bi bi-box-arrow-up-right"></span></a> 
                        </div>
                        <div class="img">
                            <img src="assets/img/Modals/MILLENUITTrello-Logo.png" alt="alt"/>
                        </div>
                    </div><br>
                    <div class="Missions">
                        <h5><u>Les missions : </u></h5><br>
                        <p>Afin de mener à bien le projet nous devions donner des livrables à des dates précises. Nous nous sommes partagé les différentes tâches à réaliser dans chacun des livrables.
                        </p>
                    </div><br>
                    <div class="tableau">
                        <div class="mt-4 ">
                            <a onclick="changerTexteEtIcone()"class="my-button" id="tab" type="button" data-bs-toggle="collapse" data-bs-target="#competences" aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-chevron-down"></i>&nbsp;Voir les compétences mobilisées</a>
                        </div>   
                        <div class="collapse" id="competences">
                            <?php include 'Tableau/Tableau.php'; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>     
    </div>
</div>
<!-- 
<script>

    function changerTexteEtIcone() {
        
        var bouton = document.getElementById('tab');

        if (bouton.innerHTML === 'Voir les compétences mobilisées') {
            bouton.innerHTML = 'Cacher les compétences mobilisées';
            bouton.prepend( <i class="bi bi-chevron-down"></i>);
            // Remplacez 'votre_icone' par la classe de votre icône, par exemple 'fa fa-icon' si vous utilisez Font Awesome
         
        } else {
            bouton.innerHTML = 'Cacher les compétences mobilisées';
            bouton.prepend( <i class="bi bi-chevron-right"></i>)
        }
    }
</script>

comment -->
