<?php
// Data siswa (variabel statis)
$nis = "2026001";
$nama = "GALANG";
$tugas = 85;
$uts = 80;
$uas = 90;

// Perhitungan
$total = $tugas + $uts + $uas;
$rata = $total / 3;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Program Pengolahan Nilai Siswa</title>
    <style>
        body{
            font-family: Arial;
        }
        table{
            border-collapse: collapse;
            width: 400px;
        }
        th, td{
            border:1px solid #999;
            padding:8px;
        }
        th{
            background:#ddd;
            text-align:left;
        }
    </style>
</head>
<body>

<h2>Program Pengolahan Nilai Siswa</h2>

<table>
<tr>
<th colspan="2">Laporan Hasil Belajar</th>
</tr>

<tr>
<td>NIS</td>
<td>: <?php echo $nis; ?></td>
</tr>

<tr>
<td>Nama Siswa</td>
<td>: <?php echo $nama; ?></td>
</tr>

<tr>
<td>Nilai Tugas</td>
<td>: <?php echo $tugas; ?></td>
</tr>

<tr>
<td>Nilai UTS</td>
<td>: <?php echo $uts; ?></td>
</tr>

<tr>
<td>Nilai UAS</td>
<td>: <?php echo $uas; ?></td>
</tr>

<tr>
<td><b>Total Nilai</b></td>
<td>: <?php echo $total; ?></td>
</tr>

<tr>
<td><b>Rata-rata Nilai</b></td>
<td>: <?php echo number_format($rata,2); ?></td>
</tr>

</table>

</body>
</html>