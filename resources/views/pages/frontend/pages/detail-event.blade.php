<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/detail-agenda.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="{{ url('frontend/assets/script/index.js') }}"></script>
    <link rel="icon" href="{{ url('frontend/assets/image/bq_logo.png')}}" type="image/x-icon" />
    <title>BQAM - Detail Agenda</title>
  </head>
  <body>
    <!-- NAVBAR -->
    @include('pages.frontend.includes.header')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <!-- <header>
      <h1>Detail Agenda</h1>
    </header> -->
    <!-- END HEADER -->

    <!-- DETAIL AGENDA -->

    <div class="detail-agenda">
      <img src="{{ $event->image }}" alt="Dumy Image" />
      <div class="detail-agenda-text">
        <h1>{{ $event->title }}</h1>
        <p>
          {!! $event->description !!}
        </p>
      </div>
    </div>

    <!-- END DETAIL AGENDA -->

    <!-- FOOTER -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->
  </body>
</html>
