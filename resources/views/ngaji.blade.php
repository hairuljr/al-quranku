<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  @if ($data['code'] == 404)
    <title>404 page not found</title>
  @endif
  <title>Surat | {{ $data['data']['englishName'] }}</title>
</head>

<body class="container">
    @if ($data['code'] == 404)
    <h2 class="mt-5 text-center"><i><strong>404 page not found</strong></i></h1>
      <p class="text-center mt-3"><a href="{{ route('index') }}">Kembali ke halaman awal</a></p>
    @else
    <h1 class="display-4 mt-5">{{ $data['data']['englishName'] }}</h1>
    <hr class="my-4">
    <p class="text-muted">
      Arti surat: <strong>{{ $data['data']['idNameTranslation'] }}</strong>
      <br>
      Diturunkan di: <strong>{{ $data['data']['idRevelationType'] }} </strong>
      <br>
      Jumlah ayat: <strong>{{ $data['data']['numberOfAyahs'] }}</strong>
    </p>
    <p>
      <a href="{{ route('index') }}" class="btn btn-primary">Kembali ke halaman awal</a>
      <table class="table table-bordered table-hover">
        <thead class="thead-light text-center">
          <tr>
            <th width="20px">No</th>
            <th width="150px">Arti(ID)</th>
            <th>Ayat</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          for ($i = 0; $i < count($data['data']['ayahs']); $i++) {
          ?>
            <tr>
              <td>{{ $no++ }}</td>
              <td style="width:10px">
                <strong>Artinya: </strong>{{ $data['data']['ayahs'][$i]['text']['id'] }}
              </td>
              <td>
                <p class="text-right">
                  {{ $data['data']['ayahs'][$i]["text"]['arab'] }}
                  <br><br>
                  <strong>Latin: </strong> {{ $data['data']['ayahs'][$i]['text']['latin'] }}
                  <br>
                </p>
                <audio controls>
                  <source src="{{ $data['data']['ayahs'][$i]['audio'] }}" type="audio/mpeg">
                </audio>
              </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </p>
    @endif
    <br>
    <a href="{{ route('index') }}" class="btn btn-primary">Kembali ke halaman awal</a>
    <br><br><br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>