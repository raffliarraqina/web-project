@extends('pages.frontend.parent')

@section('content')
    <!-- !!! ABOUT US !!! -->
    <div class="aboutus">
        <img src="{{ asset('frontend/assets/image/about-image.png') }}" />
        <div class="aboutus-right">
            <h5>Tentang Kami</h5>
            <h6>Al-Imam<span> Islamic School</span></h6>
            <p>
                <span> Pesantren Baitul Quran Al Jahra </span> adalah lembaga
                pendidikan Islam yang berfokus pada tahfidz Al-Quran dan pengembangan
                karakter santri. Berdiri sejak tahun 2009, kami berkomitmen untuk
                melahirkan generasi Qur'ani yang berprestasi dan berakhlak mulia.
            </p>
            <a href="/pages/profil-page.html">
                Selengkapnya
                <i class="material-icons">arrow_forward_ios</i>
            </a>

        </div>
    </div>

    <!-- ABOUT US END -->

    <!-- PROGRAM -->
    <div class="program">
        <div class="program-title">
            <h6>Program</h6>
            <h1>Program Unggulan <span>Sekolah</span></h1>
        </div>
        <div class="program-card">
            <!-- PROGRAM CARD 1 -->
            <div class="program-card-item">
                <img src="{{ asset('frontend/assets/icon/quran-rounded_icon.svg') }}" />
                <h6>Tahfidz Al-Qur'an</h6>
                <p>
                    Program ini bertujuan untuk mencetak para hafidz dan hafidzah
                    Al-Qur'an 30 juz. Santri diwajibkan untuk menghafal Al-Qur'an setiap
                    hari dan mengikuti program pembinaan tahfidz yang intensif.
                </p>
            </div>
            <!-- PROGRAM CARD 2 -->
            <div class="program-card-item">
                <img src="{{ asset('frontend/assets/icon/quran-rounded_icon.svg') }}" />
                <h6>Takhassus Tahfidz Quran</h6>
                <p>
                    Program ini diperuntukkan bagi santri yang ingin fokus menghafal
                    Al-Qur'an dalam waktu singkat, yaitu selama 3 bulan. Santri akan
                    mengikuti program tahfidz yang lebih intensif dengan target hafalan
                    minimal 15 juz.
                </p>
            </div>
            <!-- PROGRAM CARD 3 -->
            <div class="program-card-item">
                <img src="{{ asset('frontend/assets/icon/quran-rounded_icon.svg') }}" />
                <h6>Kelas Tahfidz Quran Online</h6>
                <p>
                    Program ini diperuntukkan bagi bagi yang ingin menghafal Al-Qur'an
                    secara online. Santri akan mengikuti program tahfidz online dengan
                    menggunakan platform Zoom dan Google Meet.
                </p>
            </div>
        </div>
    </div>
    <!-- PROGRAM END -->

    <!-- ALUMNI -->
    <div class="alumni">
        <div class="alumni-title">
            <h6>Suara Alumni</h6>
            <h1>Apa kata <span>Alumni?</span></h1>
            <p>
                Review Testimoni dari para alumni yang telah menyelesaikan
                pendidikannya di Pesantren Baitul Quran Al Jahra
            </p>
        </div>
        <div class="alumni-card">
            <!-- ALUMNI CARD 1 -->
            <div class="alumni-card-item">
                <div class="alumni-card-item-text">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <p>
                        Pondok keren sangat antusias menerima anak, semoga bagus terus
                        kedepannya. hehe. Pondok keren sangat antusias menerima anak.
                    </p>
                </div>
                <div class="alumni-card-item-profile">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <div class="alumni-card-item-author">
                        <h6>Jamal Jamaludin</h6>
                        <p>Alumni Ke-99</p>
                    </div>
                </div>
            </div>
            <!-- ALUMNI CARD 2 -->
            <div class="alumni-card-item">
                <div class="alumni-card-item-text">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <p>
                        Pondok keren sangat antusias menerima anak, semoga bagus terus
                        kedepannya. hehe. Pondok keren sangat antusias menerima anak.
                    </p>
                </div>
                <div class="alumni-card-item-profile">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <div class="alumni-card-item-author">
                        <h6>Jamal Jamaludin</h6>
                        <p>Alumni Ke-99</p>
                    </div>
                </div>
            </div>
            <!-- ALUMNI CARD 3 -->
            <div class="alumni-card-item">
                <div class="alumni-card-item-text">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <p>
                        Pondok keren sangat antusias menerima anak, semoga bagus terus
                        kedepannya. hehe. Pondok keren sangat antusias menerima anak.
                    </p>
                </div>
                <div class="alumni-card-item-profile">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <div class="alumni-card-item-author">
                        <h6>Jamal Jamaludin</h6>
                        <p>Alumni Ke-99</p>
                    </div>
                </div>
            </div>
            <!-- ALUMNI CARD 4 -->
            <div class="alumni-card-item">
                <div class="alumni-card-item-text">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <p>
                        Pondok keren sangat antusias menerima anak, semoga bagus terus
                        kedepannya. hehe. Pondok keren sangat antusias menerima anak.
                    </p>
                </div>
                <div class="alumni-card-item-profile">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <div class="alumni-card-item-author">
                        <h6>Jamal Jamaludin</h6>
                        <p>Alumni Ke-99</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ALUMNI END -->

    <!-- NEWS -->
    <div class="news">
        <div class="news-title">
            <h6>Berita dan Agenda</h6>
            <h1>Berita <span>Terkini</span></h1>
        </div>
        <div class="news-group">
            <!-- NEWS CARD 1 -->
            @foreach ($lattest_news as $row)
                <a href="{{ route('detailNews', $row->slug) }}" class="news-card">
                    <div class="news-card-transition">
                        <img src="{{ $row->image }}" />
                        <div class="news-card-item">
                            <div class="news-card-item-top">
                                <h6>{{ $row->title }}</h6>
                                <i class="material-icons">arrow_right</i>
                                <p>{{ $row->created_at }}</p>
                            </div>
                            <p>
                                {!! Str::words($row->description, '6') !!}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
            <!-- NEWS CARD 2 -->
            {{-- <a href="" class="news-card">
          <div class="news-card-transition">
            <img src="" />
            <div class="news-card-item">
              <div class="news-card-item-top">
                <h6>BQ Al Jahra</h6>
                <i class="material-icons">arrow_right</i>
                <p>25 days ago</p>
              </div>
              <p>
                Pondok Pesantren Baitul Quran Al Jahra Magetan menggunakan
                kurikulum pendidikan yang memadukan pendidikan agama dan
                pendidikan umum.
              </p>
            </div>
          </div>
        </a>
        <!-- NEWS CARD 3 -->
        <a href="" class="news-card">
          <div class="news-card-transition">
            <img src="" />
            <div class="news-card-item">
              <div class="news-card-item-top">
                <h6>BQ Al Jahra</h6>
                <i class="material-icons">arrow_right</i>
                <p>25 days ago</p>
              </div>
              <p>
                Pondok Pesantren Baitul Quran Al Jahra Magetan menggunakan
                kurikulum pendidikan yang memadukan pendidikan agama dan
                pendidikan umum.
              </p>
            </div>
          </div>
        </a> --}}
        </div>
    </div>
    <!-- NEWS END -->

    <!-- MAP -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3816071689735!2d111.30953357625074!3d-7.642047875595132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79924110827859%3A0x68c872e573f97aee!2sBaitul%20Quran%20Al%20Jahra%20Magetan!5e0!3m2!1sid!2sid!4v1709516205592!5m2!1sid!2sid"
        style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map">
        <div class="map-card">
            <div class="map-title">
                <img src="frontend/assets/icon/google-maps_icon.svg" alt="Google Maps" />
                <h3>Baitul Quran Al Jahra</h3>
            </div>
            <p>
                Jl. Raya Panekan, Sirogo, Tawanganom, Kec. Magetan, Kabupaten Magetan,
                Jawa Timur 63313
            </p>
        </div>
    </div>

    <!-- MAP END -->

    <!-- PROMOSI -->
    <div class="promosi">
        <img src="{{ asset('frontend/assets/image/hero_bg.png') }}" alt="" />
        <div class="promosi-page">
            <h1>Wujudkan Impian Menjadi Hafidz Qur'an yang Berprestasi!</h1>
            <p>
                Tunggu apalagi? Yuk segera gabung! Raih Kesempatanmu Menjadi Hafidz
                Qur'an Berprestasi Bersama Pondok Baitul Quran Al Jahra!
            </p>
            <a href="">Daftar Sekarang</a>
        </div>
    </div>
    <!-- PROMOSI END -->
@endsection
