<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTOPOLIO | SITI IKRIMAH</title>
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

    <!--NavBar-->
    <nav class=" navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">rima</a>
            <button class="navbar-toggle" type="button" data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar_toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
  <!--Akhie navbar-->
  <!-- home -->
  <section id="home" class="pt-5">
    <div class="container-fluid p-0">
        <div class="p-5 text-bg-light text-center">
            <img src="https://img.freepik.com/free-vector/cute-astronaut-floating-with-moon-balloon-earth-ice-cream-illustration_138676-3355.jpg" alt="" width="200" class="rounded-circle img-thumbnail" srcset="">
            <h2 class="mt-3 fw-bold">rimaa</h2>
            <p class="fs-5">pelajar</p>
        </div>
    </div>
  </section>
  <!-- Akhir home -->
  <!-- aboutme -->
  <section id="about" class="pt-5">
    <div class="container">
        <div class="p-10 justify-content-center">
            <div class="text-center">
                <h3 class="fw-bold mb-3">aboutme</h3>
            </div>
            <div class="text-center">
                <div class="text-center" >
                    <p> loream ipsum dolor sit amet consectetur adipisicing elit. sed, rem! Veniam ,
                       fugit consectetur mollitia, quae est placeat doloremque vitae magni explacibo
                   consequatur esse velit iste cum delectus omnis exercitationem adipisci.  </p>
                </div>
                <div class=" text-center">
                   <p>loream ipsum dolor sit amet consectetur adipisicing elit. corporis
                       repudiande quos ,tenetur ea nesciuntnecessitatibus aeque eveniat quasi fugiant
                       reprehederit mollitia recusandae reiciendis sumqu non atque magnam quod
                       tempore repelendus.</p>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- akhir about -->
  <!-- my Project -->
  <section id="projects" class="pt-5">
    <div class="container">
        <div class="p-5 text-bg-light text-center">
            <h3 class="fw-bold mb-3"> My Projects</h3>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6HcCcBET2A-zSnatMMLzdX72Ddp3vneMe_Q&usqp=CAU" class="card-img-top" alt="project 1">
                        <div class="card-body">
                            <p>loream ipsum dolor sit amet consectetur adipisicing elit. corporis
                                repudiande quos ,tenetur ea nesciuntnecessitatibus aeque eveniat quasi fugiant
                                reprehederit mollitia recusandae reiciendis sumqu non atque magnam quod
                                tempore repelendus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://img.freepik.com/free-vector/flying-satellite-with-antenna-space-cartoon-icon-illustration_138676-2898.jpg?auto=format&h=200" alt="">
                        <div class="card-body">
                            <p>loream ipsum dolor sit amet consectetur adipisicing elit. corporis
                                repudiande quos ,tenetur ea nesciuntnecessitatibus aeque eveniat quasi fugiant
                                reprehederit mollitia recusandae reiciendis sumqu non atque magnam quod
                                tempore repelendus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjixjckXIJVAisc-TJC2PiVPlnBZVGkgVVug&usqp=CAUhttps://i.pinimg.com/236x/07/37/dc/0737dc293808f602a9477a2898e28824.jpg" alt="">
                        <div class="card-body">
                            <p>loream ipsum dolor sit amet consectetur adipisicing elit. corporis
                                repudiande quos ,tenetur ea nesciuntnecessitatibus aeque eveniat quasi fugiant
                                reprehederit mollitia recusandae reiciendis sumqu non atque magnam quod
                                tempore repelendus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- akhir project -->
  <!-- awal Contact -->
  <section>
    <div id="contact" class="pt-5">
        <div class="container">
            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">contact me</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="#contact" method="post" id="form-contact">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap <span>*</span></label>
                                <input type="text" class="form-control" name="text" id="text" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span>*</span></label>
                                <input type="text" class="form-control" name="email" id="email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Alamat <span>*</span></label>
                                <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</body>
<div class="container my-5">

  <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="https://t4.ftcdn.net/jpg/05/43/15/21/240_F_543152111_5AOLJw31Hs1TCsRHxVqAgTAaUl4xg2cg.jpg"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://t3.ftcdn.net/jpg/03/00/02/08/240_F_300020899_N275TqND1g3LDqinhrvLhDpCy4RjYG8m.jpg"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->

            <div class="text-center p-3" style="background-color:rgb(184, 153, 184) ">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">rimaaaaaaaaa</a>
  </div>
  <!-- Copyright -->
</footer>

</div>
<!-- End of .container -->
</html>
