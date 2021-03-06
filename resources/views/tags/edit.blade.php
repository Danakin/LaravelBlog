@extends('layouts.app')

@section('content')
<form class="bg-white shadow-md rounded px-8 py-4 mx-auto" action='{{ route("tags.update", [$tag->name]) }}' method='POST'>
    @csrf
    @method('PUT')
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Name
        </label>
        <input class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="name" value="{{ old('name', $tag->name) }}">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Update
        </button>
      </div>
    </form>
    <form class="inline-block" action='{{ route("tags.destroy", [$tag->name]) }}' method='POST'>
        @csrf
        @method('DELETE')
        <button class="w-24 bg-red-600 hover:bg-red-400 text-gray-100 p-3 rounded" type="submit">
            Delete
        </button>
    </form>
    <a href="{{ route('tags.show', $tag->name) }}">Back!</a>
@endsection
