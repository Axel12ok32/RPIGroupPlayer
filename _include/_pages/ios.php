<?php if(isMobileDeviceIOS()){ ?>

<script>
    $(document).ready(function(){
        if (!window.navigator.standalone) { document.getElementById("installappios").style.display = "block"; }else{ document.getElementById("installappios").style.display = "none"; }
    });
</script>

<div class="rpi_dbody" id="installappios" style="display: block;">
    <div class="rpi_dbox_mobile">
        <img src="./_img/RpiGroupPlayWHITE.png" alt="Logo">
        <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
        <hr>
        Installa la nostra app con un semplice passaggio. Segui le istruzioni a schermo!
        <br><br>
        <b>SAFARI</b> (iOS e iPadOS)
        <img src="./_img/installapp1.jpeg" class="tuto-ios" alt="passaggio 1">
        <img src="./_img/installapp2.jpeg" class="tuto-ios" alt="passaggio 2">
        <br>
        Consigliamo l'uso del browser SAFARI. Se stai usando Chrome, Edge, Firefox (eccetera), ti invitiamo subito a cambiare e passare su Safari, modo tale da poter scaricare la nostra app.
    </div>
</div>

<?php } ?>