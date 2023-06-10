<?php

namespace Modules\AdminModule\Http\Controllers\Api\V1\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Modules\BookingModule\Entities\Booking;
use Modules\ProviderManagement\Entities\Provider;
use Modules\ServiceManagement\Entities\Service;
use Modules\TransactionModule\Entities\Account;
use Modules\TransactionModule\Entities\Transaction;
use Modules\UserManagement\Entities\User;
use App\Models\Address;
use PhpParser\Node\Stmt\Return_;

class AddressController extends Controller
{
    protected Provider $provider;
    protected Account $account;
    protected $booking;
    protected $service;
    protected $user;
    protected $transaction;
    protected $channelList;
    protected $booking_details_amount;

    public function index(Request $request)
    {
        $address = Address::all();
        return view('adminmodule::admin.address',compact('address'));
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'apartment_name' => 'required',
            'total_flats' => 'required',
            'address_1' => 'required',
            'address_2' => 'required'
        ]);

        $address = new Address;

        $address->apartment_name = $request->apartment_name;
        $address->total_flats = $request->total_flats;
        $address->address_1 = $request->address_1;
        $address->address_2 = $request->address_2;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->pin = $request->pin;
        $address->country = $request->country;

        $address->save();

        return redirect()->back()->with('success', 'Data Inserted Successfully');
    }

    public function view($id){
        $address = Address::where('id',$id)->first();
        return view('adminmodule::admin.address-show',compact('address'));
    }

    public function update($id){
        $address = Address::where('id',$id)->first();
        return view('adminmodule::admin.address-edit',compact('address'));
    }

    public function edit (Request $request, $id)
    {
        $address = Address::find($id);
        $address->apartment_name = request('apartment_name');
        $address->total_flats = request('total_flats');
        $address->address_1 = request('address_1');
        $address->address_2 = request('address_2');
        $address->city = request('city');
        $address->state = request('state');
        $address->pin = request('pin');
        $address->country = request('country');
        $address->save();

        return redirect()->route('admin.address')->with('success','Data updated successfully');
    }

    public function destroy($id){
        address::find($id)->delete();
        return redirect()->route('admin.address')->with('success','Data deleted successfully');
    }
}
