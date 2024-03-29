<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  <title>Show Data</title>
</head>
<body>
    <div class="d-flex p-3 flex-column">
      <!-- Form Container -->
      <div class="d-flex p-2 justify-content-center">
        <form action="{{Route('save-data')}}" class="col-md-8" method="POST">
          @csrf
          <div class="form-group">
            <label for="kodeTiket">Kode Tiket</label>
            <div>
              {!! DNS1D::getBarcodeSVG($tiket->kode_tiket, "C39", 2, 40) !!}
            </div>
            <input type="hidden" name="kodeTiket" value="{{$tiket->kode_tiket}}">
          </div>

          <div class="form-group">
            <label for="namaLengkap">Nama</label>
            <input type="text" class="form-control" readonly id="namaLengkap" name="namaLengkap" value="{{$tiket->nama_lengkap}}">
          </div>
  
          <div class="form-group">
            <label for="instansi">Instansi</label>
            <input type="text" class="form-control" readonly id="instansi" name="instansi" value="{{$tiket->instansi}}">
          </div>
  
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" readonly id="email" name="email" value="{{$tiket->email}}">
          </div>
  
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
  
      </div>
    </div>  
  <script src="{{url('js/app.js')}}"></script>
</body>
</html>