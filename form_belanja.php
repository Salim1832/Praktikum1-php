<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="form_belanja.php">
    <table border="1">
        <tr>
            <td>
            Customer : 
            </td>
            <td>
            <input type="text" name="nama" id="nama" value="" size="30"/><br/>
            </td>
        </tr>
        <tr>
            <td>
            Produk :
            </td>
            <td>
            <input type="radio" name="produk" id="produk" value=4.200.000/>TV
            <input type="radio" name="produk" id="produk" value=3.100.000/>Kulkas
            <input type="radio" name="produk" id="produk" value=3.800.000/>Mesin Cuci<br/>
            </td>
        </tr>
        <tr>
            <td>
            Jumlah : 
            </td>
            <td>
            <input type="text"  name="jumlah" id="jumlah" value=""
            size="6"/><br/>
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" value="Kirim"  name="proses" id="proses"/>
            </td>
        </tr>
    </table>
    </form>
  

<?php
$proses= $_POST['proses'];
$nama_customer= $_POST['nama'];
$produk_pilihan= $_POST['produk'];
$jumlah_beli= $_POST['jumlah'];
 echo 'Proses : '.$proses;
 echo '<br/>Customer  : '.$nama_customer;
 echo '<br/>Produk Pilihan : '.$produk_pilihan;
 echo '<br/>Jumlah beli : '.$jumlah_beli;
 $total = $produk_pilihan * $jumlah_beli;
 echo '<br/>Total belanja :'.$total;

?>
 

</body>
</html>