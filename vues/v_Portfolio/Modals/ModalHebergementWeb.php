<div class="modal fade" id="Hebergement" tabindex="-1" aria-labelledby="GenMdp" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark">Hébergement web</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <div class="obj">
                    <h5><u>Objectif : </u></h5><br>
                    <p>
                       Ayant choisi l'option développement durant mon BTS, j'ai choisi de réaliser ce projet, 
                       plutôt tourné réseau, pour développer mes compétences dans ce domaine. Cela me permet aussi  
                       de mieux comprendre les aspects techniques de l'hébergement, des serveurs web et de la gestion d'infrastructures.
                    </p> 
                 </div><br>
                 <div class="EnvDev">
                    <h5><u>Environnement de travail :     </u></h5><br>
                    <ul>
                        <li><b>HardWare : </b>Rasberry Pi 4 type b</li>
                        <li><b>Serveur : </b>Apache 2</li>                     
                        <li><b>OS : </b>Raspberry Pi OS (bookworm -> basé sur debian 11)</li>                      
                    </ul><br>
                    <div class="img">      
                        <img src="assets/img/Modals/Hebergement/Rasberry_Pi.png"  alt="bootstrap icone">
                        <img src="assets/img/Modals/Hebergement/ApacheLogo.png"  alt="bootstrap icone">
                        <img src="assets/img/Modals/Hebergement/RasBerryOs.png"  alt="bootstrap icone">
                    </div>
                </div><br>
                <div class="EnvDev">
                    <h5><u>Utilitaires : </u></h5><br>

                    <p>Pour mener à bien mon projet, j'ai utilisé différents logiciels et utilitaires comme :</p>
                    <ul>
                        <li><b>Certbot :</b>Ce robot ma permis d'obtenir un certificat SSL valide via let's encrypt ce
                            qui m'a permit d'utiliser le protocole HTTPS
                        </li>
                        <li><b>Powershell :</b>Le powershell m'a permis, via une connexion ssh, de me connecter à mon
                            raspberry-pi
                        </li>
                        <li><b>FileZilla :</b> FileZilla est un client FTP qui permet de transférer des fichiers
                            facilement vers un serveur. Pour cela, j'ai utilisé le port 21 et 22
                        </li>
                        <li><b>ProFTPD : </b>ProFTPD est un serveur FTP libre qui m'a donc permis d'accéder via
                            FileZilla à mon raspberry-pi, j'ai pu facilement transférer mon portfolio dans celui-ci.
                        </li>

                    </ul>
                    <div class="img">
                        <img src="assets/img/Modals/Hebergement/certbot.png" alt="">
                        <img src="assets/img/Modals/Hebergement/letsencrypt.png" alt="">
                        <img src="assets/img/Modals/Hebergement/powershell.png" alt="">
                        <img src="assets/img/Modals/Hebergement/vnc.png" alt="">
                        <img src="assets/img/Modals/Hebergement/crowdsec.png" alt="">
                        <img src="assets/img/Modals/Hebergement/proftpd.png" alt="">

                    </div>
                </div><br>
                <div class="crowdsec">
                    <h5><u>CrowdSec</u></h5><br>
                    <p>CrowdSec est un outil open source gratuit, d'origine française, qui s'inspire de Fail2ban et vise
                        à protéger votre serveur en détectant et en bloquant les attaques.<br><br>

                        Lorsque des adresses IP sont bloquées par une instance de CrowdSec, cette information est
                        remontée dans une base de données centralisée via une API. Cela permet de constituer une liste
                        communautaire d'adresses IP malveillantes, gérée par CrowdSec. Bien entendu, un mécanisme de
                        réputation est en place : une adresse IP n'est pas automatiquement bannie partout dès le premier
                        signalement, le processus est un peu plus sophistiqué.<br><br>

                        Actuellement, CrowdSec est disponible en version 1.0. À la suite de cette version, CrowdSec a
                        modifié l'architecture interne de sa solution pour que les différents composants (client,
                        bouncers, processus) communiquent entre eux via une API REST locale. L'utilisation d'une API est
                        particulièrement avantageuse pour rendre les composants indépendants les uns des autres et
                        éviter les attaques directes sur la base de données, cette tâche étant réservée au service de
                        l'API REST locale.</p>
                    <div class="img">
                        <img src="assets/img/schema-crowdsec.jpg" STYLE="width: 800px; height: 555px">

                    </div>

                </div>
            </div>
        </div>     
    </div>
</div>

