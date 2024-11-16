<?php
    function getConn() {
        return new PDO("mysql:host=127.0.0.1;dbname=traffic_police", 'root', 'qwerty123');
    }

	if(isset($_REQUEST['patrolling_district'])){
        create_patrolling_district($_REQUEST['title']);
		header("Location: ./page.php");
	}
	if(isset($_REQUEST['patrolling_district_del'])){
		delete_patrolling_district($_REQUEST['id'],'Patrolling_district');
		header("Location: ./page.php");
	}
    if(isset($_REQUEST['patrolling_district_upd'])){
        update_patrolling_district($_REQUEST['id'],$_REQUEST['title']);
        header("Location: ./page.php");
    }

	function delete_patrolling_district($id, $table_name){
		try{
			$dbh = getConn();
			$dbh->beginTransaction();
			$sql = "DELETE FROM ".$table_name." WHERE id=".$id;
			$dbh->exec($sql);
			$dbh->commit();
		}
		catch(PDOException $e){
			$dbh->rollBack();
		}
	}
	function create_patrolling_district($title){
		try{
			$dbh = getConn();
			$dbh->beginTransaction();
			$sql = "INSERT INTO Patrolling_district (title) VALUES ('".$title."')";
			$dbh->exec($sql);
			$dbh->commit();
		}
		catch(PDOException $e){
			$dbh->rollBack();
			var_dump($e);
		}
	}
    function update_patrolling_district($id, $title){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "UPDATE Patrolling_district SET title = '".$title."' where id = $id";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }

    // Function to fetch all districts
    function get_patrolling_districts() {
        try {
            $dbh = getConn();
            $sql = "SELECT * FROM Patrolling_district";
            return $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return [];
        }
}


    if(isset($_REQUEST['patrol_car'])){
        create_patrol_car($_REQUEST['mark'],$_REQUEST['model'],$_REQUEST['plate']);
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['patrol_car_del'])){
        delete_patrol_car($_REQUEST['id'],'Patrol_car');
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['patrol_car_upd'])){
        update_patrol_car($_REQUEST['id'],$_REQUEST['mark'],$_REQUEST['model'],$_REQUEST['plate']);
        header("Location: ./page.php");
    }

    function delete_patrol_car($id, $table_name){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "DELETE FROM ".$table_name." WHERE id=".$id;
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
        }
    }
    function create_patrol_car($mark,$model,$plate){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "INSERT INTO Patrol_car (mark,model,plate) VALUES ('".$mark."','".$model."','".$plate."')";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }
    function update_patrol_car($id, $mark,$model,$plate){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "UPDATE Patrol_car SET mark = '".$mark."', model = '".$model."',plate = '".$plate."' where id = $id";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }

    function get_patrol_cars(){
        try {
            $dbh = getConn();
            $sql = "SELECT * FROM Patrol_car";
            $stmt = $dbh->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch(PDOException $e){
            var_dump($e);
            return [];
        }
    }


if(isset($_REQUEST['policeman'])){
        create_policeman($_REQUEST['name'],$_REQUEST['surname'],$_REQUEST['position'],$_REQUEST['badge_number'],$_REQUEST['patrolling_district_id'],$_REQUEST['patrol_car_id']);
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['policeman_del'])){
        delete_policeman($_REQUEST['id'],'Policeman');
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['policeman_upd'])){
        update_policeman($_REQUEST['id'],$_REQUEST['name'],$_REQUEST['surname'],$_REQUEST['position'],$_REQUEST['badge_number'],$_REQUEST['patrolling_district_id'],$_REQUEST['patrol_car_id']);
        header("Location: ./page.php");
    }

    function delete_policeman($id, $table_name){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "DELETE FROM ".$table_name." WHERE id=".$id;
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
        }
    }
    function create_policeman($name,$surname,$position,$badge_number,$patrolling_district_id,$patrol_car_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "INSERT INTO Policeman (name,surname,position,badge_number,Patrolling_district_id,Patrol_car_id) 
VALUES ('".$name."','".$surname."','".$position."','".$badge_number."','".$patrolling_district_id."','".$patrol_car_id."')";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }
    function update_policeman($id, $name,$surname,$position,$badge_number,$patrolling_district_id,$patrol_car_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "UPDATE Policeman SET name = '".$name."', surname = '".$surname."', position = '".$position."', badge_number = '".$badge_number."',Patrolling_district_id = '".$patrolling_district_id."', Patrol_car_id = '".$patrol_car_id."' where id = $id";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }

    function get_policemen() {
    try {
        $dbh = getConn();
        $sql = "SELECT * FROM Policeman";
        $stmt = $dbh->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        var_dump($e);
        return [];
    }
    }


if(isset($_REQUEST['offender'])){
        create_offender($_REQUEST['name'],$_REQUEST['surname'],$_REQUEST['driver_license_id']);
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['offender_del'])){
        delete_offender($_REQUEST['id'],'Offender');
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['offender_upd'])){
        update_offender($_REQUEST['id'],$_REQUEST['name'],$_REQUEST['surname'],$_REQUEST['driver_license_id']);
        header("Location: ./page.php");
    }

    function delete_offender($id, $table_name){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "DELETE FROM ".$table_name." WHERE id=".$id;
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
        }
    }
    function create_offender($name,$surname,$driver_license_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "INSERT INTO Offender (name,surname,driver_license_id) VALUES ('".$name."','".$surname."','".$driver_license_id."')";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }
    function update_offender($id, $name,$surname,$driver_license_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "UPDATE Offender SET name = '".$name."', surname = '".$surname."',driver_license_id = '".$driver_license_id."' where id = $id";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }

    function get_offenders(){
        try{
            $dbh = getConn();
            $sql = "SELECT id, name, surname, driver_license_id FROM Offender";
            $stmt = $dbh->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo "<p>Error: " . $e->getMessage() . "</p>";
            return [];
        }
    }

    if(isset($_REQUEST['violation'])){
        create_violation($_REQUEST['title'],$_REQUEST['date'],$_REQUEST['street'],$_REQUEST['car_plate'],$_REQUEST['offender_id']);
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['violation_del'])){
        delete_violation($_REQUEST['id'],'Violation');
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['violation_upd'])){
        update_violation($_REQUEST['id'],$_REQUEST['title'],$_REQUEST['date'],$_REQUEST['street'],$_REQUEST['car_plate'],$_REQUEST['offender_id']);
        header("Location: ./page.php");
    }

    function delete_violation($id, $table_name){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "DELETE FROM ".$table_name." WHERE id=".$id;
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
        }
    }
    function create_violation($title,$date,$street,$car_plate,$offender_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "INSERT INTO Violation (title,date,street,car_plate,Offender_id) VALUES ('".$title."','".$date."','".$street."','".$car_plate."','".$offender_id."')";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }
    function update_violation($id, $title,$date,$street,$car_plate,$offender_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "UPDATE Violation SET title = '".$title."', date = '".$date."',street = '".$street."',car_plate = '".$car_plate."',Offender_id = '".$offender_id."' where id = $id";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }

    function get_violations(){
        try{
            $dbh = getConn();
            $sql = "SELECT id, title, date, street, car_plate, Offender_id FROM Violation";
            $stmt = $dbh->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo "<p>Error: " . $e->getMessage() . "</p>";
            return [];
        }
    }


    if(isset($_REQUEST['report'])){
        create_report($_REQUEST['start_patrolling'],$_REQUEST['end_patrolling'],$_REQUEST['description'],$_REQUEST['policeman_id']);
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['report_del'])){
        delete_report($_REQUEST['id'],'Report');
        header("Location: ./page.php");
    }
    if(isset($_REQUEST['report_upd'])){
        update_report($_REQUEST['id'],$_REQUEST['start_patrolling'],$_REQUEST['end_patrolling'],$_REQUEST['description'],$_REQUEST['policeman_id']);
        header("Location: ./page.php");
    }

    function delete_report($id, $table_name){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "DELETE FROM ".$table_name." WHERE id=".$id;
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
        }
    }
    function create_report($start_patrolling,$end_patrolling,$description,$policeman_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "INSERT INTO Report (start_patrolling,end_patrolling,description,Policeman_id) VALUES ('".$start_patrolling."','".$end_patrolling."','".$description."','".$policeman_id."')";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }
    function update_report($id, $start_patrolling,$end_patrolling,$description,$policeman_id){
        try{
            $dbh = getConn();
            $dbh->beginTransaction();
            $sql = "UPDATE Report SET start_patrolling = '".$start_patrolling."', end_patrolling = '".$end_patrolling."',description = '".$description."',Policeman_id = '".$policeman_id."' where id = $id";
            $dbh->exec($sql);
            $dbh->commit();
        }
        catch(PDOException $e){
            $dbh->rollBack();
            var_dump($e);
        }
    }

    function get_reports() {
        try {
            $dbh = getConn();
            $sql = "SELECT * FROM Report";
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

?>