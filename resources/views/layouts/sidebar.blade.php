@extends('layouts.base')

@section('body')
<div class="flex h-screen overflow-hidden bg-gray-100" x-data="{ sidebarOpen: false }"
  @keydown.window.escape="sidebarOpen = false">
  <x-tall-sidebar-mobile-nav />

  <x-tall-sidebar-desktop-nav />
  <div class="flex flex-col flex-1 w-0 overflow-hidden">
    <div class="pt-1 pl-1 md:hidden sm:pl-3 sm:pt-3">
      <button @click.stop="sidebarOpen = true"
        class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150">
        <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    @yield('content')
  </div>
</div>
@endsection
