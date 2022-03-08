@extends('layouts.main')
@section('content')
<form class="mx-auto py-5" style="max-width: 32rem">
  <h5>Subscribe to our newsletter</h5>
  <p>Monthly digest of whats new and exciting from us.</p>
  <div class="d-flex w-100 gap-2 position-relative">
    <label for="newsletter1" class="visually-hidden">Email address</label>
    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
    <div id="message" class="d-none position-absolute" style="font-size: .9rem; bottom: -70%"></div>
    <button class="btn btn-primary" type="button" id="submit">Subscribe</button>
  </div>
</form>
@endsection
@section('script')
<script src="{{ asset('js/newsletter.js') }}"></script>
@endsection
