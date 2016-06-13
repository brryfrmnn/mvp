<div class="navbar navbar-default  navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo6.png" alt=""></a>
        </div>
            @if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
              <div class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right" id="nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Master <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="datasiswa.php">Data siswa</a></li>
                      <li><a href="dataguru.php">Data Guru</a></li>
                      <li><a href="datakelas.php">Data Kelas</a></li>
                    </ul>
                  </li>

                  <li><a href="datamapel.php">Mata Pelajaran</a></li>
                  <li><a href="jadwalmengajar.php">Jadwal Mengajar</a></li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, Berry <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="user-profile.php">Profile Saya</a></li>
                      <li><a href="">Pengaturan</a></li>
                      <li><a href="{{ route('sentinel.logout') }}">Keluar</a></li>
                    </ul>
                  </li>
                  
                </ul>
                
              </div>
            @endif
  		        
	        
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->