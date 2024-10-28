@extends('admin.master_layout')
@section('title')
    <title>{{ __('Reservation Details') }}</title>
@endsection
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Reservation Details') }}</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card shadow">
                            <!-- Display reservation name and contact info -->
                            <div class="container my-3">
                                {{-- @if ($user->image) --}}
                                {{-- <img src="{{ asset($user->image) }}" class="profile_img w-100"> --}}
                                {{-- @else --}}
                                <img src="{{ asset($setting->default_avatar) }}" class="w-100">
                                {{-- @endif --}}
                                <h4> {{ html_decode($reservation->name) }}</h4>
                                <p class="title"><strong>Téléphone :</strong> {{ html_decode($reservation->phone) }}</p>
                                <p class="title"><strong>Adresse email :</strong> {{ html_decode($reservation->email) }}</p>
                                <p class="title"><strong>{{ __('Created at') }}</strong> : {{ $reservation->created_at->format('h:iA, d M Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        {{-- Reservation Details --}}
                        <div class="card">
                            <div class="card-header">
                                <h5>{{ __('Reservation Information') }}</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>{{ __('Status') }}</b></td>
                                            <td>{{ $reservation->status }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>{{ __('Cycles') }}</b></td>
                                            <td>{{ implode(', ', $reservation->cycles->pluck('name')->toArray()) }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>{{ __('Subjects') }}</b></td>
                                            <td>{{ implode(', ', $reservation->matieres->pluck('name')->toArray()) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Edit Reservation Status --}}
                        {{-- <div class="card">
                            <div class="card-header">
                                <h5>{{ __('Update Status') }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.reservations.update', $reservation->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mt-3">
                                        <select name="status" class="form-control">
                                            <option value="pending" @selected($reservation->status == 'pending')>{{ __('Pending') }}</option>
                                            <option value="approved" @selected($reservation->status == 'approved')>{{ __('Approved') }}</option>
                                            <option value="rejected" @selected($reservation->status == 'rejected')>{{ __('Rejected') }}</option>
                                        </select>
                                        <button class="btn btn-success mt-2" type="submit">{{ __('Update') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
