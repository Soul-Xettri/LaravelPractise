@extends('layouts.main')
@push('title')
  <title>Home</title>   
@endpush
@section('main-section')
    <div class="text-center">
      <h3>This is home Page</h3>
      {{-- <h3>Welcome {!!$name ?? "user"!!}</h3>
    @isset($name)
        {{"The is name inputed "}}
    @endisset --}}

      {{-- @if ($name)
     {{ "name is not null"}} 
    @else
    {{"name is null"}}
    @endif --}}
    {{-- @unless ($name=="soul")
    {{"The user name is not soul"}}
@endunless
@for ($i = 0; $i < 10; $i++)
@if ($i == 5)
    @continue
@endif
    <h2>
      {{$i}}
    </h2>
@endfor
@php
    $i = 1;
@endphp
@while ($i<=10)
@if ($i==5)
    @break
@endif
    {{$i}}
@php
  $i++  
@endphp
@endwhile
<select>
@php
 $arr=[0,1,2,3,4,5,6,7,8,9,10]   
@endphp
@foreach ($arr as $key=> $i)
   <option value="{{$key}}">{{$i}}</option> 
@endforeach
</select> --}}
</div>
@endsection