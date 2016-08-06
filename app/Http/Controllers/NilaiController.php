<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\KelasJurusan;
use App\Kelas;
use App\Jurusan;
use App\Siswa;
use App\NilaiPengetahuan;
use App\NilaiKeterampilan;
use App\NilaiSikap;
use App\NilaiRapor;
use App\NilaiDeskripsi;
use App\User;

class NilaiController extends Controller
{
    //
    public function halamanInputNilai($kelasjurusan_id,$mapel_id)
    {

    		$role = Sentinel::findRoleBySlug('siswa');

            $user = $role->users()
                            ->with(['roles','siswa.kelasJurusan'])
                            ->whereHas('siswa.kelasJurusan', function($query) use ($kelasjurusan_id){
                                $query->where('id',$kelasjurusan_id);
                            })
                            ->paginate(20);
            
            // dd($user);
            $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

            $no=1;
            return view('guru.inputnilai', compact('user','no', 'kelas_jurusan', 'mapel_id'));
    }		

    public function proses(Request $request)
    {
        $siswa_id = $request->input('siswa_id');
        $mapel_id = $request->input('mapel_id');
        $guru_id = $request->input('guru_id');
        $semester = $request->input('semester');
        $tahun_ajaran = $request->input('tahun_ajaran');

        $nilai_pengetahuan = NilaiPengetahuan::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ;
        $nilai_keterampilan = NilaiKeterampilan::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ;
        $nilai_sikap = NilaiSikap::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ;
        /*$nilai_deskripsi = NilaiDeskripsi::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ->first();
*/
        // dd($nilai_pengetahuan, $nilai_keterampilan, $nilai_sikap, $nilai_deskripsi);
        if ($nilai_pengetahuan->count() > 0) {
            $nilai_pengetahuan = $nilai_pengetahuan->first();
            $nuh1 = $nilai_pengetahuan->nuh1;
            $nuh2 = $nilai_pengetahuan->nuh2;
            $nuh3 = $nilai_pengetahuan->nuh3;
            $nuh4 = $nilai_pengetahuan->nuh4;
            $nilaiuas = $nilai_pengetahuan->nuas;
            $nilaiuts = $nilai_pengetahuan->nuts;
            $ndes = $nilai_pengetahuan->ndes;
        } else {
            return redirect('walikelas/nilai/cek?siswa_id='.$siswa_id.'&semester='.$semester.'&tahun_ajaran='.$tahun_ajaran)->with('message','Gagal Nilai Pengetahuan belum diinput.. ')
                                        ->with('alert','danger');
        }

        if ($nilai_keterampilan->count() > 0) {
            $nilai_keterampilan = $nilai_keterampilan->first();
            $npra1 = $nilai_keterampilan->npra1;
            $npra2 = $nilai_keterampilan->npra2;
            $npra3 = $nilai_keterampilan->npra3;
            $npra4 = $nilai_keterampilan->npra4;
            $npra5 = $nilai_keterampilan->npra5;
            $npra6 = $nilai_keterampilan->npra6;
            $npra7 = $nilai_keterampilan->npra7;
            $npra8 = $nilai_keterampilan->npra8;
            $nproy = $nilai_keterampilan->nproy;
            $nport = $nilai_keterampilan->nport;
            $ndes = $nilai_keterampilan->ndes;
            
        } else {
            return redirect('walikelas/nilai/cek?siswa_id='.$siswa_id.'&semester='.$semester.'&tahun_ajaran='.$tahun_ajaran)->with('message','Gagal Nilai Keterampilan belum diinput.. ')
                                        ->with('alert','danger');
        }

        if ($nilai_sikap->count() > 0) {
            $nilai_sikap = $nilai_sikap->first();
            $nob1 = $nilai_sikap->nob1;
            $nob2 = $nilai_sikap->nob2;
            $nob3 = $nilai_sikap->nob3;
            $nob4 = $nilai_sikap->nob4;
            $nob5 = $nilai_sikap->nob5;
            $nob6 = $nilai_sikap->nob6;
            $nob7 = $nilai_sikap->nob7;
            $nob8 = $nilai_sikap->nob8;
            $nob9 = $nilai_sikap->nob9;
            $nob10 = $nilai_sikap->nob10;
            $nob11 = $nilai_sikap->nob11;
            $nob12 = $nilai_sikap->nob12;
            $nds = $nilai_sikap->nds;
            $nat = $nilai_sikap->nat;
            $nj = $nilai_sikap->nj;
            $ndes = $nilai_sikap->ndes;    
        } else {
            return redirect('walikelas/nilai/cek?siswa_id='.$siswa_id.'&semester='.$semester.'&tahun_ajaran='.$tahun_ajaran)->with('message','Gagal Nilai Sikap belum diinput.. ')
                                        ->with('alert','danger');
        }

        

        

        $ratanuh=(($nuh1+$nuh2+$nuh3+$nuh4)/4)*2;
        $hasil_pengetahuan=($ratanuh+$nilaiuts+$nilaiuas)/4;
        $hasil_pengetahuan=number_format($hasil_pengetahuan,2);


        $ratanilaipraktek=(($npra1+$npra2+$npra3+$npra4+$npra5+$npra7+$npra8)/8)*2;
        $hasil_keterampilan=($ratanilaipraktek+$nproy+$nport)/4;
        $hasil_keterampilan=number_format($hasil_keterampilan,2);



        $ratanob=(($nob1+$nob2+$nob3+$nob4+$nob5+$nob6+$nob7+$nob8+$nob10+$nob11+$nob12)/12)*2;
        $hasil_sikap=($ratanob+$nds+$nat+$nj)/5;
        $hasil_sikap=number_format($hasil_sikap,2);

        // dd(floor($hasil_pengetahuan));
        //Awal dari Nilai Pengetahuan
        switch (floor($hasil_pengetahuan)) {
            case '100.0':
                $angka_pengetahuan='4.00';
                $predikat_pengetahuan='A';
                break;
            case '99.0':
                $angka_pengetahuan='3.96';
                $predikat_pengetahuan='A';
                break;
            case '98.0':
                $angka_pengetahuan='3.92';
                $predikat_pengetahuan='A';
                break;
            case '97.0':
                $angka_pengetahuan='3.88';
                $predikat_pengetahuan='A';
                break;
            case '96.0':
                $angka_pengetahuan='3.84';
                $predikat_pengetahuan='A';
                break;
            case '95.0':
                $angka_pengetahuan='3.80';
                $predikat_pengetahuan='A';
                break;
            case '94.0':
                $angka_pengetahuan='3.76';
                $predikat_pengetahuan='A';
                break;
            case '93.0':
                $angka_pengetahuan='3.72';
                $predikat_pengetahuan='A';
                break;
            case '92.0':
                $angka_pengetahuan='3.68';
                $predikat_pengetahuan='A';
                break;
            case '91.0':
                $angka_pengetahuan='3.64';
                $predikat_pengetahuan='A-';
                break;
            case '90.0':
                $angka_pengetahuan='3.60';
                $predikat_pengetahuan='B+';
                break;
            case '89.0':
                $angka_pengetahuan='3.56';
                $predikat_pengetahuan='A-';
                break;
            case '88.0':
                $angka_pengetahuan='3.52';
                $predikat_pengetahuan='A-';
                break;
            case '87.0':
                $angka_pengetahuan='3.48';
                $predikat_pengetahuan='A-';
                break;
            case '86.0':
                $angka_pengetahuan='3.44';
                $predikat_pengetahuan='A-';
                break;
            case '85.0':
                $angka_pengetahuan='3.40';
                $predikat_pengetahuan='A-';
                break;
            case '84.0':
                $angka_pengetahuan='3.36';
                $predikat_pengetahuan='A-';
                break;
            case '83.0':
                $angka_pengetahuan='3.32';
                $predikat_pengetahuan='B+';
                break;
            case '82.0':
                $angka_pengetahuan='3.28';
                $predikat_pengetahuan='B+';
                break;
            case '81.0':
                $angka_pengetahuan='3.24';
                $predikat_pengetahuan='B+';
                break;
            case '80.0':
                $angka_pengetahuan='3.20';
                $predikat_pengetahuan='B+';
                break;
            case '79.0':
                $angka_pengetahuan='3.16';
                $predikat_pengetahuan='B+';
                break;
            case '78.0':
                $angka_pengetahuan='3.12';
                $predikat_pengetahuan='B+';
                break;
            case '77.0':
                $angka_pengetahuan='3.08';
                $predikat_pengetahuan='B+';
                break;
            case '76.0':
                $angka_pengetahuan='3.04';
                $predikat_pengetahuan='B+';
                break;
            case '75.0':
                $angka_pengetahuan='3.00';
                $predikat_pengetahuan='B';
                break;
            case '74.0':
                $angka_pengetahuan='2.96';
                $predikat_pengetahuan='B';
                break;
            case '73.0':
                $angka_pengetahuan='2.92';
                $predikat_pengetahuan='B';
                break;
            case '72.0':
                $angka_pengetahuan='2.88';
                $predikat_pengetahuan='B';
                break;
            case '71.0':
                $angka_pengetahuan='2.84';
                $predikat_pengetahuan='B';
                break;
            case '70.0':
                $angka_pengetahuan='2.80';
                $predikat_pengetahuan='B';
                break;
            case '69.0':
                $angka_pengetahuan='2.76';
                $predikat_pengetahuan='B';
                break;
            case '68.0':
                $angka_pengetahuan='2.72';
                $predikat_pengetahuan='B';
                break;
            case '67.0':
                $angka_pengetahuan='2.68';
                $predikat_pengetahuan='B';
                break;
            case '66.0':
                $angka_pengetahuan='2.64';
                $predikat_pengetahuan='B-';
                break;
            case '65.0':
                $angka_pengetahuan='2.60';
                $predikat_pengetahuan='B-';
                break;
            case '64.0':
                $angka_pengetahuan='2.56';
                $predikat_pengetahuan='B-';
                break;
            case '63.0':
                $angka_pengetahuan='2.52';
                $predikat_pengetahuan='B-';
                break;
            case '62.0':
                $angka_pengetahuan='2.48';
                $predikat_pengetahuan='B-';
                break;
            case '61.0':
                $angka_pengetahuan='2.44';
                $predikat_pengetahuan='B-';
                break;
            case '60.0':
                $angka_pengetahuan='2.40';
                $predikat_pengetahuan='B-';
                break;
            case '59.0':
                $angka_pengetahuan='2.36';
                $predikat_pengetahuan='B-';
                break;
            case '58.0':
                $angka_pengetahuan='2.32';
                $predikat_pengetahuan='C+';
                break;
            case '57.0':
                $angka_pengetahuan='2.28';
                $predikat_pengetahuan='C+';
                break;
            case '56.0':
                $angka_pengetahuan='2.24';
                $predikat_pengetahuan='C+';
                break;
            case '55.0':
                $angka_pengetahuan='2.20';
                $predikat_pengetahuan='C+';
                break;
            case '54.0':
                $angka_pengetahuan='2.16';
                $predikat_pengetahuan='C+';
                break;
            case '53.0':
                $angka_pengetahuan='2.12';
                $predikat_pengetahuan='C+';
                break;
            case '52.0':
                $angka_pengetahuan='2.08';
                $predikat_pengetahuan='C+';
                break;
            case '51.0':
                $angka_pengetahuan='2.04';
                $predikat_pengetahuan='C+';
                break;
            case '50.0':
                $angka_pengetahuan='2.00';
                $predikat_pengetahuan='C';
                break;
            case '49.0':
                $angka_pengetahuan='1.96';
                $predikat_pengetahuan='C';
                break;
            case '48.0':
                $angka_pengetahuan='1.92';
                $predikat_pengetahuan='C';
                break;
            case '47.0':
                $angka_pengetahuan='1.88';
                $predikat_pengetahuan='C';
                break;
            case '46.0':
                $angka_pengetahuan='1.84';
                $predikat_pengetahuan='C';
                break;
            case '45.0':
                $angka_pengetahuan='1.80';
                $predikat_pengetahuan='C';
                break;
            case '44.0':
                $angka_pengetahuan='1.76';
                $predikat_pengetahuan='C';
                break;
            case '43.0':
                $angka_pengetahuan='1.72';
                $predikat_pengetahuan='C';
                break;
            case '42.0':
                $angka_pengetahuan='1.68';
                $predikat_pengetahuan='C';
                break;
            case '41.0':
                $angka_pengetahuan='1.64';
                $predikat_pengetahuan='C';
                break;
            case '40.0':
                $angka_pengetahuan='1.60';
                $predikat_pengetahuan='C-';
                break;
            case '39.0':
                $angka_pengetahuan='1.56';
                $predikat_pengetahuan='C-';
                break;
            case '38.0':
                $angka_pengetahuan='1.52';
                $predikat_pengetahuan='C-';
                break;
            case '37.0':
                $angka_pengetahuan='1.48';
                $predikat_pengetahuan='';
                break;
            case '36.0':
                $angka_pengetahuan='1.44';
                $predikat_pengetahuan='C-';
                break;
            case '35.0':
                $angka_pengetahuan='1.40';
                $predikat_pengetahuan='C-';
                break;
            case '34.0':
                $angka_pengetahuan='1.36';
                $predikat_pengetahuan='C-';
                break;
            case '33.0':
                $angka_pengetahuan='1.32';
                $predikat_pengetahuan='D+';
                break;
            case '32.0':
                $angka_pengetahuan='1.28';
                $predikat_pengetahuan='D+';
                break;
            case '31.0':
                $angka_pengetahuan='1.24';
                $predikat_pengetahuan='D+';
                break;
            case '30.0':
                $angka_pengetahuan='1.20';
                $predikat_pengetahuan='D+';
                break;
            case '29.0':
                $angka_pengetahuan='1.16';
                $predikat_pengetahuan='D+';
                break;
            case '28.0':
                $angka_pengetahuan='1.12';
                $predikat_pengetahuan='';
                break;
            case '27.0':
                $angka_pengetahuan='1.08';
                $predikat_pengetahuan='D+';
                break;
            case '26.0':
                $angka_pengetahuan='1.04';
                $predikat_pengetahuan='D+';
                break;
            default:
                $angka_pengetahuan='0';
                $predikat_pengetahuan='D';
                break;
        }

        //Akhir dari Nilai Pengetahuan
        //Awal dari Nilai Keterampilan
     
        switch (floor($hasil_keterampilan)) {
            case '100.0':
                $angka_keterampilan='4.00';
                $predikat_keterampilan='A';
                break;
            case '99.0':
                $angka_keterampilan='3.96';
                $predikat_keterampilan='A';
                break;
            case '98.0':
                $angka_keterampilan='3.93';
                $predikat_keterampilan='A';
                break;
            case '97.0':
                $angka_keterampilan='3.89';
                $predikat_keterampilan='A';
                break;
            case '96.0':
                $angka_keterampilan='3.85';
                $predikat_keterampilan='A';
                break;
            case '95.0':
                $angka_keterampilan='3.3.84';
                $predikat_keterampilan='A-';
                break;
            case '94.0':
                $angka_keterampilan='3.76';
                $predikat_keterampilan='A-';
                break;
            case '93.0':
                $angka_keterampilan='3.68';
                $predikat_keterampilan='A-';
                break;
            case '92.0':
                $angka_keterampilan='3.59';
                $predikat_keterampilan='A-';
                break;
            case '91.0':
                $angka_keterampilan='3.51';
                $predikat_keterampilan='A-';
                break;
            case '90.0':
                $angka_keterampilan='3.50';
                $predikat_keterampilan='B+';
                break;
            case '89.0':
                $angka_keterampilan='3.42';
                $predikat_keterampilan='B+';
                break;
            case '88.0':
                $angka_keterampilan='3.34';
                $predikat_keterampilan='B+';
                break;
            case '87.0':
                $angka_keterampilan='3.26';
                $predikat_keterampilan='B+';
                break;
            case '86.0':
                $angka_keterampilan='3.18';
                $predikat_keterampilan='B+';
                break;
            case '85.0':
                $angka_keterampilan='3.17';
                $predikat_keterampilan='B';
                break;
            case '84.0':
                $angka_keterampilan='3.09';
                $predikat_keterampilan='B';
                break;
            case '83.0':
                $angka_keterampilan='3.01';
                $predikat_keterampilan='B';
                break;
            case '82.0':
                $angka_keterampilan='2.93';
                $predikat_keterampilan='B';
                break;
            case '81.0':
                $angka_keterampilan='2.85';
                $predikat_keterampilan='B';
                break;
            case '80.0':
                $angka_keterampilan='2.84';
                $predikat_keterampilan='B';
                break;
            case '79.0':
                $angka_keterampilan='2.77';
                $predikat_keterampilan='B-';
                break;
            case '78.0':
                $angka_keterampilan='2.71';
                $predikat_keterampilan='B-';
                break;
            case '77.0':
                $angka_keterampilan='2.64';
                $predikat_keterampilan='B-';
                break;
            case '76.0':
                $angka_keterampilan='2.58';
                $predikat_keterampilan='B-';
                break;
            case '75.0':
                $angka_keterampilan='2.51';
                $predikat_keterampilan='B-';
                break;
            case '74.0':
                $angka_keterampilan='2.50';
                $predikat_keterampilan='C+';
                break;
            case '73.0':
                $angka_keterampilan='2.42';
                $predikat_keterampilan='C+';
                break;
            case '72.0':
                $angka_keterampilan='2.34';
                $predikat_keterampilan='C+';
                break;
            case '71.0':
                $angka_keterampilan='2.26';
                $predikat_keterampilan='C+';
                break;
            case '70.0':
                $angka_keterampilan='2.18';
                $predikat_keterampilan='C+';
                break;
            case '69.0':
                $angka_keterampilan='2.17';
                $predikat_keterampilan='C';
                break;
            case '68.0':
                $angka_keterampilan='2.09';
                $predikat_keterampilan='C';
                break;
            case '67.0':
                $angka_keterampilan='2.01';
                $predikat_keterampilan='C';
                break;
            case '66.0':
                $angka_keterampilan='1.93';
                $predikat_keterampilan='C';
                break;
            case '65.0':
                $angka_keterampilan='1.85';
                $predikat_keterampilan='C';
                break;
            case '64.0':
                $angka_keterampilan='1.84';
                $predikat_keterampilan='C-';
                break;
            case '63.0':
                $angka_keterampilan='1.76';
                $predikat_keterampilan='C-';
                break;
            case '62.0':
                $angka_keterampilan='1.68';
                $predikat_keterampilan='C-';
                break;
            case '61.0':
                $angka_keterampilan='1.59';
                $predikat_keterampilan='C-';
                break;
            case '60.0':
                $angka_keterampilan='1.51';
                $predikat_keterampilan='C-';
                break;
            case '59.0':
                $angka_keterampilan='1.50';
                $predikat_keterampilan='D+';
                break;
            case '58.0':
                $angka_keterampilan='1.42';
                $predikat_keterampilan='D+';
                break;
            case '57.0':
                $angka_keterampilan='1.34';
                $predikat_keterampilan='D+';
                break;
            case '56.0':
                $angka_keterampilan='1.26';
                $predikat_keterampilan='D+';
                break;
            case '55.0':
                $angka_keterampilan='1.18';
                $predikat_keterampilan='D+';
                break;
            case '54.0':
                $angka_keterampilan='1.17';
                $predikat_keterampilan='D+';
                break;
            case '53.0':
                $angka_keterampilan='1.13';
                $predikat_keterampilan='D+';
                break;
            case '52.0':
                $angka_keterampilan='1.09';
                $predikat_keterampilan='D+';
                break;
            case '51.0':
                $angka_keterampilan='1.04';
                $predikat_keterampilan='D+';
                break;
            case '50.0  ':
                $angka_keterampilan='1.00';
                $predikat_keterampilan='D+';
                break;
            default:
                $angka_keterampilan='0';
                $predikat_keterampilan='E';
                break; 
        }

        //Akhir dari Nilai Keterampilan





        //Awal dari Nilai Sikap
        $puluhan_sikap=$hasil_sikap*100/4;
        if ($hasil_sikap>3.51) {
            $predikat_sikap="SB";
        }
        elseif ($hasil_sikap>2.51) {
            $predikat_sikap="B";
        }
        elseif ($hasil_sikap>1.51) {
            $predikat_sikap="C";
        }
        else
        {
            $predikat_sikap="K";
        }


        if ($predikat_sikap="SB") {
                $antar_mapel="Peserta didik menunjukan sikap sangat baik dan bersungguh-sungguh dalam menerpakan sikap jujur dan bekerjasama ";
        }
        elseif ($predikat_sikap="B") {
            $antar_mapel="Peserta didik menunjukan sikap baik dan bersungguh-sungguh dalam menerpakan sikap jujur dan bekerjasama";
        }
        elseif ($predikat_sikap="C") {
            $antar_mapel="Peserta didik menunjukan sikap baik dan bersungguh-sungguh dalam menerpakan sikap jujur dan bekerjasama, namun masih perlu ditingkatkan lagi sikap kerjasama dan percaya diri  ";
        }
        elseif ($predikat_sikap="K") {
            $antar_mapel="Peserta didik menunjukan sikap yang kurang dalam bersungguh-sungguh menerpakan sikap jujur dan bekerjasama, maka perlu ditingkatkan lagi sikap kerjasama dan percaya diri ";
        }
        // dd($angka_keterampilan);
        // dd($hasil_pengetahuan);
        /*$checkIfExists = NilaiRapor*/
        $nilai_rapor = NilaiRapor::firstOrNew([
            'guru_id' => $request->input('guru_id'),
            'siswa_id'=> $request->input('siswa_id'),
            'mapel_id'=> $request->input('mapel_id'),
        ]);
        $nilai_rapor->nilai_pengetahuan_id = $nilai_pengetahuan->id;
        $nilai_rapor->nilai_keterampilan_id = $nilai_keterampilan->id;
        $nilai_rapor->nilai_sikap_id = $nilai_sikap->id;
        $nilai_rapor->angka_pengetahuan = $angka_pengetahuan;
        $nilai_rapor->angka_keterampilan =$angka_keterampilan;
        $nilai_rapor->angka_sikap = $hasil_sikap;
        $nilai_rapor->angka_pengetahuan_puluhan = $hasil_pengetahuan;
        $nilai_rapor->angka_keterampilan_puluhan = $hasil_keterampilan;
        $nilai_rapor->angka_sikap_puluhan = $puluhan_sikap;
        $nilai_rapor->predikat_pengetahuan = $predikat_pengetahuan;
        $nilai_rapor->predikat_keterampilan =$predikat_keterampilan;
        $nilai_rapor->predikat_sikap =$predikat_sikap;
        $nilai_rapor->antar_mapel = $antar_mapel;
        $nilai_rapor->semester = $semester;
        $nilai_rapor->tahun_ajaran = $tahun_ajaran;
        // dd($nilai_rapor);
        if ($nilai_rapor->save()) { //jika save berhasil_
            //jika berhasil_ arahkan ke halaman admin/pengumuman
            
            return redirect('walikelas/nilai/kelola')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil_ arahkan ke halaman admin/pengumuman/tambah
            
            return redirect('walikelas/nilai/cek?siswa_id='.$siswa_id.'&semester='.$semester.'&tahun_ajaran='.$tahun_ajaran)->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }

    }

    public function tampil($siswa_id, $guru_id, $kelasjurusan_id,$mapel_id, $nilai_pengetahuan_id, $nilai_keterampilan_id, $nilai_sikap_id)
        {
        $nilai_rapor = NilaiRapor::where('siswa_id','=',$siswa_id)
                                ->where('semester', '=', $semester)
                                                ->get();
        return view('siswa.rapor');
        }	

    
    

}
