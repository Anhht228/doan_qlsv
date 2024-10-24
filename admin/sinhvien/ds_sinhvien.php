<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách sinh viên</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tên SV</th>
                                        <th>Mã SV</th>
                                        <th>Ngày Sinh</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($dssinhvien) && !empty($dssinhvien)) {
                                        //duyệt qua danh sách sinh viên
                                        foreach ($dssinhvien as $sinhvien) {
                                            // Tạo URL cho Sửa và Xoá dựa trên id của sinh viên
                                            $suasinhvien = "index.php?act=sua_sinhvien&id=" . $sinhvien['id'];
                                            $xoasinhvien = "index.php?act=xoa_sinhvien&id=" . $sinhvien['id'];
                                            echo "<tr>";
                                            echo "<td>" . $sinhvien['TenSV'] . "</td>";
                                            echo "<td>" . $sinhvien['MaSV'] . "</td>";
                                            echo "<td>" . $sinhvien['NgaySinh'] . "</td>";
                                            echo "<td><a href=\"$suasinhvien\"><input type='button' class='btn btn-light' value='Sửa'></a>  <a href=\"$xoasinhvien\"><input type='button' class='btn btn-light' value='Xoá'></a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        // hiển thị thông báo nếu không có sinh viên nào
                                        echo "<tr><td colspan='6'>Không có sinh viên nào.</td></tr>";
                                    }
                                    ?>
                                    <?php
                                        if (isset($message)) {
                                            echo "<div class='alert alert-success'>$message</div>";
                                        }
                                    ?>
                                </tbody>
                            </table><br>
                            <div>
                                <a href="index.php?act=add_sinhvien" class="btn btn-light">NHẬP THÊM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
