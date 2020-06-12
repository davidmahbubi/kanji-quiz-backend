@extends('templates.main')

@section('title', 'Edit Level')

@section('contents')
<x-mhb-card :cols="'col-md-8 col-xl-6'">
    <form action="">
        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" class="form-control" placeholder="Masukkan nama level">
        </div>
        <div class="form-group">
            <label for="question-limit">Limit Soal</label>
            <input id="question-limit" type="text" class="form-control" placeholder="Masukkan limit soal untuk level ini">
        </div>
    </form>
    <x-slot name="footer">
        <div class="text-right">
            <button class="btn btn-outline-danger">Hapus</button>
            <button class="btn btn-primary ml-1">Simpan Perubahan</button>
        </div>
    </x-slot>
</x-mhb-card>
@endsection