<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <style type="text/css">
    @page{
      margin: 0px;
    }

    *{
      font-family: Verdana, Arial, sans-serif;
    }

    .black{
      background-color: #000000;
      color: #ffffff;
    }

    .white{
      background-color: #ffffff;
      color: #000000;
    }

    img{
      max-height: 230pt;
    }
    
  </style>
</head>
<body>
  {{-- <label for="kodeTiket">Kode Tiket</label>
  <div id="kodeTiket">
    {!! DNS1D::getBarcodeHTML($tiket->kode_tiket, "C39", 2, 40) !!}
  </div>

  <label for="namaLengkap">Nama</label>
  <div>{{$tiket->nama_lengkap}}</div>
  </br>

  <label for="instansi">Instansi</label>
  <div>{{$tiket->instansi}}</div> --}}
  <table width="100%" class="page-break">
    <tr>
      <td class="white" align="center" style="width: 15%; height: 260pt">
        <img src="D:/tiket-granat/public/asset/granat.png" alt="Granat" >
      </td>
      <td class="white" align="left" style="width: 35%">
        <p>Nama: <strong>{{ $tiket->nama_lengkap }}</strong></p>
        <p>Email: <strong>{{ $tiket->email }}</strong></p>
        <p>Instansi: <strong>{{ $tiket->instansi }}</strong></p>
        <p>Type: <strong>Presale 1</strong></p>
        <br/><br/>
        <pre>
          {!! DNS1D::getBarcodeHTML($tiket->kode_tiket, "C39", 2, 40) !!}
        </pre>
      </td>
      <td class="white" align="right" style="width: 30%">
        <h2>{{ $tiket->kode_tiket }}</h2>
        <h3>Gate {{ $tiket->gate }}</h3>
        <br/><br/><br/><br/>
        <pre>
          <i>Jaga kerahasiaan tiket dengan baik</i>
        </pre>
      </td>
      <td class="black" style="width: 20%">
        space sponsor
      </td>
    </tr>
  </table>
   
</body>
</html>
