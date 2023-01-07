@extends('template.index')




@section('content')
@foreach ($posts as $post)
<figure class="white">
    <a href="#">
        <h1>posts</h1>
        <img src="{{ asset('img/' . $post->image) }}" alt="" />
        <dl>
            <dt>HTML theme</dt>
            <dd>{{ $post->resume }}</dd>
        </dl>
    </a>
    <div id="wrapper-part-info">
        <div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
        <div id="part-info">{{ $post->title }}</div>
    </div>
</figure>

@endforeach

@stop