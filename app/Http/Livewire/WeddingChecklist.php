<?php

namespace App\Http\Livewire;

use App\Models\ClientChecklist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WeddingChecklist extends Component
{
    public $TentoTwelves = [];
    public $editedTentoTwelveIndex =null;
    public $editedTentoTwelveField =null;


    public $result =null;

    public $taskid;
    public $selectedtask;
    public bool $tasks_status;
    public bool $status;
    public $TentoTwelvePlus;
    public $allTasks;
    public $completedTasks;






    // public $SeventoNine =[];
    // public $editedSeventoNineIndex =null;
    // public $editedSeventoNineField =null;

    // public $FourtoSix=[];
    // public $editedFourtoSixIndex =null;
    // public $editedFourtoSixField =null;

    // public $TwotoThree=[];
    // public $editedTwotoThreeIndex =null;
    // public $editedTwotoThreeField =null;

    // public $LastMonth=[];
    // public $editedLastMonthIndex =null;
    // public $editedLastMonthField =null;

    // Public $TwoWeeks=[];
    // public $editedTwoWeeksIndex =null;
    // public $editedTwoWeeksField =null;

    // Public $LastWeek=[];
    // public $editedLastWeekIndex =null;
    // public $editedLastWeekField =null;

    // Public $LastDay=[];
    // public $editedLastDayIndex =null;
    // public $editedLastDayField =null;

    // public $AfterWedding=[];
    // public $editedAfterWeddingIndex =null;
    // public $editedAfterWeddingField =null;

    public $TaskList;
    public $TimePeriod;

    protected $listeners = ['taskAdded'];

public function mount(){
    // $tasklist = DB::select('SELECT * FROM client_checklists WHERE c_id = 28 ORDER by id DESC');
    // dd($tasklist);
    $this->TentoTwelves = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 10 to 12 months')->get()->toArray();
    $this->TentoTwelvePlus = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 10 to 12 months')->get();
    $this->SeventoNine = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 7 to 9 months')->get()->toArray();
    $this->FourtoSix = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 4 to 6 months')->get()->toArray();
    $this->TwotoThree = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 2 to 3 months')->get()->toArray();
    $this->LastMonth = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'The last month')->get()->toArray();
    $this->TwoWeeks = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', '2 weeks')->get()->toArray();
    $this->LastWeek = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'Last week')->get()->toArray();
    $this->LastDay = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'Last day')->get()->toArray();
    $this->AfterWedding = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'After the wedding')->get()->toArray();
    $this->TimePeriod = DB::table('client_checklists')->select('timing_period')->where('c_id', '=', AUTH::id())->groupBy('timing_period')->get();
    $this->TaskList = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->count();
    $this->allTasks = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->count();
    $this->completedTasks = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('task_status', '=', 1)->count();


}

// public function editTentoTwelve($tenToTwelveIndex){
//     $this->editedTentoTwelveIndex = $tenToTwelveIndex;
// }

public function editTentoTwelveField($tenToTwelveIndex, $fieldName){
    $this->editedTentoTwelveField = $tenToTwelveIndex.'.'.$fieldName;
}

// public function saveTentoTwelve($tenToTwelveIndex){
//     $TentoTwelve = $this->TentoTwelves[$tenToTwelveIndex] ?? NULL;
//     if(!is_Null($TentoTwelve)){
//         optional(ClientChecklist::find($TentoTwelve['id']))->update($TentoTwelve);
//     }

//     $this->editedTentoTwelveField = null;
//     $this->editedTentoTwelveIndex = null;
// }

public function createTentoTwelve($tenToTwelveIndex){
    $TentoTwelve = $this->TentoTwelves[$tenToTwelveIndex];
    $task = ClientChecklist::find($TentoTwelve['id']);
    $selectedtask = $task->task_status;
    // $tasks_status = DB::table('client_checklists')->where('id', '=', $selectedtask)->where('c_id', '=', AUTH::id())->get();
    // dd($selectedtask);

    if($selectedtask == 1){
        $status = 0;
    }elseif($selectedtask == 0){
        $status = 1;
    }




    optional(ClientChecklist::find($TentoTwelve['id'])->update(['task_status' => $status ]));
    $this->TentoTwelves = ClientChecklist::where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 10 to 12 months')->get();

    $this->emit('taskUpdated');
}

public function deleteTentoTwelve($tenToTwelveIndex){
    $TentoTwelve = $this->TentoTwelves[$tenToTwelveIndex];
    optional(ClientChecklist::find($TentoTwelve['id'])->delete($TentoTwelve));
    $this->TentoTwelves = ClientChecklist::where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 10 to 12 months')->get();
}


public function taskAdded(){
    $this->TentoTwelves = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('timing_period', '=', 'From 10 to 12 months')->get();
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
    $this->allTasks = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->count();
    $this->completedTasks = DB::table('client_checklists')->where('c_id', '=', AUTH::id())->where('task_status', '=', 1)->count();
}

    public function render()
    {
        return view('livewire.wedding-checklist', [
            'TentoTwelves' => $this->TentoTwelves,
            'SeventoNine' => $this->SeventoNine,
            'FourtoSix' => $this->FourtoSix,
            'TwotoThree' => $this->TwotoThree,
            'LastMonth' => $this->LastMonth,
            'TwoWeeks' => $this->TwoWeeks,
            'LastWeek' => $this->LastWeek,
            'LastDay' => $this->LastDay,
            'AfterWedding' => $this->AfterWedding,
        ]);
    }
}
