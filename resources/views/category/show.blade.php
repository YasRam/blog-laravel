<x-layout>
    {{-- {{dd($category)}} --}}
    @section('content')

        <div class="container p-3 ">
            <div class="flex justify-between text-center">

                <div class="text-center items-center w-1/2 ">
                    <h1 class="mb-4 font-extrabold text-6xl">{{ $category->title }}</h1>
                    <p>{{ $category->content }}</p>
                </div>
                <div class="w-1/2 ">
                    <img src={{ asset(path: 'upload/category/' . $category->img) }} class="w-full" alt="">

                </div> {{-- @dd($category) --}}

            </div>
            @if (count($category->posts) > 0)
                <footer class="relative overflow-x-auto shadow-md sm:rounded-lg pt-3">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Post title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Desc
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category->posts as $key => $post)
                                <tr class=" odd:bg-blue-500 even:bg-blue-800 border-b border-blue-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-blue-900 whitespace-nowrap dark:text-white">
                                        {{ $key + 1 }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <a href={{ route('post.show', ['id' => $post->id]) }}
                                            class="font-medium hover:underline">{{ $post->title }}</a>
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $post->content }}
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </footer>
            @endif

        </div>

    @endsection

</x-layout>
