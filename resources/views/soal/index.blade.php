@extends('templates.general.main')

@section('title', 'Bank Soal')

@section('contents')
<div class="row">
    <div class="col">
        @include('libs.alert')
        @include('libs.validation-alert')
    </div>
</div>
<x-mhb-card :direction="'right'">
    <button class="btn btn-navy" data-toggle="modal" data-target="#add-soal-modal">Tambah Soal</button>
</x-mhb-card>
<x-mhb-card>
    <x-slot name="header">
        <h3 class="card-title">Daftar soal yang tersedia</h3>
        @include('libs.minimize-card-toolbox')
    </x-slot>
    <div class="table-responsive">
        <table class="table table-bordered table-hover data-table-here">
            <thead>
                <tr>
                    <th>ID Soal</th>
                    <th>Level</th>
                    <th>Pertanyaan</th>
                    <th>Opsi</th>
                    <th>Jawaban</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $question->level->name }}</td>
                        <td>{{ $question->question }}</td>
                        <td>
                            <ul>
                                <li> A : {{ $question->option_a }}</li>
                                <li> B : {{ $question->option_b }}</li>
                                <li> C : {{ $question->option_c }}</li>
                                <li> D : {{ $question->option_d }}</li>
                            </ul>
                        </td>
                        <td>{{ ucfirst($question->answer)}}</td>
                        <td>
                            <a href="{{ url('admin/soal/' . $question->id . '/edit') }}" class="btn btn-circle text-navy">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{ url('admin/soal/' . $question->id . '/delete') }}" onclick="return confirm('Yakin ingin menghapus soal ini ?')" class="btn btn-circle text-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-mhb-card>
@endsection

@section('modals')
<x-mhb-modal :id="'add-soal-modal'" :title="'Tambah Soal Baru'">
    <form action="{{ url('admin/soal') }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="level">Level</label>
            <select id="level" class="form-control" name="level_id">
                <option value="" disabled selected>-- PILIH LEVEL --</option>
                @foreach($levels as $level)
                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="soal">Soal</label>
            <input id="soal" type="text" class="form-control" placeholder="Masukkan soal" name="question" required>
        </div>
        <div class="form-group">
            <label for="option-a">Pilihan A</label>
            <input id="option-a" type="text" class="form-control" placeholder="Masukkan Pilihan A" name="option_a" required>
        </div>
        <div class="form-group">
            <label for="option-b">Pilihan B</label>
            <input id="option-b" type="text" class="form-control" placeholder="Masukkan Pilihan B" name="option_b" required>
        </div>
        <div class="form-group">
            <label for="option-c">Pilihan C</label>
            <input id="option-c" type="text" class="form-control" placeholder="Masukkan Pilihan C" name="option_c" required>
        </div>
        <div class="form-group">
            <label for="option-d">Pilihan D</label>
            <input id="option-d" type="text" class="form-control" placeholder="Masukkan Pilihan D" name="option_d" required>
        </div>
        <div class="form-group">
            <label for="answer">Jawaban</label>
            <select id="answer" class="form-control" name="answer">
                <option value="" selected disabled>--- PILIH JAWABAN ---</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>
        </div>
    <x-slot name="footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-navy">Submit</button>
        </form>
    </x-slot>
</x-mhb-modal>
@endsection

@section('js')
@include('libs.data-table')
@endsection
