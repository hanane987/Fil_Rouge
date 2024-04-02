
    <div class="container">
        <h2>All Promotions</h2>
        <a href="{{ route('promotions.create') }}" class="btn btn-primary mb-3">Create Promotion</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Discount</th>
                    <th>Validity Period Start</th>
                    <th>Validity Period End</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotions as $promotion)
                    <tr>
                        <td>{{ $promotion->id }}</td>
                        <td>{{ $promotion->name }}</td>
                        <td>{{ $promotion->discount }}</td>
                        <td>{{ $promotion->validityPeriodStart }}</td>
                        <td>{{ $promotion->validityPeriodEnd }}</td>
                        <td>
                            <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this promotion?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

