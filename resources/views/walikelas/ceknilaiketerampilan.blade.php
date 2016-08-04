@extends('layouts.layout')
@section('title')
  Ruang Wali Kelas
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Tampil nilai keterampilan</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Tampil nilai keterampilan<a href="{{ URL('walikelas/nilai/cek')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>Keterangan Nilai</th>
                            <th>Angka</th>
                            
                            
                        </tr>  
                             
                            <tr>
                            <td>1</td>
                            <td>Nilai Praktek 1</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Nilai Praktek 2</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>Nilai Praktek 3</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>Nilai Praktek 4</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td>Nilai Praktek 5</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>6</td>
                            <td>Nilai Praktek 6</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>7</td>
                            <td>Nilai Praktek 7</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>8</td>
                            <td>Nilai Praktek 8</td>
                            <td>85</td>
                            </tr>

                            <tr>
                            <td>9</td>
                            <td>Nilai Projek</td>
                            <td>85</td>
                            </tr>

                            <tr>
                            <td>10</td>
                            <td>Nilai Portofolio</td>
                            <td>85</td>
                            </tr>
                                               
                    </table>
                    {{-- <div class="text-center">
                        {!! $pengumuman->links() !!}
                    </div> --}}
                    
</div>
@endsection