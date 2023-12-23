<?php define('TITLE', 'EDIT TASK'); ?>
<?php include '../../config/settings.php'; ?>
<?php include '../../include/database.php'; ?>
<?php include '../../include/header.php'; ?>

<h2>EDIT TASK</h2>

<?php 
    
    $id = $_GET['id']; 

    $stmt = mysqli_prepare(
        $connection, 
        "SELECT `name`, `description` FROM `tm_task` WHERE id = ?; "
    );

    mysqli_stmt_bind_param($stmt, "s", $id);

    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($name, $description);

    $result = $stmt->fetch();
?>

<form action="/task/save/" method="POST">

    <input type="hidden" name="id" value="<?php echo $id; ?>" />

<p>
    <div>NAME</div>
    <div><input name="name" type="text" style="width: 300px;" value="<?php echo $name; ?>" /></div>
</p>

<p>
    <div>DESCRIPTION</div>
    <div>
        <textarea name="description" style="width: 300px;"><?php echo $description; ?></textarea>
    </div>
</p>

<p>
    <button type="submit">
        SAVE
    </button>
</p>

</form>

<?php include '../../include/footer.php'; ?>