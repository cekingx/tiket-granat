<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <label for="kodeTiket">Kode Tiket</label>
  <div>
    {!! DNS1D::getBarcodeHTML($tiket->kode_tiket, "C39", 2, 40) !!}
  </div>

  <label for="namaLengkap">Nama</label>
  <div>{{$tiket->nama_lengkap}}</div>
  </br>

  <label for="instansi">Instansi</label>
  <div>{{$tiket->instansi}}</div>
   
  <script src="{{url('js/app.js')}}"></script>
</body>
</html>