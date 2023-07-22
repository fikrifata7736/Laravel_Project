<!DOCTYPE html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />


  <link rel="stylesheet" href="assets/web_page.css" />



  <link
    rel="shortcut icon"
    href="assets\img\logo.png"
    type="image/x-icon"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap"
    rel="stylesheet"
  />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">

  <title>Web Page</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-transparant pt-4">
        <div class="container-md">
          <a class="navbar-brand" href=""
            ><img
              src="assets\img\logo.png"
              alt="Logo"
              style="width: 80px; height: 80px"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item" id="dropdown">
                <a class="nav-link" href="#"><p>services</p></a>
              </li>
              <li class="nav-item" id="dropdown2">
                <a class="nav-link" href="#"><p>project</p></a>
              </li>
              <li class="nav-item" id="dropdown2">
                <a class="nav-link" href="#"><p>project</p></a>
              </li>
              <div class="dot"></div>
            </ul>
          </div>
        </div>
      </nav>


      <div
        class="big-menu d-none">

        <div>




  @yield('content')





  {{-- <!-- Footer -->
  <section class="container-fluid px-5 py-5 bg-dark">
    <div class="row py-5 px-5">
      <div class="col-md-2">
        <img
          src="assets/img/logo-tranparan-logoiconwarna.png"
          alt="logo kevuru"
          class="footer-logo"
        />
        <h3 class="text-primary my-5">ADDRESS</h3>
        <p class="text-white mb-2">
          PT. Global Digital Artha
          Ruko Demansion Blok D no 6,
          Alam Sutera,Tangerang - Indonesia.
        </p>
        <!-- <p class="text-white mb-5">Kozatska Street, 122/4 Kyiv, 03022</p> -->
        <h3 class="text-primary mb-3">CONTACT US</h3>
        <p class="text-white mb-3">
          E-mail: <span class="text-primary">support@digitalart.co.id</span>
        </p>
        <p class="text-white fs-6">+62 21 30439710</p>
      </div>
      <div class="col-md-2 text-white mx-5 mt-3">
        <h5 class="mb-5 text-primary">WEB APLICATION</h5>
        <p class="my-2">Concept Art</p>
        <p class="my-2">Casual Aer</p>
        <p class="my-2">Environment Design</p>
        <p class="my-2">Caharater Design</p>
        <p class="my-2">Hidden Object</p>
        <p class="my-2">Slots Game Art</p>
        <p class="my-2">AAA</p>
        <p class="my-2">2D Art</p>
        <p class="my-2">2D Character Design</p>
        <p class="my-2">2D Environment Design</p>
        <p class="my-2">3D Art</p>
        <p class="my-2">3D Characters Design</p>
        <p class="my-2">3D Game Modeling</p>
        <p class="my-2">3D Sculpting</p>
        <p class="my-2">UI/UX Design</p>
        <p class="my-2">Illustration Services</p>
      </div>
      <div class="col-md-3 text-white mx-5 mt-3">
        <h5 class="mb-5 text-primary">DIGITAL MARKETING</h5>
        <p class="my-2">Unity Development</p>
        <p class="my-2">Unreal Development</p>
        <p class="my-2">PC Game Development</p>
        <p class="my-2">Mobile Game Development</p>
        <p class="my-2">Hyper Casual Game Development</p>
        <p class="my-2">Android Game Development</p>
        <p class="my-2">iOS Game Development</p>
        <p class="my-2">MMORPG Game Development</p>
        <p class="my-2">3D Game Development</p>
        <p class="my-2">Game Testing</p>
        <p class="my-2">Game Porting</p>
        <p class="my-2">Game Porting</p>
        <p class="my-2">Gamification Services</p>
        <p class="my-2">NFT Game Development</p>
      </div>
      <div class="col-md-2 text-white mx-5 mt-3">
        <h5 class="mb-5 text-primary">VTUBER AGENCY</h5>
        <p class="my-2">2D Animation</p>
        <p class="my-2">3D Animation</p>
        <p class="my-2">Motion Graphics Design</p>
      </div>

      <div class="col-md-3 text-white mx-5 mt-3">
        <h5 class="mb-5 text-primary">GAME ANIMATION</h5>
        <p class="my-2">Hire Game Developers</p>
        <p class="my-2">Hire Unity Developers</p>
        <p class="my-2">Hire Unreal Developers</p>
        <p class="my-2">Hire 3D Artists</p>
        <p class="my-2">Hire 3D Modelers</p>
        <p class="my-2">Hire Game Designers</p>
        <p class="my-2">Hire Character Designers</p>
        <p class="my-2">Hire Concept Artists</p>
        <p class="my-2">Hire 2D Artists</p>
        <p class="my-2">Hire Illustrators</p>
        <p class="my-2">Hire 2D Animators</p>
        <p class="my-2">Hire 3D Animators</p>
      </div>
    </div>
  </section> --}}



  {{-- <!-- Scripts --> --}}
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>



    <!-- Optional JavaScript; choose one of the two! -->
    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
    ></script>
    <script src="assets/script.js"></script>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
