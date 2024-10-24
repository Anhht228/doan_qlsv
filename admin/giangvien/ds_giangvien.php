<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách giảng viên</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tên GV</th>
                                        <th>Mã GV</th>
                                        <th>Mã khoa</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($dsgiangvien) && !empty($dsgiangvien)) {
                                        //duyệt qua danh sách giảng viên
                                        foreach ($dsgiangvien as $giangvien) {
                                            // Tạo URL cho Sửa và Xoá dựa trên id của học phần
                                            $suagv = "index.php?act=sua_giangvien&id=" . $giangvien['id'];
                                            $xoagv = "index.php?act=xoa_giangvien&id=" . $giangvien['id'];
                                            echo "<tr>";
                                            echo "<td>" . $giangvien['TenGV'] . "</td>";
                                            echo "<td>" . $giangvien['MaGV'] . "</td>";
                                            echo "<td>" . $giangvien['id_Khoa'] . "</td>";
                                            echo "<td><a href=\"$suagv\"><input type='button' class='btn btn-light' value='Sửa'></a>  <a href=\"$xoagv\"><input type='button' class='btn btn-light' value='Xoá'></a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        // hiển thị thông báo nếu không có giảng viên nào
                                        echo "<tr><td colspan='6'>Không có giảng viên nào.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table><br>
                            <div>
                            <a href="index.php?act=add_giangvien" class="btn btn-light">NHẬP THÊM</a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
