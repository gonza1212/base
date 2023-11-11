<x-guest-layout>
    <div id="welcome_nav">
        <a href="{{ route('login') }}" class="btn btn-primary">Ingresar</a>
    </div>
    <div id="welcome_header">
        <h1>Sistema de {{ config('constants.SOFTWARE_NAME') }}</h1>
        <small>{{ config('constants.VERSION') }}</small>
    </div>
</x-guest-layout>