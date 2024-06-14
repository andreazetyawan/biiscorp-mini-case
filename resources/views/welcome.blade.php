<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Pegawai - Biiscorp Mini Case</title>
        <!-- Styles -->       
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/dataTables.dataTables.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet">
        <link href="{{asset('css/dataTables.dateTime.min.css')}}" rel="stylesheet">
        
        <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('js/dataTables.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/datatable.js')}}"></script>
        <script src="{{asset('js/select2.js')}}"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>
        <script src="{{asset('js/moment.min.js')}}"></script>
        <script src="{{asset('js/daterangepicker.min.js')}}"></script>
        <script src="{{asset('js/dataTables.dateTime.min.js')}}"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased">
        <div class="container py-5">
            <!-- Content here -->
            <h3>Data Pegawai - Biiscorp Mini Case</h3>
            <p>Test Mini Case Biiscorp</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-4">
                <div class="col">
                    <select class="form-select form data" aria-label="Default select example" id="name" name="name" placeholder="Filter Berdasarkan Nama">
                    <option selected></option>
                    @foreach ($user as $filternama)
                    <option value="{{ $filternama->name }}">{{ $filternama->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col">
                    <select class="form-select form data" aria-label="Default select example" id="email" name="email"  placeholder="Filter Berdasarkan Email">
                    <option selected></option>
                    @foreach ($user as $filteremail)
                    <option value="{{ $filteremail->email }}">{{ $filteremail->email }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" name="daterange" id="daterange" value="" placeholder="Filter Berdasarkan Tanggal" />
                    </select>
                </div>
                <div class="col">
                <a class="btn btn-primary btn-sm btn-block" role="button" href="{{ route('tambah-data') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Tambah Data
                </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                <div class="table-responsive">
                    <table class="datatable table table-bordered table-striped table-hover" data-table-source="" data-table-filter-target>
                        <thead>
                            <tr>
                                <th class="table-topper">ID</th>
                                <th class="table-topper">Foto</th>
                                <th class="table-topper">Nama</th>
                                <th class="table-topper">Email</th>
                                <th class="table-topper">Status</th>
                                <th class="table-topper">Bergabung</th>
                                <th class="table-topper">Perubahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>
                                @if ($data->photoprofile === '')
                                    <img src="{{ url('storage/images/user.png') }}" width="70" hight="auto" alt="No Photo" class="img-thumbnail">
                                @else
                                    <img src="{{ url('storage/'.$data->photoprofile) }}" width="70" hight="auto" alt="{{ $data->photoprofile }}" class="img-thumbnail">
                                @endif
                                </td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                @if ($data->status === 1)
                                    <td>Aktif</td>
                                @else
                                    <td>Tidak Aktif</td>
                                @endif
                                <td>{{ Carbon\Carbon::create($data->created_at)->format("d/m/Y")}} </td>
                                <td>{{ Carbon\Carbon::create($data->updated_at)->format("d/m/Y")}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </body>
</html>
