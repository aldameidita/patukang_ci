 
 <style type="text/css">
   @media screen and (min-width:500px) and (max-width:1100px){
        .gambar{display:none;}
        }
        }
 </style>

    <div class="row justify-content-center" style="margin-bottom:30px">  
      <div class="col-lg-7 col-md-6 col-sm-6">
        <table>
          <tr>
            <h3 style="text-align: center;margin-top:40px;background-color:#22a7a7;color:white"><b>PEMBAYARAN PESANAN ANDA</b></h3>

    <td style="border-top:black">
        <div class="row">
            <div class="col-lg-12">
                  <div class="row">

                            <div class="col-lg-12" style="margin-top:10px;margin-bottom:20px">
         
            <table>
               <?php foreach ($customer as $baris) {?>
                <tr>
                    <td><h5>Atas Nama</h5></td>
                    <td>:</td>
                    <td><h5><?php echo $baris->nam_leng; ?></h5></td>
                </tr>
                 <?php
             }foreach ($detail as $baris) { 
            $status = $baris->status_sewa;
            ?>
                <tr>
                    <td><h5>Alamat Sewa</h5></td>
                    <td>:</td>
                    <td><h5><?php echo $baris->alamat_sewa; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Tgl Sewa</h5></td>
                    <td>:</td>
                    <td><h5><?php echo $baris->tgl_sewa; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Luas Sewa<h5></td>
                    <td>:</td>
                    <td><h5><?php echo $baris->luas_sewa; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Total Harga Penyewaan</h5></td>
                    <td>:</td>
                    <td><h5><?php echo $baris->total_sewa; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Detail Sewa</h5></td>
                    <td>:</td>
                    <td><h5><?php echo $baris->detail_sewa; ?></h5></td>
                </tr>
                 <?php
          }
            ?>
            </table>
       
                </div>


                    <div class="col-lg-12" style="text-align: center;">
               
            <form  method="post" action="<?= base_url('projek/patukang/cek_bayar_sewa'); ?>" enctype="multipart/form-data" style="text-align: center"> 
                
                    <?php
              foreach ($detail as $baris) { 
            $status = $baris->status_sewa;
            ?>
                    <input hidden="true" name="id_sewa" value="<?php echo $baris->id_sewa;?>">
                    <input type="hidden" name="tgl_pemb" value="<?= date('Y-m-d');?>">
                    <input type="hidden" name="status_sewa" value="4">
              <?php
              }
              ?>  
              <div class="row">
                <div class="col-lg-6">
                  <label>Pilih rekening transaksi</label>
                    <select class="form-control" name="no_rek_admin" required="true" style="background-color: #22a7a7;color:white;border-color:white;height:50px;margin-bottom:10px;">
                    <option value="" hidden="true">Pilih Bank :</option>
                    <option value="9845-3356-1564-9631">BCA     : 9845-3356-1564-9631</option>
                    <option value="1845-2356-2564-8632">BRI     : 1845-2356-2564-8632</option>
                    <option value="2845-3356-3564-7633">BNI     : 2845-3356-3564-7633</option>
                    <option value="3845-4356-4564-6634">Mandiri : 3845-4356-4564-6634</option>
                     <option value="4845-5356-5564-5635">Lainnya : 4845-5356-5564-5635</option>
                     </select>
                     </div>
                     <div class="col-lg-6">
                      <label>Rekening anda</label>
                    <input class="form-control" name="no_rek_cus" type="text" placeholder="No Rekening Anda" required="1" style="border-color:#22a7a7;background-color:white">
                    </div>
                    <div class="col-lg-12" style="margin-bottom:20px">
                     <label style="margin-top: 20px;font-size:15px">Upload Bukti Bayar :</label>
                    
                  <input type="file" name="foto_transaksi" style="width:200px" required="1">
                    </div>

                    <div class="col-lg-12">
                  <input class="btn btn-primary " type="submit" name="submit" value="Konfirmasi" style="width:200px;background-color:#22a7a7;border-color:white;color:white">
                  </div>
                </div>
                   </form>
          </div>
  
            </div>
        </div>
    </td>
</tr>
</table>
</div>
</div>