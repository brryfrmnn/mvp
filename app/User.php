<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cartalyst\Sentinel\Users\EloquentUser as Sentinel;

class User extends Sentinel
{
    protected $table = 'users';
    protected $appends = ['full_name'];
    protected $hidden = ['password'];
    protected $loginNames = ['nomor_induk','email'];
    protected $fillable = [
        'email',
        'nomor_induk',
        'password',
        'last_name',
        'first_name',
        'permissions',
        'phone',
        'jenis_kelamin',
        'Agama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'photo',
    ];

    use SoftDeletes;

    public function admin() //relasi user dengan admin
    {
        return $this->hasOne('App\Admin', 'user_id','id');
    }

    public function guru() //relasi user dengan guru
    {
        return $this->hasOne('App\Guru', 'user_id','id');
    }

    public function siswa() //relasi user dengan siswa
    {
        return $this->hasOne('App\Siswa', 'user_id','id');
    }

    public function mataPelajaran() //relasi user dengan mapel
    {
        return $this->hasMany('App\Mapel', 'admin_id','id');
    }

    public function jadwalPelajaran() //relasi user dengan jadwal oleh admin
    {
        return $this->hasMany('App\JadwalPelajaran', 'admin_id','id');
    }
    public function jadwalPelajaranGuru() //relasi user dengan jadwal oleh guru
    {
        return $this->hasMany('App\JadwalPelajaran', 'guru_id','id');
    }
    public function jadwalPelajaranSiswa() //relasi user dengan jadwal oleh siswa
    {
        return $this->hasMany('App\JadwalPelajaran', 'siswa_id','id');
    }
    public function nilaiKeterampilanGuru() //relasi user dengan
    {
        return $this->hasMany('App\NilaiKeterampilan', 'guru_id','id');
    }
    public function nilaiKeterampilanSiswa() //relasi user dengan
    {
        return $this->hasMany('App\NilaiKeterampilan', 'siswa_id','id');
    }
    public function nilaiPengetahuanGuru() //relasi user dengan
    {
        return $this->hasMany('App\NilaiPengetahuan', 'guru_id','id');
    }
    public function nilaiPengetahuanSiswa() //relasi user dengan
    {
        return $this->hasMany('App\NilaiPengetahuan', 'siswa_id','id');
    }
    public function nilaiSikapGuru() //relasi user dengan
    {
        return $this->hasMany('App\NilaiSikap', 'guru_id','id');
    }
    public function nilaiSikapSiswa() //relasi user dengan
    {
        return $this->hasMany('App\NilaiSikap', 'siswa_id','id');
    }
    public function nilaiDeskripsiGuru() //relasi user dengan
    {
        return $this->hasMany('App\NilaiDeskripsi', 'guru_id','id');
    }
    public function nilaiDeskripsiSiswa() //relasi user dengan
    {
        return $this->hasMany('App\NilaiDeskripsi', 'siswa_id','id');
    }
    public function nilaiRaporGuru() //relasi user dengan
    {
        return $this->hasMany('App\NilaiRapor', 'guru_id','id');
    }
    public function nilaiRaporSiswa() //relasi user dengan
    {
        return $this->hasMany('App\NilaiRapor', 'siswa_id','id');
    }
    

    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }


}
