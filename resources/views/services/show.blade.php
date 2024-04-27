<x-home-layout>
<x-slot name="slot">

<style>
.hedding {
    font-size: 20px;
    color: #ab8181`;
}

.main-section {
    position: absolute;
    left: 50%;
    right: 50%;
    transform: translate(-50%, 5%);
}

.left-side-product-box img {
    width: 100%;
}

.left-side-product-box .sub-img img {
    margin-top: 5px;
    width: 83px;
    height: 100px;
}

.right-side-pro-detail span {
    font-size: 15px;
}

.right-side-pro-detail p {
    font-size: 25px;
    color: #a1a1a1;
}

.right-side-pro-detail .price-pro {
    color: #E45641;
}

.right-side-pro-detail .tag-section {
    font-size: 18px;
    color: #5D4C46;
}

.pro-box-section .pro-box img {
    width: 100%;
    height: 200px;
}

@media (min-width:360px) and (max-width:640px) {
    .pro-box-section .pro-box img {
        height: auto;
    }
}




</style>

<div class="container">
    <div class="col-lg-8 border p-3 bg-white">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
            Product Detail Design Using Bootstrap 4.0
        </div>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="/storage/{{$service->image}}" class="border p-3">
             
             
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <span>Service Name</span>
                            <p class="m-0 p-0">{{$service->name}}</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">${{$service->price}}</p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <span>{{$service->description}}</span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <p class="tag-section"><strong>Estheticiens </strong>
                            @foreach ($service->estheticien as $coiffeur)
                            <div>
                            <img width="50" hight="50px" class="rounded-circle" src="/storage/{{$coiffeur->estheticienn->image}}">
                            </div>
                                <a href="{{route('profil_esth',['coiffeure'=>$coiffeur->estheticienn])}}">{{$coiffeur->estheticienn->first_name}}</a>
                            @endforeach
                            </p>
                        </div>
                       
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                               @if(Auth::user()->role=='user')
                                <div class="col-lg-6">
                                    <a href="{{ route('reservations.create',$service) }}" class="btn btn-success w-100">Reserve Now</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            </div>
        </div>
  

</x-slot>


</x-home-layout>


