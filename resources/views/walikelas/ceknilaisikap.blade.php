@extends('layouts.layout')
@section('title')
  Ruang Wali Kelas
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Tampil nilai sikap</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Tampil nilai sikap<a href="{{ URL('walikelas/nilai/cek')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>Keterangan Nilai</th>
                            <th>Angka</th>
                            
                            
                        </tr>  
                        <tr>
                            <td>1</td>
                            <td>Nilai Observasi 1</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Nilai Observasi 2</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>Nilai Observasi 3</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>Nilai Observasi 4</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td>Nilai Observasi 5</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>6</td>
                            <td>Nilai Observasi 6</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>7</td>
                            <td>Nilai Observasi 7</td>
                            <td>85</td>
                            </tr>
                            <tr>
                            <td>8</td>
                            <td>Nilai Observasi 8</td>
                            <td>85</td>
                            </tr>

                            <tr>
                            <td>9</td>
                            <td>Nilai Observasi 9</td>
                            <td>85</td>
                            </tr>

                            <tr>
                            <td>10</td>
                            <td>Nilai Observasi 10</td>
                            <td>85</td>
                            </tr>  

                            <tr>
                            <td>11</td>
                            <td>Nilai Observasi 11</td>
                            <td>85</td>
                            </tr>

                            <tr>
                            <td>12</td>
                            <td>Nilai Observasi 12</td>
                            <td>85</td>
                            </tr>   

                            <tr>
                            <td>13</td>
                            <td>Nilai Diri Sendiri</td>
                            <td>85</td>
                            </tr>  

                            <tr>
                            <td>14</td>
                            <td>Nilai Antar Teman</td>
                            <td>85</td>
                            </tr>

                            <tr>
                            <td>15</td>
                            <td>Nilai Jurnal</td>
                            <td>85</td>
                            </tr>                      
                    </table>
                    <div class="text-center">
                       {{--  {!! $pengumuman->links() !!} --}}
                    </div>
                    
</div>
@endsection