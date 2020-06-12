@extends('templates.main')

@section('title', 'Bank Soal')

@section('contents')
<div class="row">
    <div class="col">
        <div class="card card-outline card-primary text-right">
            <div class="card-body">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add-soal-modal">Tambah Soal</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Soal Yang Tersedia</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
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
                                    <a class="btn btn-circle text-primary">
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
                                    <a class="btn btn-circle text-primary">
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="add-soal-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Soal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('js')
@include('libs.data-table')
@endsection
