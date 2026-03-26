<?php 
include 'db.php';
$sao_vecchio = $_GET['id'];
$res = $conn->query("SELECT * FROM stelle WHERE sao_code = '$sao_vecchio'");
$s = $res->fetch_assoc();

if(isset($_POST['update'])){
    $sao = $_POST['sao'];
    $nome = $_POST['nome'];
    $coord = $_POST['coord'];
    $id_c = $_POST['id_c'];
    
    $conn->query("UPDATE stelle SET sao_code='$sao', nome='$nome', coordinate_celesti='$coord', id_costellazione='$id_c' WHERE sao_code='$sao_vecchio'");
    header("Location: catalogo.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
    <h1>Modifica Stella: <?php echo $s['nome']; ?></h1>
    <form method="POST">
        <label>Codice SAO</label>
        <input name="sao" value="<?php echo $s['sao_code']; ?>">
        <label>Nome Stella</label>
        <input name="nome" value="<?php echo $s['nome']; ?>">
        <label>Coordinate</label>
        <input name="coord" value="<?php echo $s['coordinate_celesti']; ?>">
        <label>Costellazione</label>
        <select name="id_c">
            <?php 
            $cost = $conn->query("SELECT * FROM costellazioni");
            while($row = $cost->fetch_assoc()){
                $sel = ($row['id'] == $s['id_costellazione']) ? "selected" : "";
                echo "<option value='".$row['id']."' $sel>".$row['nome']."</option>";
            }
            ?>
        </select>
        <button type="submit" name="update" class="btn">Applica Modifiche</button>
    </form>
</div>
</body>
</html>