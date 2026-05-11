<style type="text/css">
.details-title {
    padding: 10px;
    border-radius: 10px;
    background-image: linear-gradient(180deg, var(--theme-color-3), #0060399e);
    box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
}
.details-title h2 {
    color: #fff;
    font-size: 30px;
}
</style>
<div class="detail-sidebar" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
    <div class="detail-sidebar-inner">

        <div class="s-widget-wrap m-b-30">
            <div class="w-title">
                <h3>Knowledge Hub</h3>
                <div class="bar-wrap">
                    <div class="bar-1"></div>
                    <div class="bar-2"></div>
                </div>
            </div>

            <div class="detail-list">
                <ul>
                    <li><a href="{{ url('business-society') }}">Business & Society <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                    <li><a href="{{ url('individual-business-ethics') }}">Individual & Business Ethics <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                    <li><a href="{{ url('corporate-social-responsibility') }}">Corporate Social Responsibility (CSR) <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                    <li><a href="{{ url('ethical-theories') }}">Ethical Theories <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                    <li><a href="{{ url('stakeholder-management') }}">Stakeholder Management <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                    <li><a href="{{ url('sustainability-esg') }}">Sustainability & ESG <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                    <li><a href="{{ url('giving-voice-to-values') }}">Giving Voice to Values <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                </ul>
            </div>
        </div>

        <div class="s-widget-wrap">
            <div class="detail-contact text-center">
                <div class="thumb">
                    <img src="{{ asset('assets/images/contact-now.webp') }}" alt="shape">
                </div>

                <div class="icon-info-wrap">
                    <div class="icon-wrap">
                        <div class="icon">
                            <img src="assets/img/icons/icon-18.svg" alt="icon">
                        </div>
                        <div class="bar-wrap">
                            <div class="bar-1"></div>
                            <div class="bar-2"></div>
                        </div>
                    </div>

                    <div class="info">
                        <h3><a href="tel:+918744080405">{{ config('site.phone1') }}</a></h3>
                        <p>Need Help?</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>