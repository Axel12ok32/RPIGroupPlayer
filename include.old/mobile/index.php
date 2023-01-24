<?php include "./include/navigation/header.php"; ?>
<?php include "./include/pages/downloadappios.php"; ?>
<div class="rpi_mcontainer">
<?php include "./include/navigation/navbar.php"; ?>
  <div class="rpi_mfaderpage">
    <div class="header">
      <img src="img/RpiGroupPlayWHITE.png" alt="Logo">
      <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
    </div>
    <div class="content">
      <h3>Seleziona la radio che vuoi ascoltare</h3>
      <br>
      <div class="row">
        <?php
          $radio_code_numbers = count($radio_code);
          $countradio = 0;
          while($countradio < $radio_code_numbers){
            $countradio++;
            $radio_select = $radio_code[$countradio];
            ?>
            <div class="col-6" style="margin-bottom: 15px;">
              <a href="<?php echo $ascolta[$countradio]; ?>">
                <img src="<?php echo $radio_logo[$radio_select]; ?>" alt="radio logo">
              </a>
            </div>
            <?php
          }
        ?>
      </div>
    </div>
    <div class="rpi_mfooter">
      App powered by A.S.V. Studios APPS
    </div>
  </div>
</div>
<?php include "./include/navigation/footer.php"; ?>