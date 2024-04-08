
   <x-app-layout>
   <div class="container">
    <h2>Edit Service</h2>
    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $service->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $service->price }}">
        </div>

        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" value="{{ $service->duration }}">
        </div>

        <div class="form-group">
            <label for="promotion_id">Promotion</label>
            <select class="form-control" id="promotion_id" name="promotion_id">
                <option value="">No Promotion</option>
                @foreach($promotions as $promotion)
                    <option value="{{ $promotion->id }}" {{ $service->promotion_id == $promotion->id ? 'selected' : '' }}>
                        {{ $promotion->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
   </x-app-layout>