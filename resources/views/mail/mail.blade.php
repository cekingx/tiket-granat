<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  
  Dear {{$tiket->nama_lengkap}}, ini adalah e-tiket kamu dengan nomor {{$tiket->kode_tiket}}
  Jaga kerahasiaan tiket ini karena panitia tidak bertanggung jawab atas modifikasi tiket oleh
  pihak yang tidak bertanggung jawab.

  See you on September 21, 2019 at Sunrise Beach
  <script src="{{url('js/app.js')}}"></script>
</body>
</html>