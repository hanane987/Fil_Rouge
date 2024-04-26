
    <div class="container">
        <h1>Pending Reservations</h1>
        @if(count($reservations) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking Time</th>
                        <th>Service</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->bookingTime }}</td>
                            <td>{{ $reservation->service }}</td>
                            <td>
                                @if(!$reservation->bookingConfirmation)
                                    <form method="POST" action="{{ route('reservations.confirm', ['id' => $reservation->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </form>
                                @else
                                    <span class="text-success">Confirmed</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No pending reservations found.</p>
        @endif
    </div>

