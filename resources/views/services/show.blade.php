
    <div class="container">
        <h2>Service Details</h2>
        <table class="table">
            <tr>
                <th>Name:</th>
                <td>{{ $service->name }}</td>
            </tr>
            <tr>
                <th>Description:</th>
                <td>{{ $service->description }}</td>
            </tr>
            <tr>
                <th>Price:</th>
                <td>{{ $service->price }}</td>
            </tr>
            <tr>
                <th>Duration:</th>
                <td>{{ $service->duration }}</td>
            </tr>
        </table>
    </div>

