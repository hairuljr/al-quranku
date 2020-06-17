<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url('style.css') }}">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <title>Al-Qur'an | Jr Comp</title>
  <meta name="description" content="Qur'an">
  <meta name="keywords" content="qur'an">
  <meta name="author" content="Billy">
  <meta name="theme-color" content="aqua" />
  <meta name="msapplication-navbutton-color" content="aqua" />
  <meta name="apple-mobile-web-app-status-bar-style" content="aqua" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<!-- Team -->
<section id="team" class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Al-Qur'an Online</h5>
    <div class="row">
      <!-- Team member -->
      <?php
        for ($i = 0; $i < count($data['data']); $i++) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="{{ url('alquran2.jpg') }}" alt="card image"></p>
                  <h4 class="card-title">{{ $data['data'][$i]['name'] }}</h4>
                  <p class="card-text">{{ $data["data"][$i]['englishName'] }}</p>
                  <p class="text-muted">
                    Diturunkan di: <strong>{{ $data['data'][$i]['idRevelationType'] }}.</strong>
                    <br>
                    Artinya: <strong>{{ $data['data'][$i]['idNameTranslation'] }}.</strong>
                    <br>
                    Jumlah ayat: <strong>{{ $data['data'][$i]['numberOfAyahs'] }}.</strong>
                  </p>
                  <a href="#" class="btn btn-primary btn-sm">{{ $data['data'][$i]['number'] }}</a>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-body text-center mt-4">
                  <h4 class="card-title">{{ $data['data'][$i]['name'] }}</h4>
                  <p class="text-muted">{{ $data["data"][$i]['englishName'] }}</p>
                  <p class="card-text">“Abu Umamah Al Bahily radhiyallahu ‘anhu berkata: “Aku telah mendengar Rasulullah shallallahu ‘alaihi wasallam bersabda: “Bacalah Al Quran karena sesungguhnya dia akan datang pada hari kiamat sebagai pemberi syafa’at kepada orang yang membacanya” (HR. Muslim).</p>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a style="color:#fff !important; text-decoration: none" class="btn btn-primary btn-sm" href="{{ url('ngaji/'. $data['data'][$i]['number']) }}">Ngaji Yuk
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <?php
        }
      ?>
    </div>
  </div>
</section>
<!-- Team -->
</body>
</html>