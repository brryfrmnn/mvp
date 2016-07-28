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
use App\NilaiKerterampilan;
use App\NilaiSikap;
use App\NilaiDeskripsi;

class NilaiController extends Controller
{
    //
    public function halamanInputNilai($kelasjurusan_id,$mapel_id)
    {

    		$role = Sentinel::findRoleBySlug('siswa');
            $user = $role->users()->with('roles','siswa.kelasJurusan')->paginate(20);
            

          $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

            // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('guru.inputnilai', compact('user','no', 'kelas_jurusan', 'mapel_id'));
            	
    	
    }		

    public function proses()
    {
        $nilai_pengetahuan = NilaiPengetahuan::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ->first();
        $nilai_ketreampilan = NilaiKerterampilan::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ->first();
        $nilai_sikap = NilaiSikap::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ->first();
        $nilai_deskripsi = NilaiDeskripsi::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ->first();

        $nuh1 = $nilai_pengetahuan->nuh1;
        $nuh2 = $nilai_pengetahuan->nuh2;
        $nuh3 = $nilai_pengetahuan->nuh3;
        $nuh4 = $nilai_pengetahuan->nuh4;
        $nilaiuas = $nilai_pengetahuan->nuas;
        $nilaiuts = $nilai_pengetahuan->nuts;
        $ndes = $nilai_pengetahuan->ndes;

        $npra1 = $nilai_ketreampilan->npra1;
        $npra2 = $nilai_ketreampilan->npra2;
        $npra3 = $nilai_ketreampilan->npra3;
        $npra4 = $nilai_ketreampilan->npra4;
        $npra5 = $nilai_ketreampilan->npra5;
        $npra6 = $nilai_ketreampilan->npra6;
        $npra7 = $nilai_ketreampilan->npra7;
        $npra8 = $nilai_ketreampilan->npra8;
        $nproy = $nilai_ketreampilan->nproy;
        $nport = $nilai_ketreampilan->nport;
        $ndes = $nilai_ketreampilan->ndes;

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

        $ratanuh=(($nuh1+$nuh2+$nuh3+$nuh4)/4)*2;
        $hasilpengetahuan=($ratanuh+$nilaiuts+$nilaiuas)/4;
        $hasilpengetahuan=number_format($hasilpengetahuan,2);


        $ratanilaipraktek=(($npra1+$npra2+$npra3+$npra4+$npra5+$npra7+$npra8)/8)*2;
        $hasilketerampilan=($ratanilaipraktek+$nproy+$nport)/4;
        $hasilketerampilan=number_format($hasilketerampilan,2);



        $ratanob=(($nob1+$nob2+$nob3+$nob4+$nob5+$nob6+$nob7+$nob8+$nob10+$nob11+$nob12)/12)*2;
        $hasilsikap=($ratanob+$nds+$nat+$nj)/5;
        $hasilsikap=number_format($hasilsikap,2);


        //Awal dari Nilai Pengetahuan
        switch (floor($hasilpengetahuan)) {
            case '100':
                $desimalpengetahuan='4.00';
                $gradepengetahuan='A';
                break;
            case '99':
                $desimalpengetahuan='3.96';
                $gradepengetahuan='A';
                break;
            case '98':
                $desimalpengetahuan='3.93';
                $gradepengetahuan='A';
                break;
            case '97':
                $desimalpengetahuan='3.89';
                $gradepengetahuan='A';
                break;
            case '96':
                $desimalpengetahuan='3.85';
                $gradepengetahuan='A';
                break;
            case '95':
                $desimalpengetahuan='3.3.84';
                $gradepengetahuan='A-';
                break;
            case '94':
                $desimalpengetahuan='3.76';
                $gradepengetahuan='A-';
                break;
            case '93':
                $desimalpengetahuan='3.68';
                $gradepengetahuan='A-';
                break;
            case '92':
                $desimalpengetahuan='3.59';
                $gradepengetahuan='A-';
                break;
            case '91':
                $desimalpengetahuan='3.51';
                $gradepengetahuan='A-';
                break;
            case '90':
                $desimalpengetahuan='3.50';
                $gradepengetahuan='B+';
                break;
            case '89':
                $desimalpengetahuan='3.42';
                $gradepengetahuan='B+';
                break;
            case '88':
                $desimalpengetahuan='3.34';
                $gradepengetahuan='B+';
                break;
            case '87':
                $desimalpengetahuan='3.26';
                $gradepengetahuan='B+';
                break;
            case '86':
                $desimalpengetahuan='3.18';
                $gradepengetahuan='B+';
                break;
            case '85':
                $desimalpengetahuan='3.17';
                $gradepengetahuan='B';
                break;
            case '84':
                $desimalpengetahuan='3.09';
                $gradepengetahuan='B';
                break;
            case '83':
                $desimalpengetahuan='3.01';
                $gradepengetahuan='B';
                break;
            case '82':
                $desimalpengetahuan='2.93';
                $gradepengetahuan='B';
                break;
            case '81':
                $desimalpengetahuan='2.85';
                $gradepengetahuan='B';
                break;
            case '80':
                $desimalpengetahuan='2.84';
                $gradepengetahuan='B';
                break;
            case '79':
                $desimalpengetahuan='2.77';
                $gradepengetahuan='B-';
                break;
            case '78':
                $desimalpengetahuan='2.71';
                $gradepengetahuan='B-';
                break;
            case '77':
                $desimalpengetahuan='2.64';
                $gradepengetahuan='B-';
                break;
            case '76':
                $desimalpengetahuan='2.58';
                $gradepengetahuan='B-';
                break;
            case '75':
                $desimalpengetahuan='2.51';
                $gradepengetahuan='B-';
                break;
            case '74':
                $desimalpengetahuan='2.50';
                $gradepengetahuan='C+';
                break;
            case '73':
                $desimalpengetahuan='2.42';
                $gradepengetahuan='C+';
                break;
            case '72':
                $desimalpengetahuan='2.34';
                $gradepengetahuan='C+';
                break;
            case '71':
                $desimalpengetahuan='2.26';
                $gradepengetahuan='C+';
                break;
            case '70':
                $desimalpengetahuan='2.18';
                $gradepengetahuan='C+';
                break;
            case '69':
                $desimalpengetahuan='2.17';
                $gradepengetahuan='C';
                break;
            case '68':
                $desimalpengetahuan='2.09';
                $gradepengetahuan='C';
                break;
            case '67':
                $desimalpengetahuan='2.01';
                $gradepengetahuan='C';
                break;
            case '66':
                $desimalpengetahuan='1.93';
                $gradepengetahuan='C';
                break;
            case '65':
                $desimalpengetahuan='1.85';
                $gradepengetahuan='C';
                break;
            case '64':
                $desimalpengetahuan='1.84';
                $gradepengetahuan='C-';
                break;
            case '63':
                $desimalpengetahuan='1.76';
                $gradepengetahuan='C-';
                break;
            case '62':
                $desimalpengetahuan='1.68';
                $gradepengetahuan='C-';
                break;
            case '61':
                $desimalpengetahuan='1.59';
                $gradepengetahuan='C-';
                break;
            case '60':
                $desimalpengetahuan='1.51';
                $gradepengetahuan='C-';
                break;
            case '59':
                $desimalpengetahuan='1.50';
                $gradepengetahuan='D+';
                break;
            case '58':
                $desimalpengetahuan='1.42';
                $gradepengetahuan='D+';
                break;
            case '57':
                $desimalpengetahuan='1.34';
                $gradepengetahuan='D++';
                break;
            case '56':
                $desimalpengetahuan='1.26';
                $gradepengetahuan='D+';
                break;
            case '55':
                $desimalpengetahuan='1.18';
                $gradepengetahuan='D+';
                break;
            case '54':
                $desimalpengetahuan='1.17';
                $gradepengetahuan='D+';
                break;
            case '53':
                $desimalpengetahuan='1.13';
                $gradepengetahuan='D+';
                break;
            case '52':
                $desimalpengetahuan='1.09';
                $gradepengetahuan='D+';
                break;
            case '51':
                $desimalpengetahuan='1.04';
                $gradepengetahuan='D+';
                break;
            case '50':
                $desimalpengetahuan='1.00';
                $gradepengetahuan='D+';
                break;
            default:
                $desimalpengetahuan='0';
                $gradepengetahuan='E';
                break;
        }

        //Akhir dari Nilai Pengetahuan
        //Awal dari Nilai Keterampilan
        switch (floor($hasilketerampilan)) {
            case '100':
                $desimalketerampilan='4.00';
                $gradeketerampilan='A';
                break;
            case '99':
                $desimalketerampilan='3.96';
                $gradeketerampilan='A';
                break;
            case '98':
                $desimalketerampilan='3.93';
                $gradeketerampilan='A';
                break;
            case '97':
                $desimalketerampilan='3.89';
                $gradeketerampilan='A';
                break;
            case '96':
                $desimalketerampilan='3.85';
                $gradeketerampilan='A';
                break;
            case '95':
                $desimalketerampilan='3.3.84';
                $gradeketerampilan='A-';
                break;
            case '94':
                $desimalketerampilan='3.76';
                $gradeketerampilan='A-';
                break;
            case '93':
                $desimalketerampilan='3.68';
                $gradeketerampilan='A-';
                break;
            case '92':
                $desimalketerampilan='3.59';
                $gradeketerampilan='A-';
                break;
            case '91':
                $desimalketerampilan='3.51';
                $gradeketerampilan='A-';
                break;
            case '90':
                $desimalketerampilan='3.50';
                $gradeketerampilan='B+';
                break;
            case '89':
                $desimalketerampilan='3.42';
                $gradeketerampilan='B+';
                break;
            case '88':
                $desimalketerampilan='3.34';
                $gradeketerampilan='B+';
                break;
            case '87':
                $desimalketerampilan='3.26';
                $gradeketerampilan='B+';
                break;
            case '86':
                $desimalketerampilan='3.18';
                $gradeketerampilan='B+';
                break;
            case '85':
                $desimalketerampilan='3.17';
                $gradeketerampilan='B';
                break;
            case '84':
                $desimalketerampilan='3.09';
                $gradeketerampilan='B';
                break;
            case '83':
                $desimalketerampilan='3.01';
                $gradeketerampilan='B';
                break;
            case '82':
                $desimalketerampilan='2.93';
                $gradeketerampilan='B';
                break;
            case '81':
                $desimalketerampilan='2.85';
                $gradeketerampilan='B';
                break;
            case '80':
                $desimalketerampilan='2.84';
                $gradeketerampilan='B';
                break;
            case '79':
                $desimalketerampilan='2.77';
                $gradeketerampilan='B-';
                break;
            case '78':
                $desimalketerampilan='2.71';
                $gradeketerampilan='B-';
                break;
            case '77':
                $desimalketerampilan='2.64';
                $gradeketerampilan='B-';
                break;
            case '76':
                $desimalketerampilan='2.58';
                $gradeketerampilan='B-';
                break;
            case '75':
                $desimalketerampilan='2.51';
                $gradeketerampilan='B-';
                break;
            case '74':
                $desimalketerampilan='2.50';
                $gradeketerampilan='C+';
                break;
            case '73':
                $desimalketerampilan='2.42';
                $gradeketerampilan='C+';
                break;
            case '72':
                $desimalketerampilan='2.34';
                $gradeketerampilan='C+';
                break;
            case '71':
                $desimalketerampilan='2.26';
                $gradeketerampilan='C+';
                break;
            case '70':
                $desimalketerampilan='2.18';
                $gradeketerampilan='C+';
                break;
            case '69':
                $desimalketerampilan='2.17';
                $gradeketerampilan='C';
                break;
            case '68':
                $desimalketerampilan='2.09';
                $gradeketerampilan='C';
                break;
            case '67':
                $desimalketerampilan='2.01';
                $gradeketerampilan='C';
                break;
            case '66':
                $desimalketerampilan='1.93';
                $gradeketerampilan='C';
                break;
            case '65':
                $desimalketerampilan='1.85';
                $gradeketerampilan='C';
                break;
            case '64':
                $desimalketerampilan='1.84';
                $gradeketerampilan='C-';
                break;
            case '63':
                $desimalketerampilan='1.76';
                $gradeketerampilan='C-';
                break;
            case '62':
                $desimalketerampilan='1.68';
                $gradeketerampilan='C-';
                break;
            case '61':
                $desimalketerampilan='1.59';
                $gradeketerampilan='C-';
                break;
            case '60':
                $desimalketerampilan='1.51';
                $gradeketerampilan='C-';
                break;
            case '59':
                $desimalketerampilan='1.50';
                $gradeketerampilan='D+';
                break;
            case '58':
                $desimalketerampilan='1.42';
                $gradeketerampilan='D+';
                break;
            case '57':
                $desimalketerampilan='1.34';
                $gradeketerampilan='D++';
                break;
            case '56':
                $desimalketerampilan='1.26';
                $gradeketerampilan='D+';
                break;
            case '55':
                $desimalketerampilan='1.18';
                $gradeketerampilan='D+';
                break;
            case '54':
                $desimalketerampilan='1.17';
                $gradeketerampilan='D+';
                break;
            case '53':
                $desimalketerampilan='1.13';
                $gradeketerampilan='D+';
                break;
            case '52':
                $desimalketerampilan='1.09';
                $gradeketerampilan='D+';
                break;
            case '51':
                $desimalketerampilan='1.04';
                $gradeketerampilan='D+';
                break;
            case '50':
                $desimalketerampilan='1.00';
                $gradeketerampilan='D+';
                break;
            default:
                $desimalketerampilan='0';
                $gradeketerampilan='E';
                break; 
        }

        //Akhir dari Nilai Keterampilan





        //Awal dari Nilai Sikap
        $puluhansikap=$hasilsikap*100/4;
        if ($hasilsikap>3.51) {
            $gradesikap="SB";
        }
        elseif ($hasilsikap>2.51) {
            $gradesikap="B";
        }
        elseif ($hasilsikap>1.51) {
            $gradesikap="C";
        }
        else
        {
            $gradesikap="K";
        }




    }	

}
