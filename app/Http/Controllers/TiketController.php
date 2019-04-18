<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Tiket;
use App\Mail\MailTiket;
use PDF;

class TiketController extends Controller
{
    public function inputData(){
        return view('tiket.input-data');
    }

    public function showData(Request $request){
        $no_tiket = (11111 + Tiket::all()->last()->id);
        $kode_tiket = 'GRN' . (string)$no_tiket;

        $tiket = new Tiket;
        $tiket->kode_tiket = $kode_tiket;
        $tiket->nama_lengkap = $request->get('namaLengkap');
        $tiket->instansi = $request->get('instansi');
        $tiket->email = $request->get('email');

        return view('tiket.show-data', ['tiket' => $tiket]);
    }

    public function saveData(Request $request){
        // Retrieve data tiket
        $data = [];
        $tiket = new Tiket;
        $tiket->kode_tiket = $request->get('kodeTiket');
        $tiket->nama_lengkap = $request->get('namaLengkap');
        $tiket->instansi = $request->get('instansi');
        $tiket->email = $request->get('email');
        // $tiket->save();

        // Generate file receipt.pdf
        $pdf = PDF::loadView('mail.tiket', ['tiket' => $tiket]);

        // Kirim email
        Mail::to($tiket->email)
            ->send(new MailTiket($tiket, $pdf->download()));
        // $data['email'] = $tiket->email;
        // $data['pdf'] = $pdf;
        // Mail::send('mail.tiket', ['data' => $data], function($message) use ($data)
        // {
        //     $message->to($data['email'], 'Jon Doe')->subject('Welcome!');
        //     $message->attachData($data['pdf'], 'invoice.pdf');
        // });
        return "Oke";
        // return $pdf->stream();
    }
}
