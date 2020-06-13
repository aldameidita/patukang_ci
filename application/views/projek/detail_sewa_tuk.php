 
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
            <h3 style="text-align: center;margin-top:30px;background-color:#22a7a7;color:white"><b>DETAIL PESANAN ANDA</b></h3>
          <td class="gambar" style="border-top:black" >
        <img  src="<?= base_url('assets/images/patukang.png');?>" width="200" class="gambar">      
      </td>

    <td style="border-top:black">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
            

            <table class="table">
          
          <?php foreach ($customer as $baris) {?>
                <tr>
                    <td><h5>Nama Customer</h5></td>
                    <td>:</td>
                    <td><h5><?php echo $baris->nam_leng; ?></h5></td>
                </tr>
                <?php
                }
                ?>

                     <?php

        foreach ($detail as $baris) { 
            $status = $baris->status_sewa;
            ?>
            
                
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
            </table>
        <?php
                  if ($status=='0') {
                  
                  }elseif ($status=='1'){
                  echo "<h3>PESANAN BELUM TERBAYAR</h3>";
                  echo "<h3></h3>";
                  }elseif ($status=='2'){
                  echo "<h3>PESANAN TELAH ANDA DITOLAK</h3>";
                  echo "<h3></h3>";
                  }elseif ($status=='3'){
                 echo "<h3>PENGERJAAN ATAU PEMBAYARAN</h3>";
                  echo "<h3>SEDANG DALAM PROSES</h3>";
                  }elseif ($status=='4'){
                 echo "<h3>PEMBAYARAN SUDAH SUKSES</h3>";
                  echo "<h3></h3>";
                  }elseif ($status=='5'){
                  echo "<h3>PESANAN TELAH SUKSES</h3>";
                  echo "<h3>AYO TINGKATKAN PELAYANANMU</h3>";
                   }
          }
            ?>
                </div>
            </div>
        </div>
    </td>
</tr>
</table>
</div>
</div>