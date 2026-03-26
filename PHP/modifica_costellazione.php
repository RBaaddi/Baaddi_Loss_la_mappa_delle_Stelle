<?php 
include 'db.php'; 
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM costellazioni WHERE id = $id");
$c = $res->fetch_assoc();

if(isset($_POST['aggiorna'])){
    $nuovo_nome = $_POST['nome'];
    $conn->query("UPDATE costellazioni SET nome='$nuovo_nome' WHERE id=$id");
    
    header("Location: catalogo.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
    <h1>Modifica Costellazione</h1>
    <form method="POST">
        <input name="nome" value="<?php echo $c['nome']; ?>" required>
        <button type="submit" name="aggiorna" class="btn">Aggiorna</button>
    </form>
</div>
</body>
</html>