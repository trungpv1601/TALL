<a href="{{ $route ? route($route) : ($url ? url($url) : '#') }}"
  class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 transition duration-150 ease-in-out rounded-md group focus:outline-none focus:text-white focus:bg-gray-700 {{ ($route ? request()->is( $route . '*') : ($url ? request()->is( $url) : false)) ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
  @if($icon)
  <svg
    class="w-6 h-6 mr-4 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
    stroke="currentColor" fill="none" viewBox="0 0 24 24">
    @if($icon)
        {!! html_entity_decode($icon) !!}
    @else
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
    @endif
  </svg>
  @endif
  {{ $label }}
</a>
