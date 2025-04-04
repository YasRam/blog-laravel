<x-layout>
    {{-- {{dd($category)}} --}}
        @section('content')

        <div class="container m-3 p-3">
            <h1 class="mb-4 font-extrabold text-6xl">{{$user->name}}</h1>
            <p>{{$user->email}}</p>
            <p>{{$user->password}}</p>


        </div>

        @endsection

    </x-layout>
