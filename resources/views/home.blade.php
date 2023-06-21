@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTOPOLIO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/boo"></script>
    <style type="text/css">
        body{
            font-family: Arial;
        }
        #projects{
            background-color: rgb(218, 183, 218);
        }
        .form-label>span{
            color: violet;
        }
    </style>
</head>
<body>
    <section id="home" class="pt-5">
        <div class="container-fluid p-0">
            <div class="p-5 text-bg-light text-center">
                {{-- <img src="/storage/{{$item->foto}}" width="150"> --}}
                {{-- <h2 class="mt-3 fw-bold">rimaa</h2> --}}
                {{-- <p class="fs-5">pelajar</p> --}}
            </div>
        </div>
    </section>

    <section id="projects" class="pt-5">
        <div class="container">
            <div class="p-5 text-bg-light text-center">
                <h3 class="fw-bold mb-3"> My Projects</h3>
                <div class="row justify-content-center">
                 @foreach ($portofolio as  $item)

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                               <img src="/storage/{{$item->foto}}" width="150">
                                <p>{{$item->kategori}}</p>
                                <p>{{$item->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </section>

    <form action="{{ url('contact/create') }}" method="post">
        @csrf
            <div class="row">
                 <div class="container-fluid p-3 ">
                    <div class="col-md-12 mt-5">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-mb-3">
                                <label for="" class="form-label">NAMA</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Pesan</label>
                                <input type="text" name="pesan" id="pesan" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">NO HP</label>
                                <input type="number" name="no_telpon" id="no_telpon" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<div class="container my-5">

    <footer class="bg-light text-center text-white">
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->

              <div class="text-center p-3" style="background-color:rgb(255, 255, 255) ">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">rima</a>
    </div>
    <!-- Copyright -->
  </footer>

  </div>
  <!-- End of .container -->
</html>
@endsection
