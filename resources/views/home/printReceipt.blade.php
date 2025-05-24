<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt</title>
    <style>
        body { font-family: sans-serif; line-height: 1.5; padding: 20px; }
        .header { text-align: center; }
        .box { border: 1px solid #333; padding: 15px; margin-top: 20px; }
        .footer { text-align: center; margin-top: 30px; font-size: 12px; color: #777; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Payment Receipt</h2>
        <p>Dzulyna Homestay - En.Lokman</p>
    </div>

    <div class="box">
        <p><strong>Homestay:</strong> {{ $homestay->name }}</p>
        <p><strong>Booking ID:</strong> {{ $booking->id }}</p>
        <p><strong>Price:</strong> RM {{ $price }}</p>
        <p><strong>Total Days:</strong> {{ $days }} days</p>
        <p><strong>Date:</strong> {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
    </div>

    <div class="footer">
        Thank you for booking with Dzulyna Homestay!
    </div>
</body>
</html>
