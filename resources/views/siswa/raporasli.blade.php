@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
    
    
        <li class="active">Lihat nilai siswa</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Lihat nilai siswa<a href="{{ URL('walikelas/nilai/kelola')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i></a></h1>
 
 <body <?php if (!isset($_GET['url_siswa'])) {
        echo "onload=\"window.print()\"";
      } ?>>
      <style type="text/css">
      .tg  {border-collapse:collapse;border-spacing:0;margin:0px left;}
      .tg td{font-family:Arial, sans-serif;font-size:12px;padding:5px 1px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
      .tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:5px 1px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
      .tg .tg-l77s{font-weight:bold;font-family:Arial, Helvetica, sans-serif !important;;text-align:center}
      .tg .tg-s6z2{text-align:center}
      .tg .tg-uce2{font-weight:bold;font-family:Arial, Helvetica, sans-serif !important;}
      </style>

      <table>
        <tr>
          <td>
            <table  style=" font-family: Arial, sans-serif;
              font-size: 11px;
              font-weight: bold; width: 629px" cellspacing="2" >
              <colgroup>
                  <col style="width: 80px">
                  <col style="width: 10px">
                  <col style="width: 140px">
                  <col style="width: 51px">
                  <col style="width: 10px">
                  <col style="width: 10px">
              </colgroup>

            <tr>
              <td>Nama Peserta Didik</td>
              <td>:</td>
              <td><?php echo $data->nama_siswa; ?></td>
              
              <td>Kelas/Semester</td>
              <td>:</td>
              <td><?php echo $data->nama_kelas ?>/<?php echo $data->semester; ?></td>
            </tr>

            <tr>
              <td>Nomor Induk</td>
              <td>:</td>
              <td><?php echo $data->nis; ?></td>
              
              <td>Tahun Ajaran</td>
              <td>:</td>
              <td><?php echo $data->tahun_pelajaran; ?></td>
            </tr>
            <tr>
              <td>Nama Sekolah</td>
              <td>:</td>
              <td>SMK MVP ARS INTERNASIONAL</td>
              
              <td>Bidang Keahlian</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              
              <td>Program Keahlian</td>
              <td>:</td>
              <td>..................</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              
              <td>Paket Keahlian</td>
              <td>:</td>
              <td>..................</td>
            </tr>
          </table>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
              <table  class="tg" style="undefined;table-layout: fixed; width: 529px">
                  <colgroup>
                  <col style="width: 25px">
                  <col style="width: 220px">
                  <col style="width: 51px">
                  <col style="width: 51px">
                  <col style="width: 51px">
                  <col style="width: 51px">
                  <col style="width: 91px">
                  <col style="width: 90px">
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
                      <td class="tg-l77s" rowspan="3">Antar Mapel *)</td>
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
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Pendidikan Agama dan Budi Pekerti%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.antar_mapel, nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                    $antar_mapel=$data->antar_mapel;
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                      $antar_mapel="Tidak Ada";


                    }

                   ?>
                      <td class="tg-l77s">1</td>
                      <td class="tg-uce2">Pendidikan Agama dan Budi Pekerti</td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2" rowspan="24"><?php echo $antar_mapel; ?></td>
                    </tr>
                  <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Pendidikan Pancasila dan Kewarganegaraan%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                 if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                   
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                      $antar_mapel="Tidak Ada";


                    }

                   ?>

                    <tr>
                      <td class="tg-l77s">2</td>
                      <td class="tg-uce2">Pendidikan Pancasila dan Kewarganegaraan</td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
                    </tr>

                  <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Bahasa Indonesia%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                    
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                      


                    }

                   ?>
                    <tr>
                      <td class="tg-l77s">3</td>
                      <td class="tg-uce2">Bahasa Indonesia</td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
                    </tr>
                  <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Matematika%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                   
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                      


                    }

                   ?>
                    <tr>
                      <td class="tg-l77s">4</td>
                      <td class="tg-uce2">Matematika</td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
                    </tr>
                  <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Sejarah Indonesia%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                    
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                     


                    }

                   ?>
                    <tr>
                      <td class="tg-l77s">5</td>
                      <td class="tg-uce2">Sejarah Indonesia</td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
                    </tr>
                  <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Bahasa Inggris%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                    
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                     


                    }

                   ?>
                    <tr>
                      <td class="tg-l77s">6</td>
                      <td class="tg-uce2">Bahasa Inggris</td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
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
                    <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Seni Budaya%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                    
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                      


                    }

                   ?>
                    <tr>
                      <td class="tg-l77s">7</td>
                      <td class="tg-uce2">Seni Budaya </td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
                    </tr>
                    <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE '%Pendidikan Jasmani%' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                    
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                     


                    }

                   ?>
                    <tr>
                      <td class="tg-l77s">8</td>
                      <td class="tg-uce2">Pendidikan Jasmani, Olah Raga, dan Kesehatan </td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
                    </tr>
                     <?php 
                  $cari=$mysqli->query("SELECT id_mapel from mapel where nama_mapel LIKE 'Kewirausahaan' limit 1");
                  if ($ketemu=$cari->num_rows) {
                    $mapel=$cari->fetch_object();
                  }

                  $prosesnilai=$mysqli->query("select nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.id_mapel='$mapel->id_mapel'");
                  if ($data=$prosesnilai->fetch_object())
                    {

                    $nap=number_format($data->nap,2);
                    $grade_p=$data->grade_p;
                    $nak=number_format($data->nak,2);
                    $grade_k=$data->grade_k;
                    $grade_s=$data->grade_s;
                   
                    }
                    else{
                      $nap=0;
                      $grade_p="E";
                      $nak=0;
                      $grade_k="E";
                      $grade_s="E";
                     

                    }

                   ?>
                    <tr>
                      <td class="tg-l77s">9</td>
                      <td class="tg-uce2">Prakarya dan Kewirausahaan</td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nap; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $nak; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $grade_s; ?></td>
                      <td class="tg-uce2 tg-s6z2"></td>
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
                  <?php 
                  $no=10;

                  $prosesnilai=$mysqli->query("SELECT mapel.nama_mapel, nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.kategori_mapel='C1'");
                  while($data=$prosesnilai->fetch_object())
                  {

                   ?>

                    <tr>
                      <td class="tg-l77s"><?php echo $no ?></td>
                      <td class="tg-uce2"><?php echo $data->nama_mapel; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $data->grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nak,2); ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $data->grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $data->grade_s; ?></td>
                      <td class="tg-uce2"></td>
                    </tr>
                  <?php $no++; } ?>
                    
                    <tr>
                      <td class="tg-uce2" colspan="2">C2. Dasar Program Keahlian</td>
                      <td class="tg-uce2"></td>
                      <td class="tg-uce2"></td>
                      <td class="tg-uce2"></td>
                      <td class="tg-uce2"></td>
                      <td class="tg-uce2"></td>
                      <td class="tg-uce2"></td>
                    </tr>
                  <?php 


                  $prosesnilai=$mysqli->query("SELECT mapel.nama_mapel, nilai.nap, nilai.nak,nilai.grade_p, nilai.grade_k, nilai.grade_s from nilai, pelajaran,siswa, guru, mapel where pelajaran.id_mapel=mapel.id_mapel and pelajaran.id_pelajaran=nilai.id_pelajaran and siswa.nis=pelajaran.nis and guru.nip=pelajaran.nip and siswa.nis='$nis' and pelajaran.semester='$semester'and mapel.kategori_mapel='C2'");
                  while($data=$prosesnilai->fetch_object())
                  {

                   ?>

                    <tr>
                      <td class="tg-l77s"><?php echo $no ?></td>
                      <td class="tg-uce2"><?php echo $data->nama_mapel; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nap,2); ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $data->grade_p; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo number_format($data->nak,2); ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $data->grade_k; ?></td>
                      <td class="tg-uce2 tg-s6z2"><?php echo $data->grade_s; ?></td>
                      <td class="tg-uce2"></td>
                    </tr>
                  <?php $no++; } ?>
                    
                   
                  </table>
          </td>
        </tr>
      </table>


      <br>

      </body>
                    
</div>
@endsection





