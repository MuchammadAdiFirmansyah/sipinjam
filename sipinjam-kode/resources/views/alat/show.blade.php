@extends('layouts.app')

@section('judul', 'Detail Alat')

@section('konten')
    <h2>Detail Alat</h2>
    <table cellpadding="4">
        <tr><td>Kode</td><td>:</td><td>{{ $alat->kode }}</td></tr>
        <tr><td>Nama</td><td>:</td><td>{{ $alat->nama }}</td></tr>
        <tr><td>Stok</td><td>:</td><td>{{ $alat->stok }}</td></tr>
        <tr><td>Kondisi</td><td>:</td><td>{{ $alat->kondisi }}</td></tr>
        <tr><td>Lokasi</td><td>:</td><td>{{ $alat->lokasi ?? '-' }}</td></tr>
    </table>
    <p><a href="{{ route('alat.index') }}">« Kembali</a></p>
@endsection
