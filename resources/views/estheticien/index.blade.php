
    <x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Estheticien Profile</div>

                    <div class="card-body">
                        @if ($estheticien)
                            <p><strong>First Name:</strong> {{ $estheticien->first_name }}</p>
                            <p><strong>Specialization:</strong> {{ $estheticien->specialization }}</p>
                            <p><strong>Availability:</strong> {{ $estheticien->availability }}</p>
                            <p><strong>Description:</strong> {{ $estheticien->description }}</p>
                            <p><strong>Work Name:</strong> {{ $estheticien->work_name }}</p>
                            <p><strong>Price:</strong> {{ $estheticien->price }}</p>
                            <!-- Add more fields as needed -->
                        @else
                            <p>No estheticien profile found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>