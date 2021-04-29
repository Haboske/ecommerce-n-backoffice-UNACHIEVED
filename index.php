<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php require "assets/head.php" ?>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="assets/banner.css">
    <script type="text/javascript" src="script.js"></script>  
</head>
<body>
  <?php
    include 'assets/header.php';
  ?>
  <main>
    <?php
      include 'assets/banner.php';
    ?>
    <section id="recommendations">
      <article>
        <img src="media/album1.jpg">
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ratione quas nihil harum nesciunt quos sit voluptates cupiditate perferendis saepe laborum sunt sequi deserunt, illo provident culpa deleniti, necessitatibus veniam aliquam qui voluptatem error? Dignissimos impedit expedita quasi minus, sit nostrum quod quam rerum! Dolorem dicta quisquam dolorum, corporis voluptatem maiores optio sint possimus incidunt recusandae perferendis placeat voluptas mollitia!
        </p>
      </article>
      <article>
        <img src="media/album2.jpg">
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ratione quas nihil harum nesciunt quos sit voluptates cupiditate perferendis saepe laborum sunt sequi deserunt, illo provident culpa deleniti, necessitatibus veniam aliquam qui voluptatem error? Dignissimos impedit expedita quasi minus, sit nostrum quod quam rerum! Dolorem dicta quisquam dolorum, corporis voluptatem maiores optio sint possimus incidunt recusandae perferendis placeat voluptas mollitia!
        </p>
      </article>
    </section>
    <section>
      <h3>Découvrez des morceaux en live !</h3>
      <article id="live">
        <div id="live_div">

          <!-- //////////////////////////////////////////// -->
          <!-- FAUSSE LECTURE UNIQUEMENT POUR FRONT END, SERA MODIFIER AVEC L'ARRIVEE DU BACKEND  -->
          <!-- //////////////////////////////////////////// -->

          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <source src="media/1.mp3" type="audio/mpeg">
                  <!-- <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <source src="media/2.mp3" type="audio/mpeg">
                  <!-- <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <!-- <source src="monAudio.mp3" type="audio/mpeg">
                  <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <!-- <source src="monAudio.mp3" type="audio/mpeg">
                  <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <!-- <source src="monAudio.mp3" type="audio/mpeg">
                  <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <!-- <source src="monAudio.mp3" type="audio/mpeg">
                  <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <!-- <source src="monAudio.mp3" type="audio/mpeg">
                  <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
             
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <!-- <source src="monAudio.mp3" type="audio/mpeg">
                  <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>
          <div class="live_vinyl">
              <img src="media/album2.jpg">
              <button>
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="icon-equalizer-anim" fill="#ffffff">
                      <rect class="eq__bar" id="eq1" x="1" y="8" width="4" height="8"></rect>
                      <rect class="eq__bar" id="eq2" x="6" y="1" width="4" height="15"></rect>
                      <rect class="eq__bar" id="eq3" x="11" y="4" width="4" height="12"></rect>
                  </g>
                </svg>
                <audio>
                  <!-- <source src="monAudio.mp3" type="audio/mpeg">
                  <source src="monAudio.flac" type="audio/flac">
                  <source src="monAudio.ogg" type="audio/ogg"> -->
                </audio>
              </button>
              
          </div>

          <!-- //////////////////////////////////////////// -->
          <!-- FAUSSE LECTURE UNIQUEMENT POUR FRONT END, SERA MODIFIER AVEC L'ARRIVEE DU BACKEND  -->
          <!-- //////////////////////////////////////////// -->

        </div>
      </article>
    </section>
    <section>
      <div id="link">
        <h3>
          Accédez à plus d'un milliers de vinyles disponibles en réservation !
        </h3>
        <p>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
        </p>
        <a href="#">
          Je vais sur la boutique !
        </a>
      </div>
    </section>
  </main>

</body>
</html>
