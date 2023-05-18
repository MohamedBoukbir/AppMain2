@extends('dashboard')
@section('activate-admin')
    active
@endsection
{{-- /////////////////////////////////////////// --}}
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-name 	mb-4">
                <h4 class="m-0"><img src="{{ asset('img/profile.png') }}" class="mr-1" alt="profile" /> Welcome Admin</h4>
                <label>{{ now()->format('l, d-M-y') }}</label>
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 col-sm-12 col-12">
                    <div class="breadcrumb-path ">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img
                                        src="{{ asset('img/dash.png') }}" class="mr-3" alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                        <h3>Admin Dashboard</h3>
                    </div>
                </div>

                <div class="col-xl-6 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6 col-12">
                            <a class="btn-dash" href="#">Family Dashboard</a>
                        </div>
                        <div class="col-xl-6 col-sm-6 col-12">
                            <a class="btn-dash" href="#">Candidats Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill1 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Candidats</label>
                                <h4>{{ count($candidats) }}</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{ asset('img/dash1.png') }}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill2 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Familles</label>
                                <h4>{{ count($familles) }}</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{ asset('img/dash2.png') }}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill3 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Abonnements</label>
                                <h4>0</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{ asset('img/dash3.png') }}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill4 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Reviews</label>
                                <h4>0</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{ asset('img/dash4.png') }}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-6 d-flex mobile-h">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">TOOOTAL 1</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="invoice_chart"></div>
                            <div class="text-center text-muted">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-4">
                                            <p class="mb-2 text-truncate"><i
                                                    class="fas fa-circle text-primary mr-1"></i> Families</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-4">
                                            <p class="mb-2 text-truncate"><i
                                                    class="fas fa-circle text-success mr-1"></i> Candidats</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-4">
                                            <p class="mb-2 text-truncate"><i
                                                    class="fas fa-circle text-danger mr-1"></i> New</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Toootal 2</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-12 col-12 d-flex">
                    <div class="card card-list flex-fill">
                        <div class="card-header ">
                            <h4 class="card-title">Report & Reviews</h4>
                        </div>
                        <div class="card-body">
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{ asset('img/favicon.png') }}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>nom et prenom</label>
                                        <span>REVIEW</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{ asset('img/favicon.png') }}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>nom et prenom</label>
                                        <span>REVIEW</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{ asset('img/favicon.png') }}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>nom et prenom</label>
                                        <span>REPORT</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{ asset('img/favicon.png') }}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>nom et prenom</label>
                                        <span>REVIEW</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12 col-12 d-flex">
                    <div class="card card-list flex-fill">
                        <div class="card-header">
                            <div class="">
                                <h4 class="card-title">Recent Activities</h3>
                            </div>
                        </div>
                        <div class="card-body dash-activity">
                            <div class="slimscroll activity_scroll">
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{ asset('img/profile.png') }}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>4 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{ asset('img/profile.png') }}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>5 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{ asset('img/profile.png') }}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>6 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{ asset('img/profile.png') }}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{ asset('img/profile.png') }}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>3 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{ asset('img/profile.png') }}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>4 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-viewall activit" style="margin-top: 100px">
                                <a>View all <img src="{{ asset('img/right-arrow.png') }}" class="ml-2" alt="arrow"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12 col-12 d-flex">
                    <div class="card card-list flex-fill">
                        <div class="card-header ">
                            <h4 class="card-title-dash">Your Upcoming Leave</h4>
                            <div class="dropdown">
                                <button class="btn btn-action " type="button" id="roomsBtn" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="roomsBtn">
                                    <a class="dropdown-item" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="leave-set">
                                <span class="leave-inactive">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Lorem ipsum moch cunchen</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Lorem ipsum moch cunchen</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Lorem ipsum moch cunchen</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Lorem ipsum moch cunchen</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Lorem ipsum moch cunchen</label>
                            </div>
                            <div class="leave-viewall">
                                <a href="leave.html">View all <img src="{{ asset('img/right-arrow.png') }}" class="ml-2"
                                        alt="arrow" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            {{-- TABLE --}}
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-titles">list familles</h2>
                        <div class="top-nav-search">
                        </div>
                        <form>
                            <input type="text" class="form-control" placeholder="">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table custom-table no-footer">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>

                                        <td>#</td>
                                        <td>{{ $user->firstName . ' ' . $user->lastName }}</td>
                                        {{-- <td>{{ $famille->lastName }}</td> --}}
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->type }}</td>
                                        {{-- <td>{{ $user->status }}</td> --}}
                                        <td class="tab-select">
                                            <select class="select">
                                                <option value="active">Completed</option>
                                                <option value="inactive">In Progress</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="actionset">
                                                <label><a class="action_label5"
                                                        href="{{ route('admin.edit-user', $user->id) }}">Edit <i
                                                            data-feather="edit"></i></a></label>
                                                <label>
                                                    <a class="action_label4" data-toggle="modal"
                                                        data-target="#delete">Delete <i
                                                            data-feather="trash-2"></i></a></label>

                                                {{-- <label
                                            ><a
                                              class="action_label4"
                                              data-toggle="modal"
                                              data-target="#delete"
                                              >Delete <i data-feather="trash-2"></i></a
                                          ></label> --}}
                                            </div>
                                        </td>



                                        {{-- <td >
                                        <form action="" method="Post">
                                            <a class="btn btn-primary flex-row" href="">modifier  <i
                                                data-feather="edit"></i></a>
                                                
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger flex-row">supprimer <i data-feather="trash-2"></i></button>
                                            </form>
                                        </td> --}}
                                        {{-- <a class="btn btn-warning flex-row" >Details</a> --}}
                                    </tr>
                                @endforeach

                                {{-- <tr>
                                    <td>
                                        <label>Monthly Review </label>
                                    </td>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{ asset('img/avatar-13.jpg')}}"
                                                    alt="profile" class="img-table" /></a>
                                            <label>Sean Black</label>
                                        </div>
                                    </td>
                                    <td>
                                        <label>05 Dec 2019 </label>
                                    </td>
                                    <td><label>07 Dec 2019 </label></td>
                                    <td class="tab-select">
                                        <select class="select">
                                            <option value="active">Completed</option>
                                            <option value="inactive">In Progress</option>
                                        </select>
                                    </td>
                                    <td> --}}
                                {{-- <div class="actionset">
                                            <label>
                                                <a class="action_label5" href="add-Review.html">Edit <i
                                                        data-feather="edit"></i></a></label>
                                            <label>
                                                <a class="action_label4" data-toggle="modal" data-target="#delete">Delete
                                                    <i data-feather="trash-2"></i></a>
                                                </label>
                                        </div>
                                    </td>
                                </tr> --}}
                                {{-- <tr>
                                    <td>
                                        <label>Employees Review </label>
                                    </td>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{ asset('img/avatar-16.jpg')}}"
                                                    alt="profile" class="img-table" /></a>
                                            <label>Linda Craver</label>
                                        </div>
                                    </td>
                                    <td>
                                        <label>05 Dec 2019 </label>
                                    </td>
                                    <td><label>07 Dec 2019 </label></td>
                                    <td class="tab-select inactive">
                                        <select class="select">
                                            <option value="active">In Progress</option>
                                            <option value="inactive">Completed</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="actionset">
                                            <label><a class="action_label5" href="add-Review.html">Edit <i
                                                        data-feather="edit"></i></a></label>
                                            <label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete
                                                    <i data-feather="trash-2"></i></a></label>
                                        </div>
                                    </td>
                                </tr> --}}
                                {{-- <tr>
                                    <td>
                                        <label>Employees Review </label>
                                    </td>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{ asset('img/avatar-17.jpg')}}"
                                                    alt="profile" class="img-table" /></a>
                                            <label>Cavani Sims</label>
                                        </div>
                                    </td>
                                    <td>
                                        <label>05 Dec 2019 </label>
                                    </td>
                                    <td><label>07 Dec 2019 </label></td>
                                    <td class="tab-select">
                                        <select class="select">
                                            <option value="active">Completed</option>
                                            <option value="inactive">In Progress</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="actionset">
                                            <label><a class="action_label5" href="add-Review.html">Edit <i
                                                        data-feather="edit"></i></a></label>
                                            <label><a class="action_label4" data-toggle="modal"
                                                    data-target="#delete">Delete <i
                                                        data-feather="trash-2"></i></a></label>
                                        </div>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- END TABLE --}}





            {{-- MODALS --}}

            {{-- END MODALS --}}


            {{-- <div class="row">
            <div class="col-xl-6 d-flex mobile-h">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Total Employees</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="invoice_chart"></div>
                        <div class="text-center text-muted">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-4">
                                        <p class="mb-2 text-truncate"><i
                                                class="fas fa-circle text-primary mr-1"></i> Business</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-4">
                                        <p class="mb-2 text-truncate"><i
                                                class="fas fa-circle text-success mr-1"></i> Testing</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-4">
                                        <p class="mb-2 text-truncate"><i
                                                class="fas fa-circle text-danger mr-1"></i> Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Total Salary By Unit</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sales_chart"></div>
                    </div>
                </div>
            </div>
        </div> --}}
            {{-- <div class="row">
            <div class="col-xl-6 col-sm-12 col-12 d-flex">
                <div class="card card-list flex-fill">
                    <div class="card-header ">
                        <h4 class="card-title">Total Salary By Unit</h4>
                    </div>
                    <div class="card-body">
                        <div class="team-list">
                            <div class="team-view">
                                <div class="team-img">
                                    <img src="assets/img/profiles/avatar-03.jpg" alt="avatar" />
                                </div>
                                <div class="team-content">
                                    <label>Maria Cotton</label>
                                    <span>PHP</span>
                                </div>
                            </div>
                            <div class="team-action">
                                <ul>
                                    <li><a><i data-feather="trash-2"></i></a></li>
                                    <li><a><i data-feather="edit-2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-list">
                            <div class="team-view">
                                <div class="team-img">
                                    <img src="{{ asset('img/favicon.png') }}" alt="avatar" />
                                </div>
                                <div class="team-content">
                                    <label>Linda Craver</label>
                                    <span>IOS</span>
                                </div>
                            </div>
                            <div class="team-action">
                                <ul>
                                    <li><a><i data-feather="trash-2"></i></a></li>
                                    <li><a><i data-feather="edit-2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-list">
                            <div class="team-view">
                                <div class="team-img">
                                    <img src="{{ asset('img/favicon.png') }}" alt="avatar" />
                                </div>
                                <div class="team-content">
                                    <label>Jenni Sims</label>
                                    <span>Android</span>
                                </div>
                            </div>
                            <div class="team-action">
                                <ul>
                                    <li><a><i data-feather="trash-2"></i></a></li>
                                    <li><a><i data-feather="edit-2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-list">
                            <div class="team-view">
                                <div class="team-img">
                                    <img src="assets/img/profiles/avatar-11.jpg" alt="avatar" />
                                </div>
                                <div class="team-content">
                                    <label>Danny</label>
                                    <span>Design</span>
                                </div>
                            </div>
                            <div class="team-action">
                                <ul>
                                    <li><a><i data-feather="trash-2"></i></a></li>
                                    <li><a><i data-feather="edit-2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-12 col-12 d-flex">
                <div class="card card-list flex-fill">
                    <div class="card-header">
                        <div class="">
                            <h4 class="card-title">Recent Activities</h3>
                        </div>
                    </div>
                    <div class="card-body dash-activity">
                        <div class="slimscroll activity_scroll">
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>2 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-05.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>3 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-07.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>4 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-08.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>5 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-09.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>6 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-10.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>2 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-12.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>3 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-set">
                                <div class="activity-img">
                                    <img src="assets/img/profiles/avatar-13.jpg" alt="avatar">
                                </div>
                                <div class="activity-content">
                                    <label>Lorem ipsum dolor sit amet,</label>
                                    <span>4 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="leave-viewall activit">
                            <a>View all <img src="assets/img/right-arrow.png" class="ml-2" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-12 col-12 d-flex">
                <div class="card card-list flex-fill">
                    <div class="card-header ">
                        <h4 class="card-title-dash">Your Upcoming Leave</h4>
                        <div class="dropdown">
                            <button class="btn btn-action " type="button" id="roomsBtn" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="roomsBtn">
                                <a class="dropdown-item" href="#">Action</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="leave-set">
                            <span class="leave-inactive">
                                <i class="fas fa-briefcase"></i>
                            </span>
                            <label>Mon, 16 Dec 2021</label>
                        </div>
                        <div class="leave-set">
                            <span class="leave-active">
                                <i class="fas fa-briefcase"></i>
                            </span>
                            <label>Fri, 20 Dec 2021</label>
                        </div>
                        <div class="leave-set">
                            <span class="leave-active">
                                <i class="fas fa-briefcase"></i>
                            </span>
                            <label>Wed, 25 Dec 2021</label>
                        </div>
                        <div class="leave-set">
                            <span class="leave-active">
                                <i class="fas fa-briefcase"></i>
                            </span>
                            <label>Fri, 27 Dec 2021</label>
                        </div>
                        <div class="leave-set">
                            <span class="leave-active">
                                <i class="fas fa-briefcase"></i>
                            </span>
                            <label>Tue, 31 Dec 2021</label>
                        </div>
                        <div class="leave-viewall">
                            <a href="leave.html">View all <img src="assets/img/right-arrow.png" class="ml-2"
                                    alt="arrow" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
        {{-- MODAL --}}
        <div class="customize_popup">
            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="staticBackdropLabels1"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                            <div class="modal-header text-centers border-0">
                                <h5 class="modal-title text-center" id="staticBackdropLabels1">
                                    Are You Sure Want to Delete?
                                </h5>
                            </div>
                            <div class="modal-footer text-centers">
                                <button type="submit" class="btn btn-primary">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- END MODAL --}}
    </div>










    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    you are Admin
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
