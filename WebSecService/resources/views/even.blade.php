@extends('layouts.master')
 @section('title', 'even Numbers')
 @section('content')
    <div class="card">
      <div class="card-header">Even Numbers</div>
      <div class="card-body" style="display: flex; flex-wrap: wrap; gap: 5px; padding: 12px;">
          @foreach (range(1, 100) as $i)
            <div style="
              width: 30px; height: 30px; 
              background-color: {{ $i % 2 == 0 ? '#007bff' : '#6c757d' }}; 
              color: white; 
              display: flex; 
              justify-content: center; 
              align-items: center; 
              border-radius: 6px;
              font-family: Arial, sans-serif;">
              {{ $i }}
            </div>
          @endforeach
      </div>
    </div>
@endsection