@extends('layouts.app', ['title' => 'Statistik Prodi'])

@section('content')
    <div class="page-heading"><div><p class="eyebrow">Insight akademik</p><h1>Statistik program studi</h1><p class="subtitle">Rekap jumlah mahasiswa berdasarkan program studi.</p></div><span class="status-pill">Query Builder report</span></div>
    <section class="panel"><div class="panel-heading"><div><h2>Distribusi mahasiswa</h2><p>Laporan ini dibangun menggunakan DB::table(), selectRaw, dan groupBy().</p></div></div><div class="table-wrap"><table><thead><tr><th>Program studi</th><th class="align-right">Jumlah mahasiswa</th></tr></thead><tbody>
        @forelse ($rekap as $row)<tr><td><strong>{{ $row->prodi ?: 'Belum diisi' }}</strong></td><td class="align-right"><span class="grade-pill">{{ $row->jumlah }}</span></td></tr>@empty<tr><td class="empty-state" colspan="2">Data belum tersedia.</td></tr>@endforelse
    </tbody></table></div></section>
@endsection
