<x-layout>
{{-- {{dd($post)}} --}}
    @section('content')

        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        
        
   
    @endsection
   
</x-layout>
