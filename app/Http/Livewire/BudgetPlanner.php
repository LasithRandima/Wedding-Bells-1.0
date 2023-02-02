<?php

namespace App\Http\Livewire;

use App\Models\ClientBudget;
use App\Models\ClientCapital;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Livewire\Component;

class BudgetPlanner extends Component
{

public bool $hasPaid;
public $cid;
public $budgetLine;
public $expanse;
public $Category;
public $vendorCategory;
public $estimateCost;
public $finalCost;
public $advancePaid;
public $advancePaidDate;
public $amounttoPaid;
public $paymentDueDate;
public $paidPersonName;
public $budgetlist;
public $budget_id;
public $listBudgets;


public function mount() {
    $this->budgetLine = '';

    $this->hasPaid = '';
    $this->expanse = '';
    $this->Category = '';
    $this->estimateCost = '';
    $this->finalCost = '';
    $this->advancePaid = '';
    $this->advancePaidDate = '';
    $this->amounttoPaid = '';
    $this->paymentDueDate = '';
    $this->paidPersonName = '';

    $this->vendorCategory = DB::table('vendor_categories')->get();
    // $this->budgetlist = DB::table('client_budgets')->get();
    // $this->listbudget = DB::table('client_budgets')->where('c_id', '=', AUTH::id())->get();

}



public function updated($field){
    $this->validateOnly($field,[
        'budgetLine' => 'required|numeric|integer',
        'expanse' => 'required',
        'estimateCost' => 'required|numeric|integer',
        'finalCost' => 'required|numeric|integer',
    ]);
}


public function addCapital() {
    $create_date_time = Carbon::now()->toDateTimeString();

    $this->validate([
        'budgetLine' => 'required|numeric|integer',
    ]);

    ClientCapital::create([
        'c_id' => AUTH::id(),
        'created_at' => $create_date_time,
        'budget' =>$this->budgetLine,
    ]);




    $this->reset('budgetLine');



    // $this->emit('taskAdded');
    // $this->emit('taskAdding');
    // $this->emit('itemAdding');

}



  public function addBudget() {
        $create_date_time = Carbon::now()->toDateTimeString();

        $this->validate([
            'expanse' => 'required',
            'estimateCost' => 'required',
            'finalCost' => 'required',
        ]);

        ClientBudget::create([
            'has_paid' =>$this->hasPaid,
            'c_id' => AUTH::id(),
            'created_at' => $create_date_time,
            'exp_name' =>$this->expanse,
            'exp_category' =>$this->Category,
            'estimated_cost' =>$this->estimateCost,
            'final_cost' =>$this->finalCost,
            'advance_paid'=>$this->advancePaid,
            'advance_paid_date' =>$this->advancePaidDate,
            'amount_to_be_paid' =>$this->finalCost - $this->advancePaid,
            'final_cost_paid_date' =>$this->paymentDueDate,
            'paid_person_name'=>$this->paidPersonName,
        ]);




        $this->reset('expanse');
        $this->reset('estimateCost');
        $this->reset('finalCost');
        $this->reset('advancePaid');
        $this->reset('advancePaidDate');
        $this->reset('paymentDueDate');
        $this->reset('paidPersonName');
        $this->reset('Category');


        // $this->listBudgets = DB::table('client_budgets')->where('c_id', '=', AUTH::id())->orderBy('id','DESC')->get();
        // session()->flash('message', 'Budget listed successfully...');

        $this->dispatchBrowserEvent('toastr:info', [
            'message' => 'Budget listed successfully',
        ]);

        $this->emit('budgetAdd');

    }






    public function render()
    {
        return view('livewire.budget-planner');
    }
}
