@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">All Transaction History {{ Carbon\Carbon::now() }}</h6>
                  </div>
                </div>
                <div class="text-end mx-3 my-2 row align-item-center">
                    <div class="col-6">
                        <label class="text-uppercase text-secondary font-weight-bolder" for="from" aria-autocomplete="false">Total Successfuly Amount : {{ $sum }}</label>

                    </div>
                    <div class="col-6">
                        <form action="{{ route('transactions.index') }}">
                        <label class="text-uppercase text-secondary font-weight-bolder" for="from" aria-autocomplete="false">From</label>
                        <input type="date" class="" id="from" name="from" required value="{{ isset($fromdate) ? $fromdate : "" }}">
                        <label class="text-uppercase text-secondary font-weight-bolder" for="to">To</label>
                        <input type="date" class="" id="to" name="to" required value="{{ isset($todate) ? $todate : "" }}">
                        <button class="btn btn-sm btn-success mt-2" type="submit">Filter</button>
                        {{-- <a href=""><button class="btn btn-sm btn-info mt-2">Back</button></a> --}}
                    </form>
                    </div>
                </div>

                <div class="card-body pb-2">
                  <div class="table-responsive">
                    <table class="table mb-0 datatable">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PaymentId</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($tran as $key => $t )


                        <tr>
                          <td scope="row">{{ $key+1 }}</td>
                          <td class="text-start" scope="row">{{ $t->name }}</td>
                          <td class="text-start" scope="row">{{ $t->email }}</td>
                          <td scope="row">{{ $t->amount }}</td>
                          <td scope="row">{{ $t->providerReferenceId }}</td>
                          <td scope="row">{{ $t->created_at }}</td>
                          <td scope="row"><span class="badge badge-sm {{ $t->code == "PAYMENT_SUCCESS" ? "bg-gradient-success" : "bg-gradient-danger"}} {{ $t->code == "PAYMENT_INITIATED" ? "bg-gradient-secondary" : ""}}">{{ str_replace("_"," ",$t->code) }}</span>
                   </td>
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
