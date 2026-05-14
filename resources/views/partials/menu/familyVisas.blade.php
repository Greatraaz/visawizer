<style>
    .family-mega-menu{
        background: #fff;
        padding: 20px;
        box-shadow: 0 15px 45px rgba(0,0,0,0.08);
        overflow: hidden;
    }

    .family-mega-menu .mega-title{
        font-size: 18px;
        font-weight: 700;
        color: #66003f;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }

    .family-mega-menu .mega-title:after{
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 45px;
        height: 3px;
        background: #66003f;
        border-radius: 6px;
    }

    .family-mega-menu .visa-list{
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .family-mega-menu .visa-list li{
        margin-bottom: 10px;
        width: 100%;
    }

    .family-mega-menu .visa-list li a{
        text-decoration: none;
        color: #333;
        font-size: 14px;
        font-weight: 500;
        padding: 10px 14px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
        background: #fafafa;
        justify-content: start;
    }

    .family-mega-menu .visa-list li a i{
        width: 34px;
        height: 34px;
        min-width: 34px;
        border-radius: 4px;
        background: rgba(102,0,63,0.08);
        color: #66003f;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
        transition: all 0.35s ease;
        font-size: 13px;
    }

    .family-mega-menu .visa-list li a:hover{
        background: #66003f;
        color: #fff;
        transform: translateX(6px);
        box-shadow: 0 10px 25px rgba(102,0,63,0.25);
    }

    .family-mega-menu .visa-list li a:hover i{
        background: #fff;
        color: #66003f;
        transform: rotate(10deg) scale(1.08);
    }

    .family-promo-card{
        background: linear-gradient(135deg,#66003f,#8a0055);
        border-radius: 6px;
        padding: 28px;
        height: 100%;
        position: relative;
        overflow: hidden;
        color: #fff;
        min-height: 100%;
    }

    .family-promo-card:before{
        content: "";
        position: absolute;
        right: -60px;
        top: -60px;
        width: 180px;
        height: 180px;
        background: rgba(255,255,255,0.08);
        border-radius: 6px;
    }

    .family-promo-card:after{
        content: "";
        position: absolute;
        left: -40px;
        bottom: -40px;
        width: 130px;
        height: 130px;
        background: rgba(255,255,255,0.06);
        border-radius: 6px;
    }

    .family-promo-card img{
        width: 100%;
        border-radius: 6px;
        margin-bottom: 22px;
        object-fit: cover;
        height: 180px;
    }

    .family-promo-card h3{
        font-size: 28px;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 15px;
        position: relative;
        z-index: 2;
    }

    .family-promo-card p{
        color: rgba(255,255,255,0.88);
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 24px;
        position: relative;
        z-index: 2;
    }

    .family-promo-card .btn-family{
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #fff;
        color: #66003f;
        padding: 14px 24px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.35s ease;
        position: relative;
        z-index: 2;
    }

    .family-promo-card .btn-family:hover{
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.2);
        background: #f5f5f5;
    }

    .family-mega-menu .column-box{
        padding-right: 10px;
    }

    @media(max-width:991px){
        .family-mega-menu{
            padding: 25px;
        }

        .family-promo-card{
            margin-top: 25px;
        }
    }
</style>

<div class="family-mega-menu">
    <div class="row g-4">

        <!-- Column 1 -->
        <div class="col-lg-2 column-box">
            <h5 class="mega-title">Partner Visas</h5>

            <ul class="visa-list">
                <li>
                    <a href="{{ url('partner-visa-subclass-820-801') }}">
                        <i class="fa fa-heart"></i>
                        Partner Visa (820/801)
                    </a>
                </li>

                <li>
                    <a href="{{ url('partner-visa-subclass-309-100') }}">
                        <i class="fa fa-ring"></i>
                        Partner Visa (309/100)
                    </a>
                </li>

                <li>
                    <a href="{{ url('prospective-marriage-visa-subclass-300') }}">
                        <i class="fa fa-user-group"></i>
                        Prospective Marriage Visa (300)
                    </a>
                </li>
            </ul>
        </div>

        <!-- Column 2 -->
        <div class="col-lg-2 column-box">
            <h5 class="mega-title">Parent Visas I</h5>

            <ul class="visa-list">
                <li>
                    <a href="{{ url('parents-visa-subclass-103') }}">
                        <i class="fa fa-people-roof"></i>
                        Parents Visa (103)
                    </a>
                </li>

                <li>
                    <a href="{{ url('contributory-parent-visa-subclass-143') }}">
                        <i class="fa fa-users"></i>
                        Contributory Parent Visa (143)
                    </a>
                </li>

                <li>
                    <a href="{{ url('contributory-parent-temporary-visa-subclass-173') }}">
                        <i class="fa fa-user-clock"></i>
                        Contributory Parent Visa (173)
                    </a>
                </li>

                <li>
                    <a href="{{ url('aged-parent-visa-subclass-804') }}">
                        <i class="fa fa-user-shield"></i>
                        Aged Parent Visa (804)
                    </a>
                </li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div class="col-lg-2 column-box">
            <h5 class="mega-title">Parent Visas II</h5>

            <ul class="visa-list">
                <li>
                    <a href="{{ url('contributory-aged-parent-visa-subclass-864') }}">
                        <i class="fa fa-handshake-angle"></i>
                        Contributory Aged Parent Visa (864)
                    </a>
                </li>

                <li>
                    <a href="{{ url('sponsored-parent-temporary-visa-subclass-870') }}">
                        <i class="fa fa-file-signature"></i>
                        Sponsored Parent Visa (870)
                    </a>
                </li>

                <li>
                    <a href="{{ url('contributory-aged-parent-temporary-visa-subclass-884') }}">
                        <i class="fa fa-user-check"></i>
                        Contributory Aged Parent Visa (884)
                    </a>
                </li>
            </ul>
        </div>

        <!-- Column 4 -->
        <div class="col-lg-6 column-box">
            <h5 class="mega-title">Child & Relative</h5>

            <div class="row">
                <div class="col-md-6">
                    <ul class="visa-list">
                        <li>
                            <a href="{{ url('child-visa-subclass-101') }}">
                                <i class="fa fa-child"></i>
                                Child Visa (101)
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('adoption-visa-subclass-102') }}">
                                <i class="fa fa-hands-holding-child"></i>
                                Adoption Visa (102)
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('remaining-relative-visa-subclass-115') }}">
                                <i class="fa fa-people-arrows"></i>
                                Remaining Relative Visa (115)
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('carer-visa-subclass-116') }}">
                                <i class="fa fa-hand-holding-heart"></i>
                                Carer Visa (116)
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="visa-list">
                        <li>
                            <a href="{{ url('orphan-relative-visa-subclass-117') }}">
                                <i class="fa fa-heart-circle-plus"></i>
                                Orphan Relative Visa (117)
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('child-visa-subclass-802') }}">
                                <i class="fa fa-baby"></i>
                                Child Visa (802)
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('carer-visa-subclass-836') }}">
                                <i class="fa fa-hands-helping"></i>
                                Carer Visa (836)
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('orphan-relative-visa-subclass-837') }}">
                                <i class="fa fa-house-user"></i>
                                Orphan Relative Visa (837)
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('remaining-relative-visa-subclass-835') }}">
                                <i class="fa fa-people-group"></i>
                                Remaining Relative Visa (835)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Promo Card -->
        <!-- <div class="col-lg-3">
            <div class="family-promo-card">

                <img src="https://dummyimage.com/600x400/f3f3f3/000000.jpg&text=Family+Visa" alt="Family Visa">

                <h3>Reunite with Your Family in Australia</h3>

                <p>
                    Partner, parent, child, and relative visa pathways guided with care and clarity.
                </p>

                <a href="{{ url('contact-us') }}" class="btn-family">
                    <i class="fa fa-headset"></i>
                    Speak to an Expert
                </a>

            </div>
        </div> -->

    </div>
</div>