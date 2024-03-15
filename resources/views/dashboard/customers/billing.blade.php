@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Billing Information</h3>
                </div>
                <div class="card-body" style="min-height: 320px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-person-fill me-2"></i><strong>Name:</strong> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-envelope-fill me-2"></i><strong>Email:</strong> {{ auth()->user()->email }}
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-card-list me-2"></i><strong>Plan:</strong> {{ auth()->user()->customer->plan->name }}
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-card-list me-2"></i><strong>Plan:</strong> {{ auth()->user()->customer->plan->duration_months }} /months
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-card-list me-2"></i><strong>Plan:</strong> {{ auth()->user()->customer->plan->price }} EUR
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-credit-card-2-front-fill me-2"></i><strong>Payment Method:</strong> {{ auth()->user()->customer->paymentMethod->methodType }}
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
@endsection