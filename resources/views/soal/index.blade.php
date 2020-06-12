@extends('templates.main')

@section('title', 'Bank Soal')

@section('contents')
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
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>
                        <a class="btn btn-circle text-navy">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a class="btn btn-circle text-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td>
                        <a class="btn btn-circle text-navy">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a class="btn btn-circle text-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-mhb-card>
@endsection

@section('modals')
<x-mhb-modal :id="'add-soal-modal'" :title="'Tambah Soal Baru'">
    <form action="" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="soal">Soal</label>
            <input id="soal" type="text" class="form-control" placeholder="Masukkan soal">
        </div>
        <div class="form-group">
            <label for="option-a">Pilihan A</label>
            <input id="option-a" type="text" class="form-control" placeholder="Masukkan Pilihan A">
        </div>
        <div class="form-group">
            <label for="option-b">Pilihan B</label>
            <input id="option-b" type="text" class="form-control" placeholder="Masukkan Pilihan B">
        </div>
        <div class="form-group">
            <label for="option-c">Pilihan C</label>
            <input id="option-c" type="text" class="form-control" placeholder="Masukkan Pilihan C">
        </div>
        <div class="form-group">
            <label for="option-d">Pilihan D</label>
            <input id="option-d" type="text" class="form-control" placeholder="Masukkan Pilihan D">
        </div>
        <div class="form-group">
            <label for="answer">Jawaban</label>
            <select name="" id="answer" class="form-control">
                <option value="">--- PILIH JAWABAN ---</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>
        </div>
    </form>
    <x-slot name="footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-navy">Save changes</button>
    </x-slot>
</x-mhb-modal>
@endsection

@section('js')
@include('libs.data-table')
@endsection
