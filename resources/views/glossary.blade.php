@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

    <section class="glossary-section">
    <style>
      :root{--muted:#6c757d}
      .glossary-section{background:linear-gradient(180deg,#f8fafc,white);padding:3rem 0}
      .glossary-section .letter-btn.active{box-shadow:0 6px 20px rgba(99,102,241,.12);transform:translateY(-2px)}
      .glossary-section .glossary-card{transition:transform .18s ease,box-shadow .18s ease}
      .glossary-section .glossary-card:hover{transform:translateY(-6px);box-shadow:0 10px 30px rgba(15,23,42,.08)}
      .glossary-section .term{font-weight:600}
      .glossary-section .definition{color:var(--muted)}
      @media (max-width:575px){.glossary-section .search-wrap{flex-direction:column;gap:.5rem}}
button.btn.e-primary-btn.letter-btn.active {
    color: var(--theme-color-3);
    background: #fff;
}
button.btn.e-primary-btn.letter-btn {
    border-radius: 10px !important;
    padding: 10px 20px;
    color: #fff;
}
.gbGreen{
        background: var(--theme-color-3);
    color: #fff;
    border-color: var(--theme-color-3);
}
.e-primary-btn:hover {
    color: var(--theme-color-3) !important;
}
    </style>

    <div class="container">
      <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
          <h1 class="h3 mb-1">Glossary: A — Z</h1>
          <p class="text-muted mb-0 small">A to Z terms are shown in an easy and modern style.</p>
        </div>
        <div class="text-end">
          <small class="text-muted">Updated: 16 Dec 2025</small>
        </div>
      </div>

      <div class="d-flex gap-2 flex-wrap mb-3">
        <button class="btn e-primary-btn letter-btn" data-letter="all">All</button>
        <button class="btn e-primary-btn letter-btn" data-letter="A">A</button>
        <button class="btn e-primary-btn letter-btn" data-letter="B">B</button>
        <button class="btn e-primary-btn letter-btn" data-letter="C">C</button>
        <button class="btn e-primary-btn letter-btn" data-letter="D">D</button>
        <button class="btn e-primary-btn letter-btn" data-letter="E">E</button>
        <button class="btn e-primary-btn letter-btn" data-letter="F">F</button>
        <button class="btn e-primary-btn letter-btn" data-letter="G">G</button>
        <button class="btn e-primary-btn letter-btn" data-letter="H">H</button>
        <button class="btn e-primary-btn letter-btn" data-letter="I">I</button>
        <button class="btn e-primary-btn letter-btn" data-letter="J">J</button>
        <button class="btn e-primary-btn letter-btn" data-letter="K">K</button>
        <button class="btn e-primary-btn letter-btn" data-letter="L">L</button>
        <button class="btn e-primary-btn letter-btn" data-letter="M">M</button>
        <button class="btn e-primary-btn letter-btn" data-letter="N">N</button>
        <button class="btn e-primary-btn letter-btn" data-letter="O">O</button>
        <button class="btn e-primary-btn letter-btn" data-letter="P">P</button>
        <button class="btn e-primary-btn letter-btn" data-letter="R">R</button>
        <button class="btn e-primary-btn letter-btn" data-letter="S">S</button>
        <button class="btn e-primary-btn letter-btn" data-letter="T">T</button>
        <button class="btn e-primary-btn letter-btn" data-letter="U">U</button>
        <button class="btn e-primary-btn letter-btn" data-letter="V">V</button>
        <button class="btn e-primary-btn letter-btn" data-letter="W">W</button>
      </div>

      <div class="d-flex align-items-center search-wrap mb-4">
        <div class="flex-grow-1 me-2">
          <input id="search" type="search" class="form-control form-control-lg" placeholder="search any term...">
        </div>
      </div>

      <div id="glossary" class="row g-3">
      
        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Accountability</div>
                <div class="definition small">The obligation to explain, justify, and take responsibility for decisions, actions, and their consequences.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Agency Problem</div>
                <div class="definition small">A conflict arising when agents prioritize their own interests over those of principals or stakeholders.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">AI Ethics</div>
                <div class="definition small">The study of moral principles guiding the design, use, and governance of artificial intelligence to ensure fairness, accountability, and societal well-being, promoting transparency and minimizing harm.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Algorithmic Bias</div>
                <div class="definition small">Systematic and unfair outcomes produced by algorithms due to biased data, assumptions, or design choices that reflect human prejudices.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Altruism</div>
                <div class="definition small">Selfless concern for the welfare of others, involving actions taken primarily for others' benefit without expectation of personal gain.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Altruistic Cheating</div>
                <div class="definition small">Unethical behavior committed to help others, often justified as serving a greater good; cheating for someone else's benefit.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Amoral Management</div>
                <div class="definition small">A managerial approach where ethical considerations are ignored or viewed as irrelevant to business decisions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Applied Ethics</div>
                <div class="definition small">The application of ethical theories and principles to real-world situations and practical problems in areas like business, medicine, and technology.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Artificial Intelligence (AI)</div>
                <div class="definition small">Computer systems capable of performing tasks that normally require human intelligence, including machine learning and generative AI.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Asymmetric Information</div>
                <div class="definition small">A condition where one party has more or better information than another, creating ethical risks and potential for exploitation.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="A">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">A</div>
              <div>
                <div class="term">Autonomy</div>
                <div class="definition small">The capacity and right of individuals to make informed, voluntary decisions free from coercion; political and personal independence.</div>
              </div>
            </div>
          </div>
        </div>

        <!-- B -->
        <div class="col-sm-6 col-lg-4" data-letter="B">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">B</div>
              <div>
                <div class="term">Behavioral Ethics</div>
                <div class="definition small">The study of how people actually behave in ethical situations, influenced by psychological and social factors; examines why people make the choices they do.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="B">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">B</div>
              <div>
                <div class="term">Beneficence</div>
                <div class="definition small">The ethical obligation to act for the benefit of others; the quality of being kind, helpful, or generous.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="B">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">B</div>
              <div>
                <div class="term">Blame Shifting</div>
                <div class="definition small">Deflecting responsibility for unethical actions onto others to avoid accountability.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="B">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">B</div>
              <div>
                <div class="term">Bounded Ethicality</div>
                <div class="definition small">Predictable limitations that cause individuals to behave unethically without awareness; ethical decision-making is constrained by cognitive biases and situational pressures.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="B">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">B</div>
              <div>
                <div class="term">Bribery</div>
                <div class="definition small">Offering or receiving something of value to improperly influence decisions or gain unfair advantage.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- C -->
        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Care Ethics</div>
                <div class="definition small">An ethical approach emphasizing relationships, empathy, compassion, and responsibility in moral decision-making.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Character Ethics</div>
                <div class="definition small">Ethical evaluation based on moral character traits and virtues rather than rules or consequences.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Cognitive Bias</div>
                <div class="definition small">Systematic patterns of deviation from rational judgment; errors in thinking that affect decision-making in virtually every situation.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Cognitive Dissonance</div>
                <div class="definition small">Psychological discomfort caused by inconsistency between beliefs and actions; mental stress from holding contradictory ideas simultaneously.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Coercion</div>
                <div class="definition small">Forcing action through pressure, threats, or manipulation, violating autonomy.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Compliance</div>
                <div class="definition small">Adherence to laws, regulations, and internal policies governing conduct.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Complicity</div>
                <div class="definition small">Indirect involvement in unethical conduct by enabling, supporting, or failing to prevent it.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Confirmation Bias</div>
                <div class="definition small">The tendency to favor, seek out, and interpret information that confirms existing beliefs while ignoring contradictory evidence.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Conflict of Interest</div>
                <div class="definition small">A situation where personal interests interfere with professional duties; when one's interest conflicts with another's to whom they owe loyalty.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Conformity Bias</div>
                <div class="definition small">The tendency to follow group norms and take behavioral cues from others, even when they conflict with ethical standards or personal judgment.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Consequentialism</div>
                <div class="definition small">An ethical theory judging actions based on their outcomes or consequences; actions producing good results are morally right.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Corporate Social Responsibility (CSR)</div>
                <div class="definition small">Business responsibility toward social, environmental, and economic stakeholders; going beyond minimum requirements to benefit society.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="C">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">C</div>
              <div>
                <div class="term">Corruption</div>
                <div class="definition small">Abuse of entrusted power for private gain; dishonest conduct by people in positions of power.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- D -->
        <div class="col-sm-6 col-lg-4" data-letter="D">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">D</div>
              <div>
                <div class="term">Deontology</div>
                <div class="definition small">An ethical theory emphasizing duties, rules, and moral obligations; uses principles to determine right action regardless of outcomes.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="D">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">D</div>
              <div>
                <div class="term">Diffusion of Responsibility</div>
                <div class="definition small">Reduced sense of accountability when responsibility is shared; people fail to act because they assume others will.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="D">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">D</div>
              <div>
                <div class="term">Due Care</div>
                <div class="definition small">The obligation to take reasonable steps to avoid harm and fulfill responsibilities properly.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="D">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">D</div>
              <div>
                <div class="term">Due Diligence</div>
                <div class="definition small">Systematic investigation to identify ethical, legal, and reputational risks before taking action.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- E -->
        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Climate</div>
                <div class="definition small">Shared perceptions about what constitutes ethical behavior within an organization.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Culture</div>
                <div class="definition small">Formal and informal systems, norms, and practices shaping ethical conduct in organizations.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Dilemma</div>
                <div class="definition small">A situation involving competing moral values with no clear right answer; choosing between conflicting ethical principles.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Egoism</div>
                <div class="definition small">The belief that actions are ethical if they promote self-interest; morality based on self-benefit.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Fading</div>
                <div class="definition small">When ethical aspects of decisions are overlooked as people focus on profit, competition, or other pressures.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Leadership</div>
                <div class="definition small">Leadership that models and promotes ethical conduct through behavior and organizational systems.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Literacy</div>
                <div class="definition small">The ability to recognize and reason through ethical issues effectively.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethical Risk</div>
                <div class="definition small">Potential harm arising from unethical behavior or decisions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="E">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">E</div>
              <div>
                <div class="term">Ethics</div>
                <div class="definition small">The systematic study of moral principles governing behavior and the academic examination of moral obligations.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- F -->
        <div class="col-sm-6 col-lg-4" data-letter="F">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">F</div>
              <div>
                <div class="term">Fairness Bias</div>
                <div class="definition small">The tendency to believe oneself to be more ethical or fair than others actually perceive.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="F">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">F</div>
              <div>
                <div class="term">Fidelity</div>
                <div class="definition small">Faithfulness to obligations, duties, or commitments; loyalty and trustworthiness in relationships and agreements.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="F">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">F</div>
              <div>
                <div class="term">Fiduciary Duty</div>
                <div class="definition small">A legal and ethical obligation to act in the best interest of another party rather than one's own self-interest.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="F">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">F</div>
              <div>
                <div class="term">Fraud</div>
                <div class="definition small">Intentional deception for personal or organizational gain; dishonest misrepresentation.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="F">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">F</div>
              <div>
                <div class="term">Framing</div>
                <div class="definition small">The way information is presented, influencing decisions and judgments.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="F">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">F</div>
              <div>
                <div class="term">Fundamental Attribution Error</div>
                <div class="definition small">Overemphasizing personal traits while underestimating situational factors when judging others' behavior.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- G -->
        <div class="col-sm-6 col-lg-4" data-letter="G">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">G</div>
              <div>
                <div class="term">Good Faith</div>
                <div class="definition small">Honest intention without intent to deceive; sincerity in dealings and transactions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="G">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">G</div>
              <div>
                <div class="term">Governance</div>
                <div class="definition small">Structures and processes for directing, controlling, and holding organizations accountable.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="G">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">G</div>
              <div>
                <div class="term">Groupthink</div>
                <div class="definition small">A desire for consensus that suppresses critical thinking and ethical judgment.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="G">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">G</div>
              <div>
                <div class="term">Growth Mindset</div>
                <div class="definition small">Belief that abilities, intelligence, and ethical capacity can be developed through effort, learning, and persistence.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- H -->
        <div class="col-sm-6 col-lg-4" data-letter="H">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">H</div>
              <div>
                <div class="term">Halo Effect</div>
                <div class="definition small">Allowing positive impressions of one trait to influence unrelated judgments; assuming all qualities are positive based on one favorable characteristic.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="H">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">H</div>
              <div>
                <div class="term">Harm Principle</div>
                <div class="definition small">Actions are permissible unless they cause harm to others; people should be free to act as long as they do not harm others.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="H">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">H</div>
              <div>
                <div class="term">Hedonism</div>
                <div class="definition small">The view that pleasure or happiness is the highest good; a form of consequentialism approving actions that produce pleasure and avoid pain.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="H">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">H</div>
              <div>
                <div class="term">Human Dignity</div>
                <div class="definition small">The inherent worth and value of every individual deserving respect.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="H">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">H</div>
              <div>
                <div class="term">Human Rights</div>
                <div class="definition small">Fundamental rights and freedoms owed to all human beings regardless of status or characteristics.</div>
              </div>
            </div>
          </div>
        </div>

        <!-- I -->
        <div class="col-sm-6 col-lg-4" data-letter="I">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">I</div>
              <div>
                <div class="term">Impartiality</div>
                <div class="definition small">Treating all parties fairly without bias, favoritism, or prejudice in judgment and decision-making.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="I">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">I</div>
              <div>
                <div class="term">Implicit Bias</div>
                <div class="definition small">Unconscious attitudes and stereotypes that influence judgment and behavior.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="I">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">I</div>
              <div>
                <div class="term">In-group/Out-group</div>
                <div class="definition small">Favoring members of one's own group over others; judging similar people more favorably than different people.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="I">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">I</div>
              <div>
                <div class="term">Incrementalism</div>
                <div class="definition small">Gradual ethical decline through small compromises; the slippery slope from minor violations to major wrongs.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="I">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">I</div>
              <div>
                <div class="term">Informed Consent</div>
                <div class="definition small">Voluntary agreement based on adequate information and understanding; permission given with full knowledge.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="I">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">I</div>
              <div>
                <div class="term">Institutional Corruption</div>
                <div class="definition small">Systemic practices that undermine an institution's purpose and mission.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="I">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">I</div>
              <div>
                <div class="term">Integrity</div>
                <div class="definition small">Consistency between values, words, and actions; acting with honesty, fairness, and moral principle.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- J -->
        <div class="col-sm-6 col-lg-4" data-letter="J">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">J</div>
              <div>
                <div class="term">Just Culture</div>
                <div class="definition small">A culture balancing accountability and learning from mistakes without excessive punishment.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="J">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">J</div>
              <div>
                <div class="term">Justice</div>
                <div class="definition small">Fairness in distribution, processes, and outcomes; giving people what they deserve and treating them equitably.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- K -->
        <div class="col-sm-6 col-lg-4" data-letter="K">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">K</div>
              <div>
                <div class="term">Kantian Ethics</div>
                <div class="definition small">Ethics based on universal duties and respect for persons as ends in themselves; associated with deontology and moral absolutism.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- L -->
        <div class="col-sm-6 col-lg-4" data-letter="L">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">L</div>
              <div>
                <div class="term">Legitimacy</div>
                <div class="definition small">Perceived appropriateness and rightfulness of actions, authority, or institutions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="L">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">L</div>
              <div>
                <div class="term">Loss Aversion</div>
                <div class="definition small">Preference for avoiding losses over acquiring equivalent gains; disliking losses more than enjoying gains.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="L">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">L</div>
              <div>
                <div class="term">Loyalty</div>
                <div class="definition small">Faithful commitment to people, organizations, or principles that may create ethical tension with other values.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- M -->
        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Means-Ends Reasoning</div>
                <div class="definition small">Justifying unethical means by appealing to desirable ends; “the ends justify the means” thinking.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Mercy</div>
                <div class="definition small">Compassion that tempers strict justice; showing leniency and kindness even when punishment is justified.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Absolutism</div>
                <div class="definition small">Belief that some actions are inherently right or wrong regardless of context, culture, or consequences.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Accountability</div>
                <div class="definition small">Responsibility for moral choices and their consequences; being answerable for ethical decisions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Agent</div>
                <div class="definition small">An entity capable of moral judgment and ethical action; someone who can be held accountable.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Awareness</div>
                <div class="definition small">Recognition of ethical dimensions in situations; identifying when a situation has moral implications.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Cognition</div>
                <div class="definition small">Mental processes underlying moral judgment; how people make moral decisions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Courage</div>
                <div class="definition small">Willingness to act ethically despite personal risk, social pressure, or negative consequences.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Disengagement</div>
                <div class="definition small">Psychological processes that allow unethical behavior by justifying norm violations.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Distress</div>
                <div class="definition small">Discomfort from being unable to act ethically due to institutional or situational constraints.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Emotions</div>
                <div class="definition small">Emotions like shame, guilt, empathy, and compassion that influence moral behavior.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Equilibrium</div>
                <div class="definition small">Balancing moral behavior over time by comparing self-image with conduct.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Hazard</div>
                <div class="definition small">Risk-taking when consequences are borne by others rather than decision-makers.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Imagination</div>
                <div class="definition small">Ability to envision ethical alternatives and creatively imagine options.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Injury</div>
                <div class="definition small">Psychological harm resulting from actions that violate deeply held moral beliefs.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Licensing</div>
                <div class="definition small">Using past good deeds to justify later unethical behavior.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Luck</div>
                <div class="definition small">Judging morality based on outcomes beyond one’s control.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Muteness</div>
                <div class="definition small">Avoidance of moral language and silence in the face of unethical behavior.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Myopia</div>
                <div class="definition small">Short-sightedness regarding ethical implications and moral challenges.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Philosophy</div>
                <div class="definition small">The study of moral theories, principles, and questions about right and wrong.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Pluralism</div>
                <div class="definition small">Acceptance of multiple, potentially conflicting moral values as equally valid.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Principles</div>
                <div class="definition small">Standards and rules guiding decisions and behavior for individual and collective good.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Psychology</div>
                <div class="definition small">Study of moral behavior, development, reasoning, and the moral sense.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Reasoning</div>
                <div class="definition small">Deliberation about right and wrong; reasoning through moral questions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Relativism</div>
                <div class="definition small">Belief that morality depends on cultural or social context with no universal standards.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Moral Scepticism</div>
                <div class="definition small">Doubting or denying moral knowledge, truth, or justified moral belief.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Morals</div>
                <div class="definition small">Society’s accepted norms and principles of right conduct enabling cooperation.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="M">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">M</div>
              <div>
                <div class="term">Motivated Blindness</div>
                <div class="definition small">Failure to notice unethical behavior due to self-interest.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- N -->
        <div class="col-sm-6 col-lg-4" data-letter="N">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">N</div>
              <div>
                <div class="term">Negligence</div>
                <div class="definition small">Failure to exercise reasonable care, resulting in harm or increased risk.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="N">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">N</div>
              <div>
                <div class="term">Neuroethics</div>
                <div class="definition small">Ethical issues arising from neuroscience and the use of brain science to understand moral decision-making.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="N">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">N</div>
              <div>
                <div class="term">Normative Ethics</div>
                <div class="definition small">The study of how people ought to behave; examines what actions are morally right or wrong.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- O -->
        <div class="col-sm-6 col-lg-4" data-letter="O">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">O</div>
              <div>
                <div class="term">Obedience to Authority</div>
                <div class="definition small">Following orders even when ethically questionable due to pressure from authority figures.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="O">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">O</div>
              <div>
                <div class="term">Ombudsman</div>
                <div class="definition small">An independent official who addresses ethical grievances and conflicts within organizations.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="O">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">O</div>
              <div>
                <div class="term">Optimism Bias</div>
                <div class="definition small">Belief that negative outcomes are less likely for oneself than for others.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="O">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">O</div>
              <div>
                <div class="term">Organizational Justice</div>
                <div class="definition small">Perceived fairness in organizational decisions, processes, and interpersonal treatment.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="O">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">O</div>
              <div>
                <div class="term">Overconfidence Bias</div>
                <div class="definition small">Excessive confidence in one’s judgments and moral reasoning beyond what evidence supports.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- P -->
        <div class="col-sm-6 col-lg-4" data-letter="P">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">P</div>
              <div>
                <div class="term">Paternalism</div>
                <div class="definition small">Interfering with individual autonomy for someone’s perceived benefit.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="P">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">P</div>
              <div>
                <div class="term">Procedural Justice</div>
                <div class="definition small">Fairness of the processes used to make decisions and determine outcomes.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="P">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">P</div>
              <div>
                <div class="term">Professional Ethics</div>
                <div class="definition small">Ethical standards and codes governing specific professions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="P">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">P</div>
              <div>
                <div class="term">Prosocial Behavior</div>
                <div class="definition small">Voluntary actions intended to benefit others.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="P">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">P</div>
              <div>
                <div class="term">Public Interest</div>
                <div class="definition small">The collective welfare and well-being of society as a whole.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- R -->
        <div class="col-sm-6 col-lg-4" data-letter="R">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">R</div>
              <div>
                <div class="term">Rationalizations</div>
                <div class="definition small">Justifications that make unethical actions seem acceptable.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="R">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">R</div>
              <div>
                <div class="term">Reputational Risk</div>
                <div class="definition small">Potential damage to credibility or image from unethical conduct.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="R">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">R</div>
              <div>
                <div class="term">Responsibility Gap</div>
                <div class="definition small">Difficulty assigning accountability in complex or automated systems.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="R">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">R</div>
              <div>
                <div class="term">Restorative Justice</div>
                <div class="definition small">Repairing harm through accountability, dialogue, and reconciliation.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="R">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">R</div>
              <div>
                <div class="term">Role Morality</div>
                <div class="definition small">Applying different moral standards depending on professional roles.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- S -->
        <div class="col-sm-6 col-lg-4" data-letter="S">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">S</div>
              <div>
                <div class="term">Self-Serving Bias</div>
                <div class="definition small">Interpreting situations in ways that favor one’s own interests.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="S">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">S</div>
              <div>
                <div class="term">Social Contract Theory</div>
                <div class="definition small">Moral obligations arising from implicit agreements within society.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="S">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">S</div>
              <div>
                <div class="term">Stakeholder Theory</div>
                <div class="definition small">Organizations owe ethical duties to all stakeholders, not just shareholders.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="S">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">S</div>
              <div>
                <div class="term">Structural Injustice</div>
                <div class="definition small">Systemic inequalities embedded in institutions and social structures.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="S">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">S</div>
              <div>
                <div class="term">Subject of Moral Worth</div>
                <div class="definition small">Any entity deserving moral consideration in ethical decisions.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="S">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">S</div>
              <div>
                <div class="term">Substantive Justice</div>
                <div class="definition small">Fairness of outcomes and results of decisions and policies.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="S">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">S</div>
              <div>
                <div class="term">Sustainability</div>
                <div class="definition small">Meeting present needs without compromising future generations.</div>
              </div>
            </div>
          </div>
        </div>


        <!-- T -->
        <div class="col-sm-6 col-lg-4" data-letter="T">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">T</div>
              <div>
                <div class="term">Tangible & Abstract</div>
                <div class="definition small">
                  Concrete versus indirect ethical impacts; how people focus too much on immediate factors while neglecting abstract consequences removed in time and place.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="T">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">T</div>
              <div>
                <div class="term">Technological Somnambulism</div>
                <div class="definition small">
                  Uncritical, sleepwalking-like acceptance of technological change without considering long-term ethical and societal impacts.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="T">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">T</div>
              <div>
                <div class="term">Tragedy of the Commons</div>
                <div class="definition small">
                  Overuse and damage of shared resources due to self-interest; individuals exploiting common resources harm collective welfare.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="T">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">T</div>
              <div>
                <div class="term">Transparency</div>
                <div class="definition small">
                  Openness and clarity in actions, decisions, and information sharing; making processes and reasoning visible.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="T">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">T</div>
              <div>
                <div class="term">Trust</div>
                <div class="definition small">
                  Expectation of ethical and reliable behavior; confidence in others' integrity and dependability.
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- U -->
        <div class="col-sm-6 col-lg-4" data-letter="U">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">U</div>
              <div>
                <div class="term">Utilitarianism</div>
                <div class="definition small">
                  Maximizing overall happiness or welfare; ethical theory asserting that right actions produce the greatest good for the greatest number.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- V -->
        <div class="col-sm-6 col-lg-4" data-letter="V">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">V</div>
              <div>
                <div class="term">Values</div>
                <div class="definition small">
                  Core beliefs guiding behavior; society's shared beliefs about what is good, bad, and how people should act.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="V">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">V</div>
              <div>
                <div class="term">Veil of Ignorance</div>
                <div class="definition small">
                  Decision-making without knowing one's social position; a thought experiment for envisioning a fair society by imagining ignorance of personal circumstances.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="V">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-warning text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">V</div>
              <div>
                <div class="term">Virtue Ethics</div>
                <div class="definition small">
                  Ethics centered on character and virtues; philosophical approach urging cultivation of virtuous habits like courage, honesty, and compassion.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- W -->
        <div class="col-sm-6 col-lg-4" data-letter="W">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">W</div>
              <div>
                <div class="term">Whistleblowing</div>
                <div class="definition small">
                  Reporting unethical or illegal practices within an organization to authorities or the public.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4" data-letter="W">
          <div class="card p-3 glossary-card h-100">
            <div class="d-flex align-items-start gap-3">
              <div class="flex-shrink-0 rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width:44px;height:44px;font-weight:700">W</div>
              <div>
                <div class="term">White-Collar Crime</div>
                <div class="definition small">
                  Non-violent crimes committed for financial gain, typically by business professionals or government officials.
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-12 text-center mt-3" id="noResults" style="display:none;">
          <div class="py-4">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ghost/ghost-plain.svg" alt="no" style="width:72px;opacity:.15">
            <h5 class="mt-3">No result found</h5>
            <p class="text-muted small">Try again by changing the search or filters.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    (function(){
      const letterBtns = document.querySelectorAll('.letter-btn');
      const cards = Array.from(document.querySelectorAll('#glossary > [data-letter]'));
      const search = document.getElementById('search');
      const noResults = document.getElementById('noResults');
      const gridView = document.getElementById('gridView');
      const listView = document.getElementById('listView');

      function setActiveLetter(letter){
        letterBtns.forEach(b=>b.classList.toggle('active', b.dataset.letter===letter));
        filter();
      }

      letterBtns.forEach(btn=>btn.addEventListener('click', ()=>setActiveLetter(btn.dataset.letter)));
      // default All
      setActiveLetter('all');

      search.addEventListener('input', filter);

      function filter(){
        const q = search.value.trim().toLowerCase();
        const active = Array.from(letterBtns).find(b=>b.classList.contains('active'))?.dataset.letter || 'all';
        let visible = 0;
        cards.forEach(card=>{
          const letter = card.dataset.letter;
          const term = (card.querySelector('.term')?.textContent||'').toLowerCase();
          const def = (card.querySelector('.definition')?.textContent||'').toLowerCase();
          const matchesLetter = (active==='all') || (letter.toLowerCase()===active.toLowerCase());
          const matchesQuery = q === '' || term.includes(q) || def.includes(q);
          const show = matchesLetter && matchesQuery;
          card.style.display = show ? '' : 'none';
          if(show) visible++;
        });
        noResults.style.display = visible ? 'none' : '';
      }

      // view toggles
      gridView.addEventListener('click', ()=>{
        gridView.classList.add('active'); listView.classList.remove('active');
        document.querySelectorAll('#glossary > .col-sm-6').forEach(c=>c.classList.remove('col-12'));
      });
      listView.addEventListener('click', ()=>{
        listView.classList.add('active'); gridView.classList.remove('active');
        document.querySelectorAll('#glossary > .col-sm-6').forEach(c=>c.classList.add('col-12'));
      });

      // accessibility: keyboard navigation for letters
      document.querySelector('.glossary-section').addEventListener('keydown', (e)=>{
        if(e.key.length===1 && /[abcdABCD]/.test(e.key)){
          const letter = e.key.toUpperCase(); setActiveLetter(letter);
        }
      });

    })();
  </script>
@endsection 