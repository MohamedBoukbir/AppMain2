@extends('dashboard')

@section('activate-abonnements')
active
@endsection
{{-- ////////////////////// --}}
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="breadcrumb-path mb-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><img src="{{ asset('img/dash.png') }}" class="mr-2"
                                        alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active">Abonnement</li>
                        </ul>
                        <h3>Abonnements </h3>
                    </div>
                </div>
            </div>
           {{--! table --}}
          @if(count($subscribes)>0)
           <div class="table-responsive">
            <table class="table custom-table no-footer">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Country</th>
                  <th>Phone</th>
                  <th>payerstatus</th>
                  <th>currencycode</th>
                  <th>amt</th>
                  <th>enddate</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>



                @foreach ($subscribes as $subscribe)
                <tr>
                   
                    <td>#</td>
                    <td>{{ $subscribe->username }}</td>
                    <td>{{ $subscribe->email }}</td>
                    <td>{{ $subscribe->address }}</td>
                    <td>{{ $subscribe->country }}</td>
                    <td>{{ $subscribe->phone }}</td>
                    <td>{{ $subscribe->payerstatus }}</td>
                    <td>{{ $subscribe->currencycode }}</td>
                    <td>{{ $subscribe->amt }}</td>
                    <td>{{ $subscribe->enddate }}</td>


                    {{-- <td>{{ $famille->status }}</td> --}}

                    <td>
                        <div class="actionset">
                          <label
                            ><a class="action_label5" href="{{ route('admin.edit.candidat',$subscribe->id) }}"
                              >Edit <i data-feather="edit"></i></a
                          ></label>
                          

                          <label
                            ><a
                              class="action_label4"
                              data-toggle="modal"
                              data-target="#delete"
                              >Delete <i data-feather="trash-2"></i></a
                          ></label>
                        </div>
                      </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @else
        no subscribes
        @endif

           {{--! end table--}}
        </div>
    </div>
@endsection
