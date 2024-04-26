
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Estheticien Profile</div>

            <div class="card-body">
                <form action="{{ route('estheticien.update', $estheticien->id ?? '') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $estheticien->first_name ?? '' }}" required>
                    </div>

                    <div class="form-group">
                        <label for="specialization">Specialization</label>
                        <input type="text" class="form-control" id="specialization" name="specialization" value="{{ $estheticien->specialization ?? '' }}" required>
                    </div>

                    <div class="form-group">
                        <label for="availability">Availability</label>
                        <input type="text" class="form-control" id="availability" name="availability" value="{{ $estheticien->availability ?? '' }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $estheticien->description ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group">
                        <label for="work_name">Work Name</label>
                        <input type="text" class="form-control" id="work_name" name="work_name" value="{{ $estheticien->work_name ?? '' }}" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $estheticien->price ?? '' }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>

