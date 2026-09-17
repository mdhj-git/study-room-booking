<h1>My Bookings</h1>
@foreach($bookings as $booking)
    <p>{{$booking->start_time}}</p>
    <p>{{$booking->end_time}}</p>
    <p>{{$booking->status}}</p>
@endforeach
