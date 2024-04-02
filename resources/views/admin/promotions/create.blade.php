
    <div class="container">
        <h2>{{ isset($promotion) ? 'Edit' : 'Create' }} Promotion</h2>
        <form action="{{ isset($promotion) ? route('promotions.update', $promotion->id) : route('promotions.store') }}" method="POST">
            @csrf
            @if(isset($promotion))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($promotion) ? $promotion->name : '' }}">
            </div>
            <div class="form-group">
                <label for="discount">Discount</label>
                <input type="text" class="form-control" id="discount" name="discount" value="{{ isset($promotion) ? $promotion->discount : '' }}">
            </div>
            <div class="form-group">
                <label for="validityPeriodStart">Validity Period Start</label>
                <input type="text" class="form-control" id="validityPeriodStart" name="validityPeriodStart" value="{{ isset($promotion) ? $promotion->validityPeriodStart : '' }}">
            </div>
            <div class="form-group">
                <label for="validityPeriodEnd">Validity Period End</label>
                <input type="text" class="form-control" id="validityPeriodEnd" name="validityPeriodEnd" value="{{ isset($promotion) ? $promotion->validityPeriodEnd : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

