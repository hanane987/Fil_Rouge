<x-app-layout>
<div class="container mt-5">

    <h2>Edit Promotion</h2>

    <form action="{{ route('promotions.update', $promotion->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $promotion->name }}">
        </div>

        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="text" class="form-control" id="discount" name="discount" value="{{ $promotion->discount }}">
        </div>

        <div class="form-group">
            <label for="validityPeriodStart">Validity Period Start</label>
            <input type="date" class="form-control" id="validityPeriodStart" name="validityPeriodStart" value="{{ \Carbon\Carbon::parse($promotion->validityPeriodStart)->format('Y-m-d') }}">
        </div>

        <div class="form-group">
            <label for="validityPeriodEnd">Validity Period End</label>
            <input type="date" class="form-control" id="validityPeriodEnd" name="validityPeriodEnd" value="{{ \Carbon\Carbon::parse($promotion->validityPeriodEnd)->format('Y-m-d') }}">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>

    </form>

</div>
</x-app-layout>
