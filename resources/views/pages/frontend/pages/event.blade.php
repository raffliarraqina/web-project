<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/agenda.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="icon" href="{{ url('frontend/assets/image/bq_logo.png') }}" type="image/x-icon" />
    <title>BQAM - Agenda</title>
</head>

<body>
    <!-- NAVBAR -->
    @include('pages.frontend.includes.navbar')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header>
        <h1>Agenda</h1>
    </header>
    <!-- END HEADER -->

    <!-- LATEST AGENDA -->

    <div class="agenda">
        <div class="agenda-top">
            <h1>Agenda <span>Terbaru</span></h1>

            <!--
          Ini niatnya,
          mau dikasih dropdown gitu buat pertahunnya,
          tapi gak bisa bisa.
         -->
            {{-- <div class="agenda-year">
          <h2>2024</h2>
          <i class="material-icons">expand_more</i>
        </div> --}}
            {{-- <form method="get" action="event">
            <div class="agenda-year input-group">
               <select name="year_filter" class="form-select" id="">
                   <option value="2024"><h2>2024</h2></option>
                   <option value="2023"><h2>2023</h2></option>
               </select>
               <button type="submit" class="btn btn-primary">Filter</button>
             <i class="material-icons">expand_more</i>
           </div>
        </form> --}}
            <!-- Biar tau ada agenda apa
          di tahun ini,
          dan tahun kemarin gitu -->
        </div>
        <div class="agenda-bottom">
            <!-- AGENDA CARD 1 -->
            @foreach ($event as $row)
                <div class="agenda-card">
                    <!-- Ini bookmark niatnya buat nambahin info agenda tersebut
            ke kalender,
            tapi gak bisa juga -->

                    <!-- <a href="">
            <i class="material-icons">bookmark</i>
          </a> -->

                    <!-- !!! -->

                    <img src="{{ $row->image }}" alt="Agenda" />
                    <div class="agenda-group">
                        <div class="agenda-date">
                            <h1>{{ $row->month }}</h1>
                            <h2>{{ $row->date }}</h2>
                        </div>
                        <div class="agenda-text">
                            <h3>{{ $row->title }}</h3>
                            <p>
                                {!! Str::words($row->description, '5') !!}
                            </p>
                            <a href="{{ route('detailEvent', $row->slug) }}"> Selengkapnya </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- END LATEST AGENDA -->

  <!-- FOOTER  -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->

</body>

</html>
