@foreach (['danger','success','warning','info'] as $img)
    @if(session()->has($img))
    <div class="flash-message">
    <p class="alert alert-{{$msg}}">
    {{session()->get($msg)}}
    </p>
    </div>
    @endif
@endforeach