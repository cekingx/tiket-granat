<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;
use PDF;

class PanitiaController extends Controller
{
    public function inputData(){
        return view('tiket.input-panitia');
    }

    public function showData(Request $request){
        $tiket = new Tiket;
        $tiket->nama_lengkap = $request->get('namaLengkap');
        $tiket->instansi = $request->get('instansi');
        $tiket->email = $request->get('email');

        return view('tiket.show-panitia', ['tiket' => $tiket]);
    }

    public function saveData(Request $request){
        // Retrieve data tiket
        $no_tiket = (11111 + Tiket::all()->last()->id);
        $kode_tiket = 'GRN' . (string)$no_tiket;

        $gate = Tiket::all()->last()->gate;
        if ($gate < 3) {
            $gate += 1;
        } else {
            $gate = 1;
        }

        $tiket = new Tiket;
        $tiket->kode_tiket = $kode_tiket;
        $tiket->nama_lengkap = $request->get('namaLengkap');
        $tiket->instansi = $request->get('instansi');
        $tiket->email = $request->get('email');
        $tiket->gate = $gate;
        $tiket->save();

        // Generate file receipt.pdf
        $pdf = PDF::loadView('mail.tiket', ['tiket' => $tiket]);
        //ukuran kertas 25cmx10cm
        $pdf->setPaper([0, 0, 283.46, 708.66], 'landscape');
        $pdf->output(['isRemoteEnabled' => true]);
        return $pdf->download($kode_tiket . '_' . $tiket->nama_lengkap . '.pdf');
    }
}
