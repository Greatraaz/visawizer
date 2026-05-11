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
      <h1 class="text-success mb-3 fs-1">Terms & Conditions</h1>
      <p class="text-muted">Last updated: <strong>December 03, 2025</strong></p>

      <p>Welcome to Evolvia Consultants and Advisors OPC Pvt Ltd By accessing or using our website <strong>https://ethics4work.com</strong> and our services, you agree to comply with and be bound by the following Terms & Conditions. Please read them carefully.</p>

      <h5 class="mt-4">1. Use of Website</h5>
      <ul>
        <li>You must be at least 18 years old to use our website and services.</li>
        <li>You agree to use our website only for lawful purposes and not for fraudulent or harmful activities.</li>
        <li>We reserve the right to restrict or terminate your access if you violate these terms.</li>
      </ul>

      <h5 class="mt-4">2. Products & Services</h5>
      <ul>
        <li>All product descriptions, images, and prices are subject to change without notice.</li>
        <li>We make every effort to ensure accuracy, but errors may occur.</li>
        <li>Availability of products is not guaranteed and may vary.</li>
      </ul>

      <h5 class="mt-4">3. Orders & Payments</h5>
      <ul>
        <li>By placing an order, you agree to provide accurate and complete information.</li>
        <li>All payments must be made through the approved payment methods on our website.</li>
        <li>We reserve the right to cancel any order at our discretion.</li>
      </ul>

      <h5 class="mt-4">4. Intellectual Property</h5>
      <p>All content on this website, including logos, images, and text, is the property of Evolvia Consultants and Advisors OPC Pvt Ltd and is protected under copyright laws. You may not copy, reproduce, or use any content without written permission.</p>

      <h5 class="mt-4">5. Limitation of Liability</h5>
      <p>Evolvia Consultants and Advisors OPC Pvt Ltd is not liable for any direct, indirect, incidental, or consequential damages arising from the use of our website or products.</p>

      <h5 class="mt-4">6. Third-Party Links</h5>
      <p>Our website may include links to third-party websites. We are not responsible for their content, policies, or practices.</p>

      <h5 class="mt-4">7. Changes to Terms</h5>
      <p>We may update these Terms & Conditions at any time. Continued use of our website indicates acceptance of the updated terms.</p>

      <h5 class="mt-4">8. Contact Us</h5>
      <p>If you have questions about these Terms & Conditions, please contact us:</p>
      <ul>
        <li>Email: <strong>{{ config('site.email1') }}</strong></li>
        <li>Address: <strong>{{ config('site.address1') }}</strong></li>
      </ul>
    </div>
  </div>
</div>

</div>
@endsection    