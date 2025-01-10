@extends('layouts.app')

@section('title', 'Users')

@section('content')

@if (session('success-message'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
    <span class="block sm:inline">{{ session('success-message') }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>
@endif

<h1 class="font-bold mb-4">Users: <a href="{{ route('create_user')}}" class="button bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 mx-5 rounded">Create New User</a></h1>

<div class="shadow-sm overflow-hidden mt-10 mb-8">
    <table class="border-collapse table-auto w-full text-sm">
        <thead>
            <tr>
                <th class="border-b p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Name</th>
                <th class="border-b p-4 pt-0 pb-3 text-slate-400 text-left">Email</th>
                <th class="border-b p-4 pt-0 pb-3 text-slate-400 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-slate-800">
            @foreach ($users as $user)
            <tr>
                <td class="border-b p-4 pl-8">
                    {{ $user->name }}
                </td>

                <td class="border-b p-4">
                    {{ $user->email }}
                </td>

                <td class="border-b p-4 text-right">
                    <a href="{{ route('edit_user', [$user->id]) }}" class="text-green-400 mr-3">Edit</a>

                    @if( auth()->user()->id != $user->id)
                    <a href="{{ route('delete_user', [$user->id]) }}" class="delete-btn text-red-400">Delete</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection