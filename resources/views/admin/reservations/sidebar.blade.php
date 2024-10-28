@php
    $pendingRequestCount = \App\Models\ReservationsRequest::where('status', 'pending')->count();
@endphp

<a class="nav-link" href="{{ route('admin.reservations.index') }}">
    {{ __('cours List') }}
    @if ($pendingRequestCount > 0)
        <small class="badge badge-danger ml-2">{{ $pendingRequestCount }}</small>
    @endif
</a>

