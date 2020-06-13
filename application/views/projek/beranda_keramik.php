<!doctype html>
<html class="no-js" lang="zxx">
<body>

    <div class="container" style="padding-top:30px;margin-bottom:5px;padding-bottom:5px;">

    <div class="container" style="padding: 5px 5px 5px 5px ; margin: 5px 5px 5px 5px ;">
      <div class="row"> 
      <div class="col-11" style="padding: 0px 0px 0px 0px ; margin: 0px 0px 0px 0px ;">
      <form>
      <div style="width:100%;border: 2px solid #22a7a7">
                <input type="text" size="30" id="namaDosen" onkeyup="cariDosen(this.value);" onblur="pilih();"
               placeholder="Nama Tukang ..." style="outline: none;">
            </div>
            <div class="kotakHasil" id="hasilPencarian" style="width:100%; margin:0px auto;display: none;text-align:left;">
                <div class="daftarPencarian" id="dataPencarian">
                </div>
            </div>
        </form>
    </div>
    <div class="col-1" style="padding: 0px 0px 0px 0px ; margin: 0px 0px 0px 0px">
      <h6 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto">
          <b>Cari</b>
      </h6>
    </div>
    </div>
  </div>
           <?= $this->session->flashdata('message');?>
                    
        <div class="container" style="padding: 5px 5px 5px 5px ; margin: 5px 5px 5px 5px ;">
      
            <img class="slideshow" style="border-radius: 5px 5px 5px 5px;width:100%" src="<?php echo base_url('assets/images/iklan.jpg')?>">
            <img class="slideshow" style="border-radius: 5px 5px 5px 5px;width:100%" src="<?php echo base_url('assets/images/iklan2.jpg')?>">
            <img class="slideshow" style="border-radius: 5px 5px 5px 5px;width:100%" src="<?php echo base_url('assets/images/iklan3.jpg')?>">
    </div>
  </div>
  
  <div class="container dekstop" style="padding-top:30px">
     <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto"><b>Kategori Tukang Keramik</b></h5>
     <div class="row">
    <?php  
  foreach ($keramik as $baris){ ?>
                    
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

      <h5 style="text-align: center;padding-bottom:15px;padding-top:15px;background-color:#22a7a7;color:white;font-family:Roboto"><b>Kategori Tukang Keramik</b></h5> 
     <table data-aos="fade-up" data-aos-delay="100"  class="blog d-block">
      <?php  
        foreach ($keramik as $baris){ ?>
          
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

<script type="text/javascript">
    $(function() {
        $('#loading').ajaxStart(function(){
            $(this).fadeIn();
        }).ajaxStop(function(){
            $(this).fadeOut();
        });
    });
    function cariDosen(namaDosen) {
        if(namaDosen.length == 0) {
            $('#hasilPencarian').hide();
        } else {
            $.post("<?php echo base_url(); ?>projek/patukang/tampil", {kirimNama: ""+namaDosen+""}, function(data){
                if(data.length >0) {
                    $('#hasilPencarian').fadeIn();
                    $('#dataPencarian').html(data);
                }
            });
        }
    }
    function pilih(thisValue) {
        $('#namaDosen').val(thisValue);
        setTimeout("$('#hasilPencarian').fadeOut();", 100);
    }
</script>


        </body>
</html>