<?php

namespace App\Http\Controllers;

use App\Services\PenilaianService;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PenilaianService $penilaianService, Request $request)
    {
        if (!$penilaianService->valid()) {
            return view('penilaian.tidak_valid');
        }



        $penilaianService->hitungWp();
        $penilaianService->setNiceView();

        if (
            $request->has('pdf')
        ) {
            $pdf_option = $request->input('pdf');
            $hanya_hasil = $pdf_option == 'hanya_hasil';
            /** @var PDF $pdf */
            $pdf = Facade::loadView(
                $hanya_hasil ? 'penilaian.pdf_hasil' : 'penilaian.pdf',
                compact('penilaianService', 'hanya_hasil')
            );
            return $pdf->stream('hasil-penilaian.pdf');
        }

        return view('penilaian.index', compact('penilaianService'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
