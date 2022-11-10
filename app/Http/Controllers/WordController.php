<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index(Request $request){
        $nama = $request->nama;
        $nim = $request->nim;

        $dosenpa = $request->dosenpa;
        $nip = $request->nip;

        $sks = $request->sks;
        $ipk = $request->ipk;

        $tanggal = $request->tanggal;

        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('KP-IF-01.docx');

        //edit string
        $phpWord->setValues([
            'nama' => $nama,
            'nim' => $nim,

            'dosenpa' => $dosenpa,
            'nip' => $nip,

            'sks' => $sks,
            'ipk' => $ipk,

            'tanggal' => $tanggal
        ]);

        $pathToSave = 'KP-IF-01_edit.docx';
        $phpWord->saveAs($pathToSave);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=KP-IF-01_edit.docx');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        readfile($pathToSave);
        
    }
}
