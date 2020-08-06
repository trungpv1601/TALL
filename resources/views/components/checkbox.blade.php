<div {{ $attributes }} class="w-full mt-4 mb-2">
  <div class="relative flex items-start">
    <div class="absolute flex items-center h-5">
      <input wire:model="{{ $name }}" {{($readonly ?? false) ? 'readonly' : ''}} {{($disabled ?? false) ? 'disabled' : ''}} type="checkbox"
        class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-checkbox" />
    </div>
    <div class="text-sm leading-5 pl-7">
      <label for="candidates" class="font-medium text-gray-700">{{ ($label ?? false) ? $label : 'Active'  }}</label>
      @error($name)
      <p class="text-xs italic text-red-500">{{ $message }}</p>
      @enderror
    </div>
  </div>
</div>
