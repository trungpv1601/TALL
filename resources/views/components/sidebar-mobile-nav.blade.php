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
          <a href="#"
            class="flex items-center px-2 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-gray-900 rounded-md group focus:outline-none focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-4 text-gray-300 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6" />
            </svg>
            Dashboard
          </a>
          <a href="#"
            class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-4 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Team
          </a>
          <a href="#"
            class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-4 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            Projects
          </a>
          <a href="#"
            class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-4 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Calendar
          </a>
          <a href="#"
            class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-4 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            Documents
          </a>
          <a href="#"
            class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
            <svg
              class="w-6 h-6 mr-4 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
              stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Reports
          </a>
        </nav>
      </div>
    </div>
    <div class="flex-shrink-0 w-14">
      <!-- Force sidebar to shrink to fit close icon -->
    </div>
  </div>
</div>
