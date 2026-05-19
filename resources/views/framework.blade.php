@extends('layouts.frontend')
@section('content') 
    <style>
        :root {
            --light-bg: #ecf0f1;
            --dark-bg: #34495e;
        }        
    
        .hero-section {
            background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,101.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }
        
        .section-title {
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            width: 60px;
            height: 4px;
            background: var(--theme-color-3);
            left: 50%;
            transform: translateX(-50%);
        }
        
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        
        .phase-card {
            background: #fff;
            margin-bottom: 30px;
        }
        
        .phase-card .card-header {
            background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
            border: none;
            font-weight: 700;
            font-size: 1.3rem;
            color: #fff;
        }
        
        .pillar-card {
            background: white;
            border-left: 5px solid var(--theme-color-3);
        }
        
        .icon-box {
            width: 70px;
            height: 70px;
            background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .timeline {
            position: relative;
            padding: 50px 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--theme-color-3);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }
        
        .timeline-badge {
            position: absolute;
            left: 50%;
            width: 50px;
            height: 50px;
            background: var(--theme-color-3);
            border-radius: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
            z-index: 10;
            box-shadow: 0 0 0 10px white;
        }
        
        .bg-light-custom {
            background-color: var(--light-bg);
        }
        
        .bg-dark-custom {
            background-color: var(--dark-bg);
            color: white;
        }
        
        .badge-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
        }
        
        .certification-level {
            padding: 30px 17px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .certification-level:hover {
            transform: scale(1.05);
        }
        
        .bronze { background: linear-gradient(135deg, #CD7F32 0%, #B87333 100%); }
        .silver { background: linear-gradient(135deg, #C0C0C0 0%, #A8A8A8 100%); }
        .gold { background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); }
        .platinum { background: linear-gradient(135deg, #E5E4E2 0%, #9C9C9C 100%); }
        
        .metric-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 20px;
        }
        
        .metric-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--theme-color-3);
        }
        
        .industry-badge {
            display: inline-block;
            background: var(--theme-color-3);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            margin: 5px;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }
            .timeline-badge {
                left: 30px;
            }
        }
        .certification-level i {
    color: #fff;
    border-radius: 8px;
    padding: 10px;
    background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
}
.mera .card {
    box-shadow: 4px 4px 20px rgb(0 0 0 / 10%);
    border: none;
    padding: 15px 15px 0;
    border-radius: 10px;
    height: -webkit-fill-available;
    border-bottom: 3px solid #076e44; 
}
.mera ul {
    margin-left: -14px;
    margin-bottom: 0;
}
.mera .col-xl-4{
    margin-bottom: 20px;
}
.tera .card {
    box-shadow: 4px 4px 20px rgb(0 0 0 / 48%);
    border: none;
    padding: 20px;
    border-radius: 17px;
    height: -webkit-fill-available;
    background: transparent;
    margin-top: 25px;
}
.stats-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}
.stats-number {
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--theme-color-3);
    margin-bottom: 10px;
    margin-top: 20px;
}
.text-primary{
    color: var(--theme-color-3) !important;
}

    </style>
<section class="hero-section">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold mb-4 text-white">Visawizer Framework</h1>
                <p class="lead mb-4">A holistic certification and capacity-building program designed to help organizations establish, nurture, and sustain ethical workplace cultures.</p>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-12 text-center">
                <h2 class="section-title mb-3">About the Framework</h2>
                <p class="text-center lead mb-2">The Visawizer Framework provides a structured pathway from initial awareness to full integration of ethical practices, leadership, and governance systems.</p>
            </div>
            <div class="col-md-6">
                <div class="card-custom card p-5">
                    <div class="icon-box mx-auto">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-center mb-3">Vision</h3>
                    <p class="text-center">To create workplaces where ethical behavior is the foundation of organizational success, employee well-being, and sustainable business practices.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-custom card p-5">
                    <div class="icon-box mx-auto">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-center mb-3">Mission</h3>
                    <p class="text-center">To guide organizations through a transformative journey that embeds ethics into their DNA—from leadership behaviors to daily operations—through assessment, certification, implementation support, and continuous improvement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phase 1 -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title mb-3">Framework Structure</h2>
                <h3 class="text-center mb-5">The Visawizer Journey: 5-Phase Approach</h3>
            </div>
        </div>
        <div class="card phase-card card-custom">
            <div class="card-header">
                <i class="fas fa-lightbulb me-2"></i> Phase 1: Foundation - Ethical Awareness (Months 1-3)
            </div>
            <div class="card-body">
                <h5 class="mb-4"><strong>Objective:</strong> Establish baseline understanding and secure leadership commitment</h5>
                
                <h6 class="fw-bold mt-4 mb-3">Key Components:</h6>
                <div class="row mera">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(A) Initial Ethics Audit & Assessment</h6>
                                <ul>
                                    <li>Organizational culture survey (anonymous)</li>
                                    <li>Leadership ethics assessment</li>
                                    <li>Policy and practice gap analysis</li>
                                    <li>Stakeholder perception mapping (employees, customers, partners)</li>
                                    <li>Risk identification across eight ethical dimensions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(B) Kickoff Workshop Series</h6>
                                <ul>
                                    <li>Executive leadership alignment session (1 day)</li>
                                    <li>Introduction to ethical frameworks workshop (half-day for managers)</li>
                                    <li>Employee awareness sessions (cascaded)</li>
                                    <li>Industry-specific ethics scenarios and case studies</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">Deliverables:</h6>
                                <ul>
                                    <li>Comprehensive Ethics Baseline Report</li>
                                    <li>Customized Ethics Roadmap</li>
                                    <li>Leadership Commitment Charter</li>
                                    <li>Initial stakeholder communication plan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phase 2 -->
<section class="py-5">
    <div class="container">
        <div class="card phase-card card-custom">
            <div class="card-header">
                <i class="fas fa-drafting-compass me-2"></i> Phase 2: Design - Building the Framework (Months 4-8)
            </div>
            <div class="card-body">
                <h5 class="mb-4"><strong>Objective:</strong> Co-create ethical infrastructure and governance systems</h5>
                
                <h6 class="fw-bold mt-4 mb-3">Key Components:</h6>
                <div class="row mera">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(A) Ethical Code of Conduct Development</h6>
                                <ul>
                                    <li>Stakeholder consultation workshops (employees at all levels)</li>
                                    <li>Values alignment sessions</li>
                                    <li>Behavioral standards definition across departments</li>
                                    <li>Scenario-based code development</li>
                                    <li>Plain language drafting and accessibility considerations</li>
                                    <li>Multi-language translation (if applicable)</li>
                                    <li>Visual design and communication strategy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">        
                            <div class="mb-4">
                                <h6 class="fw-bold">(B) Governance Structure Implementation</h6>
                                <ul>
                                    <li>Ethics Committee/Council establishment</li>
                                    <li>Charter and terms of reference</li>
                                    <li>Member selection criteria and process</li>
                                    <li>Meeting cadence and decision-making protocols</li>
                                    <li>Ethics Officer/Champion appointment</li>
                                    <li>Reporting lines and escalation paths</li>
                                    <li>Integration with existing governance (Board, HR, Legal, Compliance)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">        
                            <div class="mb-4">
                                <h6 class="fw-bold">(C) Whistleblower Protection System</h6>
                                <ul>
                                    <li>Policy design based on international best practices</li>
                                    <li>Multiple reporting channels (hotline, digital platform, in-person)</li>
                                    <li>Anonymous reporting mechanisms</li>
                                    <li>Investigation protocols and timelines</li>
                                    <li>Protection guarantees and non-retaliation policies</li>
                                    <li>Transparency and feedback loops</li>
                                    <li>Whistleblower support resources</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">        
                            <div class="mb-4">
                                <h6 class="fw-bold">(D) Ethics Decision-Making Framework</h6>
                                <ul>
                                    <li>Decision trees for common dilemmas</li>
                                    <li>Ethics impact assessment tools</li>
                                    <li>Consultation protocols</li>
                                    <li>Documentation requirements</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">        
                            <div class="mb-4">
                                <h6 class="fw-bold">Deliverables:</h6>
                                <ul>
                                    <li>Comprehensive Code of Conduct (published)</li>
                                    <li>Whistleblower Policy and Procedures Manual</li>
                                    <li>Ethics Governance Charter</li>
                                    <li>Decision-Making Toolkit</li>
                                    <li>Communication and rollout plan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Phase 3 -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="card phase-card card-custom">
            <div class="card-header">
                <i class="fas fa-cogs me-2"></i> Phase 3: Implementation - Embedding Ethics (Months 9-18)
            </div>
            <div class="card-body">
                <h5 class="mb-4"><strong>Objective:</strong> Operationalize ethical systems and develop capabilities</h5>
                
                <h6 class="fw-bold mt-4 mb-3">Key Components:</h6>
                
                <div class="row mera">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(A) Leadership Development Program</h6>
                                <ul>
                                    <li>Ethical leadership competency framework</li>
                                    <li>360-degree ethics leadership assessment</li>
                                    <li>Executive coaching on ethical decision-making</li>
                                    <li>Monthly leadership ethics forums</li>
                                    <li>Role-modeling and accountability systems</li>
                                    <li>Ethical storytelling and communication training</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(B) Organization-Wide Training Cascade</h6>
                                <p><strong>Role-specific ethics training modules:</strong></p>
                                <ul>
                                    <li>Frontline employees</li>
                                    <li>Managers and supervisors</li>
                                    <li>Senior leadership</li>
                                    <li>Special functions (Sales, HR, Finance, Procurement)</li>
                                </ul>
                                <p class="mt-3"><strong>Interactive learning methodologies:</strong></p>
                                <ul>
                                    <li>Case studies and scenario planning</li>
                                    <li>Role-play and simulations</li>
                                    <li>Discussion forums and ethics cafés</li>
                                    <li>E-learning modules with assessments</li>
                                    <li>New hire onboarding integration</li>
                                    <li>Refresher training schedule (annual)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(C) Policy Integration</h6>
                                <ul>
                                    <li>HR policies alignment (recruitment, performance, promotion)</li>
                                    <li>Procurement and vendor ethics standards</li>
                                    <li>Customer relations and marketing ethics</li>
                                    <li>Data privacy and information security</li>
                                    <li>Environmental and social responsibility</li>
                                    <li>Conflict of interest management</li>
                                    <li>Gift and hospitality policies</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(D) Measurement and Monitoring Systems</h6>
                                <ul>
                                    <li>Ethics KPIs and metrics dashboard</li>
                                    <li>Regular pulse surveys</li>
                                    <li>Incident tracking and trend analysis</li>
                                    <li>Ethical culture health checks</li>
                                    <li>Third-party ethics audits</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(E) Speak-Up Culture Initiatives</h6>
                                <ul>
                                    <li>Safe space conversations</li>
                                    <li>Ethics ambassadors network</li>
                                    <li>Open-door policies</li>
                                    <li>Town halls with ethics themes</li>
                                    <li>Anonymous feedback mechanisms</li>
                                    <li>Recognition programs for ethical behavior</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">Deliverables:</h6>
                                <ul>
                                    <li>Trained leadership team (100% participation)</li>
                                    <li>90%+ employee completion of core ethics training</li>
                                    <li>Integrated policy suite</li>
                                    <li>Active Ethics Committee with regular meetings</li>
                                    <li>Functioning whistleblower system with verified cases handled</li>
                                    <li>Ethics metrics dashboard (live)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phase 4 -->
<section class="py-5">
    <div class="container">
        <div class="card phase-card card-custom" style="background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);">
            <div class="card-header">
                <i class="fas fa-certificate me-2"></i> Phase 4: Certification - Visawizer Validation (Months 19-24)
            </div>
            <div class="card-body">
                <h5 class="mb-4 text-white"><strong>Objective:</strong> Achieve formal Visawizer certification through rigorous assessment</h5>
                
                <h6 class="fw-bold mt-4 mb-3 text-white">Certification Criteria (8 Pillars):</h6>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-user-tie me-2"></i>Ethical Leadership</h6>
                            <ul class="mb-0">
                                <li>Leadership demonstrates consistent ethical behavior</li>
                                <li>Ethics integrated into strategy and decision-making</li>
                                <li>Accountability at all levels</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-balance-scale me-2"></i>Governance & Accountability</h6>
                            <ul class="mb-0">
                                <li>Functioning Ethics Committee/governance structure</li>
                                <li>Clear policies and procedures</li>
                                <li>Regular reporting and transparency</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-hands-helping me-2"></i>Employee Rights & Dignity</h6>
                            <ul class="mb-0">
                                <li>Fair treatment and non-discrimination</li>
                                <li>Psychological safety and respect</li>
                                <li>Work-life balance and well-being support</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-bullhorn me-2"></i>Transparency & Communication</h6>
                            <ul class="mb-0">
                                <li>Open communication channels</li>
                                <li>Honest stakeholder engagement</li>
                                <li>Financial and operational transparency</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-equals me-2"></i>Fairness & Equity</h6>
                            <ul class="mb-0">
                                <li>Equitable compensation and benefits</li>
                                <li>Merit-based advancement</li>
                                <li>Inclusive workplace practices</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-shield-alt me-2"></i>Integrity in Operations</h6>
                            <ul class="mb-0">
                                <li>Anti-corruption measures</li>
                                <li>Honest marketing and customer relations</li>
                                <li>Responsible supply chain management</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-comments me-2"></i>Speak-Up Culture</h6>
                            <ul class="mb-0">
                                <li>Safe reporting mechanisms</li>
                                <li>Non-retaliation enforcement</li>
                                <li>Responsive investigation processes</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card pillar-card card-custom p-3">
                            <h6 class="fw-bold"><i class="fas fa-chart-line me-2"></i>Continuous Improvement</h6>
                            <ul class="mb-0">
                                <li>Regular ethics assessments</li>
                                <li>Learning from incidents</li>
                                <li>Innovation in ethics practices</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row tera">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="text-white">
                                <h5 class="fw-bold text-white mb-3">Assessment Process:</h5>
                                <ul>
                                    <li>Self-assessment submission</li>
                                    <li>Document review</li>
                                    <li>Site visits and interviews</li>
                                    <li>Employee focus groups</li>
                                    <li>Stakeholder surveys</li>
                                    <li>Independent verification</li>
                                    <li>Certification decision by the Visawizer Board</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="text-white">
                                <h5 class="fw-bold text-white">Deliverables:</h5>
                                <ul>
                                    <li>Visawizer Certification (3-year validity)</li>
                                    <li>Public certification badge and certificate</li>
                                    <li>Detailed assessment report</li>
                                    <li>Recognition ceremony and media announcement</li>
                                    <li>Listing in the Visawizer directory</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                            
                            
                            
            </div>
        </div>
    </div>
</section>

<!-- Certification Levels -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <h3 class="text-center mb-5">Certification Levels</h3>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="certification-level bronze text-dark">
                    <i class="fas fa-medal fa-3x mb-3"></i>
                    <h4>Bronze</h4>
                    <p class="mb-0">Foundation established<br>(60-74% compliance)</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="certification-level silver text-dark">
                    <i class="fas fa-medal fa-3x mb-3"></i>
                    <h4>Silver</h4>
                    <p class="mb-0">Strong integration<br>(75-89% compliance)</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="certification-level gold text-dark">
                    <i class="fas fa-medal fa-3x mb-3"></i>
                    <h4>Gold</h4>
                    <p class="mb-0">Excellence and innovation<br>(90%+ compliance)</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="certification-level platinum text-dark">
                    <i class="fas fa-medal fa-3x mb-3"></i>
                    <h4>Platinum</h4>
                    <p class="mb-0">Industry leadership<br>(95%+ demonstrated influence)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="card phase-card card-custom">
            <div class="card-header">
                <i class="fas fa-infinity me-2"></i> Phase 5: Sustain & Evolve - Continuous Excellence (Years 2-5+)
            </div>
            <div class="card-body">
                <h5 class="mb-4"><strong>Objective:</strong> Maintain certification and drive continuous improvement</h5>
                
                <h6 class="fw-bold mt-4 mb-3">Key Components:</h6>
                
                <div class="row mera">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(A) Annual Ethics Health Checks</h6>
                                <ul>
                                    <li>Culture surveys</li>
                                    <li>Policy effectiveness reviews</li>
                                    <li>Training needs assessments</li>
                                    <li>Emerging issues scanning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(B) Advanced Training & Development</h6>
                                <ul>
                                    <li>Advanced ethical leadership programs</li>
                                    <li>Ethics in innovation and technology</li>
                                    <li>Global ethics and cross-cultural considerations</li>
                                    <li>Industry-specific deep dives</li>
                                    <li>Ethics in crisis management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(C) Community of Practice</h6>
                                <ul>
                                    <li>Visawizer certified organization network</li>
                                    <li>Peer learning exchanges</li>
                                    <li>Annual Visawizer Summit</li>
                                    <li>Collaborative research and case studies</li>
                                    <li>Mentorship for organizations beginning their journey</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(D) Recertification Process</h6>
                                <ul>
                                    <li>Every 3 years</li>
                                    <li>Progress assessment against the previous baseline</li>
                                    <li>Evidence of continuous improvement</li>
                                    <li>Stakeholder feedback integration</li>
                                    <li>Updated certification level (potential upgrade)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">(E) Innovation & Thought Leadership</h6>
                                <ul>
                                    <li>Ethics innovation labs</li>
                                    <li>Research partnerships</li>
                                    <li>Public speaking and case study sharing</li>
                                    <li>Industry working groups</li>
                                    <li>Ethics awards and recognition</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="mb-4">
                                <h6 class="fw-bold">Deliverables</h6>
                                <ul>
                                    <li>Maintained certification status</li>
                                    <li>Published case studies and learnings</li>
                                    <li>Active participation in the Visawizer community</li>
                                    <li>Demonstrated year-over-year improvement</li>
                                    <li>Recognition as an ethical employer of choice</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light-custom">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-12 text-center">
                <h2 class="section-title mb-3">Success Metrics & ROI</h2>
                <p class="text-center lead mb-5">Organizations can expect to see measurable improvements in:</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <i class="fa fa-paper-plane text-success" style="font-size: 3rem;"></i>
                    <div class="stats-number">25-40%</div>
                    <p class="fw-bold">Increase in employee trust scores</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <i class="fa fa-shield-check text-success" style="font-size: 3rem;"></i>
                    <div class="stats-number">30-50%</div>
                    <p class="fw-bold">Improvement in psychological safety</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <i class="fa fa-arrow-circle-down text-success" style="font-size: 3rem;"></i>
                    <div class="stats-number">20-35%</div>
                    <p class="fw-bold">Reduction in ethical concerns/incidents</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <i class="fa fa-users text-success" style="font-size: 3rem;"></i>
                    <div class="stats-number">15-25%</div>
                    <p class="fw-bold">Improvement in employee retention</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 mb-3">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">Business Performance</h5>
                        <ul class="mb-0">
                            <li>Enhanced employer brand and talent attraction</li>
                            <li>Improved stakeholder trust and reputation</li>
                            <li>Reduced legal and compliance risks</li>
                            <li>Increased customer loyalty</li>
                            <li>Better supplier relationships</li>
                            <li>Positive impact on innovation and collaboration</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">Governance & Risk</h5>
                        <ul class="mb-0">
                            <li>Reduced compliance violations</li>
                            <li>Faster, more effective issue resolution</li>
                            <li>Enhanced Board confidence</li>
                            <li>Improved audit outcomes</li>
                            <li>Reduced litigation and settlement costs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">Industry Adaptations</h5>
                        <ul class="mb-0">
                            <li>Technology & AI: Data ethics, algorithm fairness, privacy</li>
                            <li>Healthcare: Patient rights, research ethics, end-of-life care</li>
                            <li>Financial Services: Client protection, conflicts of interest, transparency</li>
                            <li>Manufacturing: Worker safety, environmental responsibility, supply chain</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
.step-card{
      border:0;
      border-radius:18px;
      box-shadow:0 12px 30px rgba(0,0,0,0.08);
      transition:all .3s ease;
      height:100%;
    }
    .step-card:hover{
      transform:translateY(-6px);
      box-shadow:0 18px 40px rgba(0,0,0,0.12);
    }
    .step-icon{
      width:70px;
      height:70px;
      border-radius:50%;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:28px;
      color:#fff;
      margin-bottom:20px;
    }
    .bg-step-1{background:linear-gradient(135deg,#6f42c1,#8e66ff);}
    .bg-step-2{background:linear-gradient(135deg,#198754,#3ddc97);}
    .bg-step-3{background:linear-gradient(135deg,#0d6efd,#5aa2ff);}
    .step-number{
      font-size:13px;
      letter-spacing:1px;
      font-weight:600;
      color:#6c757d;
      text-transform:uppercase;
    }
</style>
<section class="py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold">Getting Started</h2>
      <p class="text-muted mt-2">A clear, structured pathway to begin your engagement</p>
    </div>

    <div class="row g-4">

      <!-- Step 1 -->
      <div class="col-md-4">
        <div class="card step-card p-4">
          <div class="step-icon bg-step-1">
            <i class="fa-solid fa-comments"></i>
          </div>
          <span class="step-number">Step 1</span>
          <h5 class="fw-bold mt-2">Initial Consultation <span class="text-muted">(Complimentary)</span></h5>
          <ul class="list-unstyled mt-3 mb-0">
            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>90-minute discovery call</li>
            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Preliminary organizational assessment</li>
            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Framework overview and customization discussion</li>
            <li><i class="fa-solid fa-check text-primary me-2"></i>Investment proposal</li>
          </ul>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-md-4">
        <div class="card step-card p-4">
          <div class="step-icon bg-step-2">
            <i class="fa-solid fa-users-gear"></i>
          </div>
          <span class="step-number">Step 2</span>
          <h5 class="fw-bold mt-2">Leadership Alignment Workshop</h5>
          <ul class="list-unstyled mt-3 mb-0">
            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Half-day facilitated session with the executive team</li>
            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Business case development</li>
            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Stakeholder mapping</li>
            <li><i class="fa-solid fa-check text-success me-2"></i>Go / No-Go decision</li>
          </ul>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-md-4">
        <div class="card step-card p-4">
          <div class="step-icon bg-step-3">
            <i class="fa-solid fa-rocket"></i>
          </div>
          <span class="step-number">Step 3</span>
          <h5 class="fw-bold mt-2">Contract & Kickoff</h5>
          <ul class="list-unstyled mt-3 mb-0">
            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Formal engagement agreement</li>
            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Project team formation</li>
            <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Detailed project plan</li>
            <li><i class="fa-solid fa-check text-primary me-2"></i>Phase 1 commencement</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Visawizer Commitment</h2>
      <p class="text-muted mt-2">As stewards of this framework, we hold ourselves to the highest standards</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-scale-balanced fa-2x text-primary mb-3"></i>
          <h6 class="fw-bold">Integrity</h6>
          <p class="text-muted mb-0">We practice what we preach and model ethical excellence.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-flask fa-2x text-success mb-3"></i>
          <h6 class="fw-bold">Evidence-Based</h6>
          <p class="text-muted mb-0">Our methodologies are grounded in research and proven practices.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-people-group fa-2x text-warning mb-3"></i>
          <h6 class="fw-bold">Inclusive</h6>
          <p class="text-muted mb-0">We welcome organizations at all stages of their ethics journey.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-lock fa-2x text-danger mb-3"></i>
          <h6 class="fw-bold">Confidential</h6>
          <p class="text-muted mb-0">We protect sensitive information and create safe spaces.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-handshake fa-2x text-info mb-3"></i>
          <h6 class="fw-bold">Collaborative</h6>
          <p class="text-muted mb-0">We partner with organizations as equals in this journey.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-arrows-rotate fa-2x text-secondary mb-3"></i>
          <h6 class="fw-bold">Continuous Learning</h6>
          <p class="text-muted mb-0">We evolve the framework based on emerging needs and insights.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" style="background:linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%)">
  <div class="container">
    <div class="text-center text-white">
      <h2 class="fw-bold text-white">Join the Visawizer Movement</h2>
      <p class="mt-3 mx-auto" style="max-width:700px;">Transform your organization into a beacon of ethical excellence. Whether you're just beginning your ethics journey or ready to achieve certification, we're here to guide you every step of the way.</p>
      <a href="{{ url('contact-us') }}" class="btn btn-light btn-lg mt-3 px-5">Schedule Your Complimentary Consultation</a>
      <blockquote class="blockquote mt-4">
        <p class="fst-italic">“Ethics is not a destination, but a journey. Let's walk it together.”</p>
      </blockquote>
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Frequently Asked Questions</h2>
      <p class="text-muted mt-2">Clear answers to common questions about Visawizer</p>
    </div>

    <div class="accordion accordion-flush" id="faqAccordion">

      <div class="accordion-item mb-3 rounded shadow-sm">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            How is this different from compliance programs?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Compliance focuses on meeting minimum legal requirements. Visawizer goes beyond compliance to create cultures where people want to do the right thing, not just avoid penalties.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3 rounded shadow-sm">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            How long does certification take?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Most organizations achieve certification in 18–24 months, though the timeline varies based on starting point and commitment level.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3 rounded shadow-sm">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            What if we already have some ethics initiatives?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Excellent! We build on your existing work. The initial assessment identifies gaps and helps integrate current initiatives into a comprehensive framework.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3 rounded shadow-sm">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            Is this only for large organizations?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            No. We work with organizations of all sizes and have adapted the framework for businesses ranging from those with as few as 25 employees to multinationals with over 50,000 employees.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3 rounded shadow-sm">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
            What ongoing commitment is required after certification?
          </button>
        </h2>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Certified organizations commit to annual health checks, recertification every 3 years, and participation in the Visawizer community.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3 rounded shadow-sm">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
            Can we lose our certification?
          </button>
        </h2>
        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Yes. Certification can be suspended or revoked for serious ethical breaches, failure to maintain standards, or non-participation in recertification.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Appendices -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Appendices</h2>
      <p class="text-muted mt-2">Supporting resources included in the Visawizer framework</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-file-lines fa-2x text-primary mb-3"></i>
          <h6 class="fw-bold">Appendix A</h6>
          <p class="text-muted mb-0">Sample Code of Conduct Template</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-bullhorn fa-2x text-danger mb-3"></i>
          <h6 class="fw-bold">Appendix B</h6>
          <p class="text-muted mb-0">Whistleblower Policy Guidelines</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-chart-line fa-2x text-success mb-3"></i>
          <h6 class="fw-bold">Appendix C</h6>
          <p class="text-muted mb-0">Ethics KPI Dashboard Metrics</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-clipboard-check fa-2x text-info mb-3"></i>
          <h6 class="fw-bold">Appendix D</h6>
          <p class="text-muted mb-0">Certification Assessment Rubric</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-briefcase fa-2x text-warning mb-3"></i>
          <h6 class="fw-bold">Appendix E</h6>
          <p class="text-muted mb-0">Case Studies from Certified Organizations</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card step-card p-4">
          <i class="fa-solid fa-book-open fa-2x text-secondary mb-3"></i>
          <h6 class="fw-bold">Appendix F & G</h6>
          <p class="text-muted mb-0">Research Bibliography & Partner Organization Directory</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 