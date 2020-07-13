<!-- Static sidebar for desktop -->
  <div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
      <div class="flex items-center justify-center flex-shrink-0 h-16 px-4 bg-gray-900">
        <img class="w-auto h-8" src="{{url('/img/logo.svg')}}" alt="{{ config('app.name') }} logo" />
      </div>
      <div class="flex flex-col flex-1 h-0 overflow-y-auto">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <nav class="flex-1 px-2 py-4 bg-gray-800">
          @foreach(config('TALL.NAV', []) as $item)
            <x-tall-sidebar-desktop-nav-item
              label="{{ $item['label'] }}"
              url="{{ $item['url'] ?? 0 }}"
              route="{{ $item['route'] ?? 0 }}"
              icon="{{ $item['icon'] }}" />
          @endforeach
        </nav>
      </div>
    </div>
  </div>
