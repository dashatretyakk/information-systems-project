<?php
// Include the file with the database functions
include '../changer.php';
$offenders = get_offenders();
?>

<!-- Display Offender Data -->
<h2>Перелік правопорушників</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Driver License ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($offenders as $offender) {
        echo "<tr>
                    <td>{$offender['id']}</td>
                    <td>{$offender['name']}</td>
                    <td>{$offender['surname']}</td>
                    <td>{$offender['driver_license_id']}</td>
                  </tr>";
    }
    ?>
    </tbody>
</table>

<div style="display: flex; flex-direction: column; gap: 20px;width: 100%">

    <h3>Додати правопорушника:</h3>
    <form  method="POST">
        <input placeholder="Name" type="text" name="name" />
        <input placeholder="Surname" type="text" name="surname" />
        <input placeholder="Driver License ID" type="text" name="driver_license_id" />
        <button type="submit" name="offender" onclick="handleDelete()">Add</button>
    </form>

    <h3>Видалити правопорушника:</h3>
    <form  method="POST">
        <input placeholder="Id" type="text" name="id" />
        <button type="submit" name="offender_del" onclick="handleDelete()">Delete</button>
    </form>

    <h3>Редагувати правопорушника:</h3>
    <form  method="POST">
        <input placeholder="Id" type="text" name="id" />
        <input placeholder="Name" type="text" name="name" />
        <input placeholder="Surname" type="text" name="surname" />
        <input placeholder="Driver License ID" type="text" name="driver_license_id" />
        <button type="submit" name="offender_upd" onclick="handleDelete()">Update</button>
    </form>

</div>