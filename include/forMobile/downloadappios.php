<?php
    if(isMobileDeviceIOS()){
        ?>
            <script>
                $(document).ready(function(){
                    if (!window.navigator.standalone) {
                        document.getElementById("installappios").style.display = "block";
                    }else{
                        document.getElementById("installappios").style.display = "none";
                    }
                });
            </script>
            <div class="rpi_mpreloader" id="installappios" style="display: none;">
                <div class="rpi_dbox_mobile">
                    <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 100%;">
                    <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
                    <hr>
                    Installa la nostra app con un semplice passaggio. Segui le istruzioni a schermo!
                    <br><br>
                    <b>SAFARI</b> (iOS e iPadOS)
                    <img src="./img/installapp1.jpeg" style="width: 100%; margin: 7px 0; border-radius: 5px;" alt="passaggio 1">
                    <img src="./img/installapp2.jpeg" style="width: 100%; border-radius: 5px;" alt="passaggio 2">
                    <br><br>
                    Consigliamo l'uso del browser SAFARI. Se stai usando Chrome, Edge, Firefox (eccetera), ti invitiamo subito a cambiare e passare su Safari, modo tale da poter scaricare la nostra app.
                </div>
            </div>
        <?php
    }
?>