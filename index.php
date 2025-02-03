<?php
require_once ('uvs_config.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="assets/img/favicon.ico">
      <title><?= $uvs_title ?></title>
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/style.min.css" rel="stylesheet">
      <link href="assets/css/font-awesome.min.css" rel="stylesheet">
      <style>
         .button-free{
            background-color: orange;
            height: 136px;
            width: 100%;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
         }

         .button-premium{
            background-color: rebeccapurple;
            height: 136px;
            width: 100%;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
         }

         .button-kids{
            background-color: green;
            height: 136px;
            width: 100%;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
         }
      </style>
   </head>

   <body>
      <section id="works"></section>
      <div class="container">
         <div class="row centered mt mb">
            <span class="shutdown_btn"><a href="shutdown.php"><img src="assets/img/shutdown.png" /></a></span>

            <p><a href="index_custom.php"><img src="assets/img/logo.png" /></a></p>
            <h4><?= $uvs_subtitle; ?></h4>
            
            <form id="buttons">
               <div class="row" style="margin-bottom: 16px;">
                  <?php foreach($uvs_alternatives as $alt): ?>
                  <div class="col-lg-3 col-md-3 col-sm-3 gallery1st <?= $alt["key"]; ?>">
                     <button class="button-free" onCLick="$.ajax({url:'<?= $alt["url"]; ?>',type:'GET',success:function(data){$('.print<?= $alt["key"]; ?>').html(data);}});" type="submit" id="<?= $alt["key"]; ?>">              
                        <div id="oben">
                           <img src="assets/img/printing.png" id="<?= $alt["key"]; ?>img" width="208px" class="img-responsive" />
                        </div>
                        <div id="unten">
                           <h3><?= $alt["name"]; ?></h3>
                        </div>
                     </button>
                  </div>
                  <?php endforeach; ?>
               </div>
            </form>
         </div>
      </div>
      
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script>
      $(document).ready(function() {
        $("#buttons").submit(function(e) {
          e.preventDefault();
            $("#1dayfree").attr("disabled", true);
            $("#1weekfree").attr("disabled", true);
            $("#1monthfree").attr("disabled", true);
            $("#kidsfree").attr("disabled", true);
            return true;
          });
      });

      $(document).ready(function() {
        $('#1dayfreeimg').hide();$("#1dayfree").click(function(){$("#1dayfreeimg").show(); });
        $('#3dayfreeimg').hide();$("#3dayfree").click(function(){$("#3dayfreeimg").show(); });
        $('#7dayfreeimg').hide();$("#7dayfree").click(function(){$("#7dayfreeimg").show(); });
        $('#kidsfreeimg').hide();$("#kidsfree").click(function(){$("#kidsfreeimg").show(); });
      });
      </script>
   </body>
</html>