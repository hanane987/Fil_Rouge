
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Make a Reservation</div>
                    <div class="card-body">
                        <form action="{{ route('reservations.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{$services->id}}">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="estheticien_id">Select Estheticiens</label>
                                <select name="estheticien_id[]" id="estheticien_id" class="form-control" multiple required>
                                    @foreach($estheticiens as $estheticien)
                                        <option value="{{ $estheticien->id }}">{{ $estheticien->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Submit Reservation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

