<x-layout>
    @section(section: 'content')
    <div class="p-6 container">
{{-- @dd($category); --}}
        <form class="w-full max-w-lg" method="post" action={{isset($category)? route('category.update',$category->id):route('category.store') }}>

            @csrf

            <div class="px-3 -mx-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Title
                </label>
                <input
                    class="appearance-auto block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white focus:border-gray-500"
                    id="grid-first-name" type="text" placeholder="Title" name="title"
                    value={{old('title')?old('title'):(isset($category)?$category->title:"")}}>
                    <p class="text-red-500 text-xs italic">{{ $errors->get('title') ? $errors->get('title')[0]:''}}</p>
            </div>

            <div class="px-3 -mx-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    content
                </label>
                <input
                    class="appearance-auto block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white focus:border-gray-500"
                    id="grid-first-name" type="text" placeholder="Content" name="content"
                    value={{old('content')?old('content'):(isset($category)?$category->content:"")}}>
                    <p class="text-red-500 text-xs italic">{{$errors->get('content') ? $errors->get('content')[0]:''}}</p>
            </div>

            <div class="px-3 -mx-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Img
                </label>
                <input
                    class="appearance-auto block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white focus:border-gray-500"
                    id="grid-first-name" type="file" placeholder="Img" name="img" value={{isset($category)?$category->img:""}}>
                    <p class="text-red-500 text-xs italic">{{$errors->get('img') ? $errors->get('img')[0]:''}}</p>
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{isset($category)?"Update":"Add New"}}</button>
        </form>

    </div>
    {{-- @dd(old()); --}}

    @endsection

</x-layout>
