<div {{ $attributes }} class="w-full mt-4 mb-2">
  @if ($label ?? false)
  <label for="{{ $name }}" class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">{{ $label }}{!!
    ($required ?? false) ? ' <span class="text-xs text-red-500 ">*</span>' : '' !!}</label>
  @endif
  <input wire:model="{{ $name }}"
    {{($readonly ?? false) ? 'readonly' : ''}}
    {{($disabled ?? false) ? 'disabled' : ''}}
    class="{{($readonly ?? false) || ($disabled ?? false) ? 'bg-gray-200' : ''}} block w-full px-3 py-2 mb-3 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:bg-white @error($name) border-red-500 @enderror"
    autocomplete="off" type="{{ $type ?? 'text' }}" placeholder="{{ $placeholder ?? '' }}" />
  @error($name)
  <p class="text-xs italic text-red-500">{{ $message }}</p>
  @enderror
</div>
