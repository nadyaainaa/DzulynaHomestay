<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/payment.css') }}">
</head>
<body>
    <div class="container">
        <h1>Payment for Booking</h1>
        <div class="payment-box">
            <p><strong>Homestay:</strong> {{ $homestay->name }}</p>
            <p><strong>Booking Price:</strong> RM {{ $price }}</p>
            <p><strong>Total Days:</strong> {{ $days }} days</p>

            <label for="bank">Choose your bank:</label>
            <select id="bank" onchange="showBankForm(this.value)">
                <option value="">-- Select Bank --</option>
                <option value="Bank Islam">Bank Islam</option>
                <option value="Maybank">Maybank</option>
                <option value="CIMB">CIMB</option>
            </select>

            <div id="bank-form" style="display: none;">
                <form id="dummyBankForm">
                    <label>Bank Username</label>
                    <input type="text" required>
                    <label>Bank Password</label>
                    <input type="password" required>
                    <button type="button" onclick="showModal()">Proceed</button>
                </form>
            </div>

            <div id="payment-modal" class="modal" style="display:none;">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img src="{{ asset('assets/img/fpx-logo.jpg') }}" alt="FPX Logo" class="fpx-logo">
                    <h2>Confirm Payment</h2>
                    <p><strong>Receiver:</strong> Dzulyna Homestay - En.Lokman</p>
                    <p><strong>Homestay:</strong> {{ $homestay->name }}</p>
                    <p><strong>Amount:</strong> RM {{ $price }}</p>
                    <p><strong>Booking Duration:</strong> {{ $days }} days</p>
                    <form method="POST" action="{{ route('payment.process') }}">
                        @csrf
                        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                        <input type="hidden" name="price" value="{{ $price }}">
                        <button type="submit">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    function showBankForm(val) {
        if (val) {
            document.getElementById('bank-form').style.display = 'block';
        } else {
            document.getElementById('bank-form').style.display = 'none';
        }
    }

    function showModal() {
        document.getElementById('payment-modal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('payment-modal').style.display = 'none';
    }
</script>
</body>
</html>
