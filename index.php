<?php
// index.php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>EQ Test — Home</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <style>
    /* Internal CSS - polished, modern card layout */
    :root{--bg:#0f1724;--card:#0b1220;--accent:#6ee7b7;--muted:#9aa4b2}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial;background:linear-gradient(180deg,#071027 0%,#0b1220 100%);color:#e6eef6;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px}
    .container{max-width:920px;width:100%}
    .hero{display:grid;grid-template-columns:1fr 420px;gap:24px;align-items:center}
    .intro h1{font-size:clamp(24px,4vw,40px);margin:0 0 12px;line-height:1.05}
    .card{background:linear-gradient(180deg,rgba(255,255,255,0.02),rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.04);padding:28px;border-radius:16px;box-shadow:0 10px 30px rgba(2,6,23,0.6)}
    p.lead{color:var(--muted);margin:0 0 18px}
    .cta{display:flex;gap:12px;align-items:center}
    .btn{background:var(--accent);color:#062028;padding:12px 18px;border-radius:12px;border:none;font-weight:700;cursor:pointer;box-shadow:0 10px 20px rgba(110,231,183,0.12);transition:transform .14s ease}
    .btn:hover{transform:translateY(-4px)}
    .meta{font-size:13px;color:var(--muted);margin-top:12px}
    .panel{padding:24px;border-radius:12px;background:linear-gradient(180deg,#06111a,#071624);border:1px solid rgba(255,255,255,0.03)}
    ul.features{list-style:none;padding:0;margin:0}
    ul.features li{padding:8px 0;border-bottom:1px dashed rgba(255,255,255,0.02);color:var(--muted)}
    footer{margin-top:22px;color:var(--muted);font-size:13px;text-align:center}
    @media (max-width:900px){.hero{grid-template-columns:1fr;}.panel{order:-1}}
  </style>
</head>
<body>
  <div class="container">
    <div class="hero">
      <div class="intro card">
        <h1>Emotional Intelligence (EQ) Test</h1>
        <p class="lead">Measure your emotional awareness, empathy, and regulation. This short test helps you identify strengths and areas to improve — with personalized feedback at the end.</p>
 
        <div class="cta">
          <button class="btn" id="startBtn">Start Test</button>
          <button class="btn" id="historyBtn" style="background:transparent;border:1px solid rgba(255,255,255,0.06;color:#d7eef7">View Past Results</button>
        </div>
 
        <div class="meta">Duration: ~5–10 minutes • Questions load dynamically • Mobile-friendly</div>
      </div>
 
      <div class="panel card">
        <h3 style="margin:0 0 12px">What you’ll get</h3>
        <ul class="features">
          <li>Multiple-choice questions focused on self-awareness, empathy, regulation</li>
          <li>Instant score & tailored feedback</li>
          <li>Option to retake and share results</li>
        </ul>
      </div>
    </div>
 
    <footer>Built with PHP, MySQL, HTML, internal CSS & JS — by your EQ app</footer>
  </div>
 
  <script>
    document.getElementById('startBtn').addEventListener('click', function(){
      // JS redirection (no PHP redirect)
      window.location.href = 'quiz.php';
    });
    document.getElementById('historyBtn').addEventListener('click', function(){
      window.location.href = 'results_history.php';
    });
  </script>
</body>
</html>
 
