<!doctype html>
<head>
<style type="text/css">
 </style>
</head>

<body>
                   <div class="container" style="margin-bottom:20px">
                    
                    <table>

                    <h3 style="color:black;text-align:center;margin-bottom:20px"><b>Sewa Pa-Tukang mu Sekarang </b></h3>
                   <tr>
                      <?php
                    foreach ($detail_tukang as $baris) {
                    ?>
                    <td>
                    <a style="align-items: center;"><img src="<?=base_url('upload/foto_cus/'.$baris->foto_diri);?>" width="268" height="300" ></a>
                    </td>
                    <td width="10px"></td>
                    <td>
                              <p style="margin-bottom:5px;color:black"><h5><u><?= $baris->nam_leng;?></u></h5></p>
                              <b style="color:black">Rating </b>
                              <p style="color: black">
                              <?= $rating;?>
                            </p>
                              <b style="color:black">Keahlian </b>
                              <p style="color: black"><?= $baris->Keahlian;?></p>
                              <b style="color:black">Harga Tukang</b>
                              <p style="color: black">Rp.<?= $baris->harga_tukang;?> /m2</p>
                              <b style="color:black">Alamat Tukang  </b>
                              <p style="color: black"><?= $baris->alamat;?></p>
                            </td>
                            <?php } ?>
                  <td width="30px"></td>
                  <td width="600px">

                  <form method="post" action="<?= base_url('projek/patukang/cek');?>">
                    
                    <input type="hidden" value="<?= $this->session->userdata('id_customer');?>" name="id_customer">
                     <?php
                    foreach ($detail_tukang as $baris) {
                    ?>
                    <input type="hidden" value="<?=$baris->id_tukang;?>" name="id_tukang">
                    <input hidden="true" type="text" class="form-control form-control-user" name="luas_sewa" id="harga_tukang2" value="<?=$baris->harga_tukang;?>" onkeyup="sum2()">
                   <?php
                 }
                   ?>
                    <div class="row" style="padding-bottom:20px;color:black">
                    
                    <div class="col-lg-6" style="padding-bottom:10px">
                      &nbsp;Alamat Penyewa : <l style="color:red;font-size:9px"> &nbsp;<b>*Alamat Lengkap</b></l>
                      <input type="text" class="form-control form-control-user" required="1" name="alamat_sewa" style="border-color: #22a7a7;">
                    </div>
                  
                     <div class="col-lg-6" style="padding-bottom:10px">
                       &nbsp;Luasan/m2 :
                     <input type="number" style="border-color: #22a7a7"  required="1" class="form-control form-control-user" name="luas_sewa" id="luas_sewa2" placeholder="m2" onkeyup="sum2()" >
                     </div>
                  
                    <div class="col-lg-6" style="padding-bottom:10px">
                        &nbsp;Tanggal Penyewaan : 
                    <input type="hidden" name="tgl_now" value="<?=date('Y-m-d H:i:s');?>">
                    <input type="date" name="tgl_sewa" id="tgl_sewa" class="form-control form-control-user"  style="border-color: #22a7a7";  >
                    </div>

                    <div class="col-lg-6" style="padding-bottom:10px">
                       &nbsp;Detail : 
                       <textarea class="form-control form-control-user" required="1" name="detail_sewa" style="border-color: #22a7a7;height:47px"></textarea>
                    </div>
                  
                  <div class="col-lg-12" style="padding-bottom:10px">
                       &nbsp;Total Harga Sewa : 
                       <input type="text" class="form-control form-control-user" name="total_sewa" id="total_sewa2" style="border-color: #22a7a7;background-color:white" placeholder="0" readonly="true" ">
                  </div>
                    </div>
                      <input class="btn btn-primary btn-user btn-block" type="submit" name="submit1" value="Sewa" style="background-color:#22a7a7;border-color:#22a7a7">

                    </form>
                
                   </td></tr></table></div>
                   
             
             <!---->


<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('harga_tukang').value;
      var txtSecondNumberValue = document.getElementById('luas_sewa').value;
      var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total_sewa').value = result;
      }
      else
      {
         var result = 0;
         document.getElementById('total_sewa').value = result;
      }
}

function sum2() {
      


      var txtFirstNumberValue = document.getElementById('harga_tukang2').value;
      var txtSecondNumberValue = document.getElementById('luas_sewa2').value;
      var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total_sewa2').value = result;
      }
      else
      {
         var result = 0;
         document.getElementById('total_sewa2').value = result;

      }

}
</script>

</script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        

  </body>
  </html>