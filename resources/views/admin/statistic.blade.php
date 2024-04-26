<x-app-layout>
<div class="container mt-5">
    <h2 class="mb-4">Admin Statistics</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text">{{ $userCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Estheticians</h5>
                    <p class="card-text">{{ $estheticienCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Promotions</h5>
                    <p class="card-text">{{ $promotionCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>