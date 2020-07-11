@extends('layouts.base')

@section('body')
<div class="flex h-screen overflow-hidden bg-gray-100" x-data="{ sidebarOpen: false }"
  @keydown.window.escape="sidebarOpen = false">
  <x-tall-sidebar-mobile-nav />

  <x-tall-sidebar-desktop-nav />
  <div class="flex flex-col flex-1 w-0 overflow-hidden">
    <div class="relative z-10 flex flex-shrink-0 h-16 bg-white shadow">
      <button @click.stop="sidebarOpen = true"
        class="px-4 text-gray-500 border-r border-gray-200 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden">
        <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="flex justify-between flex-1 px-4">
        <div class="flex flex-1">
          <div class="flex w-full md:ml-0">
            <label for="search_field" class="sr-only">Search</label>
            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                </svg>
              </div>
              <input id="search_field"
                class="block w-full h-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 rounded-md focus:outline-none focus:placeholder-gray-400 sm:text-sm"
                placeholder="Search" />
            </div>
          </div>
        </div>
        <div class="flex items-center ml-4 md:ml-6">
          <button
            class="p-1 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:shadow-outline focus:text-gray-500">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>
          <div @click.away="open = false" class="relative ml-3" x-data="{ open: false }">
            <div>
              <button @click="open = !open"
                class="flex items-center max-w-xs text-sm rounded-full focus:outline-none focus:shadow-outline">
                {!! (new
                LasseRafn\InitialAvatarGenerator\InitialAvatar())->name(Auth()->user()->name)->width(32)->height(32)->background('#6b7280')->color('#ffffff')->rounded()->generateSvg()->toXMLString()
                !!}
              </button>
            </div>
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 w-48 mt-2 origin-top-right rounded-md shadow-lg">
              <div class="py-1 bg-white rounded-md shadow-xs">
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100">Your
                  Profile</a>
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100">Settings</a>
                <a href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                  class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100">
                  Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @yield('content')
  </div>
</div>
@endsection
