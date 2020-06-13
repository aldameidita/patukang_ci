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
            <div class="col-lg-7 col-md-12 col-sm-12">
            <h1 class="mb-4 tes">Selamat Datang di Website Kami</h1>
            <p class="mb-4 tes">Temukan Jasa Tukang Terbaikmu disni</p>
            <h3 class="mb-4" style="font-size:25px;color:white"> 
            Belum Punya Akun ? 
            <a href="#myModal" id="custId" data-toggle="modal" style="color:black">
            <b style="text-decoration: underline;">Daftar Sekarang</b>
            </a>
           </h3>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
            <form method="post" action="<?php echo base_url('projek/login/cek_login');?>">
            <h1 class="mb-4" style="color:black;"><b>MASUK</b></h1>
            <?= $this->session->flashdata('message');?>
            <label style="color:white">Masukkan Email Anda</label>
           <input type="Email" class="form-control" required="1" autofocus="1" name="email" style="border-color:white">
            <label style="color:white">Masukkan Password Anda</label>
           <input type="Password" class="form-control" required="1" name="password" style="border-color:white"><br>
           <input type="submit" class="btn btn-primary btn-user btn-block" value="Masuk" style="padding-top:10px;background-color:#22a7a7;border-color:white">
            <a href="<?= base_url('projek/patukang/forgot'); ?>" style="color:black">
            <b style="text-decoration: underline;">Lupa Password</b>
            </a> 
            </form>
            </div>
          </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModal" role="dialog" >
        <div class="modal-dialog" role="document" style="width:auto;">
            <div class="modal-content" style="color:black">
                <div class="modal-header">                
            <h4 class="modal-title">DAFTAR SEKARANG</h4>
            </div>
            <div class="modal-body" style="margin-left:10px;margin-right:10px;margin-bottom:10px;border-radius: 10px 10px 10px 10px">
            <form method="post" class="user" name="daftaruser" action="<?php echo base_url('projek/daftar');?>"  >
            <div class="row">
            <div class="col-6">
            <label style="color:black;font-size:15px">Nama </label> 
            <?= form_error('nam_leng','<i style="font-size:10px;color:red">','</i>'); ?>
           <input type="text" class="form-control" name="nam_leng" required="1" value="<?= set_value('nam_leng');?>" style="border:1px solid white;background-color:#22a7a7">
            </div>
            <div class="col-6">
            <label style="color:black;font-size:15px">No.Telp</label>
           <input type="text" class="form-control" name="no_telp" minlength="11" required="1" maxlength="13" value="<?= set_value('no_telp');?>"
           style="border: 1px solid white;background-color:#22a7a7"> 
           </div>
           <div class="col-6">
            <label style="color:black;font-size:15px">Alamat</label>
           <input type="text" class="form-control" name="alamat"  required="1" value="<?= set_value('alamat');?>" style="border: 1px solid white;background-color:#22a7a7">
            </div>
           <div class="col-6">
            <label style="color:black;font-size:15px">Email</label>
            <?= form_error('email','<i style="font-size:10px;color:red">','</i>'); ?>
           <input type="email" class="form-control" name="email" id="email" required="1" value="<?= set_value('email');?>" style="border: 1px solid white;background-color:#22a7a7">
            </div>
           <div class="col-6">
            <label style="color:black;font-size:15px">Password</label>
            <i style="font-size:10px;color:red">&nbsp;&nbsp;*minimal 8 Karakter</i>
           <input type="Password" class="form-control" id="password" name="password" required="1" minlength="8"  style="border: 1px solid white;background-color:#22a7a7">
           </div>
           <div class="col-6">
            <label style="color:black;font-size:15px">Re-Password</label> 
            <input type="Password" class="form-control" id="re_password" name="re_password" required="1" minlength="8" style="border: 1px solid white;background-color:#22a7a7">
            <?= form_error('re_password','<div style="font-size:10px;color:red">','</div>'); ?>
            
           </div>
           <div class="col-12">
           <input type="submit" class="btn btn-primary btn-user btn-block" id="submit" name="submit" value="Daftar" style="background-color:#22a7a7;border: 1px solid black;color:white;margin-top:20px;height:40px;">
          </div>
          </div>
           <i style="color:black;font-size:12px;padding-top:10px">Dengan mendaftar berarti anda telah menyetujui kebijakan dan privasi dari patukang.com</i>
            </form>
                </div>              
            </div>
        </div>
    </div>
      
 
      <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-lg-10 col-md-12">
            <div class="mb-5">
              <h3 class="footer-heading mb-4" style="color:black">Tentang Pa-Tukang</h3>
              <p style="color:black">Pa-tukang adalah sebuah situs web yang dibuat khusus untuk Anda yang ingin mencari jasa seorang ahli bangunan atau seorang tukang secara perseorangan. </p>
            </div>
          </div>
         
          <div class="col-lg-2 col-md-12">
                <h3 class="footer-heading mb-4" style="color:black">Ikuti Kami</h3>
                <div>
                  <a href="#" class="pl-0 pr-3" style="color: black"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3" style="color: black"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3" style="color: black"><span class="icon-instagram"></span></a>
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
 
 <script>

    $("#submit").on('click',function(){
            var nam_leng = $('input[name="nam_leng"]').val();
            var no_telp = $('input[name="no_telp"]').val();
            var alamat = $('input[name="alamat"]').val();
            var email = $('input[name="email"]').val();
            var password = $('input[name="password"]').val();
            $.ajax({
                url: '<?php echo base_url('projek/daftar/usercustomer'); ?>',
                type: 'POST',
                data: {nam_leng:nam_leng,no_telp:no_telp,alamat:alamat,email:email,password:password},
                success: function(response){
                    $('input[name="nam_leng"]').val("");
                    $('input[name="no_telp"]').val("");
                    $('input[name="alamat"]').val("");
                    $('input[name="email"]').val("");
                    $('input[name="password"]').val("");
                }
            })
 
        });

 </script>
  </body>
</html>
