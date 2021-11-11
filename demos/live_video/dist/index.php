
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" />
    <style type="text/css">
        .dg.ac{
    display: none ;
  }
    </style>
    <title>Drowning Detection(DDE)</title>
  </head>
  <body style="background-color: #c4c4c4">
    <div class="navbar">
      <nav class="nav w-100 card bg-transparent border-0 px-4">
        <div>
            <button class="btn btn-secondary float-end" style="background-color: black; border: black" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
              <i class="bi-bell-fill" style="font-size: 1rem; color: #ffff"></i>
              History
            </button>
        </div>
          
      </nav>
      <span class="navbar-brand mb-0 h1" style="margin-inline-start: 2rem; margin-top: 1rem">Drowning Detection(DDE)</span>
    </div>
    <div class="card p-4" style="margin-right: 5rem; margin-left: 5rem;">
      <div class="row">
        <div class="col">
            <h5 class="card-title">Kamis, 09 September 2021</h5>
            <h6 class="card-subtitle mb-2 text-muted">12.00 WIB</h6>
            <div id="stats"></div>
  <div id="main" >
    <div class="container">
      <div class="canvas-wrapper mx-auto">
        <canvas id="output" width="500" height="330"></canvas>
        <video id="video" playsinline style="
          -webkit-transform: scaleX(-1);
          transform: scaleX(-1);
          visibility: hidden;
          width: 500;
          height: 330;
          ">
        </video>
      </div>
      <div class="w-100 text-center">
        </div>
      <div id="scatter-gl-container"></div>
    </div>
  </div>
        </div>
        <div class="col-5" style="margin-top: 4rem">

          <div class="alert alert-danger" role="alert" id="deteksi"></div>
          <button type="button" class="btn btn-primary">Lihat Hasil Deteksi</button>
          <div id="gambar_div">
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.6/dat.gui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stats.js/r16/Stats.min.js"></script>
<script src="src/index.js"></script>
</html>
