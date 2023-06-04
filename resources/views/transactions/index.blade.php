@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">All Transaction History </h6>
                  </div>
                </div>

                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table text-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PaymentId</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($tran as $key => $t )


                        <tr>
                          <td scope="row">{{ $key+1 }}</td>
                          <td scope="row">{{ $t->name }}</td>
                          <td scope="row">{{ $t->email }}</td>
                          <td scope="row">{{ $t->amount }}</td>
                          <td scope="row">{{ $t->transactionId }}</td>
                          <td scope="row">{{ $t->code }}</td>
                        </tr>

                        @endforeach

                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>

@endsection
