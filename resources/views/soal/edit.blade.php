@extends('templates.general.main')

@section('title', 'Edit Soal')

@section('contents')
<div class="row">
    <div class="col-md-8 col-xl-6">
        @include('libs.alert')
    </div>
</div>
<x-mhb-card :cols="'col-md-8 col-xl-6'">
    <form action="{{ url('admin/soal/' . $question->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="level">Level</label>
            <select id="level" class="form-control @error('is-invalid') is-invalid @enderror" name="level_id">
                @foreach($levels as $level)
                    <option value="{{ $level->id }}" {{ $level->id == $question->level_id ? 'selected' : ''}}>{{ $level->name }}</option>
                @endforeach
            </select>
            @error('level_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="question">Soal</label>
            <input id="question" type="text" name="question" class="form-control @error('question') is-invalid @enderror" value="{{ $question->question }}" placeholder="Masukkan Soal" required>
            @error('question')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="option-a">Pilihan A</label>
            <input id="option-a" type="text" name="option_a" class="form-control @error('option_a') is-invalid @enderror" value="{{ $question->option_a }}" placeholder="Masukkan Pilihan A">
            @error('option_a')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="option-b">Pilihan B</label>
            <input id="option-b" type="text" name="option_b" class="form-control @error('option_b') is-invalid @enderror" value="{{ $question->option_b }}" placeholder="Masukkan Pilihan B">
            @error('option_b')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="option-c">Pilihan C</label>
            <input id="option-c" type="text" name="option_c" class="form-control @error('option_c') is-invalid @enderror" value="{{ $question->option_c }}" placeholder="Masukkan Pilihan C">
            @error('option_c')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="option-d">Pilihan D</label>
            <input id="option-d" type="text" name="option_d" class="form-control @error('option_d') is-invalid @enderror" value="{{ $question->option_d }}" placeholder="Masukkan Pilihan D">
            @error('option_d')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    <x-slot name="footer">
        <div class="text-right">
            <button class="btn btn-outline-danger">Hapus</button>
            <button type="submit" class="btn btn-primary ml-1">Simpan Perubahan</button>
        </div>
        </form>
    </x-slot>
</x-mhb-card>
@endsection