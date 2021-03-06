<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel; 
use App\Pengumuman;
use Sentinel;
use App\KelasJurusan;
use App\Http\Requests;
use App\User;
use App\Guru;
use Reminder;
use Centaur\AuthManager;
class AdminController extends Controller
{
   	//membuat method index untuk ambil data semua siswa
   	

/*================================= Awal Controller ADMIN=========================================*/
    protected $authManager;

    /**
       * Create a new authentication controller instance.
       *
       * @return void
       */
      public function __construct(AuthManager $authManager)
      {
          // $this->middleware('sentinel.guest', ['except' => 'getLogout']);
          $this->authManager = $authManager;
      }
    public function index()
    {
          $role = Sentinel::findRoleBySlug('administrator');
          $users = $role->users()->with('roles')->paginate(8);

          return view('admin.index', ['users' => $users]);
    }
   	public function dataGuru()
   	{
   		$role = Sentinel::findRoleBySlug('guru');
         $guru = $role->users()->with('roles','guru')->paginate(8);
         $no=1;
         $kelasjurusan_id = 0;
         $kelasjurusan = 0;
         //cek jika guru tersebut memiliki role wali kelas
         foreach ($guru as $data) {
            foreach ($data->roles as $role) {
                if ($role->slug == 'wali_kelas') {
                    $data->wali_kelas = true;
                    $kelasjurusan_id = $data->guru->kelas_jurusan_id;
                } else {
                    $data->wali_kelas = false;
                    $kelasjurusan = KelasJurusan::all();
                }
            }
          }
          
        
        return view('admin.dataguru', ['guru' => $guru, 'no' =>$no, 'kelasjurusan' => $kelasjurusan, 'kelasjurusan_id' => $kelasjurusan_id,]);
   	}
      public function dataSiswa()
      {
         $role = Sentinel::findRoleBySlug('siswa');
         $siswa = $role->users()->with('roles')->paginate(8);
         $no=1;
        return view('admin.datasiswa', ['siswa' => $siswa, 'no' =>$no]);
         
      }

      public function ubahPass()
    {
        // $users = $this->userRepository->createModel()->paginate(15);
       
        return view('admin.ubahpassword');
    }

    public function simpanPass()
    {
        // $users = $this->userRepository->createModel()->paginate(15);
       
        return view('admin.ubahpassword');
    }

   	
   	public function tampilMapel()
    {
        //tampilkan semua menggunakan method all() atau get() atau paginate()
        /*
        $pengumuman = Pengumuman::all();
        return redirect('/admin/create')->with('message','Success .. ')
                                        ->with('alert','success');
                                        */
        //atau

        $mapel = Mapel::orderBy('id','desc')->paginate(5);
        $no=1;
        return view('admin.datamapel')->with('mapel',$mapel)->with('no',$no);
    }
    public function storeMapel(Request $request)
    {
        //memasukan semua inputan 
        /*
            ada 2 cara.. menggunakan cara manual menggunakan Eloquent ORM (lebih disarankan)
            atau menggunakan cara Query Builder mnggunakan method insert berbentuk array

            contoh A
        */
        $nama = $request->nama;
        $semester = $request->semester;
        $kode = $nama.' '.$semester;
        $mapel = new Mapel; //deklarasikan objek pengumuman dari Class/odel Pengumuman
        $mapel->admin_id = \Sentinel::getUser()->id; //gunakan Model Sentinel agar dapat id dari orang yang login
        $mapel->nama   = $request->input('nama'); //$request->input mirip $_POST['']
        $mapel->kode   = $kode; //$request->input mirip $_POST['']
        $mapel->kategori  = $request->input('kategori');

        if ($mapel->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/mapel/tampil')->with('message','Data Berhasil Tersimpan ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/mapel/tambah')->with('message','Data Gagal Tersimpan ')
                                        ->with('alert','danger');

        } 
    }

    public function editMapel($id)
    {
        /*$role = Sentinel::findRoleBySlug('administrator');
        $admins = $role->users()->with('roles')->get();*/
        $mapel = Mapel::find($id);
        return view('admin.editmapel')->with('mapel',$mapel); 
    }

    public function updateMapel(Request $request, $id)
    {
        //gunakan method find utntuk mencari id
        $nama = $request->nama;
        $semester = $request->semester;
        $kode = $nama.' '.$semester;
        $mapel = Mapel::find($id);
        $mapel->admin_id = \Sentinel::getUser()->id; //gunakan Model Sentinel agar dapat id dari orang yang login
        $mapel->nama    = $request->input('nama'); //$request->input mirip $_POST['']
        $mapel->kode   = $kode; //$request->input mirip $_POST['']
        $mapel->kategori    = $request->input('kategori');

        if ($mapel->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/mapel/tampil')->with('message','Data Berhasil Diubah ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/mapel/tambah')->with('message','Data Gagal Diubah ')
                                        ->with('alert','danger');

        }
    }

    public function hapusMapel($id)
    {
        //method hapus .. jika menggunakan softDeletes() data tidak benar2 dihapus .. tapi tidak ditampilkan daja
        //cari dengan method find
        $mapel = Mapel::find($id);
        // $pengumuman->delete();
       if ($mapel->delete()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/mapel/tampil')->with('message','Data Berhasil Dihapus')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/mapel/tambah')->with('message','Data Gagal Dihapus ')
                                        ->with('alert','danger');

        }
    }

   	public function adminProfil()
   	{
   		$nama= 'Rikuchanjelek';
   		return view('admin.profile')->with('nama',$nama);
   	}

   	public function jadwalMengajar()
   	{
   		return view('admin.jadwal_mengajar');
   	}
    public function pengumuman()
    {
      $pengumuman = Pengumuman::orderBy('id','desc')->paginate(3);
      $no=1;
      return view('admin.pengumuman')->with('pengumuman',$pengumuman)->with('no',$no);
      //$role = Sentinel::findRoleBySlug('administrator');
      //$users = $role->users()->with('roles')->paginate(8);
      //$no=1;
      //return view('admin.pengumuman', ['users' => $users, 'no' =>$no]);
    }
      public function tambahSiswa()
      {
         return view('admin.tambahsiswa');
      }
      public function tambahGuru()
      {
         return view('admin.tambahguru');
      }
      public function tambahMapel()
      {
         return view('admin.tambahmapel');
      }
      public function tambahKelas()
      {
         return view('admin.tambahkelas');
      }
      public function tambahJadwal()
      {
       return view('admin.tambahjadwal');
      }
      
      public function editSiswa()
      {
       return view('admin.editsiswa');
      }
      public function editGuru()
      {
       return view('admin.editguru');
      }
      public function editProfil()
      {
       return view('admin.editprofil');
      }
      public function editPengumuman()
      {
       $pengumuman = Pengumuman::orderBy('id','desc')->paginate(3);
       return view('admin.editpengumuman')->with('pengumuman',$pengumuman);
      }
      public function detailSiswa()
      {
       return view('admin.detailsiswa');
      }
      public function detailGuru()
      {
       return view('admin.detailguru');
      }
      public function detailKelas()
      {
       return view('admin.detailkelas');
      }

      public function wali(Request $request)
      { 

          $validator = \Validator::make($request->all(), [
              'guru_id' => 'integer|required|exists:users,id',
              'status' => 'boolean|required',
              'kelasjurusan_id' => 'integer|required'
          ]);
          if ($validator->passes()) {
              //method for giving role walikelas
              $guru_id = $request->input('guru_id');
              $status = $request->input('status');
              $kelasjurusan_id = $request->input('kelasjurusan_id');
              $guru = User::find($guru_id);
              if ($status == 1) {
                  $role = Sentinel::findRoleBySlug('wali_kelas');
                  if ($role) {
                      $role->users()->attach($guru);
                      $setKelasJurusan = Guru::where('user_id',$guru_id)
                                              ->update(['kelas_jurusan_id' => $kelasjurusan_id]);
                  }   
              } else {
                  $role = Sentinel::findRoleBySlug('wali_kelas');
                  if ($role) {
                      $role->users()->detach($guru);
                      $setKelasJurusan = Guru::where('user_id',$guru_id)
                                              ->update(['kelas_jurusan_id' => '0']);
                  }
              }
              return redirect('admin/data/guru')->with('message','Berhasil mengubah ')
                                          ->with('alert','success');
          } else {
              return redirect('admin/data/guru')->with('message','Error '.$validator->errors())
                                          ->with('alert','danger');
          }
      }


    public function postChangePassword(Request $request)
    {
        // Validate the form data
        $validator = \Validator::make($request->all(),[
            'password' => 'required|confirmed|min:6',
            'user_id' => 'required|exists:users,id'
        ]);

         $user = Sentinel::findById($request->input('user_id'));
        // dd($user);
        // Only send them an email if they have a valid, inactive account
        if ($user && $validator->passes()) {
        
              $reminder = Reminder::create($user);
              $code = $reminder->code;
              $result = $this->authManager->resetPassword($code, $request->input('password'));
              if ($result->isFailure()) {
                  return redirect('admin/data/guru')->with('message','Error'.$result->message())
                                              ->with('alert','danger');
              } else {
                  return redirect('admin/data/guru')->with('message','Success')
                                              ->with('alert','success');
              }

        } else {
            return redirect('admin/data/guru')->with('message','Error '.$validator->errors())
                                              ->with('alert','danger');
        }

        // Attempt the password reset
        

        // Return the appropriate response
        return $this->response->array(compact('meta'))->setStatusCode($code);
    }

    public function postChangePasswordSiswa(Request $request)
    {
        // Validate the form data
        $validator = \Validator::make($request->all(),[
            'password' => 'required|confirmed|min:6',
            'user_id' => 'required|exists:users,id'
        ]);

         $user = Sentinel::findById($request->input('user_id'));
        // dd($user);
        // Only send them an email if they have a valid, inactive account
        if ($user && $validator->passes()) {
        
              $reminder = Reminder::create($user);
              $code = $reminder->code;
              $result = $this->authManager->resetPassword($code, $request->input('password'));
              if ($result->isFailure()) {
                  return redirect('admin/siswa')->with('message','Error'.$result->message())
                                              ->with('alert','danger');
              } else {
                  return redirect('admin/siswa')->with('message','Success')
                                              ->with('alert','success');
              }

        } else {
            return redirect('admin/siswa')->with('message','Error '.$validator->passes())
                                              ->with('alert','danger');
        }

        // Attempt the password reset
        

    }

    
}
