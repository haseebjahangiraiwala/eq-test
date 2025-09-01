<?php
// results_history.php
require 'db.php';
$stmt = $pdo->query("SELECT id, user_name, score, total, percent, created_at FROM eq_results ORDER BY created_at DESC LIMIT 50");
$rows = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Past Results</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <style>
    body{font-family:Inter,system-ui,Arial;background:#05111a;color:#eaf6ff;margin:0;padding:18px}
    .card{max-width:960px;margin:0 auto;padding:18px;border-radius:10px;background:linear-gradient(180deg,#071824,#06131b);border:1px solid rgba(255,255,255,0.02)}
    table{width:100%;border-collapse:collapse;color:#dff3ff}
    th,td{padding:10px;border-bottom:1px solid rgba(255,255,255,0.03);text-align:left}
    a.view{color:#7dd3fc;font-weight:700}
    .top{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px}
  </style>
</head>
<body>
  <div class="card">
    <div class="top">
      <h2>Past Results</h2>
      <div><a href="index.php">← Home</a></div>
    </div>
 
    <table>
      <thead><tr><th>#</th><th>Name</th><th>Score</th><th>%</th><th>Date</th><th>View</th></tr></thead>
      <tbody>
      <?php foreach ($rows as $r): ?>
      <tr>
        <td><?= htmlspecialchars($r['id']) ?></td>
        <td><?= htmlspecialchars($r['user_name']) ?></td>
        <td><?= htmlspecialchars($r['score']) ?> / <?= htmlspecialchars($r['total']) ?></td>
        <td><?= htmlspecialchars($r['percent']) ?>%</td>
        <td><?= htmlspecialchars($r['created_at']) ?></td>
        <td><a class="view" href="submit.php?result_id=<?= $r['id'] ?>">View</a></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
 
