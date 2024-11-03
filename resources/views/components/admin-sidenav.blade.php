<nav>
    <ul>
        <li class="mb-5"><a href="{{ route('dashboard') }}" class="bg-blue-50 p-2 block w-4/5 {{ Request::routeIs('dashboard') ? 'active border-r-2 border-indigo-400' : '' }}">Dashboard</a></li>
        <li class="mb-5"><a href="{{ route('products') }}" class="bg-blue-50 p-2 block w-4/5 {{ Request::routeIs('products') ? 'active border-r-2 border-indigo-400' : '' }}">Products</a></li>
        <li class="mb-5"><a href="{{ route('users') }}" class="bg-blue-50 p-2 block w-4/5 {{ Request::routeIs('users') ? 'active border-r-2 border-indigo-400' : '' }}">Users</a></li>
        <li class="mb-5"><a href="/" target="_blank" class="bg-blue-50 p-2 block w-4/5">View Site</a></li>
    </ul>
</nav>