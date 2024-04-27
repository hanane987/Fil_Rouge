
   <x-app-layout>
   <div class="container">
    <h2>Edit Service</h2>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
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

     
           <input hidden name="image" value="{{$service->image}}">
             <div class="form-group">
                <label for="promotion_id">Image</label>
                <input type="file" id="image" name="image">
          
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
   </x-app-layout>