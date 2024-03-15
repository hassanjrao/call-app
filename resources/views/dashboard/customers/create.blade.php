@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Select a Phone Number</h2>
        <form id="phone-number-form" action="{{ route('phone.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" id="country" name="countryCode">
                <option value="">Select a country</option>
                    <option value="US">United States</option>
                    <option value="GB">United Kingdom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="availableNumbers">Available Numbers</label>
                <select class="form-control" id="availableNumbers" name="selectedNumber" disabled>

                    <option value="">Select a number</option>
                    {{-- Numbers will be added here dynamically --}}
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Buy</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#country').change(function() {
            var countryCode = $(this).val();
            if(countryCode) {
                $.ajax({
                    url: '/phone/fetch-numbers', // Updated to match the route
                    type: 'POST', // Method updated to POST
                    data: { countryCode: countryCode, _token: $('input[name="_token"]').val() }, // Add CSRF token for POST method
                    success: function(response) {
                        if(response.success) {
                            $('#availableNumbers').empty().append('<option value="">Select a number</option>');
                            $.each(response.numbers, function(i, number) {
                                $('#availableNumbers').append('<option value="' + number.phoneNumber + '">' + number.friendlyName + '</option>');
                            });
                            $('#availableNumbers').prop('disabled', false);
                        }
                    },
                    error: function() {
                        alert('Failed to fetch numbers. Please try again.');
                    }
                });
            } else {
                $('#availableNumbers').empty().append('<option value="">Select a country first</option>').prop('disabled', true);
            }
        });

    </script>
@endsection
