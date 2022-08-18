@extends('layouts.app')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Category</a></li>
              <li class="breadcrumb-item active">Create Category</li>
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

                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        
                        @foreach ($category as $item)
                            <tr>
                            <td>{{ $loop->iteration }}</td>    
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                            </td>
                            </tr>    

                        @endforeach
                    </table>

                    {{ $category->links("pagination::bootstrap-4")}}

                </div>
 
              </div>

            </div>
          </div>
        </div>
    </section>
 

@endsection()