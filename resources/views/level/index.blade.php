@extends('templates.main')

@section('title', 'Level')

@section('contents')
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
                    <th>Jumlah Soal Terdaftar</th>
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
<x-mhb-modal :id="'add-level-modal'" :title="'Tambah Level Baru'">
    <form action="" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" class="form-control" placeholder="Masukkan nama level" required>
        </div>
        <div class="form-group">
            <label for="question-limit">Limit Soal</label>
            <input id="question-limit" type="text" class="form-control" placeholder="Masukkan limit soal pada level ini" required>
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