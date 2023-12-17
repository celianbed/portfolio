<section id="profil" class="align-items-center mn-3 col-sm-auto">
    <div class="container">
        <h2 id="text-start">Mon Profil</h2><br><br>
        <div  id="pr">
            <div class="cardP shadow " id="myCardProfil">
                <div class="row">
                    <div class="col-md-6  my-auto ">
                        <h3 class="text-center">Qui suis-je ?</h3>
                        <p>Je me présente, je suis Célian Bedminster j’ai actuellement 20 ans, étudiant en BTS SIO option SLAM.
                            Depuis petit l’informatique m’attire en tout point. Il était donc logique pour moi de m’orienter vers ce domaine pour en faire ma vie professionnelle.</p>
                        <div class="mt-4 ">
                            <a id="cv" class=" d-flex justify-content-center my-button2" href="assets/pdf/BedminsterCelian.pdf" target="_blank">
                                Consulter mon CV</a>
                        </div>
                    </div>
                    <div class="col-md-6" id="progessbar">
                        <p> Programmation :</p>
                        <div class="progress">
                            <div class="progress-bar" id="colorbar" role="progressbar"  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div><br>
                        <p> Réseau :</p>
                        <div class="progress">
                            <div class="progress-bar"  id="colorbar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div><br>
                        <p> Base de données :</p>
                        <div class="progress">
                            <div class="progress-bar"  id="colorbar" role="progressbar"  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
        <div id='mesCompetences'>
            <h2 id="text-start">Mes Compétences</h2><br><br>
            <div class ="row">
                <div class="col-md-4"> 
                    <div class="cardC col-md-12"id="dev"  >
                        <div class="row md-7">
                            <img class="img-fluid rounded-circle" src="assets/img/html.png" > 
                        </div>
                        <div class="row md-5 align-items-center d-flex" >
                            <h3>Développement web</h3>
                            <p>Conception et programmation d'un site web en <b>HTML/CSS/JS/PHP</b> ou via un <b>CMS</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="cardC col-md-12" id="bdd">
                        <div class="row md-7">
                            <img class="img-fluid rounded-circle" src="assets/img/bdd.png"  > 
                        </div>
                        <div class="row md-5">
                            <h3>Gestion de BDD</h3>
                            <p>Stocker, manipuler et gérer les données dans une base de données via <b>MySQL et MariaDB</b>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="cardC col-md-12" id="appli" >
                        <div class="row md-7">
                            <img class="img-fluid rounded-circle" src="assets/img/appli.png"  > 
                        </div>
                        <div class ="row md-5">
                            <h3>Développement Applicatif</h3>
                            <p> Conception et programmation de logiciel métier avec <b>Java /C#/ Wlangage</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tableauSynthèse">
            <div class="mt-4 d-flex justify-content-center">
                <a class=" d-flex justify-content-center my-button" href="assets/pdf/CélianTableauDeSynthèse.pdf" target="_blank">
                    Consulter mon tableau de synthèse des réalisations professionnelles </a>
            </div>
        </div>
    </div>
</section>
<script>
    var delay = 500;
    $(".progress-bar").each(function (i) {
        $(this).delay(delay * i).animate({width: $(this).attr('aria-valuenow') + '%'}, delay);

        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: delay,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now) + '%');
            }
        });
    });
</script>