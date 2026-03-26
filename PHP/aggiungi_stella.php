<?php include 'db.php';
if(isset($_POST['add'])){
    $sao = $_POST['sao']; $nome = $_POST['nome']; $coord = $_POST['coord']; $id_c = $_POST['id_c'];
    $conn->query("INSERT INTO stelle VALUES ('$sao', '$nome', '$coord', '$id_c')");
    header("Location: catalogo.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
    <nav><a href="index.php">Pagina home</a> | <a href="catalogo.php">Catalogo</a> | <a href="aggiungi_costellazione.php">Aggiungi costellazione</a></nav>
    <h1>Aggiungi Nuova Stella</h1>
    <form method="POST">
        <input name="sao" placeholder="Codice SAO" required>
        <input name="nome" placeholder="Nome Stella" required>
        <input name="coord" placeholder="Coordinate (es. 12h 30m)">
        <select name="id_c">
            <?php 
            $c = $conn->query("SELECT * FROM costellazioni");
            while($row = $c->fetch_assoc()) echo "<option value='".$row['id']."'>".$row['nome']."</option>";
            ?>
        </select>
        <button type="submit" name="add" class="btn">Salva Stella</button>
    </form>
</div>
</body>
</html>