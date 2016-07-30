@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Cek nilai siswa</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Cek nilai siswa<a href="{{ URL('walikelas/nilai/kelola')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    
                    
</div>
@endsection




<body>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;margin:0px left;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-l77s{font-weight:bold;font-family:Arial, Helvetica, sans-serif !important;;text-align:center}
.tg .tg-s6z2{text-align:center}
.tg .tg-uce2{font-weight:bold;font-family:Arial, Helvetica, sans-serif !important;}
</style>

<table style=" font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: bold; width: 729px" cellspacing="2" >
  <tr>
    <td>Nama Peserta Didik</td>
    <td>:</td>
    <td><?php echo $data->nama_siswa; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Kelas/Semester</td>
    <td>:</td>
    <td><?php echo $data->nama_kelas ?></td>
  </tr>

  <tr>
    <td>Nomor Induk</td>
    <td>:</td>
    <td><?php echo $data->nis; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Tahun Ajaran</td>
    <td>:</td>
    <td><?php echo $data->tahun_pelajaran; ?></td>
  </tr>
  <tr>
    <td>Nama Sekolah</td>
    <td>:</td>
    <td>SMK MVP ARS INTERNASIONAL</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Bidang Keahlian</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Program Keahlian</td>
    <td>:</td>
    <td>..................</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Paket Keahlian</td>
    <td>:</td>
    <td>..................</td>
  </tr>
</table>
<br>
<table  class="tg" style="undefined;table-layout: fixed; width: 729px">
<colgroup>
<col style="width: 45px">
<col style="width: 250px">
<col style="width: 71px">
<col style="width: 71px">
<col style="width: 71px">
<col style="width: 71px">
<col style="width: 101px">
<col style="width: 100px">
</colgroup>
  <tr>
    <th class="tg-l77s" colspan="2" rowspan="4">MATA PELAJARAN</th>
    <th class="tg-l77s" colspan="6">KOMPETENSI INTI</th>
  </tr>
  <tr>
    <td class="tg-l77s" colspan="2" rowspan="2">PENGETAHUAN</td>
    <td class="tg-l77s" colspan="2" rowspan="2">KETERAMPILAN</td>
    <td class="tg-l77s" colspan="2">SIKAP SOSIAL DAN SPIRITUAL</td>
  </tr>
  <tr>
    <td class="tg-l77s" rowspan="2">Dalam Mapel</td>
    <td class="tg-l77s" rowspan="2">Antar Mapel *)</td>
  </tr>
  <tr>
    <td class="tg-l77s">Angka</td>
    <td class="tg-l77s">Predikat</td>
    <td class="tg-l77s">Angka</td>
    <td class="tg-l77s">Predikat </td>
  </tr>
  <tr>
    <td class="tg-uce2" colspan="2">Kelompok A</td>
    <td class="tg-l77s">1 - 4</td>
    <td class="tg-s6z2"></td>
    <td class="tg-l77s">1 - 4</td>
    <td class="tg-s6z2"></td>
    <td class="tg-l77s">SB / B / C / K</td>
    <td class="tg-s6z2"></td>
  </tr>
  <tr>

<?php 
$cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE 'Pendidikan Agama dan Budi Pekerti' limit 1");
if ($ketemu=$cari->num_rows) {
  $mapel=$cari->fetch_object();
}

$prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
$data=$prosesnilai->fetch_object()

 ?>
    <td class="tg-l77s">1</td>
    <td class="tg-uce2">Pendidikan Agama dan Budi Pekerti</td>
    <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
    <td class="tg-uce2"><?php echo $data->grade_p; ?></td>
    <td class="tg-uce2"><?php echo number_format($data->nak,2); ?></td>
    <td class="tg-uce2"><?php echo $data->grade_k; ?></td>
    <td class="tg-uce2"><?php echo $data->grade_s; ?></td>
    <td class="tg-uce2"></td>
  </tr>
<?php 
$cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE 'Pendidikan Pancasila dan Kewarganegaraan' limit 1");
if ($ketemu=$cari->num_rows) {
  $mapel=$cari->fetch_object();
}

$prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
$data=$prosesnilai->fetch_object()

 ?>

  <tr>
    <td class="tg-l77s">2</td>
    <td class="tg-uce2">Pendidikan Pancasila dan Kewarganegaraan</td>
    <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>

<?php 
$cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE 'Bahasa Indonesia' limit 1");
if ($ketemu=$cari->num_rows) {
  $mapel=$cari->fetch_object();
}

$prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
$data=$prosesnilai->fetch_object()

 ?>
  <tr>
    <td class="tg-l77s">3</td>
    <td class="tg-uce2">Bahasa Indonesia</td>
    <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
<?php 
$cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE 'Matematika' limit 1");
if ($ketemu=$cari->num_rows) {
  $mapel=$cari->fetch_object();
}

$prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
$data=$prosesnilai->fetch_object()

 ?>
  <tr>
    <td class="tg-l77s">4</td>
    <td class="tg-uce2">Matematika</td>
    <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
<?php 
$cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE 'Sejarah Indonesia' limit 1");
if ($ketemu=$cari->num_rows) {
  $mapel=$cari->fetch_object();
}

$prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
$data=$prosesnilai->fetch_object()

 ?>
  <tr>
    <td class="tg-l77s">5</td>
    <td class="tg-uce2">Sejarah Indonesia</td>
    <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
<?php 
$cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE 'Bahasa Inggris' limit 1");
if ($ketemu=$cari->num_rows) {
  $mapel=$cari->fetch_object();
}

$prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
$data=$prosesnilai->fetch_object()

 ?>
  <tr>
    <td class="tg-l77s">6</td>
    <td class="tg-uce2">Bahasa Inggris</td>
    <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>

  <tr>
    <td class="tg-uce2" colspan="2">Kelompok B</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-l77s">7</td>
    <td class="tg-uce2">Seni Budaya </td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-l77s">8</td>
    <td class="tg-uce2">Pendidikan Jasmani, Olah Raga, dan Kesehatan </td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-l77s">9</td>
    <td class="tg-uce2">Prakarya dan Kewirausahaan</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2" colspan="2">Kelompok C</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2" colspan="2">C1. Dasar Bidang Keahlian</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-l77s">10</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-l77s">11</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-l77s">12</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2" colspan="2">C2. Dasar Program Keahlian</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  <tr>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
</table>
</body>