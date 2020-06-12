<div>
    <div class="row">
        <div class="{{ $cols }}">
            <div class="card card-outline card-navy text-{{ $direction }}">
                @if($header ?? FALSE)
                    <div class="card-header">
                        {{ $header }}
                    </div>
                @endif
                <div class="card-body">
                    {{ $slot }}
                </div>
                @if($footer ?? FALSE)
                    <div class="card-footer">
                        {{ $footer }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
