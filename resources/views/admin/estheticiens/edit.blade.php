


    <div class="container">
        <h2>Edit Estheticien</h2>
        <form action="{{ route('admin.estheticiens.update', $estheticien->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $estheticien->first_name }}">
            </div>
            <div class="form-group">
                <label for="specialization">Specialization</label>
                <input type="text" class="form-control" id="specialization" name="specialization" value="{{ $estheticien->specialization }}">
            </div>
            <div class="form-group">
                <label for="availability">Availability</label>
                <input type="text" class="form-control" id="availability" name="availability" value="{{ $estheticien->availability }}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $estheticien->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

