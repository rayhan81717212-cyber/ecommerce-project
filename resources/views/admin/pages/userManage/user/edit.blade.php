@extends('admin.layout.master')
@section('title', 'Product Create')
@section('content')



    <div class="mx-md-4">
        <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Users</span>
                <span class="text-warning"> / Create</span>
            </h4>
            <div class="card p-4">
    <div class="card-body">
        <h3 class="mb-4">Create Users</h3>

        <!-- Step Indicators -->
        <ul class="nav nav-pills mb-4">
            <li class="nav-item">
                <a class="nav-link active" href="#step1">Step 1: Basic Info <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step3">Step 2: Phone, Role and Status <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step4">Step 3: Photo <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
        </ul>

        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" id="productForm">
            @csrf
            @method('PATCH')
            <!-- Step 1: Basic Info -->
            <div id="step1" class="step-content">
                
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name"  class="form-control" value="{{ $user->first_name }}" autofocus>
                        @error("first_name")
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" value="{{  $user->last_name }}" >
                        @error("last_name")
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{  $user->email }}" >
                        @error("email")
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <button type="button" class="btn btn-warning next-step">Next</button>
            </div>


            <!-- Step 2: Price & Stock -->
            <div id="step3" class="step-content d-none">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>phone</label>
                        <input type="text" name="phone" class="form-control" class="form-control" value="{{ $user->phone }}">
                        @error("phone")
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Role</label>
                        <select name="role_id" class="form-control">
                            <option value="">Select Role</option>
                            @foreach ($role as $item)
                                <option value="{{ $item->id }}" @selected($item->id == $user->role_id) >{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error("role_id")
                            <div class="text-danger">{{$message}}</div>
                        @enderror

                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control" >
                            <option value="">Select Status</option>
                            <option value="Active" @selected($user->status == 'Active')>Active</option>
                            <option value="Inactive" @selected($user->status == 'Inactive')>Inactive</option>
                        </select>
                        @error("status")
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                <button type="button" class="btn btn-warning next-step">Next</button>
            </div>

            <!-- Step 4: Photo -->
            <div id="step4" class="step-content d-none">
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Product Photo</label>
                        <div>
                            @if ($user->photo !== null)
                                <img src="{{ asset('storage/'. $user->photo) }}" alt="Phone Messing" width="100">
                            @else
                                <img src="https://placehold.co/100x100" alt="">
                            @endif
                        </div>
                        <input type="file" name="photo" id="photo" class="filepond" />
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
