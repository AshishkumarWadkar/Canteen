
@extends('layouts.user.app')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 col-sm-6 mb-xl-4 mb-4 mb-sm-3">
            {{-- @foreach ($plans as $key => $p)
                <form action="/payment-initiate-request" class="col-xl-12 col-sm-6 mb-xl-4 mb-4 mb-sm-3" method="POST" >
                    @csrf
                    <input type="hidden" name="plan" value="{{ $p->id }}">
                    <div class="card text-center">
                        <div class="card-header p-3 pt-2">
                            <div class="text-center pt-1">
                                <h4 class="mb-0 mt-3 text-capitalize text-wrap">{{ $p->name }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer row text-center">
                            <button type="submit" class="btn btn-primary btn-block d-block ">{{ $p->name }} {{ $p->amount }} Rs</button>
                        </div>
                    </div>
                </form>
          @endforeach --}}
          <div class="card text-center">


              <div class="card-body">

                                    <h3>Top up account for Meals</h3>
                                    <br>
                                    <h5 class="text-danger">Post sucessfull payment upload a screenshot with valid transaction ID</h5>
                                    <img class="img img-fluid" src="{{ asset('assets/QR1.jpg') }}" style="    width: 200px;        height: 300px;        object-fit: cover;  ">
                                    <h2>Pay On QR</h2>
                                    <form class="text-center" method="POST" action="/paybyqr/2" enctype="multipart/form-data">
                                        @csrf
                                       Enter Transaction made Amount: <input required type="number" name="amount" id="amount" placeholder="Amount">
                                       <br>
                                        <input class="file" required type="file" name="file" id="file" placeholder="Upload ScreenShot">
                                         <button type="submit" class="btn btn-primary btn-block d-block m-2">Submit</button>
                                    </form>
                                </div>

        </div></div>
      </div>
    </div>
@endsection
