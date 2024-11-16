<?php
// Include the file with the database functions
include '../changer.php';

// Get reports for displaying (fetching data from DB)
$reports = get_reports(); // You will need to implement the get_reports() function
?>

<!-- Display Report Data -->
<h2>Перелік звітів</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Start Patrolling</th>
        <th>End Patrolling</th>
        <th>Description</th>
        <th>Policeman ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($reports as $report) {
        echo "<tr>
                    <td>{$report['id']}</td>
                    <td>{$report['start_patrolling']}</td>
                    <td>{$report['end_patrolling']}</td>
                    <td>{$report['description']}</td>
                    <td>{$report['Policeman_id']}</td>
                  </tr>";
    }
    ?>
    </tbody>
</table>

<div style="display: flex; flex-direction: column; gap: 20px;width: 100%">

    <h3>Додати звіт:</h3>
    <form  method="POST">
        <label for="start_patrolling">Start Patrolling:</label>
        <input type="datetime-local" id="start_patrolling" name="start_patrolling" />
        <label for="end_patrolling">End Patrolling:</label>
        <input type="datetime-local" id="end_patrolling" name="end_patrolling" />
        <input placeholder="Description" type="text" name="description" />
        <input placeholder="Policeman ID" type="text" name="policeman_id" />
        <button type="submit" name="report" onclick="handleDelete()">Add</button>
    </form>

    <h3>Видалити звіт:</h3>
    <form  method="POST">
        <input placeholder="Id" type="text" name="id" />
        <button type="submit" name="report_del" onclick="handleDelete()">Delete</button>
    </form>

    <h3>Редагувати звіт:</h3>
    <form  method="POST">
        <input placeholder="Id" type="text" name="id" />
        <label for="start_patrolling">Start Patrolling:</label>
        <input type="datetime-local" id="start_patrolling" name="start_patrolling" />
        <label for="end_patrolling">End Patrolling:</label>
        <input type="datetime-local" id="end_patrolling" name="end_patrolling" />
        <input placeholder="Description" type="text" name="description" />
        <input placeholder="Policeman ID" type="text" name="policeman_id" />
        <button type="submit" name="report_upd" onclick="handleDelete()">Update</button>
    </form>

</div>
