<x-layout>
    {{-- {{dd($post)}} --}}
    @section('content')
        <div class="container p-3">
            <div class="flex justify-between text-center">

                <div class="text-center items-center w-1/2">
                    <h1 class="mb-4 font-extrabold text-6xl">{{ $post->title }}</h1>
                    <p>{{ $post->content }}</p>
                </div>
                <div class="w-1/2 ">
                    <img src={{ asset(path: 'upload/posts/' . $post->img) }} class="w-full" alt="">

                </div>
                {{-- @dd(asset('upload/posts/'.$post->img)) --}}
            </div>
            @if (isset($post->category))
                <footer class="footer">
                    <p class="text-center text-amber-950 text-3xl font-bold">Category: <a
                            href={{ route('category.show', $post->category->id) }}>{{ $post->category->title }}</a></p>
                </footer>
            @endif
        </div>
    @endsection

</x-layout>
