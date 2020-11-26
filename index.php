<!-- 
   Nama  : Muhammad Faisal
   NIM   : 18532967
   Prodi : Teknik Informatika / 5C
 -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Menghitung Berat Badan Idela</title>
   <script src="ajax.js"></script>
</head>
<body>
   <!-- Tugas 3 : ubah tugas yang kemarin script menentukan berat badan ideal dengan ajax  -->
   <h3>Menghitung Berat Badan Ideal - With Ajax</h3>
   <br>
   <p>*kalau ada <b>Notice</b> diabaikan aja</p>

   <form id="form" method="POST">
      <table>
         <tr>
            <td>Tinggi</td>
            <td><input type="text" name="tinggi_badan" placeholder="Masukan tinggi anda"></td>
         </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td>
               <label><input type="radio" name="jk" value ="L">Laki-Laki</label>
               <label><input type="radio" name="jk" value ="P">Perempuan</label>
            </td>
         </tr>
         <tr>
            <td>
               <input id="submit" type="button" name="submit" value="hitung">
            </td>
         </tr>
      </table>
   </form>

   <div id="tampil"></div>
   

   <script type="text/javascript">
      $(document).ready(function(){
         $('#tampil').load("proses.php");
         $('#submit').click(function(){
            var cek = $('#form').serialize();
            $.ajax({
               type:"POST",
               url:"proses.php",
               data: cek,
               success: function(cek){
                  // console.log('#cek');
                  $('#tampil').html(cek);
               }
            });
         });
      });
   </script>
</body>
</html>