@extends('layouts.app')
<!-- Display success or error messages -->
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@section('content')
    <h1 style="text-align: center;">Master Data Tree View</h1>
    <div class="container" style="display: flex; flex-direction:row; justify-content:center; gap :5rem;">

        <div class="card" style="width: 18rem; overflow-y: auto; height : 32rem; max-height : 32rem">
            <div class="card-body">
                {{-- <div class="treeview">
        <h5>Categories</h5>
        @foreach ($categories as $category)
            <div class="category">
                <strong class="category-title" style="cursor:pointer;">
                  @if ($category->subCategories->isNotEmpty())
                  <span class="arrow">
                    <i class="bi bi-caret-right-fill"></i>
                </span>
                  @else
                  <i class="bi bi-caret-right-fill"></i>
                  @endif
                  {{ $category->name }}
               </strong>
                @if ($category->subCategories->isNotEmpty())
                    <ul class="sub-category" >
                        @foreach ($category->subCategories as $subCategory)
                            <li class="sub-category-item">{{ $subCategory->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
        <h5>Directorates</h5>
        @foreach ($directorates as $directorate)
            <div class="directorate">
                <strong class="directorate-title" style="cursor:pointer;">{{ $directorate->name }}</strong>
                @if ($directorate->subDirectorates->isNotEmpty())
                    <ul class="sub-directorate">
                        @foreach ($directorate->subDirectorates as $subDirectorate)
                            <li>{{ $subDirectorate->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
        <h5>Divisions</h5>
        @foreach ($divisions as $division)
            <div class="division">
                <strong>{{ $division->name }}</strong>
            </div>
        @endforeach
    </div> --}}

            <x-tree-view 
                title="Categories" 
                :items="$categories" 
                subitems="subCategories" 
                :hasSub="true" 
            />
            <x-tree-view 
                title="Directorates" 
                :items="$directorates" 
                subitems="subDirectorates" 
                :hasSub="true" 
            />
            <x-tree-view 
                title="Divisions" 
                :items="$divisions" 
                :hasSub="false" 
            />
            </div>
        </div>
        <div style="display: flex; flex-direction: column; justify-items: center; width: 18rem;">
            <x-button-component 
                btnTitle="Create Category" 
                modalTarget="createCategoryModal"
                modalLabel="createCategoryModalLabel" 
                contentTitle="Create Category" 
                contentLabel="Category Name"
                contentId="categoryName" 
                formId="createCategoryForm" 
                sbtTitle="Add Category" 
                :routeAction="route('categories.store')" 
            />
                <x-button-sub-component 
                btnTitle="Create Sub Category" 
                modalTarget="createSubCategoryModal"
                modalLabel="createSubCategoryModalLabel"
                contentTitle="Create Sub Category"
                contentLabel="Sub Category Names"
                contentId="subCategoryName"
                formId="createCategoryForm"
                sbtTitle="Add Sub Category"
                :routeAction="route('sub-categories.store')"
                :items="$categories"
                selectLabel="categorySelect"
                selectId="category_id"
                selectTitle="Category"
            />
            <x-button-component 
                btnTitle="Create Directorate" 
                modalTarget="createDirectorateModal"    
                modalLabel="createDirectorateModalLabel" 
                contentTitle="Create Directorate" 
                contentLabel="Directorate Name"
                contentId="directorateName" 
                formId="createDirectorateForm" 
                sbtTitle="Add Directorate" 
                :routeAction="route('directorates.store')" 
            />
            <x-button-sub-component 
                btnTitle="Create Sub Directorate" 
                modalTarget="createSubDirectorateModal"
                modalLabel="createSubDirectorateModalLabel"
                contentTitle="Create Sub Directorate"
                contentLabel="Sub Directorate Names"
                contentId="subDirectorateName"
                formId="createDirectorateForm"
                sbtTitle="Add Sub Directorate"
                :routeAction="route('sub-directorates.store')"
                :items="$directorates"
                selectLabel="directoratesSelect"
                selectId="directorate_id"
                selectTitle="Directorate"
            />
            <x-button-component 
                btnTitle="Create Division" 
                modalTarget="createDivisionModal"    
                modalLabel="createDivisionModalLabel" 
                contentTitle="Create Division" 
                contentLabel="Division Name"
                contentId="divisionName" 
                formId="createDivisionForm" 
                sbtTitle="Add Division" 
                :routeAction="route('divisions.store')" 
            />
           
        </div>


        {{-- <div style="display: flex; flex-direction:column; justify-items:center; width: 18rem;">
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
        Create Category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createCategoryForm" action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="name" required>
                        </div>
                        <!-- Add other form fields as needed -->
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div> --}}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->any())
                var modal = new bootstrap.Modal(document.getElementById('createCategoryModal'));
                modal.show();
            @endif
        });
        </script>
@endsection
