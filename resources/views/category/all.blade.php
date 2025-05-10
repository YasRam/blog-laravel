<x-layout>
    @section('content')

    all category

    <div class="p-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            category title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            desc
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created at
                        </th>
                        <th colspan='2' class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$key+1}}
                        </th>
                        <td class="px-6 py-4">
                            <a href={{ route('category.show', ['id'=>$category->id]) }}
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $category->title
                                }}</a>
                        </td>

                        <td class="px-6 py-4">
                            {{ $category->content }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->updated_at }}
                        </td>
                        <td class="px-6 py-4">
                            <a href={{ route('category.edit', ['id'=>$category->id]) }}
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href={{ route('category.delete', ['id'=>$category->id]) }}
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="py-6">

            {{ $categories->render() }}
        </div>
        <a href={{ route('category.add') }}
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
            new category</a>
    </div>
    @endsection
</x-layout>
