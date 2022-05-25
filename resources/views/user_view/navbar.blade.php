<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="{{asset('layout')}}/assets/images/logo.png" alt="Chain App Dev">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <!--<li class="scroll-to-section"><a href="#services">History</a></li>-->
              <li class="scroll-to-section"><a href="#services">Visi</a></li>
              <!--<li class="scroll-to-section"><a href="#pricing">Struktur Organisasi</a></li>-->
              <li class="scroll-to-section"><a href="#pricing">Wisata</a></li>
              <li class="scroll-to-section"><a href="#order">Pemesanan</a></li>
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                                </a>
                                @foreach($resi as $r)
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('Update Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="#modal" data-bs-toggle="modal" data-bs-target="#tiket">
                                        {{ __('Cetak Tiket') }}
                                    </a>
                                    <a class="dropdown-item" href="#modal" data-bs-toggle="modal" data-bs-target="\">
                                        {{ __('Riwayat Transaksi') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
              </li>
          </ul>   
               
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>

        </div>
        
      </div>
    </div>
  </header>
  <div class="modal fade" id="tiket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tiket Wisata</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- <li class="function">ID Pemesanan = {{$r->pemesanan_id}}</li> -->
                  <li class="function">Nama = {{$r->user->name}}</li>
                  <li class="function">Wisata = {{$r->wisata->nama_wisata}}</li>
                  <li class="function">Fasilitas = {{$r->fasilitas->fasilitas}}</li>
                  <li class="function">Tanggal Kunjungan = {{$r->Tanggal_Kunjungan}}</li>
                  <li class="function">Jumlah = {{$r->jumlah}}</li>
                  <li class="function">Tagihan = {{$r->tagihan}}</li>
                </div>               
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a class="btn btn-outline-warning" href="#">cetak pdf</a>
                  <!-- <button type="button" class="btn btn-secondary" href="{{ url('cetak') }}">Cetak PDF</button> -->
                </div>
                @endforeach
              </div>
            </div>
          </div>