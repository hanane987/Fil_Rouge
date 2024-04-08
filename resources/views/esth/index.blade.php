<!-- resources/views/admin/esth/estheticiens/index.blade.php -->


    <div class="container">
        <h2>All Estheticiens</h2>
        <a href="{{ route('admin.esth.create') }}" class="btn btn-primary mb-3">Add New Estheticien</a>
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Specialization</th>
                    <th>Availability</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Work Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estheticienss as $estheticien)
                    <tr>
                        <td>{{ $estheticien->first_name }}</td>
                        <td>{{ $estheticien->specialization }}</td>
                        <td>{{ $estheticien->availability }}</td>
                        <td>{{ $estheticien->description }}</td>
                        <td>{{ $estheticien->image }}</td>
                        <td>{{ $estheticien->work_name }}</td>
                        <td>{{ $estheticien->price }}</td>
                        <td>
                            <a href="{{ route('admin.esth.estheticiens.edit', $estheticien->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.esth.estheticiens.destroy', $estheticien->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this estheticien?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

