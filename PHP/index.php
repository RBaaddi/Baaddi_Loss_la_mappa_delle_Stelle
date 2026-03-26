<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
    <nav><a href="catalogo.php">Catalogo</a> | <a href="aggiungi_stella.php">Aggiungi stella</a> | <a href="aggiungi_costellazione.php">Aggiungi costellazione</a></nav>
    <h1>La Mappa delle Stelle</h1>
    <?php
    $res = $conn->query("SELECT * FROM stelle ORDER BY RAND() LIMIT 1");
    
    if($s = $res->fetch_assoc()): ?>
        <div style="text-align:center; border: 2px solid var(--star-gold); padding: 20px;">
            <h2><?php echo $s['nome']; ?></h2>
            <p>Codice SAO: <?php echo $s['sao_code']; ?></p>
            <p>Coordinate: <?php echo $s['coordinate_celesti']; ?></p>
        </div>
    <?php else: echo "<p>Nessuna stella trovata.</p>"; endif; ?>
</div>
</body>
</html>