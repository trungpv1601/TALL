<div {{ $attributes }} class="sm:col-span-6">
  @if ($label ?? false)
  <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">{{ $label }}{!!
    ($required ?? false) ? ' <span class="text-xs text-red-500 ">*</span>' : '' !!}</label>
  @endif
  <div class="mt-1 rounded-md shadow-sm">
    <input wire:model="{{ $name }}" {{($readonly ?? false) ? 'readonly' : ''}}
      {{($disabled ?? false) ? 'disabled' : ''}}
      class="{{($readonly ?? false) || ($disabled ?? false) ? 'bg-gray-200' : ''}} block w-full transition duration-150 ease-in-out form-input sm:text-sm sm:leading-5 @error($name) border-red-500 @enderror"
      autocomplete="off" type="{{ $type ?? 'text' }}" placeholder="{{ $placeholder ?? '' }}" />
  </div>
  @error($name)
  <p class="mt-1 text-xs italic text-red-500">{{ $message }}</p>
  @enderror
</div>
