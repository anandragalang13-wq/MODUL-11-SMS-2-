<?php
$nis = "2026001";
$nama = "GALANG";
$tugas = 85;
$uts = 80;
$uas = 90;

$total = $tugas + $uts + $uas;
$rata = $total / 3;
?>

<!DOCTYPE html>
<html>
<head>
<title>Program Pengolahan Nilai</title>

<style>

body{
    font-family: Arial, sans-serif;
    background-color:#f2f2f2;
}

.container{
    width:450px;
    margin:80px auto;
}

.card{
    background:white;
    border-radius:10px;
    box-shadow:0px 4px 10px rgba(0,0,0,0.2);
    overflow:hidden;
}

.header{
    background:#238942;
    color:white;
    padding:15px;
    text-align:center;
    font-size:20px;
    font-weight:bold;
}

table{
    width:100%;
    border-collapse:collapse;
}

td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

.label{
    font-weight:bold;
}

.total{
    background:#f5f5f5;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h2 style="text-align:center;">Program Pengolahan Nilai Siswa</h2>

<div class="card">

<div class="header">
Laporan Hasil Belajar
</div>

<table>

<tr>
<td class="label">NIS</td>
<td>: <?php echo $nis; ?></td>
</tr>

<tr>
<td class="label">Nama Siswa</td>
<td>: <?php echo $nama; ?></td>
</tr>

<tr>
<td class="label">Nilai Tugas</td>
<td>: <?php echo $tugas; ?></td>
</tr>

<tr>
<td class="label">Nilai UTS</td>
<td>: <?php echo $uts; ?></td>
</tr>

<tr>
<td class="label">Nilai UAS</td>
<td>: <?php echo $uas; ?></td>
</tr>

<tr class="total">
<td>Total Nilai</td>
<td>: <?php echo $total; ?></td>
</tr>

<tr class="total">
<td>Rata-rata Nilai</td>
<td>: <?php echo number_format($rata,2); ?></td>
</tr>

</table>
</div>
</div>
</body>
</html>
