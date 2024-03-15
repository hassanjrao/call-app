@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Plan</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('plans.index') }}" class="btn btn-secondary float-right">Back to Plan List</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('plans.update', $plan->id) }}" method="POST">
                @csrf
                @method('PUT')

                @foreach(['name' => 'Name', 'price' => 'Price', 'duration_months' => 'Duration', 'stripe_id' => 'Stripe ID', 'paypal_id' => 'PayPal ID'] as $field => $label)
                    <div class="form-group">
                        <label for="{{ $field }}">{{ $label }}</label>
                        <input type="text" class="form-control @error($field) is-invalid @enderror" id="{{ $field }}" name="{{ $field }}" value="{{ old($field, $plan->$field) }}" required>
                        @error($field)
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                @endforeach

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Plan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
