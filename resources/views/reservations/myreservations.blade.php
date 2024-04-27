<x-home-layout>
<x-slot name="slot">
<style>
 
  
  .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }

  .card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}

 @media print {
    .card-custom {
      box-shadow: none !important; /* Remove box-shadow for printing */
      border: 1px solid #ccc; /* Add a border for the card */
      page-break-inside: avoid; /* Avoid breaking the card across pages */
    }
    .card-custom-img::after {
      display: none; /* Hide the background shape for printing */
    }
    .card-custom-avatar img {
      display: none; /* Hide avatar image for printing */
    }
    .card-body {
      overflow: visible !important; /* Allow overflowing content for printing */
    }
    .card-footer {
      display: none; /* Hide the card footer for printing */
    }
    .card-title {
      font-size: 18px; /* Increase font size for card title */
      font-weight: bold; /* Make card title bold */
      margin-bottom: 10px; /* Add margin below card title */
    }
    .card-text {
      font-size: 14px; /* Adjust font size for card text */
      line-height: 1.5; /* Adjust line height for better readability */
      margin-bottom: 20px; /* Add margin below card text */
    }
    /* Adjust other styles as needed */
  }

</style>

<body>
  <div class="container">
    <div class="row pt-5 m-auto">
    @foreach($reservation as $booking)
      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url('/storage/{{$booking->services->image}}');"></div>
          {{-- <div class="card-custom-avatar">
            <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
          </div> --}}
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Card has minimum height set but will expand if more space is needed for card body content. You can use Bootstrap <a href="https://getbootstrap.com/docs/4.0/components/card/#card-decks" target="_blank">card-decks</a> to align multiple cards nicely in a row.</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
          @if($booking->bookingTime<=now())
          <form action="{{route('cancel',$booking)}}" method="post">
          @csrf
          @method('delete')
          <button class="btn btn-primary">Cancel</button>
          </form>
            
@endif
            @if($booking->bookingConfirmation)
    <button onclick="window.print();" class="btn btn-outline-primary">PDF</button>
@endif

          </div>
        </div>
        <!-- Copy until here -->

      </div>
      @endforeach
  </div>

</x-slot>
</x-home-layout>