@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h1> Add Offers </h1>
                <form method="post" action="{{route('offers.store')}}">
                    @if(Session::has('success'))


                    <div class="mb-3">
                        {{Session::get('success')}}

                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Offer Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        @error("name")
                        <small>{{$message}}</small>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Offer Price</label>
                        <input type="text" class="form-control" name="price" aria-describedby="emailHelp">
                        @error("price")
                        <small>{{$message}}</small>
                        @enderror


                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Offer photo</label>
                        <input type="text" class="form-control" name="photo"  aria-describedby="emailHelp">

                    </div>
                    <button type="submit" class="btn btn-primary">Save Offer</button>
                </form>

            </div>
        </div>
    </div>
@endsection
