<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if($service)
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                    <div class="card-body">
                        <h2 class="card-title">{{ $service->name }}</h2>
                        <p class="card-text">{{ $service->description }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ $service->price }}</p>
                        <p class="card-text"><strong>Assigned Estheticiens:</strong></p>
                        <ul>
 @if ($estheticien_services->isNotEmpty())
    <ul>
        @foreach ($estheticien_services as $estheticien_service)
            <li>{{ $estheticien_service->estheticien }}</li>
        @endforeach
    </ul>
@else
    <p>No estheticiens found for this service.</p>
@endif

                        </ul>
                    </div>
                </div>
                @else
                <div class="alert alert-danger" role="alert">
                    Service not found.
                </div>
                @endif
            </div>
        </div>
    </div>
            <a href="{{ route('estheticien.edit') }}" class="btn btn-primary">Edit Profile</a>
                    <a href="{{ route('reservations.create',$service) }}" class="btn btn-primary">reserve</a>


</main>
