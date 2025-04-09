<x-layout>
    @section('content')
    <div class="p-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            user
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            password
                        </th>
                        <th scope="col-2" colspan='2' align="center" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$key+1}}
                        </th>
                        <td class="px-6 py-4">
                            <a href={{ route('user.show', ['id'=>$user->id]) }}
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $user->name
                                }}</a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->password }}
                        </td>
                        <td class="px-6 py-4">
                            <a href={{ route('user.edit', ['id'=>$user->id]) }}
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href={{ route('user.delete', ['id'=>$user->id]) }}
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="py-6">

            {{ $users->render() }}
        </div>
        <a href={{ route('user.add') }} class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
            new user</a>
    </div>
{{-- {{dd($posts)}} --}}
    @endsection
</x-layout>
