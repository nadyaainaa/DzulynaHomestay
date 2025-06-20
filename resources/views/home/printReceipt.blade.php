<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .header h2 {
            margin: 0;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h4 {
            margin-bottom: 10px;
            color: #555;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 8px;
        }

        .total {
            font-size: 16px;
            font-weight: bold;
            text-align: right;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Dzulyna Homestay</h2>
        <p>Payment Receipt</p>
    </div>

    <div class="section">
        <h4>Booking Details</h4>
        <table>
            <tr>
                <td><strong>Booking ID:</strong></td>
                <td>#{{ $booking->id }}</td>
            </tr>
            <tr>
                <td><strong>Customer:</strong></td>
                <td>{{ $booking->customer->name }}</td>
            </tr>
            <tr>
                <td><strong>Homestay:</strong></td>
                <td>{{ $homestay->name }}</td>
            </tr>
            <tr>
                <td><strong>Check-in Date:</strong></td>
                <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d M Y') }}</td>
            </tr>
            <tr>
                <td><strong>Check-out Date:</strong></td>
                <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('d M Y') }}</td>
            </tr>
            <tr>
                <td><strong>Total Days:</strong></td>
                <td>{{ $days }} day(s)</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <h4>Payment Summary</h4>
        <table>
            <tr>
                <td><strong>Total Price:</strong></td>
                <td>RM {{ number_format($price, 2) }}</td>
            </tr>
            <tr>
                <td><strong>Payment Status:</strong></td>
                <td>{{ ucfirst($booking->status) }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        This is a system-generated receipt from Dzulyna Homestay.<br>
        Thank you for your booking!
    </div>

</body>
</html>
