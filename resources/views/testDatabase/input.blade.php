<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  <title>Test Database</title>
</head>
<body>
  <div class="d-flex p-3 flex-column">
    <!-- Form Container -->
    <div class="d-flex p-2 justify-content-center">
      <form action="{{Route('test-database')}}" class="col-md-8" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
  <script src="{{url('js/app.js')}}"></script>
</body>
</html>