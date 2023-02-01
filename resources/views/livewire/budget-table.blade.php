<?php
use App\Models\ClientBudget;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

$Categories = DB::table('vendor_categories')->get();
$client = AUTH::id();
$capital = DB::scalar("select budget from client_capitals where c_id = '$client'");
// $listbudget = DB::table('client_budgets')->where('c_id', '=', AUTH::id())->get();

    // $listing = ClientBudget::where('c_id', '=', AUTH::id())->orderBy('id','DESC')->get();
    // $listBudgets = ClientBudget::where('c_id', '=', AUTH::id())->orderBy('id','DESC')->paginate(5);
    // $listBudgets = ClientBudget::where('c_id', '=', AUTH::id())->orderBy('id','DESC')->get();
?>

@include('livewire.budgetmodal')

<div>
    <div class="hero">

        @if (session()->has('message'))
            <h5 class="alert alert-sucess">{{ session('message') }}</h5>
        @endif

    <div class="container mt-3" style="overflow-x: scroll;">
        <div>
            <table class="table table-striped text-white">
                <thead>
                  <tr>
                    <th scope="col">Expanse</th>
                    <th scope="col">category</th>
                    <th scope="col">Estimate Cost</th>
                    <th scope="col">Final Cost</th>
                    <th scope="col">Advance Paid</th>
                    <th scope="col">Advance paid date</th>
                    <th scope="col">Amount To Paid</th>
                    <th scope="col">Final Cost paid_date</th>
                    <th scope="col">Paid Person Name</th>
                    <th scope="col">Has Paid</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @forelse($listBudgets as $lists)

                    <tr>
                        <th scope="row">{{ $lists -> exp_name }}</th>
                        <td>{{ $lists -> exp_category }}</td>
                        <td>{{ $lists -> estimated_cost }}</td>
                        <td>{{ $lists -> final_cost }}</td>
                        <td>{{ $lists -> advance_paid }}</td>
                        <td>{{ $lists -> advance_paid_date }}</td>
                        <td>{{ $lists -> amount_to_be_paid }}</td>
                        <td>{{ $lists -> final_cost_paid_date }}</td>
                        <td>{{ $lists -> paid_person_name }}</td>
                        <td><input type="checkbox" id="customSwitch1" {{ $lists -> has_paid ? 'checked' : ''}}  disabled></td>
                        <td>
                        <div class="d-flex">
                                <button type="button" wire:click="editBudget( {{$lists -> id}} )" class="btn btn-primary" data-toggle="modal" data-target="#budgetModal" ><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-danger mx-2"><i class="fas fa-trash-alt"></i></button></td>
                        </div>
                      </tr>

                      @empty
                      <tr>
                        <td colspan="11" class="text-center"> No Record Found</td>
                      </tr>
                    @endforelse


                </tbody>
              </table>

            </div>

        </div>

        <div class="my-3">
            {{ $listBudgets->links() }}

        </div>





</div>

</div>

</div>

