@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Google Tag Manager</h1>

        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('seo.save.gtm') }}">
            @csrf

            <div class="form-group">
                <label for="gtm_code">Код GTM:</label>
                <textarea name="gtm_code" id="gtm_code" rows="10" style="width: 100%;">{{ old('gtm_code', $gtm_code) }}</textarea>
            </div>

            <button type="submit">Сохранить</button>
        </form>
    </div>
@endsection
