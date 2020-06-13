<html class="no-js" lang="zxx">
<head>
  
  <style type="text/css">
   @media screen and (min-width:500px) and (max-width:1100px){
        .gambar{display:none;}
        }
        }
 </style>

</head>
<body>  
   
    <div class="row justify-content-center">  
      <div class="col-lg-6 col-md-6 col-sm-6">
        <table>
          <tr>
            <h3 style="text-align: center;margin-top:30px;background-color:#22a7a7;color:white"><b>AYO DAFTAR TUKANG</b></h3>
          <td class="gambar" style="border-top:black" >
        <img  src="<?= base_url('assets/images/patukang.png');?>" width="200" class="gambar">      
      </td>

    <td style="border-top:black" class="full">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                  
                  <form class="user" method="post" action="<?= base_url('projek/patukang/regis_tukang'); ?>"  enctype="multipart/form-data">
                    <?php foreach ($user as $baris) {?>
                    <div class="form-group">
                        <input hidden="true" value="<?= $baris->id_customer; ?>" name="id_customer">
                         <input type="hidden" value="2" name="status_tukang">
                    </div>
                    <?php }?>
                       <div class="form-group">
                      <select class="form-control" name="Keahlian" required="true" onChange="tampil(this.value)" style="background-color:white;border-color:#22a7a7;width:300px;height:50px">
                        <option value="" hidden="true">Pilih Jenis Keahlian</option>
                        <option value="Tukang Alumunium">Tukang Alumunium</option>
                        <option value="Tukang Keramik">Tukang Keramik</option>
                        <option value="Tukang Atap">Tukang Atap</option>
                        <option value="Tukang Cat">Tukang Cat</option>
                        <option value="Lainnya">Lainnya</option>
                        </select>
                        <div id="kota"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="harga_tukang" placeholder="Harga Jasa Tukang" style="background-color:white;border-color:#22a7a7;">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="no_rek" placeholder="No.Rekening" style="background-color:white;border-color:#22a7a7;">
                    </div>
                    <div class="form-group">
                      <n style="color: red">*</n>Upload KTP &nbsp;&nbsp;<input type="file" name="foto_ktp" style="font-size: 10px" style="background-color:white;border-color:#22a7a7;">
                    </div>
                  <input class="btn btn-primary btn-user btn-block" type="submit" name="Submit" value="Daftar" style="background-color:  #22a7a7;border-color:white">
                </form>
              </div>
            </div>
          </div>
    </td>
     </tr>
      </table>
    </div>
  </div>

<script type="text/javascript">
    function tampil(Keahlian)
    {
      var kota="";
      switch(Keahlian)
      {
        case "Lainnya" : {
          kota = "<input type='text' class='form-control form-control-user' name='Keahlian' placeholder='Jenis Keahlian Lainnya' style='background-color:white;border-color:#22a7a7;margin-top:20px'>";
        }
        break;
        default :kota ="";
      }
      document.getElementById('kota').innerHTML =kota;
    }
  </script>
 
</body>
</html>