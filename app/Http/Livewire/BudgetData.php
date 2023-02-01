<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ClientBudget;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;




class BudgetData extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $budget;
    public $expanse;
    public $Category;
    public $vendorCategory;
    public $estimateCost;
    public $finalCost;
    public $advancePaid;
    public $advancePaidDate;
    // public $amounttoPaid;
    public $paymentDueDate;
    public $paidPersonName;
    // public $budgetlist;

    public bool $hasPaid;
    public $budget_id;


    // protected function rules()
    // {
    //     return [
    //         'expanse' => 'required',
    //         'category' => 'required',
    //         'estimateCost' => 'required|numeric|integer',
    //         'finalCost' => 'required|numeric|integer',
    //     ];
    // }

    // public function updated($field){
    //     $this->validateOnly($field);
    // }


    //     public function updateBudget(){

    //         $validatedData = $this->validate();

    //         ClientBudget::where('id', $this->budget_id)->update([
    //             'exp_name' => $validatedData['expanse'],
    //             'exp_category' => $validatedData['Category'],
    //             'estimated_cost' => $validatedData['estimateCost'],
    //             'final_cost' => $validatedData['finalCost'],
    //             'advance_paid' => $this->advancePaid,
    //             'advance_paid_date' => $this->advancePaidDate,
    //             'final_cost_paid_date' => $this->paymentDueDate,
    //             'paid_person_name' => $this->paidPersonName,
    //             'has_paid' => $this->hasPaid,
    //         ]);
    //         session()->flash('message', 'Item Updated Sucessfully');
    //         $this->resetInput();
    //         $this->dispatchBrowserEvent('close-modal');

    //     }

    public function updated($field){
        $this->validateOnly($field,[
            'expanse' => 'required',
            'estimateCost' => 'required|numeric|integer',
            'finalCost' => 'required|numeric|integer',
        ]);
    }

    public function updateBudget(){
        $create_date_time = Carbon::now()->toDateTimeString();
        $this->validate([
            'expanse' => 'required',
            'estimateCost' => 'required',
            'finalCost' => 'required',
        ]);

        ClientBudget::where('id', $this->budget_id)->update([
            'exp_name' =>$this->expanse,
            'exp_category' =>$this->Category,
            'estimated_cost' =>$this->estimateCost,
            'final_cost' =>$this->finalCost,
            'advance_paid'=>$this->advancePaid,
            'advance_paid_date' =>$this->advancePaidDate,
            'amount_to_be_paid' =>$this->finalCost - $this->advancePaid,
            'final_cost_paid_date' =>$this->paymentDueDate,
            'paid_person_name'=>$this->paidPersonName,
            'has_paid' =>$this->hasPaid,
            'updated_at' => $create_date_time,
        ]);
    }



        public function editBudget(int $id) {
        $budget = ClientBudget::find($id);

        if($budget){
            $this->budget_id = $budget->id;
            $this->expanse = $budget->exp_name;
            $this->Category = $budget->exp_category;
            $this->estimateCost = $budget->estimated_cost;
            $this->finalCost = $budget->final_cost;
            $this->advancePaid = $budget->advance_paid;
            $this->advancePaidDate = $budget->advance_paid_date;
            $this->paymentDueDate = $budget->final_cost_paid_date;
            $this->paidPersonName = $budget->paid_person_name;
            $this->hasPaid = $budget->has_paid;
        }else{
            return redirect()->to('/dashboard');
        }
    }


    public function closeModal(){
        $this->resetInput();
    }


    public function resetInput()
    {
    $this->expanse = '';
    $this->Category = '';
    $this->estimateCost = '';
    $this->finalCost = '';
    $this->advancePaid = '';
    $this->advancePaidDate = '';
    $this->paymentDueDate = '';
    $this->paidPersonName = '';
    $this->hasPaid = '';
    }


    public function render()
    {
        $budgets = ClientBudget::where('c_id', '=', AUTH::id())->orderBy('id','DESC')->paginate(5);
        return view('livewire.budget-data', ['budgets' => $budgets]);
    }
}
