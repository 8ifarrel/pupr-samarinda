<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sejarah Samarinda | Dinas Pekerjaan Umum dan Penataan Ruang Kota Samarinda</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/calendar.css">
  <link rel="stylesheet" href="css/footbar.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/navbar.css"> 
  <!-- ayam -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
</head>
<body>
  @include('partials.navbar')

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="/assets/img/samarinda-lawan.png" class="d-block w-100" alt="..." style="filter: brightness(35%);">

        <div class="container">
          <div class="carousel-caption d-flex justify-content-center flex-column h-100">
            <h1 class="fw-bold fs-xl pb-2">PROFIL</h1>
            <p class="fs-md">Sejarah Samarinda</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('partials.footbar')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
  
  <script src="https://cdn.jsdelivr.net/gh/mickidum/acc_toolbar/acctoolbar/acctoolbar.min.js"></script>
  <script>
    window.onload = function() {
      window.micAccessTool = new MicAccessTool({
        buttonPosition: 'right',
        forceLang: 'en-US'
      });
    }
  </script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="js/calendar.js"></script>
  <script src="js/navbar.js"></script>
  <script src="js/time.js"></script>
  
</body>
</html>