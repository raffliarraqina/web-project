@extends('layouts.parent')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Galeri</h5>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=""><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active"><a href=""><i>Galeri</i></a></li>
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
                        <input type="text" class="form-control" placeholder="cari gambar"
                            aria-describedby="button-addon2" name="keyword">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
            </div>

            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('dashboard.gallery.create') }}">
                    <i class="bx bxs-plus-square"><span> Tambah Gambar</span></i>
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
                                <th scope="col">Tanggal</th>
                                <th scope="col">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($gallery as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="w-25">
                                        <img src="{{ $row->image }}" alt="{{ url('public/galleriess' . $row->image) }}"
                                            class="w-75" srcset="">
                                    </td>
                                    <td>
                                        {{ $row->title }}
                                    </td>
                                    <td>
                                        {{ $row->created_at }}
                                    </td>

                                    <td>
                                        <form action="{{ route('dashboard.gallery.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <button class="btn btn-danger m-2" type="submit" onclick="archiveFunction()" name="archive" >
                                                <i class="bi bi-trash"></i> delete
                                            </button> --}}
                                            <button type="submit" class="btn btn-danger show_confirm" data-name""
                                                id="" onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash">Delete</i>
                                            </button>

                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <th colspan="6" class="text-center">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            Data Kosong
                                            <button type="submit" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $gallery->links('pagination::bootstrap-5') }}

                </div>
                <!-- End Table with stripped rows -->
            </div>

        </div>
    </div>

    {{-- Delete
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    var $ = jQuery;
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: Are you sure you want to delete this record?,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script> --}}

@endsection
