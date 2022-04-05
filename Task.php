<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	function addData(){
		if (isset($_POST['add'])) {
			$name = $_POST['tname'];
			$deadline = $_POST['tdeadline'];
			$details = $_POST['tdetails'];
			$subject = $_POST['tsubject'];
			$priority = $_POST['tpriority'];
			$status = 'Belum';

			$sql = "INSERT INTO tb_to_do".
				   "(name_td, deadline_td, details_td, subject_td, priority_td, status_td) VALUES ".
				   "('$name', '$deadline', '$details', '$subject', '$priority', '$status')";

			// Mengeksekusi query
			return $this->execute($sql);	   		   	
		}
	}
	function dellData(){
		if (isset($_GET['id_hapus'])) {
			$id = $_GET['id_hapus'];

			$sql = "DELETE FROM tb_to_do WHERE id='$id'";

			// Mengeksekusi query
			return $this->execute($sql);
		}
	}
	function updateData(){
		if (isset($_GET['id_status'])) {
			$id = $_GET['id_status'];

			$sql = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id='$id'";

			// Mengeksekusi query
			return $this->execute($sql);
		}
	}
	function orderData(){
		if (isset($_GET['id_order'])) {
			$id = $_GET['id_order'];

			$sql = "SELECT * FROM tb_to_do ORDER BY $id ASC";

			// Mengeksekusi query
			return $this->execute($sql);
		}
	}
}

?>