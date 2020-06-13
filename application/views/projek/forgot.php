<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/patukang.png')?>">
  
    <title> Pa - Tukang </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/mediaelementplayer.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/flaticon/font/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fl-bigmug-line.css')?>">
      
    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    
   <style type="text/css">
      @media screen and (max-width:680px) {
        .tes{display: none;}
        }
        label{
          color:white;
          font-weight:1px;
          padding-top:10px;
        }
    </style> 
  </head>
  <body style="background-color:white">

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-12 ">
              <h3 class="mb-0"><a class="text-white h1 mb-0"><strong>Pa-Tukang</strong></a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu" style="background-color:#22a7a7">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-blocks-cover overlay" style="background-image: url('<?php echo base_url('assets/images/3.png')?>');" data-aos="fade" data-stellar-background-ratio="0.1" data-aos="fade">
      <div class="container">
          <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="row" style="padding-top:100px;text-align:left">
           <div class="col-lg-2"></div>
            <div class="col-lg-8 col-md-12 col-sm-12">
            <form method="post" action="<?php echo base_url('projek/patukang/forgotPassword');?>">
            <h1 class="mb-4" style="color:black;"><b>LUPA PASSWORD</b></h1>
            <?= $this->session->flashdata('message');?>
            <label style="color:white">Masukkan Email Anda</label>
           <input type="Email" class="form-control" required="1" autofocus="1" name="email" style="border-color:white">
           <br>
           <br>
           <input type="submit" class="btn btn-primary btn-user btn-block" value="Lupa Password" style="padding-top:10px;background-color:#22a7a7;border-color:white">
            
           </form>
         </div>
          <div class="col-lg-2"></div>
       </div></div></div>
          </div>
        </div>
      </div>

            <p style="color:blue;text-align:center;padding-top:20px;font-size:15px">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank" style="color:blue"><u>Colorlib</u></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
         </div>
  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/mediaelement-and-player.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.stellar.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.countdown.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js')?>"></script>
  <script src="<?php echo base_url('assets/js/circleaudioplayer.js')?>"></script>
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
 

  </body>
</html>
