<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pencetak extends Controller
{
    public function kp1(Request $request){
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

    public function kp4(Request $request){
        $nama = $request->nama;
        $nim = $request->nim;
        $judul = $request->judul;

        $pemlap = $request->pemlap;
        $nipPemlap = $request->nipPemlap;
        $jabatan = $request->jabatan;
        $alamat = $request->alamat;
        $noHp = $request->noHp;

        $lokasiKp = $request->lokasiKp;
        $tanggal = $request->tanggal;

        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('KP-IF-04.docx');

        //edit string
        $phpWord->setValues([
            'nama' => $nama,
            'nim' => $nim,
            'judul' => $judul,

            'pemlap' => $pemlap,
            'nipPemlap' => $nipPemlap,
            'jabatan' => $jabatan,
            'alamat' => $alamat,
            'noHp' => $noHp,

            'lokasiKp' => $lokasiKp,
            'tanggal' => $tanggal
        ]);

        $pathToSave = 'KP-IF-04_edit.docx';
        $phpWord->saveAs($pathToSave);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=KP-IF-04_edit.docx');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        readfile($pathToSave);
        
    }
    
    public function kp5a(Request $request){
        $nama = $request->nama;
        $nim = $request->nim;
        $tempatKp = $request->tempatKp;
        $dosenKp = $request->dosenKp;
        $nipDosenKp = $request->nipDosenKp;
        $tanggalMulai = $request->tanggalMulai;
        $tanggalSelesai = $request->tanggalSelesai;
        $judul = $request->judul;

        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('KP-IF-05A.docx');

        //edit string
        $phpWord->setValues([
            'nama' => $nama,
            'nim' => $nim,
            'tempatKp' => $tempatKp,
            'dosenKp' => $dosenKp,
            'nipDosenKp' => $nipDosenKp,
            'tanggalMulai' => $tanggalMulai,
            'tanggalSelesai' => $tanggalSelesai,
            'judul' => $judul,
        ]);

        $pathToSave = 'KP-IF-05A_edit.docx';
        $phpWord->saveAs($pathToSave);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=KP-IF-05A_edit.docx');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        readfile($pathToSave);
        
    }

    public function kp5b(Request $request){
        $nama = $request->nama;
        $nim = $request->nim;
        $tempatKp = $request->tempatKp;
        $pemlap = $request->pemlap;
        $nipPemlap = $request->nipPemlap;
        $tanggalMulai = $request->tanggalMulai;
        $tanggalSelesai = $request->tanggalSelesai;
        $judul = $request->judul;

        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('KP-IF-05B.docx');

        //edit string
        $phpWord->setValues([
            'nama' => $nama,
            'nim' => $nim,
            'tempatKp' => $tempatKp,
            'pemlap' => $pemlap,
            'nipPemlap' => $nipPemlap,
            'tanggalMulai' => $tanggalMulai,
            'tanggalSelesai' => $tanggalSelesai,
            'judul' => $judul,
        ]);

        $pathToSave = 'KP-IF-05B_edit.docx';
        $phpWord->saveAs($pathToSave);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=KP-IF-05B_edit.docx');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        readfile($pathToSave);
        
    }
}
