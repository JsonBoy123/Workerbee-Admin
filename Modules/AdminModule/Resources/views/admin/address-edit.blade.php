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
                        <form action="{{url('admin/address_data_edit',$address->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gx-2 mt-2">
                                <div class="col-md-12">
                                    <div class="radius-10 h-100">
                                        <div class="card-body">
                                            <h4 class="c1 mb-20">{{translate('Update Information')}}</h4>
                                            <div class="row gx-2">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="apartment_name" value="{{ $address->apartment_name }}" placeholder="{{translate('Apartment_Name')}}">
                                                        <label>{{translate('Apartment Name')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="number" class="form-control" name="total_flats" value="{{ $address->total_flats }}" placeholder="{{translate('Total_Flats')}}">
                                                        <label>{{translate('Total Flats')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="address_1" value="{{ $address->address_1 }}" placeholder="{{translate('Address_1')}}">
                                                        <label>{{translate('Address 1')}}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gx-2">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="address_2" value="{{ $address->address_2 }}" placeholder="{{translate('Address_2')}}">
                                                        <label>{{translate('Address 2')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="city" value="{{ $address->city }}" placeholder="{{translate('City')}}">
                                                        <label>{{translate('City')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="state" value="{{ $address->state }}" placeholder="{{translate('State')}}">
                                                        <label>{{translate('State')}}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gx-2">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="number" class="form-control" name="pin" value="{{ $address->pin }}" placeholder="{{translate('Pin')}}">
                                                        <label>{{translate('Pin')}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-30">
                                                        <input type="text" class="form-control" name="country" value="{{ $address->country }}" placeholder="{{translate('Country')}}">
                                                        <label>{{translate('Country')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-4 flex-wrap justify-content-end mt-20">
                                <button type="submit" class="btn btn--primary demo_check">{{translate('update')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

@endpush