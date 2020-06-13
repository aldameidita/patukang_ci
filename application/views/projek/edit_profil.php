<!doctype html>
<html class="no-js" lang="zxx">
<body>
          <?php
           foreach ($user as $baris) {
          ?>
          
               <div class="row" style="padding-top: 70px;margin-bottom:50px">
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                  <div class="col-lg-3 col-md-12 col-sm-12" style="padding-left:70px">
                    <table>
                    <tr>
                    <td>
                    <div class="product__thumb">
                     <i class="first__img" style="align-items: center;"><img src="<?=base_url('upload/foto_cus/'.$baris->foto_diri);?>" width="270" height="300" ></i>
                    
                     <form method="post" class="user" action="<?= base_url('projek/patukang/update_gambar_profil');?>" enctype="multipart/form-data">
                    <input type="file" name="foto_diri" style="font-size: 10px" required="1">
                    <input type="hidden" name="id_customer" value="<?=$baris->id_customer;?>" >
                    <input type="submit" name="submit" value="Ganti Foto" style="font-size:10px;">
                    </form>

                    </div>
                    </td>
                </tr>
                 </table>
                </div>

              <div class="col-lg-7 col-md-12 col-sm-12" style="padding-right:80px;padding-left:40px;">
                <u style="color:black;font-size:30px;padding-right:20px;padding-top:20px">EDIT PROFIL</u> 
                 <?= $this->session->flashdata('message');?>
                 
                <form method="post" action="<?= base_url('projek/patukang/update_profil');?>">
                <input type="hidden" value="<?=$baris->id_customer;?>" name="id_customer" >
                  
                    <div class="row" style="padding-bottom:20px;color:black;padding-top:10px">
                    
                    <div class="col-lg-6" style="padding-bottom:10px">
                      &nbsp;Nama : 
                      <input type="text" class="form-control form-control-user" value="<?=$baris->nam_leng;?>" name="nam_leng" style="border-color: #22a7a7;">
                    </div>
                  
                     <div class="col-lg-6" style="padding-bottom:10px">
                       &nbsp;Alamat : 
                     <input type="text" style="border-color: #22a7a7" class="form-control form-control-user" name="alamat" value="<?=$baris->alamat;?>">
                     </div>
                  
                    <div class="col-lg-6" style="padding-bottom:10px">
                       &nbsp;No_Telp : 
                       <input type="text" name="no_telp" class="form-control form-control-user" value="<?=$baris->no_telp;?>" style="border-color: #22a7a7;">
                    </div>

                    <div class="col-lg-6" style="padding-bottom:10px">
                       &nbsp;Email : 
                       <input type="text" class="form-control form-control-user" name="email" value="<?=$baris->email;?>" style="border-color: #22a7a7;height:47px">
                    </div>

                    </div>
                  
                      <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Edit" style="background-color:#22a7a7;border-color:#22a7a7">
                    </form>
              </div>
              <div class="col-lg-1 col-md-12 col-sm-12" ></div>
          </div>
        



        <?php
      }
        ?>                       
</body>
</html>