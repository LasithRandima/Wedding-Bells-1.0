<div>

@if ($TaskList)
<div class="d-flex justify-content-between mt-3 text-warning">
    <h5 class="fw-bold">From 10 to 12 months</h5>
    <p class="fw-bold">Before April 2022</p>
  </div>
  <ul class="list-group mb-0">


@foreach ($TentoTwelves as $index => $TentoTwelve)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">

        @if($editedTentoTwelveIndex === $index || $editedTentoTwelveField === $index.'.task_name')
        {{-- <input type="text"
        @click.away="$wire.editedTentoTwelveField === '{{ $index }}.task_name' ? $wire.saveTentoTwelve({{ $index }}) : null"
        @keydown.enter="$wire.saveTentoTwelve({{ $index }})"
        wire:model.defer="TentoTwelves.{{ $index }}.task_name"
        /> --}}
            @if ($errors->has('TentoTwelves.'.$index.'.task_name') )
            <span class="badge rounded-pill bg-secondary me-1">{{ $errors->first('TentoTwelves.' .$index.'.task_name') }}</span>
            @endif
        @else

        @endif


        <div class="todo_cat align-items-center">
            <div class="d-flex" wire:click="editTentoTwelveField({{ $index }},'task_name')">
                <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createTentoTwelve({{ $index }})" {{ $TentoTwelve->task_status == 1 ? 'checked' : '' }} />
                @if ($TentoTwelve->task_status == 1)
                <s>{{ $TentoTwelve->task_name }}</s>
                @else
                {{ $TentoTwelve->task_name }}
                @endif
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <span class="badge rounded-pill bg-secondary me-1">{{ $TentoTwelve -> category }}</span>
        </div>
      </div>


<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteTentoTwelve({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach

</ul>

{{-- @if ($TaskList)
<div class="d-flex justify-content-between mt-3 text-warning">
    <h5 class="fw-bold">From 10 to 12 months</h5>
    <p class="fw-bold">Before April 2022</p>
  </div>
  <ul class="list-group mb-0">
@foreach ($TentoTwelvePlus as $TentoTwelveitem)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createTentoTwelve({{ $index }})" />
      <s>{{ $TentoTwelveitem-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $TentoTwelveitem-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteTentoTwelve({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach

</ul> --}}


<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">From 7 to 9 months</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($SeventoNines as $index => $SeventoNine)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">


                {{-- @if($editedSeventoNineIndex === $index || $editedSeventoNineField === $index.'.task_name')
                    @if ($errors->has('SeventoNines.'.$index.'.task_name') )
                    <span class="badge rounded-pill bg-secondary me-1">{{ $errors->first('SeventoNines.' .$index.'.task_name') }}</span>
                    @endif
                @else

                @endif --}}


                <div class="todo_cat align-items-center">
                <div class="d-flex">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createSeventoNine({{ $index }})" {{ $SeventoNine->task_status == 1 ? 'checked' : '' }}  />
                    @if ($SeventoNine->task_status == 1)
                    <s>{{ $SeventoNine->task_name }}</s>
                    @else
                    {{ $SeventoNine->task_name }}
                    @endif
                </div>

                    <div class="d-flex justify-content-start align-items-center">
                        <span class="badge rounded-pill bg-secondary me-1">{{ $SeventoNine -> category }}</span>
                    </div>
                </div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteSeventoNine({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach
</ul>



<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">From 4 to 6 months</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($FourtoSixs as $index => $FourtoSix)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
@if($editedFourtoSixIndex === $index || $editedFourtoSixField === $index.'.task_name')

@if ($errors->has('FourtoSixs.'.$index.'.task_name') )
<span class="badge rounded-pill bg-secondary me-1">{{ $errors->first('FourtoSixs.' .$index.'.task_name') }}</span>
@endif
@else

@endif


<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createFourtoSix({{ $index }})" {{ $FourtoSix->task_status == 1 ? 'checked' : '' }} />
        @if ($FourtoSix->task_status == 1)
                <s>{{ $FourtoSix->task_name }}</s>
                @else
                {{ $FourtoSix->task_name }}
        @endif
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $FourtoSix-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteFourtoSix({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach
</ul>




<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">From 2 to 3 months</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($TwotoThrees as $index => $TwotoThree)
    <li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
    style="background-color: #f4f6f7;">


    <div class="todo_cat align-items-center">
    <div class="d-flex">
        <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createTwotoThree({{ $index }})" {{ $TwotoThree->task_status == 1 ? 'checked' : '' }} />
        @if ($TwotoThree->task_status == 1)
        <s>{{ $TwotoThree->task_name }}</s>
        @else
        {{ $TwotoThree->task_name }}
        @endif
    </div>

        <div class="d-flex justify-content-start align-items-center">
            <span class="badge rounded-pill bg-secondary me-1">{{ $TwotoThree-> category }}</span>
        </div>
    </div>

    <button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteTwotoThree({{ $index }})">
    <i class="fas fa-times text-primary"></i>
    </button>
    </li>
@endforeach
</ul>





<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">Last Month</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($LastMonths as $index => $LastMonth)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createLastMonth({{ $index }})" {{ $LastMonth->task_status == 1 ? 'checked' : '' }}  />
      @if ($LastMonth->task_status == 1)
      <s>{{ $LastMonth->task_name }}</s>
      @else
      {{ $LastMonth->task_name }}
      @endif
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $LastMonth-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteLastMonth({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach
</ul>





<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">Two Weeks</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($TwoWeekss as $index => $TwoWeeks)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createTwoWeeks({{ $index }})" {{ $TwoWeeks->task_status == 1 ? 'checked' : '' }} />
      @if ($TwoWeeks->task_status == 1)
      <s>{{ $TwoWeeks->task_name }}</s>
      @else
      {{ $TwoWeeks->task_name }}
      @endif
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $TwoWeeks-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteTwoWeeks({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach
</ul>




<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">Last Week</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($LastWeeks as $index => $LastWeek)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createLastWeek({{ $index }})" {{ $LastWeek->task_status == 1 ? 'checked' : '' }}  />
      @if ($LastWeek->task_status == 1)
      <s>{{ $LastWeek->task_name }}</s>
      @else
      {{ $LastWeek->task_name }}
      @endif
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $LastWeek-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteLastWeek({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach
</ul>



<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">Last Day</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($LastDays as $index => $LastDay)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createLastDay({{ $index }})" {{ $LastDay->task_status == 1 ? 'checked' : '' }} />
      @if ($LastDay->task_status == 1)
      <s>{{ $LastDay->task_name }}</s>
      @else
      {{ $LastDay->task_name }}
      @endif
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $LastDay-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteLastDay({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach
</ul>



<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">After Wedding</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($AfterWeddings as $index => $AfterWedding)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." wire:click.prevents="createAfterWedding({{ $index }})" {{ $AfterWedding->task_status == 1 ? 'checked' : '' }} />
      @if ($AfterWedding->task_status == 1)
      <s>{{ $AfterWedding->task_name }}</s>
      @else
      {{ $AfterWedding->task_name }}
      @endif
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $AfterWedding-> category }}</span>
      </div>
</div>

<button type="button" class="butt"  data-mdb-toggle="tooltip" title="Remove item" wire:click.prevents="deleteAfterWedding({{ $index }})">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach
</ul>


{{-- @foreach ($TimePeriod as $times)
{{ $times -> timing_period }}
@endforeach --}}

@else
<div class="alert alert-danger text-center" role="alert">
    Seems like You haven't Checklist yet. Lets create One!
  </div>
@endif




</div>



