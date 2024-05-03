<x-home-layout>
    <section class="h-100 bg-white mt-5">
    <h1 class="text-dark text-center">Make Your<span class="text-warning fw-bold"> Reservation</span></h1>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
         <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="/storage/{{$services->image}}" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Make a Reservation</h3>
                                    <form action="{{ route('reservations.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="service_id" value="{{$services->id}}">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Example1m" name="first_name" class="form-control form-control-lg" required />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Example1n" name="last_name" class="form-control form-control-lg" required />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="form3Example8" name="email" class="form-control form-control-lg" required />
                                            <label class="form-label" for="form3Example8">Email</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <label>Estheticien</label>
                                                <select class="form-control form-control-lg" name="estheticien_id" required>
                                                    @foreach ($services->estheticien as $coiffeur)
                                                    <option value="{{$coiffeur->estheticienn->id}}">{{$coiffeur->estheticienn->first_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="datetime-local" id="form3Example9" name="datetime" class="form-control form-control-lg" required />
                                            <label class="form-label" for="form3Example9">Date and Time</label>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="number" id="form3Example90" name="phone" class="form-control form-control-lg" required />
                                            <label class="form-label" for="form3Example90">Phone</label>
                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2">Submit form</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</x-home-layout>
