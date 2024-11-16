
<?php
// Include the file with the database functions
include '../changer.php';
$policemen = get_policemen();
?>

<!-- Display Policemen Data -->
<h2>Перелік інспекторів</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Position</th>
        <th>Badge Number</th>
        <th>Patrolling District ID</th>
        <th>Patrol Car ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($policemen as $policeman) {
        echo "<tr>
                        <td>{$policeman['id']}</td>
                        <td>{$policeman['name']}</td>
                        <td>{$policeman['surname']}</td>
                        <td>{$policeman['position']}</td>
                        <td>{$policeman['badge_number']}</td>
                        <td>{$policeman['Patrolling_district_id']}</td>
                        <td>{$policeman['Patrol_car_id']}</td>
                      </tr>";
    }
    ?>
    </tbody>
</table>

<div style="display: flex; flex-direction: column; gap: 20px;width: 100%">

    <h3>Додати інспектора:</h3>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="surname" placeholder="Surname" />
        <input type="text" name="position" placeholder="Position" />
        <input type="text" name="badge_number" placeholder="Badge Number" />
        <input type="text" name="patrolling_district_id" placeholder="Patrolling District ID" />
        <input type="text" name="patrol_car_id" placeholder="Patrol Car ID" />
        <button type="submit" name="policeman" onclick="handleDelete()">Add</button>
    </form>

    <h3>Видалити інспектора:</h3>
    <form method="POST">
        <input type="text" name="id" placeholder="ID" />
        <button type="submit" name="policeman_del" onclick="handleDelete()">Delete</button>
    </form>

    <h3>Редагувати інспектора:</h3>
    <form  method="POST">
        <input type="text" name="id" placeholder="ID" />
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="surname" placeholder="Surname" />
        <input type="text" name="position" placeholder="Position" />
        <input type="text" name="badge_number" placeholder="Badge Number" />
        <input type="text" name="patrolling_district_id" placeholder="Patrolling District ID" />
        <input type="text" name="patrol_car_id" placeholder="Patrol Car ID" />
        <button type="submit" name="policeman_upd" onclick="handleDelete()">Update</button>
    </form>

</div>