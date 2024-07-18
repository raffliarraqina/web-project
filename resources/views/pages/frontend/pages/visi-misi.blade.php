<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ url('frontend/assets/style/visi-misi.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link rel="icon" href="{{ url('frontend/assets/image/bq_logo.png') }}" type="image/x-icon" />
    <title>BQAM - Visi Misi</title>
  </head>

  <body>
    <!-- NAVBAR -->
    @include('pages.frontend.includes.navbar')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header>
      <h1>Visi Misi Pesantren</h1>
    </header>
    <!-- END HEADER -->

    <!-- VISI MISI -->

    <div class="all">
    <img src="{{ url('frontend/assets/image/hero_bg.png') }}" alt="Profil Pesantren" />
      <div class="visi">
        <h2>Visi</h2>
        <p>
          Menjadi Lembaga Dakwah dan Pendidikan Islam terkemuka dan modern dalam
          mencerahkan dan mencerdaskan kehidupan bangsa guna membentuk
          masyarakat Indonesia yang beriman, berilmu, beramal, dan bertaqwa
          menuju izzul Islam wal muslimin
        </p>
      </div>
      <div class="misi">
        <h2>Misi</h2>
        <div class="all-2">
          <ol type="1">
            <li>
              Membina dan mengembangkan dakwah dan pendidikan Islam dalam arti
              yang seluar-luasnya dengan semangat amar makruf nahi munkar.
            </li>
            <li>
              Mengawal dan membela aqidah Islamiyah berdasarkan Al-Qurân dan
              Sunnah Rasul.
            </li>
            <li>
              Menegakkan nilai-nilai kemanusiaan sesuai ajaran Islam demi
              kesejahteraan umat dan bangsa lahir dan batin.
            </li>
            <li>
              Meningkatkan kualitas SDM guna mewujudkan masyarakat yang beriman,
              berilmu, beramal, dan bertaqwa melalui pengembangan kegiatan yang
              meningkatkan IMTAQ dan IPTEK sesuai aqidah Islam.
            </li>
            <li>
              Mendorong terwujudnya persatuan dan kesatuan umat untuk
              kesejahteraan seluruh rakyat Indonesia.
            </li>
          </ol>
        </div>
      </div>
    </div>

    <!-- END VISI MISI -->

    <!-- FOOTER  -->
    @include('pages.frontend.includes.footer')
    <!-- FOOTER END -->
  </body>
</html>
