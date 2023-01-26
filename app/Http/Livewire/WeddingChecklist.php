<?php

namespace App\Http\Livewire;

use App\Models\ClientChecklist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WeddingChecklist extends Component
{
    public $TentoTwelve;
    public $SeventoNine;
    public $FourtoSix;
    public $TwotoThree;
    public $LastMonth;
    Public $TwoWeeks;
    Public $LastWeek;
    Public $LastDay;
    public $AfterWedding;
    public $TaskList;
    public $TimePeriod;

    protected $listeners = ['taskAdded'];

public function mount(){
    // $tasklist = DB::select('SELECT * FROM client_checklists WHERE c_id = 28 ORDER by id DESC');
    // dd($tasklist);
    $this->TentoTwelve = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 10 to 12 months')->get();
    $this->SeventoNine = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 7 to 9 months')->get();
    $this->FourtoSix = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 4 to 6 months')->get();
    $this->TwotoThree = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 2 to 3 months')->get();
    $this->LastMonth = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'The last month')->get();
    $this->TwoWeeks = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', '2 weeks')->get();
    $this->LastWeek = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'Last week')->get();
    $this->LastDay = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'Last day')->get();
    $this->AfterWedding = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'After the wedding')->get();
    $this->TimePeriod = DB::table('client_checklists')->select('timing_period')->where('c_id', '=', AUTH::id())->groupBy('timing_period')->get();
    $this->TaskList = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->count();

}


public function taskAdded(){
    $this->TentoTwelve = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 10 to 12 months')->get();
    $this->SeventoNine = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 7 to 9 months')->get();
    $this->FourtoSix = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 4 to 6 months')->get();
    $this->TwotoThree = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 2 to 3 months')->get();
    $this->LastMonth = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'The last month')->get();
    $this->TwoWeeks = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', '2 weeks')->get();
    $this->LastWeek = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'Last week')->get();
    $this->LastDay = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'Last day')->get();
    $this->AfterWedding = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'After the wedding')->get();
    $this->TimePeriod = DB::table('client_checklists')->select('timing_period')->where('c_id', '=', AUTH::id())->groupBy('timing_period')->get();
    $this->TaskList = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->count();
}

    public function render()
    {
        return view('livewire.wedding-checklist');
    }
}
