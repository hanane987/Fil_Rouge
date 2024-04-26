  <x-app-layout>
  <style>
    .container {
      padding: 20px;
    }

    .card-wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .card {
      border-radius: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      width: calc(33.33% - 20px); /* Three cards per row with margin */
      background-color: #fff;
      overflow: hidden;
    }

    .card-header {
      background-color: #ffcc00; /* Yellow background for header */
      padding: 10px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-text {
      font-size: 16px;
    }

    .view-more-btn {
      background-color: #ffcc00; /* Yellow background for button */
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 8px 16px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .view-more-btn:hover {
      background-color: #ffaa00; /* Darker yellow on hover */
    }
  </style>

  <div class="container">
    <div class="card-wrapper">
      @foreach ($services as $service)
      @if($service->estheticien !=null)
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ $service->first_name }}</h3>
        </div>
        <div class="card-body">
          <p class="card-text">{{ $service->description }}</p>
          @foreach ($promotions as $promotion)
          @if ($promotion->service_id == $service->id)
          <div class="promotion">
            <h5 class="card-title">{{ $promotion->title }}</h5>
            <p class="card-text">{{ $promotion->description }}</p>
          </div>
          @endif
          @endforeach
          <!-- Add the Assign to Service button -->
          <form action="{{ route('estheticien.assign_service',$service) }}" method="POST">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            <button type="submit" class="view-more-btn">Assign to Service</button>
          </form>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>


</x-app-layout>