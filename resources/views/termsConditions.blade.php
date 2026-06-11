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
                <p class="text-muted">
                    Last updated: <strong>May 23, 2026</strong>
                </p>

                <p>
                    Welcome to <strong>Visawizer Education & Migration Services</strong>. 
                    By accessing or using our website 
                    <strong>https://visawizer.com.au</strong> and our services, you agree 
                    to comply with and be bound by the following Terms & Conditions. 
                    Please read them carefully before using our website or engaging our services.
                </p>

                <h5 class="mt-4">1. About Our Services</h5>
                <p>
                    Visawizer Education & Migration Services provides consultation and support 
                    services related to Australian education and migration pathways. 
                    Our services may include:
                </p>

                <ul>
                    <li>Student Visa Assistance</li>
                    <li>General Skilled Migration</li>
                    <li>Temporary Graduate Visas</li>
                    <li>Partner & Parent Visas</li>
                    <li>Employer Sponsored Visas</li>
                    <li>Education Admissions & Counseling</li>
                    <li>Migration Consultation Services</li>
                </ul>

                <p>
                    All immigration outcomes are subject to the rules, regulations, and final 
                    decisions made by the Australian Government and relevant authorities.
                </p>

                <h5 class="mt-4">2. Use of Website</h5>
                <ul>
                    <li>
                        You must use this website only for lawful purposes.
                    </li>
                    <li>
                        You agree not to misuse, copy, hack, or disrupt the functionality 
                        of this website.
                    </li>
                    <li>
                        Any information submitted by you must be accurate and complete.
                    </li>
                    <li>
                        We reserve the right to restrict or terminate access to users who 
                        violate these terms.
                    </li>
                </ul>

                <h5 class="mt-4">3. Consultation & Migration Advice</h5>
                <ul>
                    <li>
                        Information provided on this website is for general informational purposes only.
                    </li>
                    <li>
                        Migration laws and visa policies may change at any time without notice.
                    </li>
                    <li>
                        We do not guarantee visa approval, admission confirmation, or migration outcomes.
                    </li>
                    <li>
                        Final decisions are made solely by the Department of Home Affairs, Australia, 
                        educational institutions, or other relevant authorities.
                    </li>
                </ul>

                <h5 class="mt-4">4. Fees & Payments</h5>
                <ul>
                    <li>
                        All professional fees, service charges, and applicable government charges 
                        will be communicated before service commencement.
                    </li>
                    <li>
                        Payments made for consultation or processing services may be non-refundable 
                        unless otherwise agreed in writing.
                    </li>
                    <li>
                        Clients are responsible for paying applicable visa application fees, 
                        medical costs, insurance, tuition fees, and other third-party charges.
                    </li>
                </ul>

                <h5 class="mt-4">5. Client Responsibilities</h5>
                <ul>
                    <li>
                        You must provide genuine, accurate, and complete documents and information.
                    </li>
                    <li>
                        Submission of false, misleading, or fraudulent information may result 
                        in refusal of services or reporting to relevant authorities.
                    </li>
                    <li>
                        You are responsible for responding to requests for documents or updates 
                        within required timelines.
                    </li>
                </ul>

                <h5 class="mt-4">6. Intellectual Property</h5>
                <p>
                    All content on this website, including logos, graphics, text, designs, 
                    and materials, is the property of 
                    <strong>Visawizer Education & Migration Services</strong> and is protected 
                    under applicable copyright and intellectual property laws.
                </p>

                <p>
                    You may not reproduce, distribute, modify, or reuse any content without 
                    prior written permission.
                </p>

                <h5 class="mt-4">7. Third-Party Links</h5>
                <p>
                    Our website may contain links to third-party websites or external resources. 
                    We are not responsible for the content, privacy practices, or accuracy 
                    of information on such websites.
                </p>

                <h5 class="mt-4">8. Limitation of Liability</h5>
                <p>
                    Visawizer Education & Migration Services shall not be held liable for any 
                    direct, indirect, incidental, or consequential loss arising from:
                </p>

                <ul>
                    <li>Use of our website or services</li>
                    <li>Visa refusal or application delays</li>
                    <li>Changes in immigration laws or policies</li>
                    <li>Actions taken by third-party institutions or authorities</li>
                </ul>

                <h5 class="mt-4">9. Privacy</h5>
                <p>
                    By using our services, you consent to the collection and use of your 
                    information in accordance with our Privacy Policy.
                </p>

                <h5 class="mt-4">10. Changes to Terms</h5>
                <p>
                    We reserve the right to modify or update these Terms & Conditions at any time. 
                    Continued use of our website and services after changes are posted constitutes 
                    acceptance of the updated terms.
                </p>

                <h5 class="mt-4">11. Contact Us</h5>

                <p>
                    If you have any questions regarding these Terms & Conditions, please contact us:
                </p>

                <ul>
                    <li>
                        Email: <strong>{{ config('site.email1') }}</strong>
                    </li>
                    <li>
                        Address: <strong>{{ config('site.address1') }}</strong>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</div>

@endsection