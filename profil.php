<!doctype html>
<html class="no-js" lang="zxx">
<body>

  <head>
 <link rel="stylesheet" href="<?= base_url ('assets/css/rating.css');?>">
  </head>
          <?php
           foreach ($user as $baris) {
          ?>
               <div class="row" style="padding-top: 50px;margin-left:50px;margin-bottom:50px">
               <div class="col-lg-2 col-md-12 col-sm-12"></div>  
                    <div class="col-lg-4 col-md-12 col-sm-12" style="padding-left:70px">
                     
                    <table>
                    <tr>
                    <td>
                    <div class="product__thumb">
                    <i class="first__img" style="align-items: center;"><img src="<?=base_url('upload/foto_cus/'.$baris->foto_diri);?>" width="270" height="300" ></i>
                    </div>
                    </td>
                </tr>
            </table>
        </div>
         <div class="col-lg-6 col-md-12 col-sm-12" style="padding-top: 20px;padding-left:30px">
                            <div class="wn__addres__wreapper">
                                <div class="single__address">
                                    <div class="content">
                                        <h2><?php echo $baris->nam_leng; ?></h2> 
                                        <form action="<?= base_url('projek/patukang/editprofil'); ?>" method="post">
                                      <input type="hidden" name="id_tukang" value="<?php echo $baris->id_customer; ?>">
                                      <input type="submit" value="edit-profil" name="edit-profil">
                                        </form> 
                                    </div>
                                </div>
                            <table>
                            <tr>
                            <td>
                                <div class="single__address">
                                    <i class="icon-location-pin icons">
                                        Alamat:
                                    </i>
                                    <div class="content">
                                        <p><?php echo $baris->alamat; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <i class="icon-phone icons">
                                        Nomer Telfon:
                                    </i>
                                    <div class="content">
                                        <p><?php echo $baris->no_telp; ?></p>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="single__address" style="padding-top:10px">
                                    <i class="icon-envelope icons">
                                        Email:
                                    </i>
                                    <div class="content">
                                        <p><?php echo $baris->email; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <img src="star.png" width="13px"> &nbsp;
                                        Rating:
                                    <div class="content">
                                        <p>
                                          <?php 
                                          echo $rating;
                                          ?>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                             <td>
                                <div class="single__address" style="padding-top:10px">
                                    <li style="background-color:white">
                                        Keahlian/Tukang :
                                    </li>
                                    <div class="content">
                                        <?php 
                                        if ($baris->status_tukang == 2) {
                                        foreach ($user_tukang as $baris2) {?>
                                          <p> <?php echo $baris2->Keahlian; ?> </p>
                                        <?php
                                        }
                                        }else{?>
                                        <p>-</p>
                                        <?php
                                        } 
                                        ?>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left: 50px">
                                <div class="single__address" style="padding-top:10px">
                                    <li style="background-color:white">
                                        Harga Jasa:
                                    </li>
                                    <div class="content">
                                       <?php 
                                        if ($baris->status_tukang == 2) {
                                        foreach ($user_tukang as $baris2) {?>
                                          <p>Rp <?php echo $baris2->harga_tukang; ?>,00 </p>
                                        <?php
                                        }
                                        }else{?>
                                        <p>-</p>
                                        <?php
                                        } 
                                        ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                     </table>
                            </div>
                            </div>
                          </div>
                   
        <div class="row">
        <?php
      }
        ?>       
                <div class="col-lg-12">
         <div class="container">
          <?= $this->session->flashdata('message');?>
          <h5 style="text-align:center;padding-bottom: 5px;padding-bottom:30px">RIWAYAT PESANAN ANDA</h5>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">             
                            <div class="table-content wnro__table table-responsive">
                                <table style="border-width:2px;border-color:black">
                                    <thead>
                                        <tr class="title-top" >
                                            <th class="product-thumbnail" style="background-color: #22a7a7;border-width:2px;border-color:black">No.</th>
                                          <th class="product-thumbnail" style="background-color: #22a7a7;border-width:2px;border-color:black">Nama Tukang</th>
                                            <th class="product-add-to-cart" style="background-color:  #22a7a7;border-width:2px;border-color:black">Status</th>
                                            <th class="product-subtotal" style="background-color: #22a7a7;border-width:2px;border-color:black">Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>                  
                  <?php 
                  $no = 1;
                  foreach ($pesanan as $baris) {
                    $status = $baris->status_sewa;
                  ?>
                    
                    <tr>     
                  <td style=";border-width:2px;border-color:black;color:black"><?=$no++;?></td>
                  <td style=";border-width:2px;border-color:black;color:black"><h6><?=$baris->nam_leng;?></h6></td>
                  <td style=";border-width:2px;border-color:black;color:black">
                 
                 <?php
                  if ($status=='0') {
                  echo "<b>PENDING</b>";
                  }elseif ($status=='1'){
                  echo "<b>DITERIMA</b>";
                  }elseif ($status=='2'){
                  echo "<b>DITOLAK</b>";
                  }elseif ($status=='3'){
                  echo "<b>DALAM PROSES</b>";
                  }elseif ($status=='4'){
                  echo "<b>TERBAYAR</b>";
                  }elseif ($status=='5'){
                  echo "<b>-</b>";
                  }
                  ?> 
                  </td>

                  <?php 
                  if ($status=='0') {
                  ?>
                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_cus'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td>
                  <?php
                  }elseif ($status=='1'){
                    ?>
                    <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/bayar_sewa'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Bayar" name="detail" style="width:100px">
                  </form>
                  </td> 
                  <?php
                  }elseif ($status=='2'){
                    ?>
                    <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_cus'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td> 
                  <?php
                  }elseif ($status=='3'){
                    ?>
                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_cus'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td> 
                  <?php
                  }elseif ($status=='4'){
                  ?>

                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post"  action="<?= base_url('projek/patukang/beri_rating'); ?>" style="text-align:center;"> 
                  
                  <input type="hidden" name="id_tukang" value="<?php echo $baris->id_tukang;?>">
                  <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa;?>">
                  <input type="hidden" name="status_sewa" value="5">
                  
                  <div class="rating" style="padding-left:30px">
                  <b style="color: black;">Rating : </b><br>
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="SEMPURNA"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="SANGAT BAIK"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="BAIK"></label>
                  <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="BURUK"></label>
                  <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="SANGAT BURUK"></label>
                  </div>                   <br> 
                  <input class="btn btn-primary" type="submit" name="submit" value="Beri Rating" style="background-color:#22a7a7;width:300px">
                  
                  </form>
                </td>
                  <?php
                  }elseif ($status=='5'){
                    ?>
                    <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_cus'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                </td>
                  <?php
                }
                  }
                  ?>
                  </tr>
           
        </tbody></table>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

</body>
</html>