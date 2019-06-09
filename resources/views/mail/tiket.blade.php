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
        <img src="D:/Coding/APP/LARAVEL/tiket-granat/public/asset/granat.png" alt="Granat" >
      </td>
      <td class="white" align="left" style="width: 35%">
        <p>Nama: <strong>{{$tiket->nama_lengkap}}</strong></p>
        <p>Email: <strong>****@gmail.com</strong></p>
        <p>Instansi: <strong>Unud</strong></p>
        <p>Type: <strong>Presale</strong></p>
        <br/><br/>
        <pre>
          {!! DNS1D::getBarcodeHTML($tiket->kode_tiket, "C39", 2, 40) !!}
        </pre>
      </td>
      <td class="white" align="right" style="width: 30%">
        <h2>{{$tiket->kode_tiket}}</h2>
        <h3>Gate A</h3>
        <br/><br/><br/><br/>
        <pre>
          <i>Simpan tiket ini baik-baik</i>
        </pre>
      </td>
      <td class="black" style="width: 20%">
        space sponsor
      </td>
    </tr>
  </table>
   
</body>
</html>

{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>John Doe</h3>
                <pre>
Street 15
123456 City
United Kingdom
<br /><br />
Date: 2018-01-01
Identifier: #uniquehash
Status: Paid
</pre>


            </td>
            <td align="center">
                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>CompanyName</h3>
                <pre>
                    https://company.com

                    Street 26
                    123456 City
                    United Kingdom
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Invoice specification #123</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Description</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Item 1</td>
            <td>1</td>
            <td align="left">€15,-</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">€15,-</td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Company Slogan
            </td>
        </tr>

    </table>
</div>
</body>
</html> --}}