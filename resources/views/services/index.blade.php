
    <div class="container">
        <h2>All Services</h2>
        <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Create Service</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->price }}</td>
                        <td>{{ $service->duration }}</td>
                        <td>
                            <a href="{{ route('services.show', $service->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

