<?php
include 'db.php';

if (!isset($_GET['id'])) {
    die("ID mancante.");
}

$sao_vecchio = (int) $_GET['id'];

$res = $conn->query("SELECT * FROM stelle WHERE sao_code = $sao_vecchio") or die($conn->error);

if ($res->num_rows == 0) {
    die("Stella non trovata.");
}

$s = $res->fetch_assoc();

if (isset($_POST['update'])) {

    $sao = (int) $_POST['sao'];
    $nome = $conn->real_escape_string($_POST['nome']);
    $coord = $conn->real_escape_string($_POST['coord']);
    $id_c = (int) $_POST['id_c'];

    $sql = "UPDATE stelle 
            SET sao_code = $sao,
                nome = '$nome',
                coordinate_celesti = '$coord',
                id_costellazione = $id_c
            WHERE sao_code = $sao_vecchio";

    $conn->query($sql) or die($conn->error);

    header("Location: catalogo.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Modifica Stella</title>
</head>
<body>

<div class="container">
    <h1>Modifica Stella: <?php echo $s['nome']; ?></h1>

    <form method="POST">

        <label>Codice SAO</label>
        <input name="sao" value="<?php echo $s['sao_code']; ?>" required>

        <label>Nome Stella</label>
        <input name="nome" value="<?php echo $s['nome']; ?>" required>

        <label>Coordinate</label>
        <input name="coord" value="<?php echo $s['coordinate_celesti']; ?>" required>

        <label>Costellazione</label>
        <select name="id_c">
            <?php
            $cost = $conn->query("SELECT * FROM costellazioni");

            while ($row = $cost->fetch_assoc()) {
                $sel = ($row['id'] == $s['id_costellazione']) ? "selected" : "";
                echo "<option value='{$row['id']}' $sel>{$row['nome']}</option>";
            }
            ?>
        </select>

        <button type="submit" name="update" class="btn">Applica Modifiche</button>

    </form>
</div>

</body>
</html>