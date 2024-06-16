<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Metode MAUT</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    /* table, th, td {
        border: 1px solid black;
    } */
	.line-title {
		border: 0;
		border-style: inset;
		border-top: 1px solid #000;
		margin-top: 15px;
	}
</style>
<body>
	<table style="width: 100%;">
	<tr>
		<td align="left">
			<span style="line-height: 1.7; font-weight: bold;">
		Mohammad Novrizal Sugiarto (11210930000043)
		<br>Luthfiyyah Zharifa Fauziyyah (11210930000041)
			</span>
		</td>
	</tr>
</table>

<hr class="line-title">
<p align="center">
	LAPORAN DATA MAHASISWA <br>
</p>

<table border="1" width="100%">
	<thead>
		<tr align="center">
			<th>Nama Mahasiswa</th>
			<th>Nilai Preferensi</th>
			<th width="15%">Ranking</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			foreach ($hasil as $keys): ?>
		<tr align="center">
			
			<td align="left" style="padding-left: 5px;">
				<?php
				$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
				echo $nama_alternatif['nama'];
				?>
			
			</td>
			<td><?= $keys->nilai ?></td>
			<td><?= $no; ?></td>
		</tr>
		<?php
			$no++;
			endforeach ?>
	</tbody>
</table>
</body>
</html>