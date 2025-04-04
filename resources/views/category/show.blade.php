<x-layout>
    {{-- {{dd($category)}} --}}
        @section('content')

        <div class="container m-3 p-3">
            <h1 class="mb-4 font-extrabold text-6xl">{{$category->title}}</h1>
            <p>{{$category->content}}</p>


        </div>

        @endsection

    </x-layout>
