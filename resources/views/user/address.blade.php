@extends('layouts.frontend')
@section('content')
<style>
    .address-table {
        border: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    .address-table th {
        background: #235130;
        color: #fff;
        font-weight: 600;
        width: 30%;
        vertical-align: middle;
        text-align: left;
        padding: 12px 15px;
        font-weight: 800;
    }
    .address-table td {
        background: #fff;
        color: #333;
        padding: 12px 15px;
    }
    .address-table tr:not(:last-child) td,
    .address-table tr:not(:last-child) th {
        border-bottom: 1px solid #eaeaea;
    }
</style> 
<div class="page-title page-portfolio-details  ">
    <div class="rellax" data-rellax-speed="5">
        <img src="{{ asset('assets/images/page-title/shop-detail.jpg') }}" alt="" width="1920" height="400" loading="lazy" decoding="async" aria-hidden="true">
    </div>
    <div class="content-wrap">
        <div class="tf-container w-1290">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <h1 class="title">My Addresses</h1>
                        <div class="icon-img"><img src="{{ asset('assets/images/item/line-throw-title.png') }}" alt="" width="80" height="12" loading="lazy" decoding="async" aria-hidden="true"></div>
                        <div class="breadcrumb">
                            <a href="{{ url('/') }}">Home</a>
                            <div class="icon"><i class="icon-arrow-right1"></i></div>
                            <a href="{{ url()->current() }}">My Addresses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="img-item item-2">
        <img src="{{ asset('assets/images/item/grass-6.png') }}" alt="" width="120" height="120" loading="lazy" decoding="async" aria-hidden="true">
    </div>
</div>

<section class="flat-spacing-1">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="wrap-sidebar-account">@include('user.sidebar')</div>
            </div>
            <div class="col-lg-9">
                <div class="my-account-content account-address">
                    <div class="text-center widget-inner-address">
                        @if($address && $address->isNotEmpty())
                            <h3 class="fw-5 mb-20">Your saved address</h3>
                        @endif
                        <div class="list-account-address">
                            @forelse($address as $node)
                            <div class="account-address-item">
                                <table class="table address-table mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $node->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile</th>
                                            <td>{{ $node->mobile }}</td>
                                        </tr>
                                        <tr>
                                            <th>Country</th>
                                            <td>{{ $node->country }}</td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td>{{ $node->state }}</td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>{{ $node->city }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pincode</th>
                                            <td>{{ $node->pincode }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $node->address }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-flex gap-10 justify-content-center mt-5">
                                    <button class="tf-btn-nor style-small justify-content-center btn-edit-address">
                                        <span class="text-small">Edit</span>
                                    </button>
                                    <a class="tf-btn-nor style-small style-2 justify-content-center" href="{{ url('delete-address/' . encryptId($node->id)) }}" onclick="return confirm('Are you sure?')">
                                        <span class="text-small">Delete</span>
                                    </a>
                                </div>
                                <form class="edit-form-address wd-form-address" id="formeditAddress" action="#">
                                    <h3 class="title mb-20">Edit address</h3>
                                    <div class="form-content mb-20">
                                        <div class="cols gap-10">
                                            <fieldset>
                                                <input type="text" placeholder="First name" aria-required="true"
                                                    required />
                                            </fieldset>
                                            <fieldset>
                                                <input type="email" id="mail" name="mail"
                                                    placeholder="Last name" required />
                                            </fieldset>
                                        </div>
                                        <fieldset>
                                            <input type="text" placeholder="Company" aria-required="true"
                                                required />
                                        </fieldset>
                                        <fieldset>
                                            <input type="text" placeholder="Address" aria-required="true"
                                                required />
                                        </fieldset>
                                        <div class="box-field">
                                            <label for="countryEdit"
                                                class="mb-10 text-start d-block text-main">Country/Region</label>
                                            <div class="select-custom">
                                                <select class="tf-select-2 w-100" id="countryEdit"
                                                    name="address[country]" data-default="">
                                                    <option value="---" data-provinces="[]">---</option>
                                                    <option value="Australia"
                                                        data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]">
                                                        Australia</option>
                                                    <option value="Austria" data-provinces="[]">Austria</option>
                                                    <option value="Belgium" data-provinces="[]">Belgium</option>
                                                    <option value="Canada"
                                                        data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]">
                                                        Canada</option>
                                                    <option value="Czech Republic" data-provinces="[]">Czechia
                                                    </option>
                                                    <option value="Denmark" data-provinces="[]">Denmark</option>
                                                    <option value="Finland" data-provinces="[]">Finland</option>
                                                    <option value="France" data-provinces="[]">France</option>
                                                    <option value="Germany" data-provinces="[]">Germany</option>
                                                    <option value="Hong Kong"
                                                        data-provinces="[['Hong Kong Island','Hong Kong Island'],['Kowloon','Kowloon'],['New Territories','New Territories']]">
                                                        Hong Kong SAR</option>
                                                    <option value="Ireland"
                                                        data-provinces="[['Carlow','Carlow'],['Cavan','Cavan'],['Clare','Clare'],['Cork','Cork'],['Donegal','Donegal'],['Dublin','Dublin'],['Galway','Galway'],['Kerry','Kerry'],['Kildare','Kildare'],['Kilkenny','Kilkenny'],['Laois','Laois'],['Leitrim','Leitrim'],['Limerick','Limerick'],['Longford','Longford'],['Louth','Louth'],['Mayo','Mayo'],['Meath','Meath'],['Monaghan','Monaghan'],['Offaly','Offaly'],['Roscommon','Roscommon'],['Sligo','Sligo'],['Tipperary','Tipperary'],['Waterford','Waterford'],['Westmeath','Westmeath'],['Wexford','Wexford'],['Wicklow','Wicklow']]">
                                                        Ireland</option>
                                                    <option value="Israel" data-provinces="[]">Israel</option>
                                                    <option value="Italy"
                                                        data-provinces="[['Agrigento','Agrigento'],['Alessandria','Alessandria'],['Ancona','Ancona'],['Aosta','Aosta Valley'],['Arezzo','Arezzo'],['Ascoli Piceno','Ascoli Piceno'],['Asti','Asti'],['Avellino','Avellino'],['Bari','Bari'],['Barletta-Andria-Trani','Barletta-Andria-Trani'],['Belluno','Belluno'],['Benevento','Benevento'],['Bergamo','Bergamo'],['Biella','Biella'],['Bologna','Bologna'],['Bolzano','South Tyrol'],['Brescia','Brescia'],['Brindisi','Brindisi'],['Cagliari','Cagliari'],['Caltanissetta','Caltanissetta'],['Campobasso','Campobasso'],['Carbonia-Iglesias','Carbonia-Iglesias'],['Caserta','Caserta'],['Catania','Catania'],['Catanzaro','Catanzaro'],['Chieti','Chieti'],['Como','Como'],['Cosenza','Cosenza'],['Cremona','Cremona'],['Crotone','Crotone'],['Cuneo','Cuneo'],['Enna','Enna'],['Fermo','Fermo'],['Ferrara','Ferrara'],['Firenze','Florence'],['Foggia','Foggia'],['Forlì-Cesena','Forlì-Cesena'],['Frosinone','Frosinone'],['Genova','Genoa'],['Gorizia','Gorizia'],['Grosseto','Grosseto'],['Imperia','Imperia'],['Isernia','Isernia'],['L'Aquila','L’Aquila'],['La Spezia','La Spezia'],['Latina','Latina'],['Lecce','Lecce'],['Lecco','Lecco'],['Livorno','Livorno'],['Lodi','Lodi'],['Lucca','Lucca'],['Macerata','Macerata'],['Mantova','Mantua'],['Massa-Carrara','Massa and Carrara'],['Matera','Matera'],['Medio Campidano','Medio Campidano'],['Messina','Messina'],['Milano','Milan'],['Modena','Modena'],['Monza e Brianza','Monza and Brianza'],['Napoli','Naples'],['Novara','Novara'],['Nuoro','Nuoro'],['Ogliastra','Ogliastra'],['Olbia-Tempio','Olbia-Tempio'],['Oristano','Oristano'],['Padova','Padua'],['Palermo','Palermo'],['Parma','Parma'],['Pavia','Pavia'],['Perugia','Perugia'],['Pesaro e Urbino','Pesaro and Urbino'],['Pescara','Pescara'],['Piacenza','Piacenza'],['Pisa','Pisa'],['Pistoia','Pistoia'],['Pordenone','Pordenone'],['Potenza','Potenza'],['Prato','Prato'],['Ragusa','Ragusa'],['Ravenna','Ravenna'],['Reggio Calabria','Reggio Calabria'],['Reggio Emilia','Reggio Emilia'],['Rieti','Rieti'],['Rimini','Rimini'],['Roma','Rome'],['Rovigo','Rovigo'],['Salerno','Salerno'],['Sassari','Sassari'],['Savona','Savona'],['Siena','Siena'],['Siracusa','Syracuse'],['Sondrio','Sondrio'],['Taranto','Taranto'],['Teramo','Teramo'],['Terni','Terni'],['Torino','Turin'],['Trapani','Trapani'],['Trento','Trentino'],['Treviso','Treviso'],['Trieste','Trieste'],['Udine','Udine'],['Varese','Varese'],['Venezia','Venice'],['Verbano-Cusio-Ossola','Verbano-Cusio-Ossola'],['Vercelli','Vercelli'],['Verona','Verona'],['Vibo Valentia','Vibo Valentia'],['Vicenza','Vicenza'],['Viterbo','Viterbo']]">
                                                        Italy</option>
                                                    <option value="Japan"
                                                        data-provinces="[['Aichi','Aichi'],['Akita','Akita'],['Aomori','Aomori'],['Chiba','Chiba'],['Ehime','Ehime'],['Fukui','Fukui'],['Fukuoka','Fukuoka'],['Fukushima','Fukushima'],['Gifu','Gifu'],['Gunma','Gunma'],['Hiroshima','Hiroshima'],['Hokkaidō','Hokkaido'],['Hyōgo','Hyogo'],['Ibaraki','Ibaraki'],['Ishikawa','Ishikawa'],['Iwate','Iwate'],['Kagawa','Kagawa'],['Kagoshima','Kagoshima'],['Kanagawa','Kanagawa'],['Kumamoto','Kumamoto'],['Kyōto','Kyoto'],['Kōchi','Kochi'],['Mie','Mie'],['Miyagi','Miyagi'],['Miyazaki','Miyazaki'],['Nagano','Nagano'],['Nagasaki','Nagasaki'],['Nara','Nara'],['Niigata','Niigata'],['Okayama','Okayama'],['Okinawa','Okinawa'],['Saga','Saga'],['Saitama','Saitama'],['Shiga','Shiga'],['Shimane','Shimane'],['Shizuoka','Shizuoka'],['Tochigi','Tochigi'],['Tokushima','Tokushima'],['Tottori','Tottori'],['Toyama','Toyama'],['Tōkyō','Tokyo'],['Wakayama','Wakayama'],['Yamagata','Yamagata'],['Yamaguchi','Yamaguchi'],['Yamanashi','Yamanashi'],['Ōita','Oita'],['Ōsaka','Osaka']]">
                                                        Japan</option>
                                                    <option value="Malaysia"
                                                        data-provinces="[['Johor','Johor'],['Kedah','Kedah'],['Kelantan','Kelantan'],['Kuala Lumpur','Kuala Lumpur'],['Labuan','Labuan'],['Melaka','Malacca'],['Negeri Sembilan','Negeri Sembilan'],['Pahang','Pahang'],['Penang','Penang'],['Perak','Perak'],['Perlis','Perlis'],['Putrajaya','Putrajaya'],['Sabah','Sabah'],['Sarawak','Sarawak'],['Selangor','Selangor'],['Terengganu','Terengganu']]">
                                                        Malaysia</option>
                                                    <option value="Netherlands" data-provinces="[]">Netherlands
                                                    </option>
                                                    <option value="New Zealand"
                                                        data-provinces="[['Auckland','Auckland'],['Bay of Plenty','Bay of Plenty'],['Canterbury','Canterbury'],['Chatham Islands','Chatham Islands'],['Gisborne','Gisborne'],['Hawke's Bay','Hawke’s Bay'],['Manawatu-Wanganui','Manawatū-Whanganui'],['Marlborough','Marlborough'],['Nelson','Nelson'],['Northland','Northland'],['Otago','Otago'],['Southland','Southland'],['Taranaki','Taranaki'],['Tasman','Tasman'],['Waikato','Waikato'],['Wellington','Wellington'],['West Coast','West Coast']]">
                                                        New Zealand</option>
                                                    <option value="Norway" data-provinces="[]">Norway</option>
                                                    <option value="Poland" data-provinces="[]">Poland</option>
                                                    <option value="Portugal"
                                                        data-provinces="[['Aveiro','Aveiro'],['Açores','Azores'],['Beja','Beja'],['Braga','Braga'],['Bragança','Bragança'],['Castelo Branco','Castelo Branco'],['Coimbra','Coimbra'],['Faro','Faro'],['Guarda','Guarda'],['Leiria','Leiria'],['Lisboa','Lisbon'],['Madeira','Madeira'],['Portalegre','Portalegre'],['Porto','Porto'],['Santarém','Santarém'],['Setúbal','Setúbal'],['Viana do Castelo','Viana do Castelo'],['Vila Real','Vila Real'],['Viseu','Viseu'],['Évora','Évora']]">
                                                        Portugal</option>
                                                    <option value="Singapore" data-provinces="[]">Singapore
                                                    </option>
                                                    <option value="South Korea"
                                                        data-provinces="[['Busan','Busan'],['Chungbuk','North Chungcheong'],['Chungnam','South Chungcheong'],['Daegu','Daegu'],['Daejeon','Daejeon'],['Gangwon','Gangwon'],['Gwangju','Gwangju City'],['Gyeongbuk','North Gyeongsang'],['Gyeonggi','Gyeonggi'],['Gyeongnam','South Gyeongsang'],['Incheon','Incheon'],['Jeju','Jeju'],['Jeonbuk','North Jeolla'],['Jeonnam','South Jeolla'],['Sejong','Sejong'],['Seoul','Seoul'],['Ulsan','Ulsan']]">
                                                        South Korea</option>
                                                    <option value="Spain"
                                                        data-provinces="[['A Coruña','A Coruña'],['Albacete','Albacete'],['Alicante','Alicante'],['Almería','Almería'],['Asturias','Asturias Province'],['Badajoz','Badajoz'],['Balears','Balears Province'],['Barcelona','Barcelona'],['Burgos','Burgos'],['Cantabria','Cantabria Province'],['Castellón','Castellón'],['Ceuta','Ceuta'],['Ciudad Real','Ciudad Real'],['Cuenca','Cuenca'],['Cáceres','Cáceres'],['Cádiz','Cádiz'],['Córdoba','Córdoba'],['Girona','Girona'],['Granada','Granada'],['Guadalajara','Guadalajara'],['Guipúzcoa','Gipuzkoa'],['Huelva','Huelva'],['Huesca','Huesca'],['Jaén','Jaén'],['La Rioja','La Rioja Province'],['Las Palmas','Las Palmas'],['León','León'],['Lleida','Lleida'],['Lugo','Lugo'],['Madrid','Madrid Province'],['Melilla','Melilla'],['Murcia','Murcia'],['Málaga','Málaga'],['Navarra','Navarra'],['Ourense','Ourense'],['Palencia','Palencia'],['Pontevedra','Pontevedra'],['Salamanca','Salamanca'],['Santa Cruz de Tenerife','Santa Cruz de Tenerife'],['Segovia','Segovia'],['Sevilla','Seville'],['Soria','Soria'],['Tarragona','Tarragona'],['Teruel','Teruel'],['Toledo','Toledo'],['Valencia','Valencia'],['Valladolid','Valladolid'],['Vizcaya','Biscay'],['Zamora','Zamora'],['Zaragoza','Zaragoza'],['Álava','Álava'],['Ávila','Ávila']]">
                                                        Spain</option>
                                                    <option value="Sweden" data-provinces="[]">Sweden</option>
                                                    <option value="Switzerland" data-provinces="[]">Switzerland
                                                    </option>
                                                    <option value="United Arab Emirates"
                                                        data-provinces="[['Abu Dhabi','Abu Dhabi'],['Ajman','Ajman'],['Dubai','Dubai'],['Fujairah','Fujairah'],['Ras al-Khaimah','Ras al-Khaimah'],['Sharjah','Sharjah'],['Umm al-Quwain','Umm al-Quwain']]">
                                                        United Arab Emirates</option>
                                                    <option value="United Kingdom"
                                                        data-provinces="[['British Forces','British Forces'],['England','England'],['Northern Ireland','Northern Ireland'],['Scotland','Scotland'],['Wales','Wales']]">
                                                        United Kingdom</option>
                                                    <option value="United States"
                                                        data-provinces="[['Alabama','Alabama'],['Alaska','Alaska'],['American Samoa','American Samoa'],['Arizona','Arizona'],['Arkansas','Arkansas'],['Armed Forces Americas','Armed Forces Americas'],['Armed Forces Europe','Armed Forces Europe'],['Armed Forces Pacific','Armed Forces Pacific'],['California','California'],['Colorado','Colorado'],['Connecticut','Connecticut'],['Delaware','Delaware'],['District of Columbia','Washington DC'],['Federated States of Micronesia','Micronesia'],['Florida','Florida'],['Georgia','Georgia'],['Guam','Guam'],['Hawaii','Hawaii'],['Idaho','Idaho'],['Illinois','Illinois'],['Indiana','Indiana'],['Iowa','Iowa'],['Kansas','Kansas'],['Kentucky','Kentucky'],['Louisiana','Louisiana'],['Maine','Maine'],['Marshall Islands','Marshall Islands'],['Maryland','Maryland'],['Massachusetts','Massachusetts'],['Michigan','Michigan'],['Minnesota','Minnesota'],['Mississippi','Mississippi'],['Missouri','Missouri'],['Montana','Montana'],['Nebraska','Nebraska'],['Nevada','Nevada'],['New Hampshire','New Hampshire'],['New Jersey','New Jersey'],['New Mexico','New Mexico'],['New York','New York'],['North Carolina','North Carolina'],['North Dakota','North Dakota'],['Northern Mariana Islands','Northern Mariana Islands'],['Ohio','Ohio'],['Oklahoma','Oklahoma'],['Oregon','Oregon'],['Palau','Palau'],['Pennsylvania','Pennsylvania'],['Puerto Rico','Puerto Rico'],['Rhode Island','Rhode Island'],['South Carolina','South Carolina'],['South Dakota','South Dakota'],['Tennessee','Tennessee'],['Texas','Texas'],['Utah','Utah'],['Vermont','Vermont'],['Virgin Islands','U.S. Virgin Islands'],['Virginia','Virginia'],['Washington','Washington'],['West Virginia','West Virginia'],['Wisconsin','Wisconsin'],['Wyoming','Wyoming']]">
                                                        United States</option>
                                                    <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <fieldset>
                                            <input type="text" placeholder="City" aria-required="true"
                                                required />
                                        </fieldset>
                                        <fieldset>
                                            <input type="text" placeholder="Phone" aria-required="true"
                                                required />
                                        </fieldset>
                                        <div class="checkbox-item d-flex">
                                            <label class="mb-0">
                                                <span class="text-def font-nunito">
                                                    Set as default address.
                                                </span>
                                                <input type="checkbox" class="checkbox-item" checked="">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-center gap-10 flex-wrap">
                                        <button type="button" class="tf-btn-nor style-small">
                                            <span class="text-small">
                                                Update address
                                            </span>
                                        </button>
                                        <span class="tf-btn-nor style-small btn-hide-edit-address cs-pointer">
                                            <span class="text-small">
                                                Cancel
                                            </span>
                                        </span>
                                    </div>
                                </form>
                            </div>
                             @empty
                             <h4>No Address Found!</h4>
                            @endforelse                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 