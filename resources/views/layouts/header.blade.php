<div class="navbar navbar-default  navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}"><img src="{{URL('images/logo6.png')}}" alt=""></a>
        </div>
            @if (Sentinel::check() && Sentinel::inRole('administrator'))
              <div class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right" id="nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Master <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ URL('admin/siswa/') }}">Data Siswa</a></li>
                      <li><a href="{{ URL('admin/data/guru') }}">Data Guru</a></li>
                      <li><a href="{{ URL('admin/data/kelasjurusan') }}">Data Kelas dan Jurusan</a></li>
                      <li><a href="{{ URL('admin/data/kelas') }}">Kelola Kelas</a></li>
                      <li><a href="{{ URL('admin/data/jurusan') }}">Kelola Jurusan</a></li>
                    </ul>
                  </li>

                  <li><a href="{{ URL('admin/mapel/tampil') }}">Mata Pelajaran</a></li>
                  <li><a href="{{ URL('admin/jadwal') }}">Jadwal Pelajaran</a></li>
                  <li><a href="{{ URL('admin/pengumuman') }}">Pengumuman</a></li>
                  

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {{Sentinel::getUser()->first_name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ URL('admin/profil') }}">Profile Saya</a></li>
                      <li><a href="{{ URL('admin/tahun_ajar') }}">Ubah Tahun Ajar</a></li>
                      <li><a href="{{ URL('admin/ubahpassword') }}">Ubah Password</a></li>
                      <li><a href="{{ route('auth.logout') }}">Keluar</a></li>
                    </ul>
                  </li>
                  
                </ul>
                
              </div>
            
            @elseif (Sentinel::check() && Sentinel::inRole('guru'))
              <div class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right" id="nav">
                  <li><a href="">Home</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Input Nilai Siswa<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{URL ('guru/kelas/1/show')}}">Kelas X</a></li>
                      <li><a href="{{URL ('guru/kelas/2/show')}}">Kelas XI</a></li>
                      <li><a href="{{URL ('guru/kelas/3/show')}}">Kelas XII</a></li>
                    </ul>
                      
                  </li>
                  @if (Sentinel::check() && Sentinel::inRole('wali_kelas'))
                  <li><a href="{{ URL('walikelas/nilai/kelola')}}">Kelola Nilai</a></li>
                  <li><a href="{{ URL('walikelas/nilai/list') }}">Lihat Nilai</a></li>
                  @endif
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {{Sentinel::getUser()->first_name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ URL('guru/{id}/profil') }}">Profil Saya</a></li>
                      <li><a href="{{ URL('guru/ubahpassword') }}">Ubah Password</a></li>
                      <li><a href="{{ route('auth.logout') }}">Keluar</a></li>
                    </ul>
                  </li>
                  
                </ul>
                
              </div>
            
            @elseif (Sentinel::check() && Sentinel::inRole('siswa'))
              <div class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right" id="nav">
                  <li><a href="">Home</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lihat Nilai Rapor <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{URL('siswa/lihatnilai/rapor/1')}}">Semester 1</a></li>
                      <li><a href="{{URL('siswa/lihatnilai/rapor/2')}}">Semester 2</a></li>
                      <li><a href="{{URL('siswa/lihatnilai/rapor/3')}}">Semester 3</a></li>
                      <li><a href="{{URL('siswa/lihatnilai/rapor/4')}}">Semester 4</a></li>
                      <li><a href="{{URL('siswa/lihatnilai/rapor/5')}}">Semester 5</a></li>
                      <li><a href="{{URL('siswa/lihatnilai/rapor/6')}}">Semester 6</a></li>
                    </ul>
                    
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {{Sentinel::getUser()->first_name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{URL('siswa/profil')}}">Profil Saya</a></li>
                      <li><a href="{{ URL('admin/ubahpassword') }}">Ubah Password</a></li>
                      <li><a href="{{ route('auth.logout') }}">Keluar</a></li>
                    </ul>
                  </li>
                  
                </ul>
                
              </div>
            @endif
            
  		        
	        
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->