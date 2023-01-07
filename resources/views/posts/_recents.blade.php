
    @foreach ($posts as $post)
    <a href="#"><div class="image-morefrom-1"><img src="{{asset('storage/' . $post->image)}}" alt="" width="430" height="330"/></div></a>

    @endforeach

