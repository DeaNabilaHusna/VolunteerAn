<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Volunteer-an</title>
</head>
<body class="dark">
    @include('partials.navbar')

    @if (session()->has('Success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('Success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="container-fluid vh-100" style="margin-top: 85px">
        <div class="row">
            <div class="col">
                <h1 class="text-center" style="font-family: Poppins, sans-serif">Detail Event</h1>
            </div>
        </div>
        <div class="row">
            <div class="col card m-2">
                <div class="card-body">
                    <img src="{{ asset('img/ev3.jpeg') }}" alt="" class="card-img">
                    <div class="card-img-overlay">

                    </div>
                </div>
            </div>

            <div class="col card m-2">
                @foreach ($kegiatans as $kegiatan)
                    @if ($kegiatan->id == $kegiatan_id)
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $kegiatan->nama_event }}</b></h5>
                        <p class="card-text">{{ $kegiatan->organisasi->nama_organisasi }} </p>
                        <p class="card-text">{{ $kegiatan->deskripsi_event }}</p>
                        <p class="card-text">{{ $kegiatan->tglmulai_event }}</p>
                        <p class="card-text">{{ $kegiatan->lokasi_event }}</p>
    
                        <div class=d-grid gap-2 col-4 mx-auto>
                            <button class="btn btn-outline-dark" onclick="location.href='/formregisevent/{{ $kegiatan_id }}'" type="button" href="/formregisevent">Join Us</button>
                          </div>
     
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>