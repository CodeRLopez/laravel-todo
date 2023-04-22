@extends('layout')


@section('content')
    <div class="flex justify-center items-center">
        <div class="w-full max-w-sm">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-semi-bold mb-6 text-center">Create Task</h1>
                <form method="POST" action="{{ route('task.store') }}">
                    @csrf
                    <div class="mb-4 flex">
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                        <input id="title" type="text" name="title" value="" class="appearance-none border @error('title') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required autofocus>
                        @error('title')
                        <p class="text-red-500 text-xs italic">{{}}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between pt-3 ml-10">
                        <button type="submit" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">+</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
