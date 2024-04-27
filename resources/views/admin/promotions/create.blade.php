<x-app-layout>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ isset($promotion) ? 'Edit' : 'Create' }} Promotion</div>

                <div class="card-body">
                    <form action="{{ isset($promotion) ? route('promotions.update', $promotion->id) : route('promotions.store') }}" method="POST">
                        @csrf
                        @if(isset($promotion))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ isset($promotion) ? $promotion->name : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="text" class="form-control" id="discount" name="discount" value="{{ isset($promotion) ? $promotion->discount : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="validityPeriodStart">Validity Period Start</label>
                            <input type="date" class="form-control" id="validityPeriodStart" name="validityPeriodStart" value="{{ isset($promotion) ? $promotion->validityPeriodStart->format('Y-m-d') : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="validityPeriodEnd">Validity Period End</label>
                            <input type="date" class="form-control" id="validityPeriodEnd" name="validityPeriodEnd" value="{{ isset($promotion) ? $promotion->validityPeriodEnd->format('Y-m-d') : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="validityPeriodEnd">Validity Period End</label>
                            <select  class="form-control"  name="service_id">
                            @foreach($services as $service)
                            <option value="{{$service->id}}">
                            {{$service->name}}
                            </option>
                            @endforeach
                            </select>                       </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>