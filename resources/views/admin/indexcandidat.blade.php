@extends('dashboard')

@section('activate-candidat')
active
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="breadcrumb-path mb-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><img src="{{ asset('img/dash.png') }}" class="mr-2" alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active">Candidat</li>
                        </ul>
                        <h3>Candidats</h3>
                    </div>
                </div>
                <div class="col-xl-12 col-sm-12 col-12 mb-4">
                    <div class="head-link-set">
                      <ul>
                        <li><a class="active" href="#">All</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Offices</a></li>
                      </ul>

                      @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                     @endif  
                      <a class="btn-add" href="{{ route('admin.add.candidat') }}"
                        ><i data-feather="plus"></i> Add Candidat</a
                      >
                    </div>
                  </div>
                  <div class="col-xl-12 col-sm-12 col-12 mb-4">
                    <div class="row">
                      <div class="col-xl-10 col-sm-8 col-12">
                        <label class="employee_count">{{ count($candidats) }} Candidats</label>
                      </div>
                      <div class="col-xl-1 col-sm-2 col-12">
                        <a href="employee-grid.html" class="btn-view"
                          ><i data-feather="grid"></i>
                        </a>
                      </div>
                      <div class="col-xl-1 col-sm-2 col-12">
                        <a href="#" class="btn-view active"
                          ><i data-feather="list"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  {{--  --}}
                  <div class="col-xl-12 col-sm-12 col-12 mb-4">
                    <div class="card">
                      <div class="table-heading">
                        <h2>Candidat</h2>
                      </div>
                      <div class="table-responsive">
                        <table class="table custom-table no-footer">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Country</th>
                              <th>Phone</th>
                              <th>Religion</th>
                              <th>Domain</th>
                              <th>Years_experience</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>



                            @foreach ($candidats as $candidat)
                            <tr>
                               
                                <td>#</td>
                                <td>{{ $candidat->firstName.' '.$candidat->lastName }}</td>
                                <td>{{ $candidat->email }}</td>
                                <td>{{ $candidat->address }}</td>
                                <td>{{ $candidat->country }}</td>
                                <td>{{ $candidat->phone }}</td>
                                <td>{{ $candidat->religion }}</td>
                                <td>{{ $candidat->domain }}</td>
                                
                                <td>{{ $candidat->years_experience }}</td>


                                {{-- <td>{{ $famille->status }}</td> --}}

                                <td class="tab-select">
                                    <select class="select">
                                      <option value="active">Completed</option>
                                      <option value="inactive">In Progress</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="actionset">
                                      <label
                                        ><a class="action_label5" href="{{ route('admin.edit.candidat',$candidat->id) }}"
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
                            {{-- <tr>
                              <td>
                                <div class="table-img">
                                  <a href="profile.html">
                                    <img
                                      src="{{ asset('img/avatar-13.jpg') }}"
                                      alt="profile"
                                      class="img-table"
                                    /><label>1</label>
                                  </a>
                                </div>
                              </td>
                              <td>
                                <label class="action_label">2</label>
                              </td>
                              <td>
                                <label class="action_label2">3</label>
                              </td>
                              <td><label>4</label></td>
                              <td><label>5</label></td>
                              <td class="tab-select">
                                <select class="select">
                                  <option value="active">Active</option>
                                  <option value="inactive">Inactive</option>
                                </select>
                              </td>
                            </tr> --}}
                            {{-- <tr>
                              <td>
                                <div class="table-img">
                                  <a href="profile.html">
                                    <img
                                      src="{{ asset('img/avatar-13.jpg') }}"
                                      alt="profile"
                                      class="img-table"
                                    /><label>Sean Black</label>
                                  </a>
                                </div>
                              </td>
                              <td>
                                <label class="action_label">Richard Wilson </label>
                              </td>
                              <td>
                                <label class="action_label2">Design </label>
                              </td>
                              <td><label>Focus Technologies </label></td>
                              <td><label>Team Lead</label></td>
                              <td class="tab-select">
                                <select class="select">
                                  <option value="active">Active</option>
                                  <option value="inactive">Inactive</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="table-img">
                                  <a href="profile.html">
                                    <img
                                    src="{{ asset('img/avatar-10.jpg') }}"
                                      alt="profile"
                                      class="img-table"
                                    />
                                  </a>
                                  <label>Richard Wilson</label>
                                </div>
                              </td>
                              <td>
                                <label class="action_label in_active">No </label>
                              </td>
                              <td>
                                <label class="action_label2">Business </label>
                              </td>
                              <td><label>Focus Technologies </label></td>
                              <td><label>Super Admin</label></td>
                              <td class="tab-select">
                                <select class="select">
                                  <option value="active">Active</option>
                                  <option value="inactive">Inactive</option>
                                </select>
                              </td>
                            </tr> --}}
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
         {{-- MODAL --}}
         {{-- <div class="customize_popup">
          <div
            class="modal fade"
            id="delete"
            tabindex="-1"
            aria-labelledby="staticBackdropLabels1"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <form action="{{ route('admin.destroy',$candidat->id) }}" method="POST" enctype="multipart/form-data">
                      {{ method_field('delete') }}
                      {{ csrf_field() }}
                      @method('DELETE')
                      @csrf

                <div class="modal-header text-centers border-0">
                  <h5 class="modal-title text-center" id="staticBackdropLabels1">
                    Are You Sure Want to Delete?
                  </h5>
                </div>
                <div class="modal-footer text-centers">
                  <button type="submit" class="btn btn-primary">Delete</button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                    Cancel
                  </button>
                </div>
                  </form> 
              </div>
            </div>
          </div>
        </div> --}}
      {{-- END MODAL --}}
    </div>
@endsection
