@extends('layouts.app')

@section('title', 'Users')

@section('content')
<h1 class="font-bold">Users: </h1>

<div class="relative rounded-xl overflow-auto">
    <div class="shadow-sm overflow-hidden my-8">
        <table class="border-collapse table-auto w-full text-sm">
            <thead>
                <tr>
                    <th class="border-b dark:border-slate-600 p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Name</th>
                    <th class="border-b dark:border-slate-600 p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Email</th>
                    <th class="border-b dark:border-slate-600 p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-slate-800">
                <tr>
                    @foreach ($users as $user)
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                        {{ $user->name }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $user->email }}
                    </td>
                    @endforeach

                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 text-right">
                      View  Edit  Delete
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection