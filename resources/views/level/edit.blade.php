@extends('templates.general.main')

@section('title', 'Edit Level')

@section('contents')
<div class="row">
    <div class="col-md-8 col-xl-6">
        @include('libs.alert')
    </div>
</div>
<form action="{{ url('admin/level/' . $level->id . '') }}" method="POST">
    <x-mhb-card :cols="'col-md-8 col-xl-6'">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                placeholder="Masukkan nama level" name="name" value="{{ $level->name }}" required>
            @error('name')
            <div class="invalid-feedback">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="question-limit">Limit Soal</label>
            <input id="question-limit" type="number" class="form-control  @error('limit') is-invalid @enderror"
                placeholder="Masukkan limit soal untuk level ini" value="{{ $level->limit }}" name="limit" required>
            @error('limit')
            <div class="invalid-feedback">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="question-score">Skor per Soal</label>
            <input id="question-score" type="number" class="form-control  @error('score') is-invalid @enderror"
                placeholder="Masukkan skor utk tiap soal pada level ini" value="{{ $level->score }}" name="score"
                required>
            @error('score')
            <div class="invalid-feedback">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>
        <x-slot name="footer">
            <div class="text-right">
                <a href="{{ url('admin/level/' . $level->id . '/delete') }}" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini ?')">Hapus</a>
                <button type="submit" class="btn btn-navy ml-1">Simpan Perubahan</button>
            </div>
        </x-slot>
    </x-mhb-card>
</form>
@endsection
