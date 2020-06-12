@extends('templates.general.main')

@section('title', 'Dashboard')

@section('contents')
<div class="row">
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <x-mhb-highlight-card
            :title="'Jumlah Soal'"
            :value="400"
            :icon="'fas fa-copy'"
            :variant="'success'"
        />
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <x-mhb-highlight-card
            :title="'User Terdaftar'"
            :value="120"
            :icon="'fas fa-user-plus'"
            :variant="'info'"
        />
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <x-mhb-highlight-card
            :title="'Jumlah Kelas'"
            :value="5"
            :icon="'fas fa-lightbulb'"
            :variant="'warning'"
        />
    </div>
</div>
@endsection