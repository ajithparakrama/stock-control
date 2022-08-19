@extends('layouts.app')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">products</a></li>
              <li class="breadcrumb-item active">All products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
 
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Fill Details</h3>
                </div>

                <div class="card-body">
                  {{$dataTable->table()}}

                </div>
 

            </div>
          </div>
        </div>
    </section> 
@endsection()

@section('third_party_stylesheets')
   <link rel="stylesheet" href="{{ asset('plugin/datatable/buttons.dataTables.min.css') }}">
   <link rel="stylesheet" href="{{ asset('plugin/datatable/dataTables.bootstrap4.min.css') }}">
@stop

@section('third_party_scripts')
<script src="{{ asset('plugin/jquery/jquery.js') }}"  ></script>
<script src="{{ asset('plugin/datatable/jquery.validate.js') }}" defer></script>
<script src="{{ asset('plugin/datatable/jquery.dataTables.min.js') }}" defer></script>
<script src="{{ asset('plugin/datatable/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('plugin/datatable/dataTables.bootstrap4.min.js') }}" defer></script>
<script src="{{ asset('plugin/datatable/dataTables.buttons.min.js') }}" defer></script>
<script src="{{ asset('plugin/vendor/datatables/buttons.server-side.js') }}" defer></script>

{!! $dataTable->scripts() !!}
@stop