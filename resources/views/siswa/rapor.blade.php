@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

{{-- <div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
    
    
        <li class="active">Cetak nilai siswa</li>
    </ul>
</div> --}}

    
<div class="container" style="padding-top:20px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
         {{--  <h1 class="page-header">Cetak nilai siswa<a href="{{ URL('walikelas/nilai/kelola')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1> --}}
 
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
    <td>{{$raporA[0]->siswa->full_name}}</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Kelas/Semester</td>
    <td>:</td>
    <td>{{$raporA[0]->siswa->siswa->kelasJurusan->kj_kode}}/{{$raporA[0]->semester}}</td>
  </tr>

  <tr>
    <td>Nomor Induk</td>
    <td>:</td>
    <td>{{$raporA[0]->siswa->nomor_induk}}</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Tahun Ajaran</td>
    <td>:</td>
    <td>{{$raporA[0]->tahun_ajaran}}</td>
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
  

    @if (isset($raporA))
      @foreach ($raporA as $dataA)
        <tr>
          <td class="tg-l77s">{{$no++}}</td>
          <td class="tg-uce2">{{$dataA->mapel->nama}}</td>
          <td class="tg-uce2 tg-s6z2">{{$dataA->angka_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataA->predikat_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataA->angka_keterampilan}}</td>
          <td class="tg-uce2">{{$dataA->predikat_keterampilan}}</td>
          <td class="tg-uce2">{{$dataA->predikat_sikap}}</td>
          <td class="tg-uce2 tg-s6z2" rowspan="24">
          @if ($no=1)
            {{$dataA->antar_mapel}}
          @endif</td>
        </tr>
      @endforeach
    @endif


  <tr>
    <td class="tg-uce2" colspan="2">Kelompok B</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
   @if (isset($raporB))
      @foreach ($raporB as $dataB)
        <tr>
          <td class="tg-l77s">{{$no++}}</td>
          <td class="tg-uce2">{{$dataB->mapel->nama}}</td>
          <td class="tg-uce2">{{$dataB->angka_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataB->predikat_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataB->angka_keterampilan}}</td>
          <td class="tg-uce2">{{$dataB->predikat_keterampilan}}</td>
          <td class="tg-uce2">{{$dataB->predikat_sikap}}</td>
          <td class="tg-uce2"></td>
        </tr>
      @endforeach
    @endif

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

   @if (isset($raporC1))
      @foreach ($raporC1 as $dataC1)
        <tr>
          <td class="tg-l77s">{{$no++}}</td>
          <td class="tg-uce2">{{$dataC1->mapel->nama}}</td>
          <td class="tg-uce2">{{$dataC1->angka_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataC1->predikat_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataC1->angka_keterampilan}}</td>
          <td class="tg-uce2">{{$dataC1->predikat_keterampilan}}</td>
          <td class="tg-uce2">{{$dataC1->predikat_sikap}}</td>
          <td class="tg-uce2"></td>
        </tr>
      @endforeach
    @endif

  <tr>
    <td class="tg-uce2" colspan="2">C2. Dasar Program Keahlian</td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
    <td class="tg-uce2"></td>
  </tr>
  
  @if (isset($raporC2))
      @foreach ($raporC2 as $dataC2)
        <tr>
          <td class="tg-l77s">{{$no++}}</td>
          <td class="tg-uce2">{{$dataC2->mapel->nama}}</td>
          <td class="tg-uce2">{{$dataC2->angka_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataC2->predikat_pengetahuan}}</td>
          <td class="tg-uce2">{{$dataC2->angka_keterampilan}}</td>
          <td class="tg-uce2">{{$dataC2->predikat_keterampilan}}</td>
          <td class="tg-uce2">{{$dataC2->predikat_sikap}}</td>
          <td class="tg-uce2"></td>
        </tr>
      @endforeach
    @endif
</table>
</body>                   
                    
        </div>
    </div>                
</div>
@endsection




