
<p>You have a new website order submission:</p>

{{-- <p><strong>Name:</strong> {{ $data['email'] }}</p> --}}
{{-- <p><strong>Phone:</strong> {{ $phone }}</p>
<p><strong>Email Address:</strong> {{ $email }}</p>
<p><strong>Paypal:</strong></p>
<ul>
    <li>Mode: live</li>
    <li>Status: COMPLETED</li>
    <li>Amount: €{{ $amount }}</li>
    <li>Currency: {{ $currency }}</li>
    <li>Transaction id: {{ $transactionId }}</li>
    <li>Transaction link: <a href="{{ $transactionLink }}">{{ $transactionLink }}</a></li>
</ul> --}}

<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Phone: {{ $phone }}</p>
<p>Plan: {{ $planName }} </p>
<p>Price: {{ $price }} EUR</p>
