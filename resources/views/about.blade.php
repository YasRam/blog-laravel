<x-layout>
    <x-slot:heading>
About Page
    </x-slot:heading>
    <h1>hello from about page</h1>

    <table>
        <thead>
            <th>no</th>
            <th>name</th>
            <th>desc</th>

        </thead>
        <tbody>
            {{-- @dd($posts) --}}
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
            </tr> 
            @endforeach
            
        </tbody>
    </table>
</x-layout>