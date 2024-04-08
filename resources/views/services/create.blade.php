
   <x-app-layout>
    <div class="container">
        <h2>Create Service</h2>
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>
            <div class="form-group">
                <label for="promotion_id">Promotion</label>
                <select class="form-control" id="promotion_id" name="promotion_id">
                    <option value="">No Promotion</option>
                    @foreach($promotions as $promotion)
                        <option value="{{ $promotion->id }}">{{ $promotion->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-app-layout>