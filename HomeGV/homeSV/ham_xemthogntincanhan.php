<?php
class login2
{
	private function connect()
	{
		$con=mysqli_connect("localhost","root","","qlhv");
		if(!$con)
		{
			echo'Khong ket noi du lieu';
			exit();
		}
		else
		{
			
			mysqli_set_charset($con,"utf8");
			return $con;
		}
	}
	public function load_thaoluan($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
						  <tr >
							<td>Tên người dùng</td>
							<td>Nội dung</td>
							</tr>';
							while($row=mysqli_fetch_array($ketqua))
							{
								$id=$row['id_binhluan'];
								$tenbinhluan=$row['ten_binhluan'];
								$noidung=$row['binhluan']
								;
								echo'
								<tr>
									<td>'.$tenbinhluan.'</td>
									<td>'.$noidung.'</td>
								 </tr>';
								
								
								
							}
							echo'</table>';
			
		
		}
		else
		{
			
			echo'không có dữ liệu';
		}
		
	}
	
	
	
   
	    

	public function load_ds_lhp1($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			
			echo'        <table class="table mb-0">
                        <thead>
                          <tr>
                            <th>Tên môn học</th>
                            <th>Mã môn học</th>
                            <th>Thời gian học</th>
							 <th>Năm học</th>
                          </tr>
						  </thead>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
			
				$id=$row['id_monhoc'];
				$tenlhp=$row['tenmh'];
				$time=$row['thoigianhoc'];
				$namhoc=$row['namhoc'];
				
				
				echo'<tbody>
                          <tr>
                            <th scope="row"><a href="uploadfile.php"> '.$tenlhp.'</a></th>
                            <td><a href="uploadfile.php"> '.$id.'</a></td>
                            <td><a href="uploadfile.php"> '.$time.'</a></td>
							  <td><a href="uploadfile.php"> '.$namhoc.'</a></td>
							
                           
                            
                          </tr>

                        </tbody> ';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_lhp($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			
			echo'        <table class="table mb-0">
                        <thead>
                          <tr>
                            <th>Tên môn học</th>
                            <th>Mã môn học</th>
                            <th>Thời gian học</th>
							 <th>Năm học</th>
                          </tr>
						  </thead>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
			
				$id=md5($row['id_monhoc']);
				$idmh=$row['id_monhoc'];
				$tenlhp=$row['tenmh'];
				$time=$row['thoigianhoc'];
				$namhoc=$row['namhoc'];
				
				
				echo'<tbody>
                          <tr>
                            <th scope="row"><a href="uploadfile.php?id='.$id.'"> '.$tenlhp.'</a></th>
                            <td><a href="uploadfile.php?id='.$id.'"> '.$idmh.'</a></td>
                            <td><a href="uploadfile.php?id='.$id.'"> '.$time.'</a></td>
							  <td><a href="uploadfile.php?id='.$id.'"> '.$namhoc.'</a></td>
							
                           
                            
                          </tr>

                        </tbody> ';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	
	
	
	
	public function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysqli_query($link,$sql))
		{
			return 1;
		}
		else
		{
			return 0;
		}
		
	}
	
	
		public function laycot($sql)
	{
		$link=$this->connect(); //gọi lại kết nối
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua); 
		$giatri='';
		if($i>0)
		{
			
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['0'];
				$giatri=$id;
			}
		}
		return $giatri;
		
	}
	
	public function uploadfile($name,$tmp_name,$folder)
	{
		if($name!=''&& $tmp_name!='' && $folder!='')
		{
			$newname=$folder."/".$name;
			if(move_uploaded_file($tmp_name,$newname))
			{
				return 1;
			}
			return 0;

		}

	}
	public function loaddanhsachfile($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">';
			
		
			
			while($row=mysqli_fetch_array($ketqua))
			{
			
				
				$ten_file=$row['name_file'];
				
				
				echo'<tbody>
                          <tr>
                            <th scope="row">'.$ten_file.'</th>
                            <td><a download = "'.$ten_file.'" href="folder/'.$ten_file.'">Tải file</a></td>
                          </tr>

                        </tbody> ';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
		
	}
	

	
	
	
		
	
}
	
?>