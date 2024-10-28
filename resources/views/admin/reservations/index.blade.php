@extends('admin.master_layout')
@section('title')
    <title>{{ __('soutien Request') }}</title>
@endsection
@section('admin-content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Reservations des cours soutien') }}</h1>
            </div>

            <div class="section-body">
                <div class="row mt-4">
                    {{-- Filter section --}}
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-body">
                                <form action="{{ route('admin.reservations.index') }}" method="GET" class="form-inline">
                                    <div class="form-group mb-2">
                                        <input type="text" name="keyword" value="{{ request()->get('keyword') }}"
                                               class="form-control" placeholder="{{ __('Search') }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">{{ __('Search') }}</button>
                                </form>
                            </div> --}}
                        </div>
                    </div>

                    {{-- Reservations Table --}}
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>{{ __('SN') }}</th>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Email') }}</th>
                                                <th>{{ __('Phone') }}</th>
                                                <th>{{ __('Cycles') }}</th>
                                                <th>{{ __('Matieres') }}</th>
                                                <th>{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($reservations as $index => $reservation)
                                                <tr class="mb-3">
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $reservation->name }}</td>
                                                    <td>{{ $reservation->email }}</td>
                                                    <td>{{ $reservation->phone }}</td>
                                                    <td>{{ implode(', ', $reservation->cycles->pluck('name')->toArray()) }}</td>
                                                    <td>{{ implode(', ', $reservation->matieres->pluck('name')->toArray()) }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.reservations.show', $reservation->id) }}"
                                                           class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData({{ $reservation->id }})">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">{{ __('No reservations found!') }}</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                {{ $reservations->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Delete confirmation modal --}}
    <x-admin.delete-modal />
    <script>
        function deleteData(id) {
            $("#deleteForm").attr("action", "{{ url('admin/reservations') }}" + "/" + id);
        }
    </script>
@endsection
