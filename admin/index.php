<?php
include "../model/pdo.php";
include "./layouts/header.php";
//controller

$message ="";
if(isset($_GET['act'])){
  $act = $_GET['act'];
  switch ($act) {
    // case dùng để add lớp học phần
    case 'add_lophp':
      //kiểm tra xem người dùng có click vào nút add hay không
      if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
        //lấy dữ liệu từ form
        $tenlophp = $_POST['TenLop'];
        $malophp = $_POST['MaLop'];
        $id_HP = $_POST['id_HocPhan'];
        $id_GV = $_POST['id_GiangVien'];
        $sql = "INSERT INTO tbllophp(TenLop, MaLop, id_HocPhan, id_GiangVien) 
                VALUES ('$tenlophp', '$malophp', '$id_HP', '$id_GV')";
        try {
          pdo_execute($sql);
          $message = "Thêm thành công";
        } catch (Exception $e) {
          $message = "Lỗi: " . $e->getMessage();
        } 
      
      }
      include "./lophp/add_lophp.php";
      break;

      // case lấy danh sách lớp học phần từ cơ sở dữ liệu
      case 'ds_lophp':
        $sql = "SELECT * FROM tbllophp ORDER BY id DESC";
        $dslophp = pdo_query($sql);
        include "./lophp/ds_lophp.php";
        break; 
      // case xoá danh sách lớp học phần  
      case 'xoa_lophp':
        if(isset($_GET['id']) && ($_GET['id']>0)){
          $sql = "DELETE FROM tbllophp WHERE id=".$_GET['id'];
          pdo_execute($sql);
        }
        // sau khi xoá xong thì gọi lại danh sách lớp học phần
        $sql = "SELECT * FROM tbllophp ORDER BY id DESC";
        $dslophp = pdo_query($sql);
        try {
          pdo_query($sql);
          $message = "Xoá thành công";
        } catch (Exception $e) {
          $message = "Lỗi: " . $e->getMessage();
        }
        include "./lophp/ds_lophp.php";
        break;
      // case dùng để sửa lớp học phần
      case 'sua_lophp':
        if(isset($_GET['id']) && ($_GET['id']>0)){
          $sql = "SELECT * FROM tbllophp WHERE id=".$_GET['id'];
          $lhp = pdo_query_one($sql);
        }
        include "./lophp/update_lophp.php";
        break;
      case 'update_lophp':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $tenlophp = $_POST['TenLop'];
          $malophp = $_POST['MaLop'];
          $id_HP = $_POST['id_HocPhan'];
          $id_GV = $_POST['id_GiangVien'];
          $id = $_POST['id'];
          $sql = "UPDATE tbllophp 
          SET TenLop = '".$tenlophp."', MaLop = '".$malophp."', id_HocPhan = '".$id_HP."', id_GiangVien = '".$id_GV."' 
          WHERE id=".$id;
          pdo_execute($sql);
          $message = "Cập nhật thành công";
      }
      $sql = "SELECT * FROM tbllophp ORDER BY id DESC";
      $dslophp = pdo_query($sql);
      include "./lophp/ds_lophp.php";
      break;
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
      // case dùng để add khoa
      case 'add_khoa':
        //kiểm tra xem người dùng có click vào nút add hay không
        if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
          //lấy dữ liệu từ form
          $tenkhoa = $_POST['TenKhoa'];
          $makhoa = $_POST['MaKhoa'];
  
          $sql = "INSERT INTO tblkhoa(TenKhoa, MaKhoa) 
                  VALUES ('$tenkhoa', '$makhoa')";
          try {
            pdo_execute($sql);
            $message = "Thêm thành công";// thông báo sau khi thành công
        } catch (Exception $e) {
            $message = "Lỗi: " . $e->getMessage();
        }
        
        }
        include "./khoa/add_khoa.php";
        break;
      // case lấy danh sách khoa từ cơ sở dữ liệu
      case 'ds_khoa':
        $sql = "SELECT * FROM tblkhoa ORDER BY id DESC";
        $dskhoa = pdo_query($sql);
        include "khoa/ds_khoa.php";
        break;
      // case xoá danh sách khoa  
      case 'xoa_khoa':
        if(isset($_GET['id']) && ($_GET['id']>0)){
          $sql = "DELETE FROM tblkhoa WHERE id=".$_GET['id'];
          pdo_execute($sql);
        }
        // sau khi xoá xong thì gọi lại danh sách khoa
        $sql = "SELECT * FROM tblkhoa ORDER BY id DESC";
        $dskhoa = pdo_query($sql);
        try {
          pdo_query($sql);
          $message = "Xoá thành công";
      } catch (Exception $e) {
          $message = "Lỗi: " . $e->getMessage();
      }
        include "./khoa/ds_khoa.php";
        break;
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------      
      // case dùng để add giảng viên
      case 'add_giangvien':
      //kiểm tra xem người dùng có click vào nút add hay không
      if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
        //lấy dữ liệu từ form
        $tengiangvien = $_POST['TenGV'];
        $magiangvien = $_POST['MaGV'];
        $id_khoa = $_POST['id_Khoa'];

        $sql = "INSERT INTO tblgiangvien(TenGV, MaGV, id_Khoa) 
                VALUES ('$tengiangvien', '$magiangvien', '$id_khoa')";
        try {
          pdo_execute($sql);
          $message = "Thêm thành công";
      } catch (Exception $e) {
          $message = "Lỗi: " . $e->getMessage();
      }
      
      }
      include "./giangvien/add_giangvien.php";
      break;
      // case lấy danh sách giảng viên từ cơ sở dữ liệu
      case 'ds_giangvien':
        $sql = "SELECT * FROM tblgiangvien ORDER BY id DESC";
        $dsgiangvien = pdo_query($sql);
        include "./giangvien/ds_giangvien.php";
        break;

      // case xoá danh sách giảng viên  
      case 'xoa_giangvien':
        if(isset($_GET['id']) && ($_GET['id']>0)){
          $sql = "DELETE FROM tblgiangvien WHERE id=".$_GET['id'];
          pdo_execute($sql);
        }
        // sau khi xoá xong thì gọi lại danh sách giảng viên
        $sql = "SELECT * FROM tblgiangvien ORDER BY id DESC";
        $dsgiangvien = pdo_execute($sql);
        try {
          pdo_query($sql);
          $message = "Xoá thành công";
      } catch (Exception $e) {
          $message = "Lỗi: " . $e->getMessage();
      }
        include "./giangvien/ds_giangvien.php";
        break;
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------      
      // case dùng để add sinh viên
      case 'add_sinhvien':
        //kiểm tra xem người dùng có click vào nút add hay không
        if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
          //lấy dữ liệu từ form
          $tensinhvien = $_POST['TenSV'];
          $masinhvien = $_POST['MaSV'];
          $ngaysinh = $_POST['NgaySinh'];
  
          $sql = "INSERT INTO tblsinhvien(TenSV, MaSV, NgaySinh) 
                  VALUES ('$tensinhvien', '$masinhvien', '$ngaysinh')";
          try {
            pdo_execute($sql);
            $message = "Thêm thành công";
        } catch (Exception $e) {
            $message = "Lỗi: " . $e->getMessage();
        }
        
        }
        include "./sinhvien/add_sinhvien.php";
        break;
        // case lấy danh sách sinh viên từ cơ sở dữ liệu
        case 'ds_sinhvien':
          $sql = "SELECT * FROM tblsinhvien ORDER BY id DESC";
          $dssinhvien = pdo_query($sql);
          include "./sinhvien/ds_sinhvien.php";
          break;
        // case xoá danh sách sinh viên  
        case 'xoa_sinhvien':
          if(isset($_GET['id']) && ($_GET['id']>0)){
            $sql = "DELETE FROM tblsinhvien WHERE id=".$_GET['id'];
            pdo_execute($sql);
          }
          // sau khi xoá xong thì gọi lại danh sách sinh viên
          $sql = "SELECT * FROM tblsinhvien ORDER BY id DESC";
          $dssinhvien = pdo_query($sql);
          try {
            pdo_query($sql);
            $message = "Xoá thành công";
          } catch (Exception $e) {
            $message = "Lỗi: " . $e->getMessage();
          }
          include "./sinhvien/ds_sinhvien.php";
          break;
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
      // case dùng để add học phần vào csdl
      case 'add_hocphan':
        //kiểm tra xem người dùng có click vào nút add hay không
        if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
          //lấy dữ liệu từ form
          $tenhocphan = $_POST['TenHP'];
          $mahocphan = $_POST['MaHP'];
          $sotinchi = $_POST['SoTC'];
          $sql = "INSERT INTO tblhocphan(TenHP, MaHP, SoTC) 
                  VALUES ('$tenhocphan', '$mahocphan', '$sotinchi')";
          try {
            pdo_execute($sql);
            $message = "Thêm thành công";
          } catch (Exception $e) {
            $message = "Lỗi: " . $e->getMessage();
          } 
        
        }
        include "./hocphan/add_hocphan.php";
        break;  
      // case lấy danh sách học phần từ cơ sở dữ liệu
      case 'ds_hocphan':
        $sql = "SELECT * FROM tblhocphan ORDER BY id DESC";
        $dshocphan = pdo_query($sql);
        include "./hocphan/ds_hocphan.php";
        break;
      // case xoá danh sách học phần  
      case 'xoa_hp':
        if(isset($_GET['id']) && ($_GET['id']>0)){
          $sql = "DELETE FROM tblhocphan WHERE id=".$_GET['id'];
          pdo_execute($sql);
        }
        // sau khi xoá xong thì gọi lại danh sách học phần
        $sql = "SELECT * FROM tblhocphan ORDER BY id DESC";
        $dshocphan = pdo_query($sql);
        include "./hocphan/ds_hocphan.php";
        break;
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
      // case dùng để add điểm
      case 'add_diem':
        //kiểm tra xem người dùng có click vào nút add hay không
        if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
          //lấy dữ liệu từ form
          $id_sinhvien = $_POST['id_SinhVien'];
          $id_hocphan = $_POST['id_HocPhan'];
          $diemcc = $_POST['DiemCC'];
          $diemgk = $_POST['DiemGK'];
          $diemck = $_POST['DiemCK'];
  
          $sql = "INSERT INTO tbldiem(id_SinhVien, id_HocPhan, DiemCC, DiemGK, DiemCK) 
                  VALUES ('$id_sinhvien', '$id_hocphan', '$diemcc', '$diemgk', '$diemck')";
          try {
            pdo_execute($sql);
            $message = "Thêm thành công";// thông báo sau khi thành công
        } catch (Exception $e) {
            $message = "Lỗi: " . $e->getMessage();
        }
        
        }
        include "./diem/add_diem.php";
        break;
      // case lấy danh sách điểm từ cơ sở dữ liệu
      case 'ds_diem':
        $sql = "SELECT * FROM tbldiem ORDER BY id DESC";
        $dskhoa = pdo_query($sql);
        include "diem/ds_diem.php";
        break;
      // case xoá danh sách điểm
      case 'xoa_diem':
        if(isset($_GET['id']) && ($_GET['id']>0)){
          $sql = "DELETE FROM tbldiem WHERE id=".$_GET['id'];
          pdo_execute($sql);
        }
        // sau khi xoá xong thì gọi lại danh sách điểm
        $sql = "SELECT * FROM tbldiem ORDER BY id DESC";
        $dskhoa = pdo_query($sql);
        try {
          pdo_query($sql);
          $message = "Xoá thành công";
      } catch (Exception $e) {
          $message = "Lỗi: " . $e->getMessage();
      }
        include "./diem/ds_diem.php";
        break;

//------------------------------------------------------------------------------

      default:
        include "./layouts/home.php";
        break;
  }
} else {
  include "./layouts/home.php";
}


include "./layouts/footer.php";

?>