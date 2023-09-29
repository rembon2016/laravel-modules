@extends('usr::layouts.master')

@section('content')
    <div class="row align-items-center justify-content-center" style="height: 100vh">
        <div class="col-8">
            <h2 class="text-center mb-3">Login User</h2>

            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="****">
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
