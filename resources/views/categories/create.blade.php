@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Category</h1>
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection