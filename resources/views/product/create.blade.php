@extends('layouts.app')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">product</a></li>
              <li class="breadcrumb-item active">Create product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Fill Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
 

                <form role="form" action="{{ route('product.store')}}"  method="POST">
                  @csrf
                  <div class="card-body">

                    <div class="form-group"  > 
                      <label for="name">Category</label>
                      <select name="category_id" id="" class="select2 form-control">
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>    
                        @endforeach
                      </select>

                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>


                    <div class="form-group"  > 
                      <label for="name">Name</label>
                      <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name"  value="{{ old('name') }}" placeholder="Name">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>


                    <div class="form-group"  > 
                      <label for="name">Details</label>
                      <textarea name="text" id="" class="form-control @error('text') is-invalid @enderror" cols="30" rows="10">{{ old('text') }}</textarea>
                      @error('text')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
 
 
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
    </section>
 

@endsection()