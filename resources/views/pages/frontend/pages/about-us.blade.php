<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/profil.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="icon" href="/assets/image/bq_logo.png" type="image/x-icon" />
    <title>About Us</title>
  </head>
  <body>

  <!-- NAVBAR -->

  @include('pages.frontend.includes.navbar')

  <!-- END NAVBAR -->

    <!-- HEADER -->
    <header>
      <h1>Profil Pesantren</h1>
    </header>
    <!-- END HEADER -->

    <!-- ABOUT US -->
    <div class="all">
      <img src="{{ url('frontend/assets/image/hero_bg.png') }}" alt="Profil Pesantren" />
      <div class="text">
        <h1>Baitul Quran Al Jahra</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
          error assumenda dolorum excepturi magnam officia asperiores id,
          temporibus alias molestiae eaque, nisi quo fugit voluptate nesciunt?
          Neque repellat cum reprehenderit sapiente minima laborum perspiciatis.
          Ea labore beatae non consequuntur pariatur nihil odit tempora
          similique autem, delectus ex, magnam quibusdam laboriosam recusandae
          excepturi consectetur numquam inventore error amet hic sequi totam.
          Iste tempora deleniti, voluptate magni eligendi tenetur, placeat
          architecto quo saepe praesentium blanditiis! Labore ducimus libero rem
          facere necessitatibus, adipisci unde architecto doloremque assumenda
          nemo reprehenderit! Amet ipsam, natus, consectetur quasi dolore
          voluptatum et reprehenderit, aperiam molestiae eaque deserunt
          provident! Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Iusto eaque quo optio quibusdam et fugit in beatae molestiae ducimus
          obcaecati possimus molestias pariatur illum, voluptatem minima nihil
          atque numquam perspiciatis?
        </p>
      </div>
    </div>
    <!-- END ABOUT US -->

    <!-- FOOTER -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->

  </body>
</html>
