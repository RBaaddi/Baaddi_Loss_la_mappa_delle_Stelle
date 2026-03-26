<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
    <nav><a href="index.php">Pagina home</a> | <a href="aggiungi_stella.php">Aggiungi stella</a> | <a href="aggiungi_costellazione">Aggiungi costellazione</a></nav>
    <h1>Catalogo Galattico</h1>
    <table>
        <tr><th>Stella</th><th>SAO</th><th>Costellazione</th><th>Azioni</th></tr>
        <?php
        $res = $conn->query("SELECT s.*, c.nome as c_nome FROM stelle s LEFT JOIN costellazioni c ON s.id_costellazione = c.id ORDER BY c.nome");
        while($row = $res->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['sao_code']; ?></td>
                <td><?php echo $row['c_nome'] ?? 'Nessuna'; ?></td>
                <td>
                    <a href="modifica_stella.php?id=<?php echo $row['sao_code']; ?>">Modifica</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>