<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

@if ($TaskList)
<div class="d-flex justify-content-between mt-3 text-warning">
    <h5 class="fw-bold">From 10 to 12 months</h5>
    <p class="fw-bold">Before April 2022</p>
  </div>
  <ul class="list-group mb-0">
@foreach ($TentoTwelves as $index => $TentoTwelve)
{{-- {{ var_dump($TentoTwelve->task_name); }} --}}
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">

        @if($editedTentoTwelveIndex === $index || $editedTentoTwelveField === $index.'.task_name')
        <input type="text"
        @click.away="$wire.editedTentoTwelveField === '{{ $index }}.task_name' ? $wire.saveTentoTwelve({{ $index }}) : null"
        @keydown.enter="$wire.saveTentoTwelve({{ $index }})"
        wire:model.defer="tentoTwelves.{{ $index }}.task_name"
        />
            @if ($errors->has('TentoTwelves.'.$index.'.task_name') )
            <span class="badge rounded-pill bg-secondary me-1">{{ $errors->first('TentoTwelves.' .$index.'.task_name') }}</span>
            @endif
        @else
        <div class="todo_cat align-items-center">
            <div class="d-flex" wire:click="editTentoTwelveField({{ $index }}, 'task_name')">
                <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                {{ $TentoTwelve->task_name }}
        </div>
@endif



      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $TentoTwelve-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
  <i class="fas fa-times text-primary"></i>
</button>
</li>
@endforeach

</ul>

<div class="d-flex justify-content-between mt-3 text-warning">
<h5 class="fw-bold">From 7 to 9 months</h5>
<p class="fw-bold">Before April 2022</p>
</div>
<ul class="list-group mb-0">
@foreach ($SeventoNine as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
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
@foreach ($FourtoSix as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
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
@foreach ($TwotoThree as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
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
@foreach ($LastMonth as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
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
@foreach ($TwoWeeks as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
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
@foreach ($LastWeek  as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
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
@foreach ($LastDay  as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt" data-mdb-toggle="tooltip" title="Remove item">
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
@foreach ($AfterWedding as $item)
<li class="list-group-item d-flex justify-content-between align-items-center border-1 mb-0"
style="background-color: #f4f6f7;">
<div class="todo_cat align-items-center">
  <div class="d-flex">
      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
      <s>{{ $item-> task_name }}</s>
  </div>

      <div class="d-flex justify-content-start align-items-center">
          <span class="badge rounded-pill bg-secondary me-1">{{ $item-> category }}</span>
      </div>
</div>

<button type="button" class="butt"  data-mdb-toggle="tooltip" title="Remove item">
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


