
<p>New bike service booking details:</p>

<ul>

    {{-- mail subject details--}}
    <li>Client Name: {{ $booking['name'] }}</li>
    <li>Email: {{ $booking['email'] }}</li>
    <li>phone: {{ $booking['p_number'] }}</li>
    <li>Service Type: {{ $booking['service_need'] }}</li>
    <li>Bike Model : {{ $booking['b_model'] }}</li>
    <li>Service Type: {{ $booking['b_number'] }}</li>
    <li>Booking Date: {{ $booking['date'] }}</li>
    
</ul>