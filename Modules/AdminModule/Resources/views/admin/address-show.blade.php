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
                            <div class="row">
                                <div class="col-md-6 text-bold">Apartment Name</div>
                                <div class="col-md-6 text-bold">{{$address->apartment_name}}</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 text-bold">Total Flats</div>
                                <div class="col-md-6 text-bold">{{$address->total_flats}}</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 text-bold">Address</div>
                                <div class="col-md-6 text-bold">{{$address->address_1}}</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 text-bold">City</div>
                                <div class="col-md-6 text-bold">{{$address->city}}</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 text-bold">State</div>
                                <div class="col-md-6 text-bold">{{$address->state}}</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 text-bold">Pin</div>
                                <div class="col-md-6 text-bold">{{$address->pin}}</div>
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