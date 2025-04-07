<x-layout>
    {{-- @dd($category); --}}
    @section('content')
    <div class="p-6 container">

        @if ($errors->get('title'))

        {{-- @dd($errors->get('title')) --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif





        <form class="w-full max-w-lg" method="POST" action={{isset($post)? route('post.update',$post->id):route('post.store') }} enctype="multipart/form-data">

            @csrf

            <div class="px-3 -mx-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Title
                </label>
                <input
                    class="appearance-auto block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white focus:border-gray-500"
                    id="grid-first-name" type="text" placeholder="Title" name="title"
                    value={{old('title')?old('title'):(isset($post)?$post->title:"")}}>
                    <p class="text-red-500 text-xs italic">{{ $errors->get('title') ? $errors->get('title')[0]:''}}</p>
            </div>

            <div class="px-3 -mx-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    content
                </label>
                <input
                    class="appearance-auto block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white focus:border-gray-500"
                    id="grid-first-name" type="text" placeholder="Content" name="content"
                    value={{old('content')?old('content'):(isset($post)?$post->content:"")}}>
                    <p class="text-red-500 text-xs italic">{{$errors->get('content') ? $errors->get('content')[0]:''}}</p>
            </div>

            <div class="px-3 -mx-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Img
                </label>
                <input
                    class="appearance-auto block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white focus:border-gray-500"
                    id="grid-first-name" type="file" placeholder="Img" name="img" value={{isset($post)?$post->img:""}}>
                    <p class="text-red-500 text-xs italic">{{$errors->get('img') ? $errors->get('img')[0]:''}}</p>
            </div>

            <div class="px-3 -mx-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Category
                </label>

                {{-- @foreach ($category as $item)
                {{$item->title}}
                @endforeach
                {{$post->category}}
                @dd($post) --}}
                <select name="category" id="category" placeholder="Category"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none bg-white focus:border-gray-500">

                    @foreach ($category as $item)
                        @if(isset($post) && $post->category_id == $item->id)
                            <option value="{{$item->id}}" selected>{{$item->title}}</option>
                        @endif
                        <option value="{{$item->id}}">{{$item->title}}</option>

                    @endforeach
                </select>
                <p class="text-red-500 text-xs italic">{{$errors->get('category') ? $errors->get('category')[0]:''}}</p>

            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{isset($post)?"Update":"Add New"}}</button>
        </form>

    </div>
    {{-- @dd(old()); --}}

    @endsection

</x-layout>
