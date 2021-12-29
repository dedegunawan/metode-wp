@extends('layouts.pdf')

@push('css')
    <style>
        .table {
            width: 100%;
        }
        .table td, .table th {
            padding: 3px;
            word-wrap: break-word;
        }
    </style>
@endpush

@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="page-header text-center" style="text-align: center"> Hasil Penilaian</h3>
            </div>
            <div class="card-body">

                @php
                    $unsorted = @$penilaianService->getNormalizedVList();
                    arsort($unsorted);
                    $sorted = $unsorted;
                @endphp


                <table class="table table-hover table-bordered" border="1" style="border-collapse:collapse !important;">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Alternatif</th>
                        <th>Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sorted as $key => $v_list)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>
                                {{@$penilaianService->getAlternatif($key)['nama_alternatif']}}
                                &nbsp;&nbsp;
                                @if($loop->first)
                                    <small class="text-success">**</small>
                                @endif
                            </td>
                            <td>{{round($v_list, 3)}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                ** alternatif terbaik

            </div>
        </div>
    </div>
</div>
@endsection
