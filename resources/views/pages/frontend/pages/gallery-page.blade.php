<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/gallery.css')}}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css')}}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css')}}" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="icon" href="/assets/image/bq_logo.png" type="image/x-icon" />
    <title>BQAM - Gallery</title>
  </head>
  <body>
    <!-- NAVBAR -->
   @include('pages.frontend.includes.navbar')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header>
      <h1>Gallery Kegiatan</h1>
    </header>
    <!-- END HEADER -->

    <!-- DOCUMENTATION -->
    <div class="documentation">
      <div class="documentation-top">
        <h1>Dokumentasi <span>Terbaru</span></h1>
        {{-- <a href="#">See More On Drive</a> --}}
      </div>
      <div class="documentation-bottom">
        @forelse ($galleries as $row)
        <!-- DOCUMENTATION CARD 1 -->
        <a href="{{ $row->image }}" class="documentation-card">
          <div class="documentation-transition">
            <img src="{{ $row->image }}" alt="" />
            <div class="documentation-overlay"></div>
            <h3>
              {{ $row->title }}
            </h3>
          </div>
        </a>
        @empty
        <tr>
            <th colspan="7" class="text-center">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-octagon me-1"></i>
                    <h1>No Image</h1>
                </div>
            </th>
        </tr>
        @endforelse

      </div>
    </div>
    <!-- END DOCUMENTATION -->

    <!-- FOOTER  -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->
  </body>
</html>
