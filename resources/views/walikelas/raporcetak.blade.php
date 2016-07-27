<?php 
$nis=$_GET['nis'];
$semester=$_SESSION['semester'];
include_once '../koneksi.php';
$no=1;

	?>
<div class="row">

<div class="col-lg-12">
    	<h1 class="page-header">Nilai Siswa <a href="cetaknilaisiswa.php?nis=<?php echo $nis; ?>" class="btn btn-primary">Cetak</a></h1>
</div>
	
</div>
<table class="table table-hover table-bordered" style="text-align: center;">
	<thead>
		<tr >
			<th style="vertical-align: middle;     text-align: center;" rowspan="2">No</th>
			<th style="vertical-align: middle;     text-align: center;" rowspan="2">Mata Pelajaran</th>
			<th style="vertical-align: middle;     text-align: center;"colspan="2">Nilai Pengetahuan</th>
			<th style="vertical-align: middle;     text-align: center;"colspan="2">Nilai Keterampilan</th>
			<th style="vertical-align: middle;     text-align: center;"colspan="2">Nilai Sikap</th>
		</tr>
		<tr>
			<th style="vertical-align: middle;     text-align: center;">Angka (1-4)</th>
			<th style="vertical-align: middle;     text-align: center;">Predikat</th>
			<th style="vertical-align: middle;     text-align: center;">Angka (1-4)</th>
			<th style="vertical-align: middle;     text-align: center;">Predikat</th>
			<th style="vertical-align: middle;     text-align: center;">Angka (1-4)</th>
			<th style="vertical-align: middle;     text-align: center;">Predikat(SB/B/C/K)</th>
			
			
			
		</tr>
	</thead>
	<tbody>
		<?php 
			$proses=$mysqli->query("select mapel.nama_mapel, nilai.* from siswa, nilai, mapel, pelajaran WHERE pelajaran.nis=siswa.nis AND pelajaran.nis='$nis' AND pelajaran.id_pelajaran=nilai.id_pelajaran AND pelajaran.semester='$semester' AND mapel.id_mapel=pelajaran.id_mapel");
			while ($data=$proses->fetch_object()) {
		 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data->nama_mapel; ?></td>
			<td><?php echo number_format($data->nap,2) ; ?></td>
			<td><?php echo $data->grade_p; ?></td>
			<td><?php echo number_format($data->nak,2) ; ?></td>
			<td><?php echo $data->grade_k; ?></td>
			<td><?php echo number_format($data->nas,2); ?></td>
			<td><?php echo $data->grade_s; ?></td>

		</tr>
			<?php
	$no++;
}

 ?>
	</tbody>
</table>

