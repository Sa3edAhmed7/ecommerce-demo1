@extends('admin.main')
@section('content')
@if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning bg bg-warning-gradient tx-white alert-dismissible fade show col-sm-2">
        <i class="fas fa-check-circle"></i>
        <strong>{{ $error }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
            @endforeach
@endif

@if (session()->has('Add'))
    <div class="alert alert-success bg bg-success-gradient tx-white alert-dismissible fade show col-sm-2" role="alert">
    <i class="fas fa-check-circle"></i>
    <strong>{{ session()->get('Add') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('delete'))
    <div class="alert alert-danger bg bg-danger-gradient tx-white alert-dismissible fade show col-sm-2" role="alert">
    <i class="fas fa-check-circle"></i>
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('edit'))
    <div class="alert alert-info bg bg-info-gradient tx-white  alert-dismissible fade show col-sm-2" role="alert">
    <i class="fas fa-check-circle"></i>
        <strong>{{ session()->get('edit') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0" style="color:#ff2832;">Edit Categories Page {{ $category->id }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a style="color:#ff2832;" href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Categories Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-danger card-outline">
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="name" class="form-label" style="color:#ff2832;">Category Name</label>
                      <input type="name" class="form-control border-danger text-lg" id="name" name="name" value="{{ $category->name }}">
                    </div>
                    <button type="submit" class="btn text-white" style="background-color:#ff2832;" >Update</button>
                  </form>
            </div>
        </div><!-- /.card -->
    </div>
</div>
@endsection


