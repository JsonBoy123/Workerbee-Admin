@extends('adminmodule::layouts.master')

@section('title',translate('address'))

@push('css_or_js')

@endpush

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-wrap mb-3">
                    <h2 class="page-title">{{translate('Address')}}</h2>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>Success !</strong> {{ session('success') }}
                            </div>
                            @endif
                        </div>
                        <form action="{{url('admin/address_store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row gx-2 mt-2">
                                <div class="col-md-12">
                                    <div class="radius-10 h-100">
                                        <div class="card-body">
                                            <h4 class="c1 mb-20">{{translate('Information')}}</h4>
                                            <div class="row gx-2">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="apartment_name" value="{{ auth()->user()->apartment_name }}" placeholder="{{translate('Apartment_Name')}}">
                                                        <label>{{translate('Apartment Name')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="number" class="form-control" name="total_flats" value="{{ auth()->user()->total_flats }}" placeholder="{{translate('Total_Flats')}}">
                                                        <label>{{translate('Total Flats')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="address_1" value="{{ auth()->user()->address_1 }}" placeholder="{{translate('Address_1')}}">
                                                        <label>{{translate('Address 1')}}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gx-2">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="address_2" value="{{ auth()->user()->address_2 }}" placeholder="{{translate('Address_2')}}">
                                                        <label>{{translate('Address 2')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="city" value="{{ auth()->user()->city }}" placeholder="{{translate('City')}}">
                                                        <label>{{translate('City')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="state" value="{{ auth()->user()->state }}" placeholder="{{translate('State')}}">
                                                        <label>{{translate('State')}}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gx-2">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="number" class="form-control" name="pin" value="{{ auth()->user()->pin }}" placeholder="{{translate('Pin')}}">
                                                        <label>{{translate('Pin')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="country" value="{{ auth()->user()->country }}" placeholder="{{translate('Country')}}">
                                                        <label>{{translate('Country')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-4 flex-wrap justify-content-end mt-20">
                                <button type="reset" class="btn btn--secondary">{{translate('Reset')}}</button>
                                <button type="submit" class="btn btn--primary demo_check">{{translate('submit')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="page-title-wrap mb-3">
                            <h2 class="page-title">{{translate('Address_List')}}</h2>
                        </div>

                        <!-- <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom mx-lg-4 mb-10 gap-3">
                            <ul class="nav nav--tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url()->current()}}?status=all">{{translate('All')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url()->current()}}?status=active">{{translate('Active')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url()->current()}}?status=inactive">{{translate('Inactive')}}</a>
                                </li>
                            </ul>
                        </div> -->

                        <div class="tab-content">
                            <div class="">
                                <!-- <div class="data-table-top d-flex flex-wrap gap-10 justify-content-between">

                                    <form action="#" class="search-form search-form_style-two" method="POST">
                                        @csrf
                                        <div class="input-group search-form__input_group">
                                            <span class="search-form__icon">
                                                <span class="material-icons">search</span>
                                            </span>
                                            <input type="search" class="theme-input-style search-form__input" value="" name="search" placeholder="{{translate('search_here')}}">
                                        </div>
                                        <button type="submit" class="btn btn--primary">{{translate('search')}}</button>
                                    </form>

                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn--secondary text-capitalize dropdown-toggle" data-bs-toggle="dropdown">
                                                <span class="material-icons">file_download</span> {{translate('download')}}
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        {{translate('excel')}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div> -->

                                <div class="table-responsive">
                                    <table id="example" class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th>{{translate('SL')}}</th>
                                                <th>{{translate('Apartment Name')}}</th>
                                                <th>{{translate('Total Flats')}}</th>
                                                <th>{{translate('Address')}}</th>
                                                <th>{{translate('City')}}</th>
                                                <th>{{translate('State')}}</th>
                                                <th>{{translate('Pin')}}</th>
                                                <th>{{translate('Action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($address as $addresss)
                                            <tr>
                                                <td>{{$addresss->id}}</td>
                                                <td>{{$addresss->apartment_name}}</td>
                                                <td>{{$addresss->total_flats}}</td>
                                                <td>{{$addresss->address_1}}</td>
                                                <td>{{$addresss->city}}</td>
                                                <td>{{$addresss->state}}</td>
                                                <td>{{$addresss->pin}}</td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="{{url('admin/address_edit',$addresss->id )}}" class="table-actions_edit">
                                                            <span class="material-icons">edit</span>
                                                        </a>
                                                        <a href="{{url('admin/address_show',$addresss->id )}}" class="table-actions_view">
                                                            <span class="material-icons">visibility</span>
                                                        </a>
                                                        <a href="{{url('admin/address_delete',$addresss->id)}}"  onclick="form_alert('delete')" class="table-actions_delete bg-transparent border-0 p-0">
                                                        <span class="material-icons">delete</span>
                                                        </a>
                                                    </div>
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
        </div>
    </div>
</div>

@endsection

@push('script')

@endpush