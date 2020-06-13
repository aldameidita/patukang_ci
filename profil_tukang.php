<!DOCTYPE html>
<html class="no-js" lang="zxx">

<body>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="row justify-content-center">
        <img src="<?= base_url('assets/images/patukang.png');?>" width="150" style="padding-top: 50px">      
      </div>
    </div>
  </div>
  
   <div class="container" style="margin-bottom:80px">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">             
                            <div class="table-content wnro__table table-responsive">
                                <table style="border-width:2px;border-color:black">
                                    <thead>
                                      <h5 style="text-align:center;padding-bottom: 5px;font-family:Roboto">RIWAYAT PESANAN CUSTOMER</h5>

                                        <tr class="title-top" >
                                            <th class="product-thumbnail" style="background-color: #22a7a7;border-width:2px;border-color:black">No.</th>
                                            <th class="product-thumbnail" style="background-color: #22a7a7;border-width:2px;border-color:black">Customer</th>
                                              <th class="product-add-to-cart" style="background-color:  #22a7a7;border-width:2px;border-color:black">Status</th>
                                            <th colspan="2" class="product-subtotal" style="background-color: #22a7a7;border-width:2px;border-color:black">Pilihan</th>
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
                  <td style=";border-width:2px;border-color:black;color:black"><h6><?=$baris->nam_leng?></h6></td>
                  <td style=";border-width:2px;border-color:black">
                  
                  <?php 
                  if ($status=='0') {
                  echo "<a href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal' data-id=".$baris->id_sewa."><b>DETAIL</b></a>";
                  }elseif ($status=='1'){
                  echo "<b>BELUM TERBAYAR</b>";
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
                  
                  if ($status=='0') {?>
                  
                  <td style="border-width:2px;border-color:black"><a href="<?= base_url().'projek/patukang/terima_pesanan/'.$baris->id_sewa; ?>" class="btn btn-default btn-small"><b>TERIMA</b></a></td>
                  <td style="border-width:2px;border-color:black"><a href="<?= base_url().'projek/patukang/tolak_pesanan/'.$baris->id_sewa; ?>" class="btn btn-default btn-small"><b>TOLAK</b></a></td> 
                  
                  <?php
                  }elseif ($status=='1'){?>
                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_tuk'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td> 
                  <?php
                  }elseif ($status=='2'){?>
                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_tuk'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td>
                  <?php
                  }elseif ($status=='3'){?>
                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_tuk'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td>
                  <?php
                  }elseif ($status=='4'){
                    ?>

                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_tuk'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td>  
                  
                  <?php
                  }elseif ($status=='5'){?>
                  <td style=";border-width:2px;border-color:black;color:black">
                  <form method="post" action="<?= base_url('projek/patukang/detail_sewa_tuk'); ?>" >
                    <input type="hidden" name="id_sewa" value="<?php echo $baris->id_sewa; ?>">
                    <input type="submit" value="Lihat Detail" name="detail" style="width:100px">
                  </form>
                  </td>  
                  <?php
                  }
                  ?>
               <?php
              }
               ?>
 </tr>
</tbody>
</table>

</div>
</div></div></div></div></div>
 
  
</body>
</html>