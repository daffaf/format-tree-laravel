@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>
    
    @foreach ($categories as $category)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <ul>
                    @foreach ($category->subCategories as $subCategory)
                        <li>{{ $subCategory->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
@endsection