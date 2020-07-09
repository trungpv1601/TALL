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
      class="flex flex-col flex-1 w-full max-w-xs duration-300 ease-in-out transform bg-gray-800 ">
      <div class="absolute top-0 right-0 p-1 -mr-14">
        <button x-show="sidebarOpen" @click="sidebarOpen = false"
          class="flex items-center justify-center w-12 h-12 rounded-full focus:outline-none focus:bg-gray-600">
          <svg class="w-6 h-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
        <div class="flex justify-center flex-shrink-0 px-4">
          <img class="w-8 h-8" src="{{url('/img/logo.svg')}}" alt="{{ config('app.name') }} logo" />
        </div>
        <nav class="px-2 mt-5">
          <a href="{{url('/')}}"
            class="flex items-center px-2 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-gray-900 rounded-md group focus:outline-none focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-4 text-gray-300 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6" />
            </svg>
            Dashboard
          </a>
        </nav>
      </div>
      <div class="flex flex-shrink-0 p-4 bg-gray-700">
        <a href="#" class="flex-shrink-0 block group">
          <div class="flex items-center">
            <div>
              {!! (new
              LasseRafn\InitialAvatarGenerator\InitialAvatar())->name(Auth()->user()->name)->width(32)->height(32)->background('#6b7280')->color('#ffffff')->rounded()->generateSvg()->toXMLString()
              !!}
            </div>
            <div class="ml-3">
              <p class="text-base font-medium leading-6 text-white">
                {{ Auth()->user()->name }}
              </p>
              <p class="text-xs font-medium leading-4 text-gray-400">v{{ \Trungpv1601\TALL\TALL::version() }}</p>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                Sign out
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="flex-shrink-0 w-14">
      <!-- Force sidebar to shrink to fit close icon -->
    </div>
  </div>
</div>
