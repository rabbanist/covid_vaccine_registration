@extends('layout.app')

@section('content')

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-6 mx-auto my-3">
            <div class="card">
                <div class="card-header">
                    <h4>Vaccine Registration</h4>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nid">Nid <span class="text-danger">*</span></label>
                            <input type="text" name="nid" id="nid" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
