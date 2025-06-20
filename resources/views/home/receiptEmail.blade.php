@component('mail::message')
# Payment Successful

Dear {{ $booking->customer->name }}, {{-- adjust if you have a guest name --}}

Thank you for your payment. Here are your booking details:

- **Homestay**: {{ $homestay->name }}
- **Total Price**: RM {{ number_format($price, 2) }}
- **Total Days**: {{ $days }} day(s)
- **Status**: {{ $booking->status }}

Your receipt is attached in PDF format.

Thanks,<br>
Dzulyna Homestay
@endcomponent
