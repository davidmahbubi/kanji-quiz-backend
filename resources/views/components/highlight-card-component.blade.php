<div>
    <div class="small-box bg-{{ $variant }}">
        <div class="inner">
            <h3>{{ $value }}</h3>

            <p>{{ $title }}</p>
        </div>
        <div class="icon">
            <i class="{{ $icon }}"></i>
        </div>
        @if($link)
            <a href="{{ $link }}" class="small-box-footer">Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
        @endif
    </div>
</div>
