@extends('layouts.main')
@section('content')
<form class="mx-auto py-5" style="max-width: 32rem">
  <div class="form-group">
    <label for="addressForm" class="fw-bold">Your Address</label>
  </div>
  <div class="form-group">
    <select id="province" class="form-control">
      <option value="" disabled selected>Select Province</option>
      @foreach ($provincies as $provincy)
      <option value="{{ $provincy['id'] }}">{{ $provincy['name'] }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <select id="regency" class="form-control">
      <option value="" disabled selected>Select Regency</option>
    </select>
  </div>
  <div class="form-group">
    <select id="district" class="form-control">
      <option value="" disabled selected>Select District</option>
    </select>
  </div>
  <div class="form-group">
    <select id="village" class="form-control">
      <option value="" disabled selected>Select Village</option>
    </select>
  </div>
</form>
@endsection
@section('script')
<script src="{{ asset('js/register.js') }}"></script>
@endsection
