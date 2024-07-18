   <!-- NAVBAR -->
   <nav>
      <div class="container-nav">
        <div class="logo-nav">
          <img src="{{ asset('frontend/assets/image/logo_almami.jpeg') }}" />
          <h1>Al-Imam Islamic School Balikpapan</h1>
        </div>
        <div class="navbar">
          <a class="home" href="{{route('home')}}">Home</a>
          <div class="dropdown">
            <button class="">
              Information
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('news') }}">Berita</a>
              <a href="{{ route('event') }}">Agenda</a>
              <!-- <a href="/pages/wali-santri.html">Wali Santri</a> -->
            </div>
          </div>
          <a class="contact" href="{{ route('galleries') }} ">Gallery</a>
          <div class="dropdown">
            <button>
              About Us
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('about') }}">Profil Pesantren</a>
              <a href="{{ route('visiMisi') }}">Visi Misi Pesantren</a>
            </div>
          </div>
          <div class="dropdown">
            <button>
              Registration
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="/pages/psb-page.html">PSB</a>
              <a href="/pages/karir-page.html">Karir</a>
            </div>
          </div>
          <a class="contact" href="#footer">Contact</a>
        </div>
        
        </div>
        
      </div>
      
    </nav>
    <!-- NAVBAR END -->
