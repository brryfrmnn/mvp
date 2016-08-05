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
use App\Guru;


class GuruController extends Controller
{
    //Controller Untuk guru
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
            $role = Sentinel::findRoleBySlug('guru');
            $users = $role->users()->with('roles')->paginate(4);

            return view('guru.index', ['users' => $users]);
      }

      public function tambah()
      {
            return view('admin.tambahguru');
      }

      public function simpan(Request $request)
      {
            // Validate the form data
              /*$result = $this->validate($request, [
                  'email' => 'required|email|max:255|unique:users',
                  'password' => 'required|confirmed|min:6',
              ]);*/
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
                      // return redirect('admin/guru/tambah');
                     return redirect('admin/guru/tambah')->with('message','Error'.$result->message())
                                              ->with('alert','danger');
                } elseif ($result->isSuccessful()) {
                    // Assign User Roles
                // foreach ($request->get('roles', []) as $slug => $id) {
                    $role = Sentinel::findRoleBySlug('guru');
                    if ($role) {
                        $role->users()->attach($result->user);
                    }
                // }
                    try {
                          $guru =  new guru;
                          $guru->nip = $request->input('nip');
                          $guru->status_kepegawaian = $request->input('status_kepegawaian');
                          $guru->jabatan = $request->input('jabatan');
                          $guru->tugas_tambahan= $request->input('tugas_tambahan');
                          $guru->sk_pengangkatan= $request->input('sk_pengangkatan');
                          $guru->tahun_pengangkatan= $request->input('tahun_pengangkatan');
                          $guru->lembaga_pengangkatan= $request->input('lembaga_pengangkatan');
                          $guru->sumber_gaji= $request->input('sumber_gaji');
                          $guru->status_perkawinan = $request->input('status_perkawinan');
                          $guru->nama_suami= $request->input('nama_suami');
                          $guru->nama_istri= $request->input('nama_istri');
                          $guru->user_id = $result->user->id;
                          $guru->admin_id = \Sentinel::getUser()->id;
                          if ($guru->save()) {
                                return redirect('admin/guru/tambah')->with('message','Berhasil input data ')
                                              ->with('alert','success');   
                            // dd($guru);
                          }
                    } catch (Illuminate\Database\QueryException $e) {
                        return redirect('admin/guru/tambah')->with('message','Error '.$e)
                                              ->with('alert','danger');   
                    } catch (PDOException $e) {
                        return redirect('admin/guru/tambah')->with('message','Error '.$e)
                                              ->with('alert','danger');   
                    }        
                } else {
                     return redirect('admin/guru/tambah')->with('message','Error input data aneh')
                                              ->with('alert','danger'); 
                }

                
            } else {
                return redirect('admin/guru/tambah')->with('message','Error'.$validator->errors())
                                              ->with('alert','danger'); 
            }

              

                  
              // $result->setMessage("User {$request->get('email')} has been created.");
                 
      }

      public function edit($id)
      {
              /*$role = Sentinel::findRoleBySlug('administrator');
              $admins = $role->users()->with('roles')->get();*/
              $guru = User::find($id);
              // dd($siswa);
              return view('admin.editguru', compact('kelasjurusan')); 
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
                        $guru =  Guru::where('user_id',$user->id)->update([             
                                    'nip' => $request->input('nip'),
                                    'status_kepegawaian' => $request->input('status_kepegawaian'),
                                    'jabatan' => $request->input('jabatan'),
                                    'tugas_tambahan'=> $request->input('tugas_tambahan'),
                                    'sk_pengangkatan'=> $request->input('sk_pengangkatan'),
                                    'tahun_pengangkatan'=> $request->input('tahun_pengangkatan'),
                                    'lembaga_pengangkatan'=> $request->input('lembaga_pengangkatan'),
                                    'sumber_gaji'=> $request->input('sumber_gaji'),
                                    'status_perkawinan' => $request->input('status_perkawinan'),
                                    'nama_suami'=> $request->input('nama_suami'),
                                    'nama_istri'=> $request->input('nama_istri'),
                                    'status_walikelas' => $request->input('status_walikelas'),
                                    'user_id' => $user->id,
                                    'admin_id' => \Sentinel::getUser()->id,
                              ]);
                        
                        if ($guru) {
                              return redirect('admin/guru/'.$user->id.'/edit');
                        }
                  } catch (Illuminate\Database\QueryException $e) {
                     dd($e);   
                  } catch (PDOException $e) {
                      dd($e);
                  }   
               } else {
                  return redirect('admin/guru/'.$user->id.'/edit');
               }

              // Assign User Roles
              // foreach ($request->get('roles', []) as $slug => $id) {                  
              // $result->setMessage("User {$request->get('email')} has been created.");
                 
      }


    //Controller Buat Guru
      public function hapus($id)
      {
       //method hapus .. jika menggunakan softDeletes() data tidak benar2 dihapus .. tapi tidak ditampilkan daja
        //cari dengan method find
        $user = User::find($id);
        $guru = Guru::where('user_id',$user->id);

        // $pengumuman->delete();
       if ($user->delete() && $guru->delete()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman

            return redirect('/admin/data/guru')->with('message','Success .. berhasil di hapus')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/data/guru')->with('message','Gagal ..dihapus ')
                                        ->with('alert','danger');

        }
      }

    	public function profil($id)
      {
           $user = User::find($id);
           return view('guru.profile')->with('user',$user); 
      }



      public function KelasX()
      {
       return view('guru.kelasx');
      }
      public function inputNilai()
      {
       return view('guru.inputnilai');
      }
      public function editNilai()
      {
       return view('guru.editnilai');
      }
      public function inputNilaiPengetahuan()
      {
       return view('guru.inputnilaipengetahuan');
      }
      public function inputNilaiKeterampilan()
      {
       return view('guru.inputnilaiketerampilan');
      }
      public function inputNilaiSikap()
      {
        return view('guru.inputnilaisikap');
      }
      public function editNilaiPengetahuan()
      {
       return view('guru.editnilaipengetahuan');
      }
      public function editNilaiKeterampilan()
      {
       return view('guru.editnilaiketerampilan');
      }
      public function editNilaiSikap()
      {
       return view('guru.editnilaisikap');
      }
      public function editProfil()
      {
       return view('guru.editprofil');
      }
      
}
