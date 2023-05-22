@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 col-md-offset-6">

            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif

            <div class="card card-default">
                <div class="card-header">
                    All Plan
                </div>

                <div class="card-body text-center d-flex">
                @foreach ($plans as $key => $p)

                    <form action="/payment-initiate-request"  method="POST" >
                        @csrf
                        <input type="hidden" name="plan" value="{{ $p->id }}">
                        <button class="btn btn-primary btn-block d-block m-2">{{ $p->name }} {{ $p->amount }} Rs</button>
                    </form>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
