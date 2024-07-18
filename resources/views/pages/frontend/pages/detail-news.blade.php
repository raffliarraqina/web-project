<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/detail-news.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="icon" href="{{ url('frontend/assets/script/index.js') }}" type="image/x-icon" />
    <title>Detail-News</title>
  </head>

  <body>
    <!-- NAVBAR -->
    @include('pages.frontend.includes.navbar')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header>
      <h1>{{ $news->title }}</h1>
    </header>
    <!-- END HEADER -->

    <!-- Detail News -->
    <div class="all">
      <div class="news">
        <div>
          <img src="{{ $news->image }}" alt="img" width="100"/>
        </div>
        <div>
          <h1>{{ $news->title }}</h1>
        </div>
        <div>
          <p class="text">
            {!! $news->description !!}
          </p>
        </div>
      </div>
      <div class="admin">
        <p class="title">{{ $news->author }}</p>
        <p>{{ $news->created_at }}</p>
      </div>
    </div>
      {{-- <div class="other">
        <!-- another news -->
        <h2>Another News</h2>
      </div> --}}
      <!-- another-news-card -->
      {{-- <div class="all-other-news">

        <div class="card">
          <img src="{{ url('frontend/assets/image/dumy_news_img.jpeg') }}" alt="" />
          <h3></h3>
          <p class="desc">Description kalo mau nih</p>
          <div class="card-text">
            <p class="title">HUMAS BQAM</p>
            <p>1974</p>
          </div>
        </div>

      </div> --}}
    </div>

    <!-- FOOTER  -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->
  </body>
</html>
