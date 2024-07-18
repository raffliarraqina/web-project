@extends('layouts.parent')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Berita</h5>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=""><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active"><a href=""><i>Berita</i></a></li>
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

            <div class="col-12">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cari berita"
                            aria-describedby="button-addon2" name="keyword">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
            </div>

            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('dashboard.news.create') }}">
                    <i class="bx bxs-plus-square"><span> Tambah Berita</span></i>
                </a>
            </div>

            <div class="container mt-3">
                <!-- Table with stripped rows -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($news as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="w-25">
                                        <img src="{{ $row->image }}" alt="" class="w-75" srcset="">
                                    </td>
                                    <td>
                                        {{ $row->title }}
                                    </td>
                                    <td>
                                        {{ $row->slug }}
                                    </td>
                                    <td>
                                        {{ $row->author }}
                                    </td>
                                    <td>
                                        {{ $row->created_at }}
                                    </td>
                                    <td>
                                        <a href="{{ route('dashboard.news.show', $row->id) }}" class="btn btn-primary m-2">
                                            <i class="bi bi-eye"></i> show
                                        </a>

                                        <a href="{{ route('dashboard.news.edit', $row->id) }}" class="btn btn-warning m-2">
                                            <i class="bi bi-pencil"></i> edit
                                        </a>

                                        <form action="{{ route('dashboard.news.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger m-2" type="submit" id="" onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash"></i> delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="7" class="text-center">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            Data Kosong
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $news->links('pagination::bootstrap-5') }}

                </div>
                <!-- End Table with stripped rows -->
            </div>

        </div>
    </div>
@endsection
