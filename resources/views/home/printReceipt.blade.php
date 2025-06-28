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

        .header img {
            width: 220px; /* ✅ Increased logo size */
            height: auto;
            margin-bottom: 10px;
        }

        .header h2 {
            margin: 5px 0;
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
            padding: 6px 4px;
            vertical-align: top;
        }

        table td:first-child {
            width: 35%;
            font-weight: bold;
        }

        .badge-paid {
            display: inline-block;
            padding: 4px 8px;
            color: white;
            background-color: #28a745;
            border-radius: 4px;
            font-size: 12px;
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
        <img src="{{ public_path('assets/img/dzl2.png') }}" alt="Dzulyna Homestay Logo">
        <h2>Dzulyna Homestay</h2>
        <p>Payment Receipt</p>
    </div>

    <div class="section">
        <h4>Booking Details</h4>
        <table>
            <tr>
                <td>Booking ID:</td>
                <td>#{{ $booking->id }}</td>
            </tr>
            <tr>
                <td>Customer Name:</td>
                <td>{{ $booking->customer->name }}</td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td>{{ $booking->customer->phone ?? '-' }}</td>
            </tr>
            <tr>
                <td>Homestay:</td>
                <td>{{ $homestay->name }}</td>
            </tr>
            <tr>
                <td>Check-in Date:</td>
                <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d M Y') }}</td>
            </tr>
            <tr>
                <td>Check-out Date:</td>
                <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('d M Y') }}</td>
            </tr>
            <tr>
                <td>Total Days:</td>
                <td>{{ $days }} day(s)</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <h4>Payment Summary</h4>
        <table>
            <tr>
                <td>Total Price:</td>
                <td>RM {{ number_format($price, 2) }}</td>
            </tr>
            <tr>
                <td>Payment Status:</td>
                <td><span class="badge-paid">Paid</span></td>
            </tr>
        </table>
    </div>

    <div class="footer">
        This is a system-generated receipt from Dzulyna Homestay.<br>
        Thank you for your booking!
    </div>

</body>
</html>
