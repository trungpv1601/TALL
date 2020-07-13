<!-- Off-canvas menu for mobile -->
<div x-show="sidebarOpen" class="md:hidden">
  <div @click="sidebarOpen = false" x-show="sidebarOpen" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 transition-opacity duration-300 ease-linear">
    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
  </div>
  <div class="fixed inset-0 z-40 flex">
    <div x-show="sidebarOpen" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
      x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
      class="flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 duration-300 ease-in-out transform bg-gray-800 ">
      <div class="absolute top-0 right-0 p-1 -mr-14">
        <button x-show="sidebarOpen" @click="sidebarOpen = false"
          class="flex items-center justify-center w-12 h-12 rounded-full focus:outline-none focus:bg-gray-600">
          <svg class="w-6 h-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex items-center justify-center flex-shrink-0 px-4">
        <img class="w-auto h-8" src="{{url('/img/logo.svg')}}" alt="{{ config('app.name') }} logo" />
      </div>
      <div class="flex-1 h-0 mt-5 overflow-y-auto">
        <nav class="px-2">
          @foreach(config('TALL.NAV', []) as $item)
            <x-tall-sidebar-mobile-nav-item
              label="{{ $item['label'] }}"
              url="{{ $item['url'] ?? 0 }}"
              route="{{ $item['route'] ?? 0 }}"
              icon="{{ $item['icon'] }}" />
          @endforeach
        </nav>
      </div>
    </div>
    <div class="flex-shrink-0 w-14">
      <!-- Force sidebar to shrink to fit close icon -->
    </div>
  </div>
</div>
