@extends('layout')


@section('content')
    <div class="flex justify-center items-center">
        <div class="w-full max-w-3xl">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-semi-bold mb-6 text-center">Task list</h1>
                <table class="w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Completed</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($tasks as $task)
                        <tr>
                            <td class="border px-4 py-2">{{ $task->title }}</td>
                            <td class="border px-4 py-2">
                                <label>
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600 cursor-pointer">
                                </label>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                        </tr>
                        <p class="text-center py-4">No tasks found.</p>
                    @endforelse
                    </tbody>
                </table>
                <a href="{{ route('create.task') }}" class="mt-5 p-3 border-2 bg-red-400 rounded-md text-white inline-block hover:bg-red-700">CREATE</a>
            </div>
        </div>
    </div>
@endsection
