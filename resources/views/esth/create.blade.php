<!-- resources/views/admin/esth/estheticiens/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Estheticien</h2>
        <form action="{{ route('admin.esth.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="form-group">
                <label for="specialization">Specialization</label>
                <input type="text" class="form-control" id="specialization" name="specialization">
            </div>
            <div class="form-group">
                <label for="availability">Availability</label>
                <input type="text" class="form-control" id="availability" name="availability">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="work_name">Work Name</label>
                <input type="text" class="form-control" id="work_name" name="work_name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
