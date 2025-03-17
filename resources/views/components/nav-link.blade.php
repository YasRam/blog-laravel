@props(['active'=>false])

<a class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100
{{$active?'text-white bg-gray-900':'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{$active?'page':'false'}}" {{$attributes}}>


    {{$slot}}
</a>
