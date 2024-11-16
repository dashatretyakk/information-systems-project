
<?php
// Include the file with the database functions
include '../changer.php';
$districts = get_patrolling_districts();
?>

<h2>Перелік районів</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
    </tr>
    <?php foreach ($districts as $district): ?>
    <tr>
        <td><?php echo htmlspecialchars($district['id']); ?></td>
        <td><?php echo htmlspecialchars($district['title']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<div style="display: flex; flex-direction: column; gap: 20px;width: 100%">
    <h3>Додати район:</h3>
    <form method="POST">
        <input placeholder="Title" type="text" name="title" />
        <button type="submit" name="patrolling_district" onclick="handleDelete()">Add</button>
    </form>

    <h3>Видалити район:</h3>
    <form  method="POST">
        <input placeholder="Id" type="text" name="id" />
        <button type="submit" name="patrolling_district_del" onclick="handleDelete()">Delete</button>
    </form>

    <h3>Редагувати район:</h3>
    <form  method="POST">
        <input placeholder="Id" type="text" name="id" />
        <input placeholder="Title" type="text" name="title" />
        <button type="submit" name="patrolling_district_upd" onclick="handleDelete()">Update</button>
    </form>

</div>
