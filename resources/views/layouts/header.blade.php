<div class="navbar navbar-default  navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="{{URL('images/logo6.png')}}" alt=""></a>
        </div>
            @if (Sentinel::check() && Sentinel::inRole('administrator'))
              <div class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right" id="nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Master <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ URL('admin/data/siswa') }}">Data Siswa</a></li>
                      <li><a href="{{ URL('admin/data/guru') }}">Data Guru</a></li>
                      <li><a href="{{ URL('admin/data/kelas') }}">Data Kelas</a></li>
                    </ul>
                  </li>

                  <li><a href="{{ URL('admin/mapel/tampil') }}">Mata Pelajaran</a></li>
                  <li><a href="{{ URL('admin/jadwal/mengajar') }}">Jadwal Mengajar</a></li>
                  <li><a href="{{ URL('admin/pengumuman') }}">Pengumuman</a></li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {{Sentinel::getUser()->first_name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ URL('admin/profil') }}">Profile Saya</a></li>
                      <li><a href="">Pengaturan</a></li>
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
                      <li><a href="">Kelas XI</a></li>
                      <li><a href="">Kelas XII</a></li>
                    </ul>
                  </li>
                  @if (Sentinel::check() && Sentinel::inRole('wali_kelas'))
                  <li><a href="{{ URL('walikelas/nilai/kelola') }}">Kelola Nilai</a></li>
                  <li><a href="{{ URL('walikelas/lihatnilai') }}">Lihat Nilai</a></li>
                  @endif
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {{Sentinel::getUser()->first_name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ URL('guru/profil') }}">Profil Saya</a></li>
                      <li><a href="">Pengaturan</a></li>
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
                      <li><a href="">Semester1</a></li>
                      <li><a href="">semester2</a></li>
                      <li><a href="">semester3</a></li>
                      <li><a href="">Semester4</a></li>
                      <li><a href="">semester5</a></li>
                      <li><a href="">semester6</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, Berry <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{URL('siswa/profil')}}">Profil Saya</a></li>
                      <li><a href="">Pengaturan</a></li>
                      <li><a href="{{ route('auth.logout') }}">Keluar</a></li>
                    </ul>
                  </li>
                  
                </ul>
                
              </div>
            @endif
            
  		        
	        
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->