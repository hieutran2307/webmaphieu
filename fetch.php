<?php
$connect = mysqli_connect("localhost", "root", "", "appgt");
$connect->set_charset("utf8");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM luatgiaothong 
	WHERE PhuongTien LIKE '%".$search."%'
	OR TIeuDe LIKE '%".$search."%' 
	OR NoiDung LIKE '%".$search."%' 
	OR MucPhat LIKE '%".$search."%' 
	OR NghiDinh LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM luatgiaothong  ORDER BY Id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Phương Tiện</th>
							<th>Điều Luật</th>
							<th>Chi Tiết</th>
							<th>Mức Phạt</th>
							<th>Nghị Định</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["PhuongTien"].'</td>
				<td>'.$row["TIeuDe"].'</td>
				<td>'.$row["NoiDung"].'</td>
				<td>'.$row["MucPhat"].'</td>
				<td>'.$row["NghiDinh"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>