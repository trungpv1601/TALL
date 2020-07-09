<!-- Static sidebar for desktop -->
  <div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-gray-800">
      <div class="flex flex-col flex-1 h-0 pt-5 pb-4 overflow-y-auto">
        <div class="flex justify-center flex-shrink-0 px-4">
          <img class="w-8 h-8" src="{{url('/img/logo.svg')}}" alt="{{ config('app.name') }} logo" />
        </div>
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <nav class="flex-1 px-2 mt-5 bg-gray-800">
          <a href="{{url('/')}}"
            class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-gray-900 rounded-md group focus:outline-none focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-3 text-gray-300 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6" />
            </svg>
            Dashboard
          </a>
          <x-tall-sidebar-desktop-nav-item />
        </nav>
      </div>
      <div class="flex flex-shrink-0 p-4 bg-gray-700">
        <div class="flex-shrink-0 block group focus:outline-none">
          <div class="flex items-center">
            <div>
              {!! (new
              LasseRafn\InitialAvatarGenerator\InitialAvatar())->name(Auth()->user()->name)->width(32)->height(32)->background('#6b7280')->color('#ffffff')->rounded()->generateSvg()->toXMLString()
              !!}
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium leading-5 text-white">
                {{ Auth()->user()->name }}
              </p>
              <p class="text-xs font-medium leading-4 text-gray-400">v{{ \Trungpv1601\TALL\TALL::version() }}</p>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="text-xs font-medium leading-4 text-gray-400 transition duration-150 ease-in-out hover:text-gray-300 focus:underline">
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
