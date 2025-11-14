@extends('admin.layout.master')
@section('title', 'Create Brand')
@section('content')



    <div class="mx-md-4">
        <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Product</span>
                <span class="text-warning"> / Create</span>
            </h4>
            <div class="card p-4">
    <div class="card-body">
        <h3 class="mb-4">Create Product</h3>

        <!-- Step Indicators -->
        <ul class="nav nav-pills mb-4">
            <li class="nav-item">
                <a class="nav-link active" href="#step1">Step 1: Basic Info <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#step2">Step 2: Photo <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
        </ul>

        <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
            @csrf

            <!-- Step 1: Basic Info -->
            <div id="step1" class="step-content">
                <div class="form-group mb-3">
                    <label>Brand Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>Brand Description</label>
                        <textarea type="text" name="description" class="form-control" rows="8" required>{{ old('description') }} </textarea>
                    </div>
                    
                </div>

                <button type="button" class="btn btn-warning next-step">Next</button>
            </div>

            <!-- Step 2: Photo -->
            <div id="step4" class="step-content d-none">
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Product Photo</label>
                        <input type="file" name="photo" id="photo" class="filepond" required/>
                        @error('photo')
                           <span class="text-danger">{{$message}}</span> 
                        @enderror
                    </div>
                </div>
                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>

        </form>
    </div>
</div>



        </div>
    </div>

@endsection
