<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Success</title>
    <link rel="stylesheet" href="{{ asset('assets/css/payment.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <form id="downloadForm" action="{{ route('receipt.download', $booking->id) }}" method="GET" style="display:inline;">
                    <button type="button" class="btn btn-primary" onclick="confirmDownload()">Download PDF Receipt</button>
                </form>
                <a href="/" class="btn-home">Go to Homepage</a>
            </div>
        </div>
    </div>
</body>

<script>
    function confirmDownload() {
        Swal.fire({
            title: 'Download Receipt?',
            text: "Do you want to download the PDF receipt now?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, download it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('downloadForm').submit();
            }
        });
    }
</script>
</html>
