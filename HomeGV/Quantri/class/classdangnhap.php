<?php

class login
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
	function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysqli_query($link, $sql))
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
	
	public function load_ds_sinhvien($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'
						  <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Mã sinh viên</th>
                                                        <th>Tên sinh viên</th>
														<th>Địa chỉ</th>
                                              
                                                        <th>Email</th>
                                                        <th>Lớp học phần</th>
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id_sinhvien'];
				$tensv=$row['hoten'];
				$diachi=$row['diachi'];
				$email=$row['email'];
				$tenlhp=$row['lop'];
				echo'
						  <tr>
                                                        <th scope="row"><a href="?id='.$id.'">'.$id.'</a></th>
                                                        <td><a href="?id='.$id.'">'.$tensv.'</a</td>
														 <td><a href="?id='.$id.'">'.$diachi.'</a</td>
                                                        <td><a href="?id='.$id.'">'.$email.'</a></td>
                                                        <td><a href="?id='.$id.'">'.$tenlhp.'</a></td>
                                                        
                                                    	
                                                        
                                                    </tr>';		
			}
			echo'
			</tbody>
			</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	
	public function load_ds_giangvien($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'
						  <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Mã giảng viên</th>
                                                        <th>Họ tên giảng viên </th>
														<th>Địa chỉ</th>
														<th>Số điện thoại</th>
                                                        <th>Email</th>
														
                                                    </tr>
                                                </thead>
                                                <tbody>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id_giangvien'];
				$tengv=$row['hoten'];
				$diachi=$row['diachi'];
				$sdt=$row['sdt'];
				$email=$row['email'];
				$id_taikhoan=$row['id_taikhoan'];
				
				echo'
						  <tr>
                                                        <th scope="row"><a href="?id='.$id.'">'.$id.'</a></th>
                                                        <td><a href="?id='.$id.'">'.$tengv.'</a</td>
														 <td><a href="?id='.$id.'">'.$diachi.'</a</td>
														 <td><a href="?id='.$id.'">'.$sdt.'</a</td>
                                                        <td><a href="?id='.$id.'">'.$email.'</a></td>
														
                                                  
                                                    	
                                                        
                                                    </tr>';		
			}
			echo'
			</tbody>
			</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
		public function load_ds_monhoc($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'
						  <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th >Mã môn học</th>
                                                        <th>Tên môn học</th>
														<th>thời gian học</th>
														<th> Năm học </th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id_monhoc'];
				$tenmh=$row['tenmh'];
				$thoigian=$row['thoigianhoc'];
				$namhoc=$row['namhoc'];
				
				
				echo'
						  <tr>
                                                        <th  scope="row"><a href="?id='.$id.'">'.$id.'</a></th>
                                                        <td><a href="?id='.$id.'">'.$tenmh.'</a</td>
														 <td><a href="?id='.$id.'">'.$thoigian.'</a</td>
														 <td><a href="?id='.$id.'">'.$namhoc.'</a</td>
                                                        
                                                  
                                                    	
                                                        
                                                    </tr>';		
			}
			echo'
			</tbody>
			</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	
	public function load_id_taikhoan($sql)
	{
		
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<span class="error" style="color:red;">Lưu ý tên người dùng phải trùng với id tài khoản   </span>';
			echo'<select name="id_taikhoan" id="id_taikhoan">
                     <option value="0">chọn id tài khoản</option>';
			
					 
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id_taikhoan'];
				$tennguoidung=$row['tennguoidung'];
				echo'<option value=" '.$id.' " >'.$tennguoidung.'</option>
                         ';
						 
				
			}	
			echo'</select>';
		}
		
	}
	
	
	
	

	
		 
}
?>