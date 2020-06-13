<!doctype html>
<html class="no-js" lang="zxx">
<body>

    <div class="container" style="padding-top:30px;margin-bottom:5px;padding-bottom:5px;">

<div class="container" style="text-align: center;">
   <form style="display: inline-block;" action="<?= base_url('projek/patukang/search'); ?>" method="post">
    <input type="text" class="form-control form-control-user" required="1" style="border-color: #22a7a7;width:400px" name="keyword" placeholder="Cari Nama Tukang">
    <br>
    <input type="submit" class="btn btn-primary btn-user"  style="background-color:#22a7a7;border-color:#22a7a7;width:200px" name="search_submit" value="Cari Tukang">
    </form>
</div>
           <?= $this->session->flashdata('message');?>
                    
        <div class="container" style="padding: 5px 5px 5px 5px ; margin: 5px 5px 5px 5px ;">
      
            <img class="slideshow" style="border-radius: 5px 5px 5px 5px;width:100%" src="<?php echo base_url('assets/images/iklan.jpg')?>">
            <img class="slideshow" style="border-radius: 5px 5px 5px 5px;width:100%" src="<?php echo base_url('assets/images/iklan2.jpg')?>">
            <img class="slideshow" style="border-radius: 5px 5px 5px 5px;width:100%" src="<?php echo base_url('assets/images/iklan3.jpg')?>">
    </div>
  </div>
  
    
<div class="container tes" style="padding-left:150px;padding-right:150px;margin-bottom:0px;padding-bottom:0px;margin-top:5px;padding-top:5px">
        <h5 style="text-align: center;padding-bottom:15px;padding-to
        p:15px;background-color:#22a7a7;color:white;font-family:Roboto">
          <a href="<?= base_url('projek/patukang/berandaTerendah')?>"><b style="color:white">Kategori Harga Terendah :</b></h5>
        </h5>
        
            <div class="major-caousel js-carousel-1 owl-carousel" style="padding-left:50px;padding-right:50px">
                <?php
          foreach($terendah as $baristerendah) {
            if($terendah){?>
                <div class="media d-block media-custom text-center"> 
                  <a ><img src="<?=base_url('upload/foto_cus/'.$baristerendah->foto_diri);?>" width="200" height="250" alt="Image Placeholder" ></a>
                  <div class="media-body">
                    <h5 class="mt-0 text-black"><?php echo $baristerendah->nam_leng; ?></h5>
                    <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $baristerendah->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form>    
                  </div>
                </div>
            <?php
        }else{?>
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto">
          <b>Kategori Harga Terendah Tidak Tersedia</b>
        </h5>
        <?php
      }
      }
        ?>
            </div>
  </div>
    
    <div class="container dekstop">
     <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto">
      <b>Kategori Tukang :</b>
    </h5>
          <div class="row">      
          
                <?php
          foreach($alumunium as $barisalumunium) {
            if($alumunium){
              ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black;">
            <a href="<?= base_url('projek/patukang/berandaAlumunium')?>"><b style="color:#22a7a7">Tukang Alumunium</b></a></h5>
            <div class="scroll" style="padding-bottom:0px">
              <div class="media d-block media-custom text-center">
                <a ><img src="<?=base_url('upload/foto_cus/'.$barisalumunium->foto_diri);?>" width="200" height="250" alt="Image Placeholder" ></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $barisalumunium->nam_leng; ?></h3>
                    <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $barisalumunium->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
              </div>
          
            </div>
          
          </div>
            <?php
        }else{       ?>
        <div class="col-lg-3 col-md-4 col-sm-6" style="display:none">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black;"><b>Tukang Alumunium</b></h5>
            <div class="scroll" style="padding-bottom:0px">
              <div class="media d-block media-custom text-center">
                <a ><img src="<?=base_url('upload/foto_cus/'.$barisalumunium->foto_diri);?>" width="200" height="250" alt="Image Placeholder" ></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $barisalumunium->nam_leng; ?></h3>
                    <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $barisalumunium->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
              </div>
          
            </div>
          
          </div>
        <?php
      }
        }
        ?>
           
        <?php
        foreach($keramik as $bariskeramik) {
          if($keramik){
            ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black">
            <a href="<?= base_url('projek/patukang/berandaKeramik')?>"><b style="color:#22a7a7">Tukang Keramik</b></a></h5>
            <div class="scroll" style="padding-bottom:0px">
        
                <div class="media d-block media-custom text-center">
                  <a>
                    <img src="<?=base_url('upload/foto_cus/'.$bariskeramik->foto_diri);?>" width="200" height="250" alt="Image Placeholder" >
                  </a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $bariskeramik->nam_leng; ?></h3>
                   <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $bariskeramik->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
                </div>
            
            </div>
          
          </div>
          <?php
        }else{?>
          <div class="col-lg-3 col-md-4 col-sm-6" style="display:none;">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black"><b>Tukang Keramik</b></h5>
            <div class="scroll" style="padding-bottom:0px">
        
                <div class="media d-block media-custom text-center">
                  <a>
                    <img src="<?=base_url('upload/foto_cus/'.$bariskeramik->foto_diri);?>" width="200" height="250" alt="Image Placeholder" >
                  </a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $bariskeramik->nam_leng; ?></h3>
                    <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $bariskeramik->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
                </div>
            
            </div>
          
          </div>
        <?php
        }}
        ?>
        
        <?php
        foreach($atap as $barisatap) {
          if ($atap) {
          ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black">
            <a href="<?= base_url('projek/patukang/berandaAtap')?>"><b style="color:#22a7a7">Tukang Atap</b></a></h5>
            <div class="scroll" style="padding-bottom:0px">
                <div class="media d-block media-custom text-center">
                  <a>
                    <img src="<?=base_url('upload/foto_cus/'.$barisatap->foto_diri);?>"  width="200" height="250" alt="Image Placeholder" >
                  </a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $barisatap->nam_leng; ?></h3>
                    <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $barisatap->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
                </div>
            </div>
          </div>
           <?php
        }else{
          ?>
          <div class="col-lg-3 col-md-4 col-sm-6" style="display: none">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black"><b>Tukang Atap</b></h5>
            <div class="scroll" style="padding-bottom:0px">
                <div class="media d-block media-custom text-center">
                  <a>
                    <img src="<?=base_url('upload/foto_cus/'.$barisatap->foto_diri);?>"  width="200" height="250" alt="Image Placeholder" >
                  </a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $barisatap->nam_leng; ?></h3>
                   <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $barisatap->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
                </div>
            </div>
          </div>

        <?php
        } }
        ?>
        
         <?php
         foreach($cat as $bariscat) {
          if($cat){
            ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black">
             <a href="<?= base_url('projek/patukang/berandaCat')?>"><b style="color:#22a7a7">Tukang Cat</b></a></h5>
            <div class="scroll" style="padding-bottom:0px">
                <div class="media d-block media-custom text-center">
                  <a ><img src="<?=base_url('upload/foto_cus/'.$bariscat->foto_diri);?>"  width="200" height="250" alt="Image Placeholder" ></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $bariscat->nam_leng; ?></h3>
                    <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $bariscat->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
                </div>
            </div>  
          </div>
      <?php
        }else{
          ?>
          <div class="col-lg-3 col-md-4 col-sm-6" style="display:none">
          <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;color:black"><b>Tukang Cat</b></h5>
            <div class="scroll" style="padding-bottom:0px">
                <div class="media d-block media-custom text-center">
                  <a ><img src="<?=base_url('upload/foto_cus/'.$bariscat->foto_diri);?>"  width="200" height="250" alt="Image Placeholder" ></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $bariscat->nam_leng; ?></h3>
                    <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                    <input type="hidden" name="id_tukang" value="<?= $bariscat->id_tukang; ?>">
                    <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;padding-left:20px">
                    </form> 
                  </div>
                </div>
            </div>  
          </div>
      <?php
        }  }
      ?>

        </div>
      </div>

<div class="container dekstop" style="padding-top:30px">
     <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto"><b>Semua Kategori</b></h5>
     <div class="row">
    <?php  
  foreach ($all as $baris){ ?>
                    
          <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <img src="<?=base_url('upload/foto_cus/'.$baris->foto_diri);?>"  width="200" height="250" alt="Image Placeholder" >
               <div class="text">
                <h3><a href="single.html"></a><?php echo $baris->nam_leng; ?></h3>
                <p class="sched-time">
                  <span><?php echo $baris->Keahlian; ?></span> <br>
                </p>
                <p>Rp.<?php echo $baris->harga_tukang; ?></p>
               <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
            <input type="hidden" name="id_tukang" value="<?= $baris->id_tukang; ?>">
            <input type="submit" value="Booking" name="booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7;">
                </form> 
                
              </div>
              
            </div>
          </div>
             
            <?php 
             } ?>
          
              
            </div>
          </div>
      
        <div class="container mobile" style="margin-top:10px"> 


      <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto"><b>Kategori Pa-Tukang</b></h5>
      <table class="table" style="margin-top:20px;margin-bottom:0px">
      <tr>
      
     
      <td>
       <a href="<?= base_url('projek/patukang/berandaTerendah')?>">
      <li style="background-color: white"><b style="color:black"> Harga Terendah</b></li>
      </a>
      </td>
     
      </tr>
      </table>

      <table class="table" style="margin-bottom:30px;margin-top:0px">
     <tr>
        <td colspan="10">
      <li style="background-color: white"><b style="color: black"> Keahlian/Tukang :</b></li>
      </td>
     </tr>
      <tr>
      <td>
      <a href="<?= base_url('projek/patukang/berandaAlumunium')?>"><b style="color:#22a7a7">
      Alumunium</b>
       </a>
      </td>
      <td>
      <a href="<?= base_url('projek/patukang/berandaKeramik')?>"><b style="color:#22a7a7">
      Keramik</b>
        </a>
      </td>
      <td>
      <a href="<?= base_url('projek/patukang/berandaAtap')?>"><b style="color:#22a7a7">
      Atap</b>
        </a>
      </td>
      <td>
      <a href="<?= base_url('projek/patukang/berandaCat')?>"><b style="color:#22a7a7">
      Cat</b>
        </a>
      </td>
      </tr>
      </table>

      <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto"><b>Semua Kategori</b></h5> 
     <table data-aos="fade-up" data-aos-delay="100"  class="blog d-block">
      <?php  
        foreach ($all as $baris){ ?>
            
          <tr>
                
           <td  class="bg-image order-2" style="background-image: url(<?=base_url('upload/foto_cus/'.$baris->foto_diri);?>);" data-aos="fade" ></td>
            
              <td></td>
              <td class="text">
                <h3><a href="single.html"></a><?php echo $baris->nam_leng; ?></h3>
                <p class="sched-time">
                  <span><?php echo $baris->Keahlian; ?></span> <br>
                </p>
                <p>Rp.<?php echo $baris->harga_tukang; ?></p>
                
                <form action="<?= base_url('projek/patukang/sewatukang'); ?>" method="post">
                  <input type="hidden" name="id_tukang" value="<?php $baris->id_tukang; ?>">
                  <input type="submit" value="Booking" class="btn btn-primary btn-sm" style="background-color:#22a7a7;border-color:#22a7a7">
                </form>
                
              </td>
          </tr>
          <tr> <td></td></tr>
             
            <?php 
             } ?>
          
              
            </table>
          </div>

<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-1.2.1.pack.js"></script>


        </body>
</html>