@extends('layouts.master')
@section('content')
    <div class="row mt-4 mb-4 justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-3">Login Now</h2>
            @if ($errors->any())
            @foreach ($errors->all() as $errors)

            <div class="alert alert-danger">{{$errors}}</div>

            @endforeach
            @endif
            <div class="card">
                <div class="card-body">
                    <Form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <Label for="" class="form-label"> User Name</Label>
                            <input type="text" name="name" id="" class="form-control"
                                placeholder="Enter Your User Name">
                        </div>
                        <div class="mb-2">
                            <Label for="" class="form-label"> User Email</Label>
                            <input type="email" name="email" id="" class="form-control"
                                placeholder="Enter Your Email">
                        </div>
                        <div class="mb-2">
                            <Label for="" class="form-label"> User Password</Label>
                            <input type="text" name="password" id="" class="form-control"
                                placeholder="Enter Your Password ">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </Form>
                </div>
            </div>
        </div>
    </div>
@endsection
