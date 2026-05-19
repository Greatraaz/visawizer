@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
<style type="text/css">
.dust-recycle-card .dust-recycle-top .services-4 .service-2 i {
    color: #fff;
}
</style>
  <section class="about-us-section-2 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="section-top-5">
            <div class="left">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Our Advisory Board</span>
                </div>
                <div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Guiding Ethical Leadership Since the Inception of Visawizer</h2>
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <h6>Meet the visionaries shaping our commitment to ethics, integrity, and responsible leadership.</h6>
                <p>Our Advisory Board comprises distinguished educators, business leaders, researchers, and ethics practitioners. They provide strategic guidance, ensure the highest standards of ethical rigor, and help translate moral reasoning into actionable practices across industries worldwide.</p>
            </div>
        </div>
        <div class="thumb">
            <img alt="thumb" src="assets/images/ethical-theory.webp" class="w-100">
        </div>
    </div>
</section>


<section class="volunteer-section p-t-120 p-b-120 p-t-xs-80 p-b-xs-80" style="background-color: #f8f7f0">
        <div class="container">
            <div class="section-top-13 justify-content-center">
                <div class="text-center">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>Inspiring ethical thinking for better work cultures.</span>
                    </div>
                    <div class="common-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h2>Advisory Board</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="volunteer-card-4">
                        <a href="javascript:void(0);" onclick="showTeam(this)">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/advisors/pradeep.jpg') }}" alt="Prof. Pradeep Sharma" class="ratio298">
                            </div>
                            <div class="author-info">
                                <h5>Prof. Pradeep Sharma</h5>
                                <p></p>
                            </div>
                            <div class="d-none showThis"><p>Pradeep is an experienced HR professional with demonstrated capability in impacting business, having worked in a diverse range of industries, including Renewable Energy (Vena Energy &amp; AMPYR Energy), Human Resources Consulting (Mercer), Insurance (Tata AIG), FMCG (Gillette and Perfetti Van Melle), Pharmaceuticals (Eli Lilly Ranbaxy), and Automobiles (Maruti Suzuki). Pradeep currently works as a Consultant and also teaches Management students as a Professor of Practice (visiting Faculty). He has an MBA in HR from XLRI, with over 30 years of work experience in the Human Resources function. His experience has included working with global corporations in start-up and high-growth settings.</p>
<p>Pradeep brings strong professional expertise in Human Resources Management, having been in the following HR Leadership roles in global corporations.</p>
<ul>
<li>Human Resources Director (India) Vena Energy</li>
<li>Human Resources Leader (Head) for India, Middle East, Turkey &amp; Africa at Mercer</li>
<li>Human Resources Leader (Head), Global Operations Shared Services, Mercer</li>
<li>Vice President &amp; Head of Human Resources, Tata AIG General Insurance</li>
<li>Head -Human Resources for South-East Asia of Perfetti Van Melle</li>
</ul>
<p>Pradeep has led &amp; supported diverse HR engagement projects on Organization structure &amp; design, Performance Management, Change Management, Compensation and Benefits Structuresincluding incentive designs, Developing Leadership pipeline, Building Organizational Capability, Enhancing Employee Engagement and Streamlining HR Processes &amp; systems, In his senior Leadership roles Pradeep has provided guidance &amp; counsel on Human Resources related strategies &amp; approaches including working on projects related with org re-structuring, M&amp;As, expansion of business operations etc. His credentials also include Professional Certifications in Competency assessments &amp; Targeted selection, Interaction management, Quality &amp; effectiveness.</p></div>
                        </a>
                    </div>
                </div>
                    
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="volunteer-card-4">
                        <a href="javascript:void(0);" onclick="showTeam(this)">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/advisors/mudit.jpg') }}" alt="Dr. Mudit Kulshreshtha" class="ratio298">
                            </div>
                            <div class="author-info">
                                <h5>Dr. Mudit Kulshreshtha</h5>
                                <p></p>
                            </div>
                            <div class="d-none showThis"><p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Mudit Kulshreshtha is a seasoned academic and industry professional with over three decades of experience spanning analytics, strategy, artificial intelligence, and management education. He brings a rare combination of deep technical expertise, leadership experience, and academic rigor across premier institutions, consulting firms, and industry organizations.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Most recently, he served as Faculty at the National Power Training Institute (NPTI), Government of India, contributing to capability building in analytics, automation, cloud platforms, and emerging areas such as generative AI. His academic engagement emphasized the application of data-driven methods to decision-making in complex organizational and public-sector environments.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Earlier, Mudit served as Professor of Analytics and Machine Learning at the Great Lakes Institute of Management, Gurgaon (2017&ndash;2023). During this tenure, he taught postgraduate and executive programs in Business Statistics, Business Intelligence, Web and Social Media Analytics, Big Data and Cloud Analytics, and Strategy. He is widely respected for bridging the gap between analytical rigor and managerial relevance.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Before academia, Mudit held senior leadership roles in industry. As Vice President and Head of Analytics at PAYBACK (an American Express company), he led analytics, customer insights, and data innovation teams, contributing to the development of nationally recognized excellence in customer analytics and loyalty programs. He also served as Executive Director &ndash; Analytics and Business Intelligence at Angel One, leading strategic BI and advanced analytics initiatives. Earlier, he played a pivotal role at Deloitte (US offices) in establishing analytics capabilities and the Global M&amp;A Center of Excellence, and managed large analytics teams at WNS Global Services. His early career includes extensive advisory work at Ernst &amp; Young and Arthur Andersen on power sector reforms and World Bank&ndash; and DFID-funded projects, following his initial role as an engineer at Bajaj Auto Ltd.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Mudit holds a PhD in Economics from IGIDR, Mumbai (Reserve Bank of India's advanced research institute), an M.Tech in Mechanical Engineering from IIT Delhi, and a BE in Mechanical Engineering from MNNIT Allahabad. He has also completed the Global Colloquium on Participant-Centered Learning at Harvard Business School, reflecting his commitment to excellence in teaching and learning design.</span></p></div>
                        </a>
                    </div>
                </div>
                    
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="volunteer-card-4">
                        <a href="javascript:void(0);" onclick="showTeam(this)">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/advisors/sandeep.jpg') }}" alt="Mr. Sandeep Gambhir" class="ratio298">
                            </div>
                            <div class="author-info">
                                <h5>Mr. Sandeep Gambhir</h5>
                                <p></p>
                            </div>
                            <div class="d-none showThis"><p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Sandeep Gambhir is a seasoned talent partner who works closely with business leaders to build high-performing teams that meet current business needs while preparing organizations for future challenges. He believes that sustainable business success is driven by the ability to assemble the right talent at the right time and align workforce strategy with long-term organizational goals.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Through Swing Talent, Sandeep partners with leaders across the semiconductor, logistics, and technology sectors, as well as with organizations focused on strengthening sales, marketing, and creative functions. His work centers on addressing complex workforce challenges through a deep understanding of each client's unique business context, growth priorities, and leadership vision.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Sandeep brings extensive experience in helping companies scale engineering teams, optimize logistics operations, and build high-impact sales and creative units. His approach goes beyond transactional hiring, emphasizing thoughtful talent architecture, strategic insights, and customized solutions that deliver measurable outcomes. By combining industry knowledge with a consultative mindset, he enables organizations to attract, develop, and retain the talent critical to achieving a competitive advantage.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Known for his practical and results-oriented style, Sandeep focuses on empowering leaders with actionable workforce strategies that support innovation, agility, and sustained performance. He works as a trusted partner to organizations navigating growth, transformation, and evolving talent demands, helping them build teams that are aligned with their vision and positioned for long-term success.</span></p></div>
                        </a>
                    </div>
                </div>
                    
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="volunteer-card-4">
                        <a href="javascript:void(0);" onclick="showTeam(this)">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/advisors/anil.jpg') }}" alt="Dr. Anil Kumar Goswami" class="ratio298">
                            </div>
                            <div class="author-info">
                                <h5>Dr. Anil Kumar Goswami</h5>
                                <p></p>
                            </div>
                            <div class="d-none showThis"><p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Dr. Anil Kumar Goswami is an accomplished academic, researcher, and administrator with deep expertise spanning Organizational Behaviour, Human Resource Management, and Analytics. He currently serves as Associate Professor (OB&ndash;HR and Analytics) at the Faculty of Commerce and Business, University of Delhi, where he is actively engaged in teaching, research, training, and consulting.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Dr. Goswami brings a distinctive blend of academic rigor and applied experience drawn from over two decades of service with the Defence Research &amp; Development Organization (DRDO), Ministry of Defence, Government of India, where he worked as a Senior Scientist. His professional journey across academia, government, defence research, and the military has shaped a strong techno-managerial perspective, enabling him to integrate management theory with technology, analytics, and applied research.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">His areas of interest and contribution include General Management, Organizational Behaviour, Human Resource Management, Knowledge Management, Information Technology, Analytics, Research Methodology, and Artificial Intelligence and Machine Learning. In addition to his primary academic role, Dr. Goswami has served as Guest Faculty at several premier institutions, including IIM Jammu, University of Delhi, IGDTUW Delhi, Delhi Technological University (DTU), and NIFT Delhi, and as Adjunct Faculty at IBS Gurgaon, reflecting his intense engagement with management education across diverse contexts.</span></p>
<p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">Dr. Goswami holds a Fellow in Management (PhD) in OB &amp; HR from IIM Kashipur and an MBA from the Faculty of Management Studies (FMS), University of Delhi. He has a solid research portfolio, comprising 13 publications in reputable international journals, including ABDC-listed journals (A, B, and C categories), as well as IEEE journals, which contribute to scholarly discourse in management, analytics, and technology-enabled organizational practices.</span></p></div>
                        </a>
                    </div>
                </div>
                    
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="volunteer-card-4">
                        <a href="javascript:void(0);" onclick="showTeam(this)">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/advisors/ajay.jpg') }}" alt="ajay" class="ratio298">
                            </div>
                            <div class="author-info">
                                <h5>Mr. Ajay DD Singhania</h5>
                                <p></p>
                            </div>
                            <div class="d-none showThis"><p style="text-align: justify; line-height: 115%;"><span lang="EN-IN" style="font-size: 11.0pt; line-height: 115%; font-family: 'Tahoma','sans-serif';">As the MD & CEO of EPACK Durable Limited, he has focused on driving the company's growth and long-term success. Under his leadership, EPACK Durable Limited has emerged as one of India's largest OEM/ODM manufacturers of home appliances, with the highest level of backward integration at a single site among room air conditioner manufacturers in the country. He has demonstrated a strong commitment to excellence by driving strategic initiatives and fostering innovation, taking pride in the significant milestones the organization has achieved and in its reputation for delivering high-quality products and services. <br>With over two decades of experience in manufacturing operations and product development, he has witnessed the transformation of the industry in India and globally. Since January 2000, he has successfully navigated complex business challenges, built robust customer relationships, and overseen critical financial operations. As a serial entrepreneur, he has co-founded and contributed to the growth of multiple successful ventures. He has served as Director at EPACK Polymers (P) Ltd, EPACK Prefabricated Limited, EPACK Petrochem (P) Ltd, and Epavo Electricals (P) Ltd, each operating within distinct and diversified industry segments.</span></p></div>
                        </a>
                    </div>
                </div>
                    
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="volunteer-card-4">
                        <a href="javascript:void(0);" onclick="showTeam(this)">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/advisors/sanjay.jpg') }}" alt="Sanjay" class="ratio298">
                            </div>
                            <div class="author-info">
                                <h5>Mr. Sanjay Sahay</h5>
                                <p></p>
                            </div>
                            <div class="d-none showThis"><p>Sanjay is a seasoned facilitator of purposeful transformation and an executive coach with over four decades of professional experience. With a career spanning 42 years, he has worked at the intersection of leadership, mindset, and organizational effectiveness, enabling meaningful and sustained change across more than 100 organizations. His work is centered on helping leaders align their purpose, performance, and people, with a strong emphasis on transformational leadership, top-team alignment, and deeply reflective executive coaching.
                            Sanjay's professional journey reflects a rare blend of technical rigor and human-centric leadership development. He began his career with nearly 20 years in Electrical Engineering, serving as a Regional Projects Manager at Siemens, where he gained firsthand experience in managing complex projects, teams, and stakeholder expectations. This strong operational foundation later enabled him to work credibly with senior leaders across various industries.
                            </p>
                            <p>Transitioning into the domain of human and leadership development, Sanjay spent five years as Principal Consultant at NIS Sparta (NIIT), specializing in attitudinal and behavioral training. He further deepened his expertise through leadership development roles at Grow Talent and Right Management, followed by a decade of facilitation and executive coaching as an external affiliate with McKinsey & Company and Aberkyn. Alongside these engagements, he has been associated with Ernst & Young and Life Learning Solutions, contributing to leadership and transformation initiatives.
                            Sanjay has worked with a wide range of professionals from leading organizations across sectors, including manufacturing, infrastructure, pharmaceuticals, banking, energy, FMCG, and technology. His clients include organizations such as the Aditya Birla Group, Tata Steel, Infosys, HSBC, NTPC, Cipla, Nestlé, and several public and private sector banks.
                            Complementing his extensive experience, Sanjay has undertaken advanced training in executive coaching, leadership development, feedback, and self-awareness through institutions such as McKinsey & Company, Academy of Coaches, Landmark Worldwide, and NIS Sparta. Beyond his professional practice, he studies Vedantic philosophy and the Bhagavad Gita, thoughtfully integrating Eastern wisdom with Western management frameworks to support holistic and values-led leadership.
                            </p>
                            </div>
                        </a>
                    </div>
                </div>
                            </div>
        </div>
    </section>


<section class="dust-recycling-section" style="background-image: url(assets/images/home-banner-1.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Why Trust Our Advisory Board</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Experts with Global Experience</p>
                            </div>
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Guiding Ethical Leadership</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Shaping Programs with Impact</p>
                            </div>
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Ensuring Integrity & Accountability</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 order-1 order-lg-2 m-b-md-60 m-b-xs-60">
            </div>
        </div>
    </div>
</section>

@include('partials.blogs')
<div class="modal fade" id="teamModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title nameHere">Facilitator Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="teamModalBody">
        
      </div>
    </div>
  </div>
</div>

@endsection 
@push('script')
<script>
function showTeam(el) {
    let content = el.querySelector('.showThis').innerHTML;
    let name = el.querySelector('h5').innerHTML;
    document.getElementById('teamModalBody').innerHTML = content;
    document.querySelector('.nameHere').innerHTML = name;

    let modal = new bootstrap.Modal(document.getElementById('teamModal'));
    modal.show();
}
</script>
@endpush