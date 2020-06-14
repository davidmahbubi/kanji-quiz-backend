@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <h5>Gagal mem-validasi input anda : </h5>
    <ul class="mb-0">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
