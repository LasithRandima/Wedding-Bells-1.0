<?php

namespace App\Http\Livewire;

use App\Models\ClientGuestList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Livewire\Component;

class GuestList extends Component
{

    public bool $hasConfirm;
    public $guestName, $contactNo, $email, $familyMembers, $drinkingBuddies, $group;

    public function mount() {
        $this->guestName = '';
        $this->contactNo = '';
        $this->email = '';
        $this->familyMembers = '';
        $this->drinkingBuddies = '';
        $this->group = '';
        $this->hasConfirm ='';

    }


    public function updated($field){
        $this->validateOnly($field,[
            'guestName' => 'required',
            'contactNo' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:client_guest_lists',
            'familyMembers' => 'required|numeric|integer',
        ]);
    }


    public function addGuests() {
        $create_date_time = Carbon::now()->toDateTimeString();

        $this->validate([
            'guestName' => 'required',
            // 'contactNo' => 'required|numeric|digits:10',
            'contactNo' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:client_guest_lists',
            'familyMembers' => 'required|numeric|integer',
        ]);

        ClientGuestList::create([
            'c_id' => AUTH::id(),
            'created_at' => $create_date_time,
            'guest_name' =>$this->guestName,
            'contact_no' =>$this->contactNo,
            'email' =>$this->email,
            'no_of_family_members' =>$this->familyMembers,
            'drinking_buddies_count'=>$this->drinkingBuddies,
            'group' =>$this->group,
            'status' =>$this->hasConfirm,

        ]);




        $this->reset('guestName');
        $this->reset('contactNo');
        $this->reset('email');
        $this->reset('familyMembers');
        $this->reset('drinkingBuddies');
        $this->reset('group');

        $this->emit('guestAdded');
        $this->emit('guestAdd');

        // $this->listBudgets = DB::table('client_budgets')->where('c_id', '=', AUTH::id())->orderBy('id','DESC')->get();
        // session()->flash('message', 'Budget listed successfully...');

        $this->dispatchBrowserEvent('toastr:info', [
            'message' => 'Guests Added successfully',
        ]);

    }


    public function render()
    {
        return view('livewire.guest-list');
    }
}
