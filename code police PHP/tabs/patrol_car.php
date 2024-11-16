
<?php
// Include the file with the database functions
include '../changer.php';
$patrolCars = get_patrol_cars();
?>

<!-- Display Patrol Car Data -->
<h2>Перелік автомобілів</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Mark</th>
        <th>Model</th>
        <th>Plate</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($patrolCars as $car) {
        echo "<tr>
                        <td>{$car['id']}</td>
                        <td>{$car['mark']}</td>
                        <td>{$car['model']}</td>
                        <td>{$car['plate']}</td>
                      </tr>";
    }
    ?>
    </tbody>
</table>

<div style="display: flex; flex-direction: column; gap: 20px;width: 100%">

    <h3>Додати патрульний автомобіль:</h3>
    <form method="POST">
        <input placeholder="Mark" type="text" name="mark" />
        <input placeholder="Model" type="text" name="model" />
        <input placeholder="Plate" type="text" name="plate" />
        <button type="submit" name="patrol_car" onclick="handleDelete()">Add</button>
    </form>

    <h3>Видалити патрульний автомобіль:</h3>
    <form method="POST">
        <input placeholder="Id" type="text" name="id" />
        <button type="submit" name="patrol_car_del" onclick="handleDelete()">Delete</button>
    </form>

    <h3>Редагувати патрульний автомобіль:</h3>
    <form method="POST">
        <input placeholder="Id" type="text" name="id" />
        <input placeholder="Mark" type="text" name="mark" />
        <input placeholder="Model" type="text" name="model" />
        <input placeholder="Plate" type="text" name="plate" />
        <button type="submit" name="patrol_car_upd" onclick="handleDelete()">Update</button>
    </form>

</div>