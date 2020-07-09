@extends('TALL::layouts.sidebar')

@section('content')
<main class="relative z-0 flex-1 pt-2 pb-6 overflow-y-auto focus:outline-none md:py-6" tabindex="0" x-data
    x-init="$el.focus()">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
    </div>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">
            <div class="border-4 border-gray-200 border-dashed rounded-lg h-96"></div>
        </div>
        <!-- /End replace -->
    </div>
</main>
@endsection
