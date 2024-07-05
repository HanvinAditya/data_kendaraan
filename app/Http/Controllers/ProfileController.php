<?php

namespace App\Http\Controllers;

use App\Models\Form2;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Identitas;

class ProfileController extends Controller
{
    public function isi_form()
    {
        return view('form_1');
    }

    public function upload_pertama(Request $request)
    {
        $data = new Identitas;

        $data->nopol = $request->nopol;
        $data->napem = $request->napem;
        $data->alamat = $request->alamat;
        $data->pengken = $request->pengken;
        $data->merk = $request->merk;
        $data->warna = $request->warna;
        $data->type = $request->type;
        $data->bbm = $request->bbm;
        $data->jenis = $request->jenis;
        $data->warnatnkb = $request->warnatnkb;
        $data->model = $request->model;
        $data->tahunreg = $request->tahunreg;
        $data->tahunpem = $request->tahunpem;
        $data->nomorbpkb = $request->nomorbpkb;
        $data->isisilinder = $request->isisilinder;
        $data->berlaku = $request->berlaku;
        $data->norang = $request->norang;
        $data->nomes = $request->nomes;

        $data->save();

        return redirect('form_2');
    }

    public function isi_form_dua()
    {
        return view('form_2');
    }

    public function upload_kedua(Request $request)
    {
        // Validasi form
        $request->validate([
            'dakep' => 'required',
            'exp_stnk' => 'required|date',
            'exp_tnkb' => 'required',
            'exp_kir' => 'required|date',
            'bpkb' => 'required',
            'dup_key' => 'required',
            'exp_asr' => 'required|date',
            'or_q1' => 'nullable',
            'or_q2' => 'nullable',
            'or_q3' => 'nullable',
            'or_q4' => 'nullable',
        ]);

        // Buat instance dari model Form2
        $data = new Form2;

        // Isi data dari request
        $data->dakep = $request->dakep;
        $data->exp_stnk = $request->exp_stnk;
        $data->exp_tnkb = $request->exp_tnkb;
        $data->exp_kir = $request->exp_kir;
        $data->bpkb = $request->bpkb;
        $data->dup_key = $request->dup_key;
        $data->exp_asr = $request->exp_asr;
        $data->or_q1 = $request->or_q1;
        $data->or_q2 = $request->or_q2;
        $data->or_q3 = $request->or_q3;
        $data->or_q4 = $request->or_q4;

        // Hitung jatuh tempo STNK
        if ($request->exp_stnk) {
            $expiredStnkDate = Carbon::parse($request->exp_stnk);
            $daysDiffStnk = $expiredStnkDate->diffInDays(Carbon::now(), false);
            $data->jatuh_tempo_stnk = $daysDiffStnk;
        }

        // Hitung jatuh tempo KIR
        if ($request->exp_kir) {
            $expiredKirDate = Carbon::parse($request->exp_kir);
            $daysDiffKir = $expiredKirDate->diffInDays(Carbon::now(), false);
            $data->jatuh_tempo_kir = $daysDiffKir;
        }

        // Hitung jatuh tempo asuransi
        if ($request->exp_asr) {
            $expiredAsrDate = Carbon::parse($request->exp_asr);
            $daysDiffAsr = $expiredAsrDate->diffInDays(Carbon::now(), false);
            $data->jatuh_tempo_asuransi = $daysDiffAsr;
        }

        // Simpan data ke database
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}

