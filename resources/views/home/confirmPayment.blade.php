<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Success</title>
    <link rel="stylesheet" href="{{ asset('assets/css/payment.css') }}">
</head>
<body>
    <div class="container">
        <h1>Payment Successful</h1>
        <div class="receipt-box">
            <p><strong>Reference ID:</strong> {{ $reference_id }}</p>
            <p><strong>Receiver:</strong> Dzulyna Homestay - En.Lokman</p>
            <p><strong>Homestay:</strong> {{ $homestay->name }}</p>
            <p><strong>Total Paid:</strong> RM {{ $price }}</p>
            <p><strong>Total Days:</strong> {{ $days }}</p>
            <p><strong>Status:</strong> <span class="badge-success">Successful Payment</span></p>
            <div class="actions">
                <button onclick="window.print()">Print Receipt</button>
                <a href="/" class="btn-home">Go to Homepage</a>
            </div>
        </div>
    </div>
</body>
</html>
