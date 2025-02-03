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
                  <!--  1 day -->
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 gallery1st print1dayfree ">
                     <button class="button-free" onCLick="$.ajax({url:'codes/1-day-free.php',type:'GET',success:function(data){$('.print1dayfree').html(data);}});" type="submit" id="1dayfree">              
                        <div id="oben">
                           <img src="assets/img/printing.png" id="1dayfreeimg" width="208px" class="img-responsive" />
                        </div>
                        <div id="unten">
                           <h3>1 Day</h3>
                        </div>
                     </button>
                  </div>

                  <!--  3 day -->
                  <div class="col-lg-3 col-md-3 col-sm-3 gallery1st print1weekfree">
                     <button class="button-free" onCLick="$.ajax({url: 'codes/3-day-free.php', type: 'GET', success: function(data){$('.print1weekfree').html(data);}});" type="submit" id="1weekfree">
                        <div id="oben">
                           <img src="assets/img/printing.png" id="3dayfreeimg" width="208px" class="img-responsive" />
                        </div>
                        <div id="unten">
                           <h3>7 Day</h3>
                        </div>
                     </button>			
                  </div>

                  <!--  7 day -->
                  <div class="col-lg-3 col-md-3 col-sm-3 gallery1st print1monthfree">
                     <button class="button-free" onCLick="$.ajax({url: 'codes/1-week-free.php', type: 'GET', success: function(data){$('.print1monthfree').html(data);}});" type="submit" id="1monthfree">
                        <div id="oben">
                           <img src="assets/img/printing.png" id="7dayfreeimg" width="208px" class="img-responsive" />
                        </div>
                        <div id="unten">
                           <h3>90 Day</h3>
                        </div>
                     </button>			
                  </div>

                  <!--  kids free -->
                  <div class="col-lg-3 col-md-3 col-sm-3 gallery1st printkidsfree">
                     <button class="button-kids" onCLick="$.ajax({url: 'codes/kids-free.php', type: 'GET', success: function(data){$('.printkidsfree').html(data);}});" type="submit" id="kidsfree">
                        <div id="oben">
                           <img src="assets/img/printing.png" id="kidsfreeimg" width="208px" class="img-responsive" />
                        </div>
                        <div id="unten">
                           <h3>Kids</h3>
                        </div>
                     </button>			
                  </div>
               </div>
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
        $('#3dayfreeimg').hide();$("#1weekfree").click(function(){$("#3dayfreeimg").show(); });
        $('#7dayfreeimg').hide();$("#1monthfree").click(function(){$("#7dayfreeimg").show(); });
        $('#kidsfreeimg').hide();$("#kidsfree").click(function(){$("#kidsfreeimg").show(); });

      });
      </script>
   </body>
</html>