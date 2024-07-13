@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Send Message</h2>
        <form action="{{ route('phone.send-message') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="phoneNumberId">Select Your Number</label>
                <select class="form-control" id="phoneNumberId" name="phoneNumberId">
                    @foreach ($phoneNumbers as $phoneNumber)
                        <option value="{{ $phoneNumber->id }}">{{ $phoneNumber->number }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="recipient">Recipient</label>
                <input type="text" class="form-control" id="recipient" name="recipient" placeholder="Recipient number" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
