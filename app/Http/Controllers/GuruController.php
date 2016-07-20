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
            $users = $role->users()->with('roles')->paginate(8);

            return view('guru.index', ['users' => $users]);
      }

      public function tambah()
      {
            return view('admin.tambahguru');
      }

      public function simpan(Request $request)
      {
            // Validate the form data
              $result = $this->validate($request, [
                  'email' => 'required|email|max:255|unique:users',
                  'password' => 'required|confirmed|min:6',
              ]);

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
                  
                    return redirect('admin/guru/tambah');
              }


              // Assign User Roles
              // foreach ($request->get('roles', []) as $slug => $id) {
                  $role = Sentinel::findRoleBySlug('guru');
                  if ($role) {
                      $role->users()->attach($result->user);
                  }
              // }
                  try {
                        $guru =  new guru;
                        $guru->nik = $request->input('nik');
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
                        $guru->status_walikelas = $request->input('status_walikelas');
                        $guru->user_id = $result->user->id;
                        $guru->admin_id = \Sentinel::getUser()->id;
                        if ($guru->save()) {
                              return redirect('admin/guru/tambah');
                        }
                  } catch (Illuminate\Database\QueryException $e) {
                     dd($e);   
                  } catch (PDOException $e) {
                      dd($e);
                  }  

                  
              // $result->setMessage("User {$request->get('email')} has been created.");
                 
      }
    //Controller Buat Guru
      
    	public function guruProfil()
      {
       return view('guru.profile');
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
