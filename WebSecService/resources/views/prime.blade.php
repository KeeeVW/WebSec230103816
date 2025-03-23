@extends('layouts.master')
 @section('title', 'even Numbers')
 @section('content')
@php
    function isPrime($num) {
        if ($num <= 1) return false;
        if ($num == 2) return true;
        if ($num % 2 == 0) return false;
        for ($i = 3; $i <= sqrt($num); $i += 2) {
            if ($num % $i == 0) return false;
        }
        return true;
    }
@endphp

<div class="card">
  <div class="card-header">Prime Numbers</div>
  <div class="card-body" style="display: flex; flex-wrap: wrap; gap: 4px; padding: 12px;">
      @foreach (range(1, 100) as $i)
        <div style="
          width: 40px; height: 40px; 
          background-color: {{ isPrime($i) ? '#007bff' : '#6c757d' }}; 
          color: white; 
          display: flex; 
          justify-content: center; 
          align-items: center; 
          font-size: 14px; 
          border-radius: 6px;
          font-family: Arial, sans-serif;">
          {{ $i }}
        </div>
      @endforeach
  </div>
</div>
</body>
@endsection


