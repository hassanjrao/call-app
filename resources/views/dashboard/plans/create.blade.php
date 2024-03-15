@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Plan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="{{ route('plans.index') }}" class="btn btn-secondary float-right">Back to Plan List</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('plans.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Enter plan name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="duration_months">Duration</label>
                        <input class="form-control @error('duration_months') is-invalid @enderror" id="duration_months"
                            name="duration_months" placeholder="Enter plan duration"
                            required>{{ old('duration_months') }}</input>
                        @error('duration_months')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" placeholder="Enter price" value="{{ old('price') }}" required>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stripe_id">Stripe ID</label>
                        <input type="text" class="form-control @error('stripe_id') is-invalid @enderror" id="stripe_id"
                            name="stripe_id" placeholder="Enter stripe_ide" value="{{ old('stripe_id') }}" required>
                        @error('stripe_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="paypal_id">Paypal ID</label>
                        <input type="text" class="form-control @error('paypal_id') is-invalid @enderror" id="paypal_id"
                            name="paypal_id" placeholder="Enter paypal_id" value="{{ old('paypal_id') }}" required>
                        @error('paypal_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Add any additional fields specific to plans here, e.g., duration -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    {{-- Place any specific scripts for this page here --}}
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
