<?php 
include 'db.php'; 
if(isset($_POST['salva'])){
    $nome = $_POST['nome'];
    $conn->query("INSERT INTO costellazioni (nome) VALUES ('$nome')");
    header("Location: catalogo.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
    <nav><a href="index.php">Home</a> | <a href="catalogo.php">Catalogo</a> | <a href="aggiungi_stella.php">Aggiungi stella</a></nav>
    <h1>Nuova Costellazione</h1>
    <form method="POST">
        <input name="nome" placeholder="Nome Costellazione (es. Orione)" required>
        <button type="submit" name="salva" class="btn">Aggiungi</button>
    </form>
</div>
</body>
</html>