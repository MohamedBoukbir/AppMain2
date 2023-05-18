@extends('dashboard')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="breadcrumb-path mb-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Families</li>
                        </ul>
                        <h3>Update  Candidat</h3>
                    </div>
                </div>
                {{--  --}}
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-titles">
                                Basic Details <span>Organized and secure.</span>
                            </h2>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        {{-- ////////////////////////////from ///////////// --}}
                        <form action="{{route('Updatecandidat',$candidat->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf   
                          {{-- @method('PUT') --}}
                         <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="firstName" value="{{ $candidat->firstName }}" />
                                        @error('firstName')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="lastName"  value="{{ $candidat->lastName }}" />
                                        @error('lastName')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="email" value="{{ $candidat->email }}" />
                                        @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                       
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="password" value="{{ $candidat->password }}" />
                                        @error('password')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select  name="years_experience" class="select">
                                            <option value="years of experience">
                                                years of experience
                                            </option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                            <option value="3">+6</option>
                                        </select>
                                        @error('years_experience')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="religion" value="{{ $candidat->religion }}" />
                                        @error('religion')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>




                            
                        </div>
                    </div>
                </div>
                {{--  --}}

                {{--  --}}
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-titles">
                                Employment Details<span>Let everyone know the essentials so they're fully
                                    prepared.</span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="country" value="{{ $candidat->country }}" />
                                        @error('country')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                       
                                    </div>
                                </div>
                                {{-- <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option value="Select leave">
                                                Country of Employment
                                            </option>
                                            <option value="leave">country1</option>
                                            <option value="leave">country2</option>
                                        </select>



                                    </div>
                                </div> --}}
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" value="{{ $candidat->phone }}" />
                                        @error('phone')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="domain" value="{{ $candidat->domain }}" />
                                        @error('domain')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="address" value="{{ $candidat->address }}" />
                                        @error('address')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option value="Select leave">Permanent</option>
                                            <option value="leave">Freelancer</option>
                                        </select>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}


                {{--  --}}
                {{-- <div class="col-xl-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-titles">
                                Salary Details<span>Stored securely, only visible to Super Admins, Payroll
                                    Admins, and themselves.</span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option value="Select leave">Currency</option>
                                            <option value="leave">$</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option value="Select leave">Frequency</option>
                                            <option value="leave">Annualy</option>
                                            <option value="leave">Monthly</option>
                                            <option value="leave">Weekly</option>
                                            <option value="leave">Daily</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Start Date" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12">
                            <div class="form-btn">
                                {{-- ////////////////from///////// --}}

                                
                                   
                                    <button type="submit" class="btn btn-primary ml-3"> Update </button>
                                    {{-- <a href="submit" class="btn btn-apply w-auto">Add Family</a> --}}
                                </form>
                                {{-- <a href="#" class="btn btn-apply w-auto">Add Family</a> --}}
                                <a href="#" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  --}}
            </div>
        </div>
    </div>
@endsection
