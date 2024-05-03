  <x-app-layout>
  <style>
     .card {
      border: none;
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
      overflow: hidden;
      border-radius: 20px;
      min-height: 450px;
      box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
    }

    .card-has-bg {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
      background-size: 120%;
      background-repeat: no-repeat;
      background-position: center center;
    }

    .card-has-bg:before {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: inherit;
      -webkit-filter: grayscale(1);
      -moz-filter: grayscale(100%);
      -ms-filter: grayscale(100%);
      -o-filter: grayscale(100%);
      filter: grayscale(100%);
    }

    .card-has-bg:hover {
      transform: scale(0.98);
      box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
      background-size: 130%;
    }

    .card-has-bg:hover .card-img-overlay {
      background:  #FFC0CB;
      background: linear-gradient(0deg, rgba(255, 186, 33, 0.5) 0%, rgba(255, 186, 33, 1) 100%);
    }

    .card-footer {
      background: none;
      border-top: none;
    }

    .card-footer .media img {
      border: solid 3px rgba(255, 255, 255, 0.3);
    }

    .card-title {
      font-weight: 800
    }

    .card-meta {
      color: rgba(0, 0, 0, 0.3);
      text-transform: uppercase;
      font-weight: 500;
      letter-spacing: 2px;
    }

    .card-body {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .card:hover .card-body {
      margin-top: 30px;
    }

    .card:hover {
      cursor: pointer;
    }

    .card-img-overlay {
      background: rgb(255, 186, 33);
      background: linear-gradient(0deg, rgba(255, 186, 33, 0.3785889355742297) 0%, rgba(255, 186, 33, 1) 100%);
    }
  </style>

 
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5">
         <h1 class="display-4 font-weight-bolder text-dark">Our Services</h1>
      </div>
    </div>
  <div class="row">



@foreach($services as $service)
<div class="col-sm-12 col-md-6 col-lg-4 mb-4">
    <div class="card text-dark card-has-bg click-col" style="background-image:url('/storage/{{$service->image}}');">
        <img class="card-img d-none" src="/storage/{{$service->image}}" alt="Service Image">
        <div class="card-img-overlay d-flex flex-column justify-content-between">
            <div class="card-body">
                <!-- Display service name at the top -->
                <h5 class="card-title text-center" >{{ $service->name }}</h5>
                <!-- Description in the middle -->
                <p class="card-text text-center d-flex flex-column justify-items-center ">
                    {{ substr($service->description, 0, 100) }}
                    @if (strlen($service->description) > 100)
                        ...
                    @endif
                </p>
            </div>
            <div class="card-footer">
                <!-- "View more" button at the bottom -->
<form action="{{ route('estheticien.assign_service',$service) }}" method="POST">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            <button type="submit" class="view-more-btn bg-warning rounded border-0 w-75 p-1">Assign to Service</button>
          </form>            </div>
        </div>
    </div>
</div>
@endforeach

  
</div>
  
</div>



</x-app-layout>