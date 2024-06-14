<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Pegawai - Biiscorp Mini Case</title>
        <!-- Styles -->       
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
        
        <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('js/dataTables.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/fileinput.js')}}"></script>
        <script src="{{asset('js/dropzone.js')}}"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased">
        <div class="container py-5">
            <!-- Content here -->
            <h3>Data Pegawai - Biiscorp Mini Case</h3>
            <p>Test Mini Case Biiscorp</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @session('success')
                <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession
            <div class="row row-cols-1 g-1">
                <div class="col">
                <form action="{{ route('tambah-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div id="dropzone">
                    <div>Foto Profile</div>
                    <input type="file" class="form-control" id="photoprofile" name="photoprofile" data-preview-file-type="text" required accept="image/png, image/jpeg, image/jpg" />
                    </div>
                    <div class="mb-3">
                        <label for="make" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Status</label>
                        <select class="form-select" name="status" name="status" aria-label="Default select example">
                            <option selected value="1">Active</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <a class="btn btn-success" role="button" href="{{ route('/') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
