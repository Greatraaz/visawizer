<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ethics4Work - Thank You</title>
</head>
<body style="margin:0; padding:0; background:#f4f4f4; font-family:Arial, sans-serif;">

    <div style="max-width:600px; margin:30px auto; background:white; border-radius:12px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.1);">

        <!-- Header -->
        <div style="background:var(--theme-color-3); padding:25px 30px; color:white;text-align: center;">
            <h2 style="margin:0; font-size:24px;">Thank You for Your Interest!</h2>
        </div>

        <!-- Body -->
        <div style="padding:30px; color:#333;">

            <p style="font-size:16px; line-height:1.6;">
                Hi <strong>{{ $name }}</strong>,  
            </p>

            <p style="font-size:16px; line-height:1.6;">
                Thank you for your interest in the <strong>{{ $courseName }}</strong> with <strong><span class="green">Ethics<span class="golden">4</span>Work</span></strong>.
                You’re exactly our kind of learner—curious, pragmatic, and eager to turn values into everyday decisions.
            </p>

            <h3 style="color:var(--theme-color-3); margin-top:25px;">What you can expect</h3>
            <ul style="font-size:16px; line-height:1.6; padding-left:20px;">
                <li><strong>Applied, not abstract:</strong> real dilemmas, role-plays, and take-home toolkits you’ll actually use on Monday.</li>
                <li><strong>Culture by design:</strong> rituals and micro-behaviours that compound into trust and performance.</li>
                <li><strong>Measurable outcomes:</strong> dashboards, reflection prompts, and simple ways to track progress.</li>
            </ul>

            <!-- <p style="font-size:16px; line-height:1.6;">
                <strong>Syllabus & Overview:</strong> 
                <a href="{courseOverviewLink}" style="color:var(--theme-color-3); text-decoration:none; font-weight:bold;">
                    Download the Course Overview
                </a>
            </p> -->

            <h3 style="color:var(--theme-color-3); margin-top:25px;">Make your next move</h3>
            <ul style="font-size:16px; line-height:1.6; padding-left:20px;">
                <li><strong>Tell us your goals:</strong> What do you want to improve in your team/role over the next 90 days?</li>
                <li><strong>Pick a format:</strong> cohort workshop • executive intensive • campus module • custom in-house.</li>
                <li><strong>Book a 20-min call:</strong> Share two time slots that suit you this week and we’ll lock one in.</li>
            </ul>

            <p style="font-size:16px; line-height:1.6;">
                If you already have specific scenarios you’d like us to cover (e.g., speak-up systems, fair marketing claims,
                AI transparency, supply-chain due diligence), hit reply with a few lines—we’ll tailor examples accordingly.
            </p>

            <p style="font-size:16px; line-height:1.6;">
                Warmly,<br>
                <strong>Team <span class="green">Ethics<span class="golden">4</span>Work</span></strong><br>
                Ethics that Works at Work<br>
                Email: <a href="mailto:{{ config('site.email1') }}" style="color:var(--theme-color-3);">{{ config('site.email1') }}</a><br>
                Web: <a href="https://ethics4work.com" style="color:var(--theme-color-3);">https://ethics4work.com</a>
            </p>

            <p style="font-size:15px; margin-top:25px; padding:20px; background:#f9f9f9; border-left:4px solid var(--theme-color-3);">
                <strong>P.S.</strong> Prefer a quick start?  
                We can hold a <strong>free discovery session</strong> for your team to map dilemmas → decisions → rituals in 45 minutes.  
                Just click <a href="https://calendly.com/ethics4work/30min" style="color:var(--theme-color-3); font-weight:bold;">schedule your meeting</a>.
            </p>

        </div>
    </div>

</body>
</html>
