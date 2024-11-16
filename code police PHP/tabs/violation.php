<?php
// Include the file with the database functions
include '../changer.php';
$violations = get_violations();
?>

<!-- Display Violation Data -->
<h2>Перелік правопорушень</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Date</th>
        <th>Street</th>
        <th>Car Plate</th>
        <th>Offender ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($violations as $violation) {
        echo "<tr>
                    <td>{$violation['id']}</td>
                    <td>{$violation['title']}</td>
                    <td>{$violation['date']}</td>
                    <td>{$violation['street']}</td>
                    <td>{$violation['car_plate']}</td>
                    <td>{$violation['Offender_id']}</td>
                  </tr>";
    }
    ?>
    </tbody>
</table>

<div style="display: flex; flex-direction: column; gap: 20px;width: 100%">

    <h3>Додати правопорушення:</h3>
    <form method="POST">
        <input placeholder="Title" type="text" name="title" />
        <label for="date">Date:</label>
        <input placeholder="Date" type="datetime-local" name="date" />
        <input placeholder="Street" type="text" name="street" />
        <input placeholder="Car Plate" type="text" name="car_plate" />
        <input placeholder="Offender ID" type="text" name="offender_id" />
        <button type="submit" name="violation" onclick="handleDelete()">Add</button>
    </form>

    <h3>Видалити правопорушення:</h3>
    <form  method="POST">
        <input placeholder="Id" type="text" name="id" />
        <button type="submit" name="violation_del" onclick="handleDelete()">Delete</button>
    </form>

    <h3>Редагувати правопорушення:</h3>
    <form method="POST">
        <input placeholder="Id" type="text" name="id" />
        <input placeholder="Title" type="text" name="title" />
        <label for="date">Date:</label>
        <input placeholder="Date" type="datetime-local" name="date" />
        <input placeholder="Street" type="text" name="street" />
        <input placeholder="Car Plate" type="text" name="car_plate" />
        <input placeholder="Offender ID" type="text" name="offender_id" />
        <button type="submit" name="violation_upd" onclick="handleDelete()">Update</button>
    </form>

</div>
