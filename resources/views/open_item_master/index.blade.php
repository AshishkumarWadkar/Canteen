@extends('layouts.mess.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">All Menus </h6>
                  </div>
                </div>
                <div class="text-end mx-3 mt-2">
                <a href="{{ route('open_item_master.create') }}"><button class="btn btn-info mb-0">Add Open Item</button></a>
                </div>
                <div class="card-body pt-0">
                  <div class="table-responsive">
                    <table class="table text-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Item Name</th>
                          <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($open_items as $key => $m )


                        <tr>
                          <td scope="row">{{ $key+1 }}</td>
                             <td class="text-start">{{ $m->name }}</td>
                             <td class="text-start">{{ $m->amount }}</td>
                             <td>{{  \Carbon\Carbon::parse($m->created_at)->format('d-m-Y') }}</td>
                          <td class="row">
                                <a class="col-6" href="{{ route('open_item_master.edit',$m->id) }}"><button class="btn btn-sm btn-primary py-0">Edit</button></a>


                                    <form class="col-6" action="{{ route('open_item_master.destroy', $m->id) }}" method="POST">
                                        <input name="_method" type="hidden" value="DELETE">
                                        {{ csrf_field() }}

                                        <button
                                            class=" show_confirm btn btn-sm btn-primary py-0">Delete</a>
                                    </form>


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
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>

@endsection
