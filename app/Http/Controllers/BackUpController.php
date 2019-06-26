<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;
use PDF;

class BackUpController extends Controller
{
    public function inputData(){
        return view('tiket.input-backup');
    }

    public function showData(Request $request){
        $kode = $request->get('kodeTiket');
        $tiket = Tiket::where('kode_tiket', (string)$kode)->firstOrFail();

        return view('tiket.show-backup', ['tiket' => $tiket]);
    }

    public function printData(Request $request){

        $tiket = new Tiket;
        $tiket->kode_tiket = $request->get("kodeTiket");
        $tiket->nama_lengkap = $request->get('namaLengkap');
        $tiket->instansi = $request->get('instansi');
        $tiket->email = $request->get('email');
        $tiket->gate = $request->get("gate");

        // Generate file receipt.pdf
        $pdf = PDF::loadView('mail.tiket', ['tiket' => $tiket]);
        //ukuran kertas 25cmx10cm
        $pdf->setPaper([0, 0, 283.46, 708.66], 'landscape');
        $pdf->output(['isRemoteEnabled' => true]);
        return $pdf->download($tiket->kode_tiket . '_' . $tiket->nama_lengkap . '.pdf');
    }
}
