@extends('templates.main')

@section('title', 'Edit Soal')

@section('contents')
<div class="row">
    <div class="col-md-8 col-xl-6">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="question">Soal</label>
                        <input id="question" type="text" class="form-control" placeholder="Masukkan Soal">
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
                </form>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-outline-danger">Hapus</button>
                <button class="btn btn-primary ml-1">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>
@endsection