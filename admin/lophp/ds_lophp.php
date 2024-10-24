<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách lớp học phần</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tên Lớp Học Phần</th>
                                        <th>Mã Lớp Học Phần</th>
                                        <th>ID Học Phần</th>
                                        <th>ID Giảng Viên</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($dslophp) && !empty($dslophp)) {
                                        //duyệt qua danh sách lớp học phần
                                        foreach ($dslophp as $lophp) {
                                            // Tạo URL cho Sửa và Xoá dựa trên id của lớp học phần
                                            $sualophp = "index.php?act=sua_lophp&id=" . $lophp['id'];
                                            $xoalophp = "index.php?act=xoa_lophp&id=" . $lophp['id'];
                                            echo "<tr>";
                                            echo "<td>" . $lophp['TenLop'] . "</td>";
                                            echo "<td>" . $lophp['MaLop'] . "</td>";
                                            echo "<td>" . $lophp['id_HocPhan'] . "</td>";
                                            echo "<td>" . $lophp['id_GiangVien'] . "</td>";
                                            echo "<td><a href=\"$sualophp\"><input type='button' class='btn btn-light' value='Sửa'></a>  <a href=\"$xoalophp\"><input type='button' class='btn btn-light' value='Xoá'></a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        // hiển thị thông báo nếu không có lớp học phần nào
                                        echo "<tr><td colspan='6'>Không có lớp học phần nào.</td></tr>";
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
                                <a href="index.php?act=add_lophp" class="btn btn-light">NHẬP THÊM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
