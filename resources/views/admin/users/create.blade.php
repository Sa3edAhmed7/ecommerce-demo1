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
          <h1 class="m-0" style="color:#ff2832;">Users Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a style="color:#ff2832;" href="#">Home</a></li>
            <li class="breadcrumb-item active">Users Page</li>
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
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <div class="col-sm-12 col-md-12"><h6 class="tx-center tx-bold" style="color:#000000;">UsersImage</h6>
										<input type="file" class="dropify" name="image" />
									</div>
                        <div class="form-group">
                            <label for="recipient-name" style="color:#ff2832;" class="col-form-label">Users Name</label>
                            <input class="form-control border-danger text-lg" name="name" id="name" type="text">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" style="color:#ff2832;" class="col-form-label">Email</label>
                            <input class="form-control border-danger text-lg" name="email" id="email" type="email">
                        </div>
                        
                        <div class="form-group">
                            <label for="recipient-name" style="color:#ff2832;" class="col-form-label">Password</label>
                            <input class="form-control border-danger text-lg" name="password" id="password" type="password">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" style="color:#ff2832;" class="col-form-label">Re-Password</label>
                            <input class="form-control border-danger text-lg" name="password_confirmation" id="password_confirmation" type="password">
                        </div>
                            <div class="form-group">
                                <label for="inputName" class="control-label" style="color:#ff2832;">User Type</label>
                                <select name="type" class="form-control SlectBox border-danger text-lg">
                                    <!--placeholder-->
                                    <option value="" selected enabled>حدد الحالة</option>
                                        <option class="tx-center">admin</option>
										<option class="tx-center">user</option>
                                </select>
                            </div>
                    </div>
                    <button type="submit" class="btn text-white" style="background-color:#ff2832;">Create</button>
                  </form>
            </div>
        </div><!-- /.card -->
    </div>
</div>
@endsection