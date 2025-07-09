@extends('layouts.main')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Google Tag Manager</h1>

        @if(session('success'))
            <div class="mb-4 p-4 rounded bg-green-100 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('seo.save.gtm') }}" class="space-y-6">
            @csrf

            <div>
                <label for="gtm_code" class="block text-sm font-medium text-gray-700 mb-2">
                    Код GTM:
                </label>
                <textarea
                    name="gtm_code"
                    id="gtm_code"
                    rows="10"
                    class="w-full border border-gray-300 rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                >{{ old('gtm_code', $gtm_code) }}</textarea>
            </div>

            <button
                type="submit"
                class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition"
            >
                Сохранить
            </button>
        </form>
    </div>
@endsection
