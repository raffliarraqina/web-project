@extends('layouts.parent')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambahkan Event</h5>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.event.index') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Tambahkan</li>
                </ol>
            </nav>


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            <div class="p-2">
                <form class="row g-3" action="{{ route('dashboard.event.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="col-md-12">
                        <label for="inputEventName" class="form-label"><strong>Judul Event</strong></label>
                        <input type="text" class="form-control" id="inputEventName" value="{{ old('title') }}"
                            name="title" required>
                    </div>

                    <div class="col-md-12">
                        <label for="inputImageEvent" class="form-label"><strong>Gambar Event</strong></label>
                        <input type="file" class="form-control" id="inputImageEvent" value="{{ old('image') }}"
                            name="image" required>
                    </div>

                    <div class="col-md-12">
                        <label for="inputDate" class="form-label"><strong>Tanggal Event</strong></label>
                        <select class="form-select" aria-label="Pilih Tanggal" id="inputDate" value="{{ old('date') }}"
                            name="date" required>
                            <option selected>Pilih Tanggal</option>
                            <option >01</option>
                            <option >02</option>
                            <option >03</option>
                            <option >04</option>
                            <option >05</option>
                            <option >06</option>
                            <option >07</option>
                            <option >08</option>
                            <option >09</option>
                            <option >10</option>
                            <option >11</option>
                            <option >12</option>
                            <option >13</option>
                            <option >14</option>
                            <option >15</option>
                            <option >16</option>
                            <option >17</option>
                            <option >18</option>
                            <option >19</option>
                            <option >20</option>
                            <option >21</option>
                            <option >22</option>
                            <option >23</option>
                            <option >24</option>
                            <option >25</option>
                            <option >26</option>
                            <option >27</option>
                            <option >28</option>
                            <option >29</option>
                            <option >30</option>
                            <option >31</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="inputMonth" class="form-label"><strong>Bulan Event</strong></label>
                        <select class="form-select" aria-label="Pilih Bulan" id="inputMonth" value="{{ old('month') }}"
                            name="month" required>
                            <option selected>Pilih Bulan</option>
                            <option >Jan</option>
                            <option >Feb</option>
                            <option >Mar</option>
                            <option >Apr</option>
                            <option >Mei</option>
                            <option >June</option>
                            <option >July</option>
                            <option >Aug</option>
                            <option >Sep</option>
                            <option >Okt</option>
                            <option >Nov</option>
                            <option >Des</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label"><strong>Isi Berita</strong></label>
                        <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="reset" onclick="window.location.reload()" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
