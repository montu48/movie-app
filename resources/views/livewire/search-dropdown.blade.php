<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="abosolute top-0">

    </div>
    @if (strlen($search) > 2)

    <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
        @if ($searchResults->count() > 0)
        <ul>
            @foreach ($searchResults as $movie)
            <li class="border-b border-gray-700">
            @if($movie['poster_path'])
            <a href="{{route('movies.show',$movie['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
            <img src="https://image.tmdb.org/t/p/w92/{{ $movie['poster_path'] }}" alt="poster" class="w-8">
            @else
                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
            @endif
            <span>{{$movie['title']}}</span>
        </a>
            </li>
            @endforeach
        </ul>
        @else
        <div class="px-3 py-3">
            No Results for "{{$search}}"
        </div>
        @endif
    </div>

    @endif
</div>
