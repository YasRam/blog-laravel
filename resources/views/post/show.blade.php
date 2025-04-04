<x-layout>
{{-- {{dd($post)}} --}}
    @section('content')

    <div class="container m-3 p-3">
        <h1 class="mb-4 font-extrabold text-6xl">{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        

    </div>

    @endsection

</x-layout>
