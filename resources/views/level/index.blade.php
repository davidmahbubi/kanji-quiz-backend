@extends('templates.general.main')

@section('title', 'Level')

@section('contents')
<div class="row">
    <div class="col-md-10">
        @include('libs.alert')
        @include('libs.validation-alert')
    </div>
</div>
<x-mhb-card :direction="'right'" :cols="'col-md-10'">
    <button class="btn btn-navy" data-toggle="modal" data-target="#add-level-modal">Tambah Level</button>
</x-mhb-card>
<x-mhb-card :cols="'col-md-10'">
    <x-slot name="header">
        <h3 class="card-title">Daftar soal yang tersedia</h3>
        @include('libs.minimize-card-toolbox')
    </x-slot>
    <div class="table-responsive">
        <table class="table table-bordered table-hover data-table-here">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Limit Soal</th>
                    <th>Skor per Soal</th>
                    <th>Jumlah Soal Terdaftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($levels as $level)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $level->name }}</td>
                    <td>{{ $level->limit }}</td>
                    <td>{{ $level->score }}</td>
                    <td>{{ count($level->question) }}</td>
                    <td>
                        <a href="{{ url('admin/level/' . $level->id . '/edit') }}" class="btn btn-circle text-navy">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ url('admin/level/' . $level->id . '/delete') }}"
                            onclick="return confirm('Yakin ingin menghapus data ini ?')"
                            class="btn btn-circle text-danger">
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
<x-mhb-modal :id="'add-level-modal'" :title="'Tambah Level Baru'">
    <form action="" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" class="form-control" name="name" placeholder="Masukkan nama level" required>
        </div>
        <div class="form-group">
            <label for="question-limit">Limit Soal</label>
            <input id="question-limit" type="number" class="form-control" name="limit"
                placeholder="Masukkan limit soal pada level ini" required>
        </div>
        <div class="form-group">
            <label for="question-score">Skor per Soal</label>
            <input id="question-score" type="number" class="form-control" name="score"
                placeholder="Masukkan skor utk tiap soal pada level ini" required>
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
