@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.s-our-agriculture.style-3 {
    padding: 109px 0px 180px 0px;
}
</style>
@include('partials.breadcrumb')


<div class="main-content pb-0 pt-93 threed">
    
  <div class="container py-5">
  <div class="card shadow-lg border-0 rounded-3">
    <div class="card-body p-5">
      <h1 class="text-success mb-3 fs-1">Return & Refund Policy</h1>
      <p class="text-muted">Last updated: <strong>December 03, 2025</strong></p>

      <h5 class="mt-4">1. Returns</h5>
      <ul>
        <li>There is no refund in our website</li>
      </ul>

      <h5 class="mt-4">1. Contact Us</h5>
      <p>If you have questions about this Return & Refund Policy, please reach out to us:</p>
      <ul>
        <li>Email: <strong>{{ config('site.email1') }}</strong></li>
        <li>Address: <strong>{{ config('site.address1') }}</strong></li>
      </ul>
    </div>
  </div>
</div>



</div>
@endsection    