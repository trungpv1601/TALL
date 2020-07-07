<div x-data="{showModal : {{$open ? 'true' : 'false'}}}">
  <div x-show="showModal"
    class="fixed inset-x-0 bottom-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
    <div class="fixed inset-0 transition-opacity" x-show="showModal" x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div @click.away="window.livewire.emit('{{$toogle ?? 'toogle'}}')" x-show="showModal"
      x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
      x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      class="overflow-hidden transition-all transform bg-white rounded-lg shadow-xl sm:max-w-lg sm:w-full" role="dialog"
      aria-modal="true" aria-labelledby="modal-headline">
      @if($title ?? false)
      <div class="bg-white">
        <div class="sm:flex sm:items-start">
          <div class="w-full text-center sm:text-left">
            <h3 class="p-4 text-lg font-medium leading-6 text-gray-900 bg-gray-50" id="modal-headline">
              {{ $title ?? 'No title' }}
            </h3>
            <div class="px-4 pb-4">
              {{ $slot }}
            </div>
          </div>
        </div>
      </div>
      <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
        @if($isSubmit ?? true)
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button type="submit"
            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo sm:text-sm sm:leading-5">
            {{ ($update ?? false) ? 'Update' : 'Create' }}
          </button>
        </span>
        @endif
        <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
          <button type="button" @click="window.livewire.emit('{{$toogle ?? 'toogle'}}')"
            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
      </div>
      @else
      {{ $slot }}
      @endif
    </div>
  </div>
</div>
