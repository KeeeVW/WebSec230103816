@extends('layouts.master')
 @section('title', 'even Numbers')
 @section('content')
@php($j = 5)
<body>
 <div class="card m-4">
    <div class="card-header">Multiplication table of 5</div>
    <div class="card-body">
       <table>
       @php($j = 5)

    <table>
      @foreach (range(1, 10) as $i)
      <tr><td>{{$i}} * {{$j}}</td><td> = {{ $i * $j }}</td></li>    
      @endforeach
    </table>
  </div>
 </div>
@endsection
