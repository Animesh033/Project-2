{{-- <div class="alert alert-danger">
    {{ $slot }}
</div> --}}

<div class="alert alert-danger">
    <div class="alert-title">{{ $title }}</div>
    {{ $type }}
    <br>
    {{ $slot }}
</div>