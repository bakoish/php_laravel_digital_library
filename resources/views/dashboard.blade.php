<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (auth()->user()->isAdmin())
            {{   __('Admin dashboard') }}
            @else
                {{   __('Dashboard') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12 w-100">
        <div>
            @if (auth()->user()->isAdmin())
                @include('dashboards.admin')
            @else
                @include('dashboards.user')
            @endif
        </div>
    </div>
</x-app-layout>
