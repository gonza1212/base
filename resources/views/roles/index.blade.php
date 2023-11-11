<x-guest-layout>
@foreach ($users as $user)
    <h2>{{ $user->name }}</h2>
    <p>Roles: {{ $user->roles->pluck('name')->implode(', ') }}</p>
@endforeach
</x-guest-layout>