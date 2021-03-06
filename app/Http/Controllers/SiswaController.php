<?php

namespace App\Http\Controllers;

use Mail;
use Sentinel;
use App\Http\Requests;
use Centaur\AuthManager;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Users\IlluminateUserRepository;
use App\User;
use App\Role;

use App\KelasJurusan;
use App\Siswa;
use App\NilaiRapor;




class SiswaController extends Controller
{
    //Controller Untuk Siswa
      /** @var Cartalyst\Sentinel\Users\IlluminateUserRepository */
    protected $userRepository;

    /** @var Centaur\AuthManager */
    protected $authManager;
    public function __construct(AuthManager $authManager)
    {
        // $this->middleware('sentinel.guest', ['except' => 'getLogout']);
        $this->authManager = $authManager;
    }

      public function index()
      {
            $role = Sentinel::findRoleBySlug('siswa');
            $users = $role->users()->with('roles')->paginate(8);

            return view('siswa.index', ['users' => $users]);
      }

      public function tampil()
     {
        //tampilkan semua menggunakan method all() atau get() atau paginate()
        /*
        $pengumuman = Pengumuman::all();
        return redirect('/admin/create')->with('message','Success .. ')
                                        ->with('alert','success');
                                        */
        //atau

            $role = Sentinel::findRoleBySlug('siswa');
            $siswa = $role->users()->with('roles','siswa.kelasJurusan')->paginate(8);
            $no=1;
            // dd($siswa[0]->siswa);
            return view('admin.datasiswa', ['users' => $siswa, 'no' => $no]);
     }

     public function detail(Request $request)
     {
        $validator = \Validator::make($request->all(), [
            'id' => 'required|integer',
          ]);
        if ($validator->passes()) {
          $id = $request->id;
          $siswa = User::find($id);
          $now = \Carbon\Carbon::now();
          $last_login = new \Carbon\Carbon($siswa->last_login);
          $difference = ($last_login->diff($now)->days < 1)
                          ? 'Hari ini'
                          : $created->diff($now)->days.' hari yang lalu';
                          return view('admin.detailsiswa', ['siswa' => $siswa,'last_login' => $difference]);
        }
        else
        {  
            return "Error. ".$validator->errors()." Kembali";
        }
        
        
     }

      public function tambah()
      {
            $kelasjurusan = KelasJurusan::all();
            return view('admin.tambahsiswa', compact('kelasjurusan'));
      }

      public function simpan(Request $request)
      {
            $validator = \Validator::make($request->all(), [
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|confirmed|min:6',
            ]);

            if ($validator->passes()) {
                
                // Assemble registration credentials and attributes
                $credentials = [
                    'email' => trim($request->get('email')),
                    'password' => $request->get('password'),
                    'first_name' => $request->get('first_name', null),
                    'last_name' => $request->get('last_name', null),
                    'nomor_induk' => $request->get('nomor_induk'),
                    'phone'  => $request->get('phone',null),
                    'jenis_kelamin' => $request->get('jenis_kelamin',null),
                    'Agama' => $request->get('Agama',null),
                    'tempat_lahir' => $request->get('tempat_lahir',null),
                    'tanggal_lahir' => $request->get('tanggal_lahir',null),
                    'alamat' => $request->get('alamat',null),
                    'photo' => $request->get('photo',null),
                ];
                // $activate = (bool)$request->get('activate', true);

                // Attempt the registration
                $result = $this->authManager->register($credentials, true);

                if ($result->isFailure()) {
                    return redirect('admin/siswa/tambah')->with('message','Error'.$result->message())
                                              ->with('alert','danger');
                } elseif ($result->isSuccessful()) {
                                    // Assign User Roles
                // foreach ($request->get('roles', []) as $slug => $id) {
                    $role = Sentinel::findRoleBySlug('siswa');
                    if ($role) {
                        $role->users()->attach($result->user);
                    }
                // }
                    try {
                          $siswa =  new Siswa;
                          $siswa->semester = $request->input('semester');
                          $siswa->tahun_ajar = $request->input('tahun_ajar');
                          $siswa->jenis_tinggal = $request->input('jenis_tinggal');
                          $siswa->nama_ayah= $request->input('nama_ayah');
                          $siswa->nama_ibu= $request->input('nama_ibu');
                          $siswa->alat_transportasi= $request->input('alat_transportasi');
                          $siswa->penghasilan_orangtua= $request->input('penghasilan_orangtua');
                          $siswa->pekerjaan_ayah= $request->input('pekerjaan_ayah');
                          $siswa->alamat_orangtua = $request->input('alamat_orangtua');
                          $siswa->pekerjaan_ibu= $request->input('pekerjaan_ibu');
                          $siswa->kelas_jurusan_id= $request->input('kelas_jurusan_id');
                          $siswa->user_id = $result->user->id;
                          $siswa->admin_id = \Sentinel::getUser()->id;
                          if ($siswa->save()) {
                                return redirect('admin/siswa/tambah')->with('message','Berhasil input data')
                                              ->with('alert','success');
                          } else {
                                return redirect('admin/siswa/tambah')->with('message','Error. belum diketahui')
                                              ->with('alert','danger');
                          }
                    } catch (Illuminate\Database\QueryException $e) {
                       return redirect('admin/siswa/tambah')->with('message','Error'.$e)
                                              ->with('alert','danger');
                    } catch (PDOException $e) {
                        return redirect('admin/siswa/tambah')->with('message','Error'.$e)
                                              ->with('alert','danger');
                    }  
                         
                }    
            } else {
                return redirect('admin/siswa/tambah')->with('message','Error'.$validator->errors())
                                              ->with('alert','danger');
            }
                 
      }

      public function edit($id)
      {
              /*$role = Sentinel::findRoleBySlug('administrator');
              $admins = $role->users()->with('roles')->get();*/
              $siswa = User::find($id);
              $kelasjurusan = KelasJurusan::all();
              // dd($siswa);
              return view('admin.editsiswa', compact('siswa','kelasjurusan')); 
      }


      public function update(Request $request, $id)
      {
             // dd($user);
            // Validate the form data

               $user =  User::find($id);
               $user->email = $request->input('email');
               $user->first_name = $request->input('first_name');
               $user->last_name = $request->input('last_name');
               // $user->nomor_induk = $request->input('nomor_induk');
               $user->phone = $request->input('phone');
               $user->Agama = $request->input('Agama');
               $user->tempat_lahir = $request->input('tempat_lahir');
               $user->tanggal_lahir = $request->input('tanggal_lahir');
               $user->alamat = $request->input('alamat');
               $user->photo = $request->file('photo');
               // dd($user);
               if ($user->save()) {

                   try {
                        $siswa =  Siswa::where('user_id',$user->id)->update([
                                    'semester' => $request->input('semester'),
                                    'tahun_ajar' => $request->input('tahun_ajar'),
                                    'jenis_tinggal' => $request->input('jenis_tinggal'),
                                    'nama_ayah' => $request->input('nama_ayah'),
                                    'nama_ibu' => $request->input('nama_ibu'),
                                    'alat_transportasi' => $request->input('alat_transportasi'),
                                    'penghasilan_orangtua' => $request->input('penghasilan_orangtua'),
                                    'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                                    'alamat_orangtua' => $request->input('alamat_orangtua'),
                                    'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                                    'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                                    'kelas_jurusan_id' => $request->input('kelas_jurusan_id'),
                                    'user_id' => $user->id,
                                    'admin_id' => \Sentinel::getUser()->id,
                              ]);
                        
                        if ($siswa) {
                              return redirect('admin/siswa/'.$user->id.'/edit')->with('message','Berhasil')->with('alert','success');
                                              
                        }
                  } catch (Illuminate\Database\QueryException $e) {
                     return redirect('admin/siswa/'.$user->id.'/edit')->with('message','Gagal '.$e)->with('alert','danger');   
                  } catch (PDOException $e) {
                      return redirect('admin/siswa/'.$user->id.'/edit')->with('message','Gagal '.$e)->with('alert','danger');
                  }   
               } else {
                   return redirect('admin/siswa/'.$user->id.'/edit')->with('message','Gagal ')->with('alert','danger');
               }

              // Assign User Roles
              // foreach ($request->get('roles', []) as $slug => $id) {                  
              // $result->setMessage("User {$request->get('email')} has been created.");
                 
      }

      public function hapus($id)
          {
              //method hapus .. jika menggunakan softDeletes() data tidak benar2 dihapus .. tapi tidak ditampilkan daja
              //cari dengan method find
              $user = User::find($id);
              // $pengumuman->delete();
             if ($user->delete()) { //jika save berhasil
                  //jika berhasil arahkan ke halaman admin/pengumuman
                  return redirect('admin/siswa')->with('message','Success .. berhasil di hapus')
                                              ->with('alert','success');

              } else {
                  //jika berhasil arahkan ke halaman admin/pengumuman/tambah
                  return redirect('admin/siswa')->with('message','Gagal ..dihapus ')
                                              ->with('alert','danger');

              }
          }

          public function raporsiswa($semester)
         {
            $siswa_id = Sentinel::getUser()->id;
            $semester = $semester;/*
            $tahun_ajaran = $request->tahun_ajaran;*/
            $no =1;
            $raporA = NilaiRapor::with('guru','mapel','siswa.siswa')->where('siswa_id',$siswa_id)
                                ->where('semester',$semester)
                                ->whereHas('mapel',function($query){
                                    $query->where('kategori','A');
                                })
                               /* ->where('tahun_ajaran',$tahun_ajaran)*/
                                ;
            $raporB = NilaiRapor::with('guru','mapel')->where('siswa_id',$siswa_id)
                                ->where('semester',$semester)
                                ->whereHas('mapel',function($query){
                                    $query->where('kategori','B');
                                })
                               /* ->where('tahun_ajaran',$tahun_ajaran)*/
                                ;
            $raporC1 = NilaiRapor::with('guru','mapel')->where('siswa_id',$siswa_id)
                                ->where('semester',$semester)
                                ->whereHas('mapel',function($query){
                                    $query->where('kategori','C1');
                                })
                               /* ->where('tahun_ajaran',$tahun_ajaran)*/
                                ;
            $raporC2 = NilaiRapor::with('guru','mapel')->where('siswa_id',$siswa_id)
                                ->where('semester',$semester)
                                ->whereHas('mapel',function($query){
                                    $query->where('kategori','C2');
                                })
                               /* ->where('tahun_ajaran',$tahun_ajaran)*/
                                ;
            if ($raporA->count()>0 || $raporB->count()>0 || $raporC1->count()>0 || $raporC2->count()>0) {
                $raporA = $raporA->get(); 
                $raporB = $raporB->get(); 
                $raporC1 = $raporC1->get(); 
                $raporC2 = $raporC2->get(); 
                return view('siswa.rapor',compact('raporA','raporB','raporC1','raporC2','no'));
            } else {
                return view('siswa.rapor'); 
            }
         } 
     
}
