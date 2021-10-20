@extends('layouts.app')
@section('content')
<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        
        <h1 class="display-4 fst-italic">Streaming Misa</h1>
        {{-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p> --}}
        <iframe width="868" height="432" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
        </iframe>

      </div>
    </div>
</main>
@endsection