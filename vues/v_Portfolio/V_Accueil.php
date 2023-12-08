<section id ="home" class="home d-flex align-items-center mn-3 col-sm-auto"  data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" tabindex="0">
    <div class = "container" >
        <div class ="intro">
            <h1>Célian Bedminster</h1>
            <span>Je suis</span>
            <span data-twreplace-charspeed="80" 
                  data-twreplace-wordspeed="5000"
                  data-twreplace='["étudiant","développeur"]'>
                étudiant
            </span>

        </div>
        <div class="mt-4">
            <a class="my-button" href="assets/cv/BedminsterCelian.pdf" download><span id="consulterPDF"></span> Télécharger mon CV</a>
        </div>
        <div id="section-1">
            <a id="scroll-btn" href="#profil"></a>
        </div>
    </div>
</section>

<script>

   $(document).ready(function() {
    $(document).on('click', function(event) {
        alert($(this).attr("id"));
        setAttribute('id','');
      
    });
});

</script>
