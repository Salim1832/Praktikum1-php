<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head><title>ADD</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>


<div class="container">
    <form method="GET" action="array.php">
    <form action="#" method="GET">
			<h1>Form Nilai Siswa</h1>
                <input type="text" name="nama" placeholder="Nama" required>
                <td>
                    <input type="text" name="NIM" placeholder="NIM" required><br>
                </td>
                <br>
                <td>
                <select name="matkul" >
                    <option value="matkul">Mata Kuliah</option>
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB1">Pemrograman Web</option>
                    </select>
                </td>
                <input type="text" name="nilai_uts" placeholder="Nilai UTS" required >
                <input type="text" name="nilai_uas" placeholder="Nilai UAS" required>
				<input type="text" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" required >
                <button type="submit" value="Simpan" name="proses">Submit</button>
    </form>
    </form>
</div>
</body>
</html>