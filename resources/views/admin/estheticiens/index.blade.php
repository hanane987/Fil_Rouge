<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Estheticiens</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="my-4">All Estheticiens</h2>
    <a href="{{ route('admin.estheticiens.create') }}" class="btn btn-primary mb-3">Create Estheticien</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Specialization</th>
                    <th>Availability</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estheticiens as $estheticien)
                    <tr>
                        <td>{{ $estheticien->id }}</td>
                        <td>{{ $estheticien->first_name }}</td>
                        <td>{{ $estheticien->specialization }}</td>
                        <td>{{ $estheticien->availability }}</td>
                        <td>{{ $estheticien->description }}</td>
                        <td>
                            <a href="{{ route('admin.estheticiens.edit', $estheticien->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.estheticiens.destroy', $estheticien->id) }}" method="POST" style="display: inline;">
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
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
