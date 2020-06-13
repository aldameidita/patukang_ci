 
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

                     <?php

        foreach ($detail as $baris) { 
            $status = $baris->status_sewa;
            ?>
            <table class="table">
                
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
                  echo "<h3>PESANAN SEDANG PENDING</h3>";
                  echo "<h3>TUNGGU ACC TUKANG</h3>";
                  }elseif ($status=='1'){
                  echo "<b>DITERIMA</b>";
                  }elseif ($status=='2'){
                  echo "<h3>PESANAN ANDA DITOLAK</h3>";
                  echo "<h3>SILAHKAN PESAN TUKANG LAIN</h3>";
                  }elseif ($status=='3'){
                 echo "<h3>PENGERJAAN ATAU PEMBAYARAN</h3>";
                  echo "<h3>SEDANG DALAM PROSES</h3>";
                  }elseif ($status=='4'){
                  echo "<b>TERBAYAR</b>";
                  }elseif ($status=='5'){
                  echo "<h3>PESANAN TELAH SUKSES</h3>";
                  echo "<h3>TERIMAKASIH ATAS KEPERCAYAAN ANDA</h3>";
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