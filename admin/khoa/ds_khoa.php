<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách Khoa</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên khoa</th>
                                        <th>Mã khoa</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($dskhoa) && !empty($dskhoa)) {
                                        //duyệt qua danh sách khoa
                                        foreach ($dskhoa as $khoa) {
                                            // Tạo URL cho Sửa và Xoá dựa trên id của khoa
                                            $suakhoa = "index.php?act=sua_khoa&id=" . $khoa['id'];
                                            $xoakhoa = "index.php?act=xoa_khoa&id=" . $khoa['id'];
                                            echo "<tr>";
                                            echo "<td>" . $khoa['id'] . "</td>";
                                            echo "<td>" . $khoa['TenKhoa'] . "</td>";
                                            echo "<td>" . $khoa['MaKhoa'] . "</td>";
                                            echo "<td><a href=\"$suakhoa\"><input type='button' class='btn btn-light' value='Sửa'></a>  <a href=\"$xoakhoa\"><input type='button' class='btn btn-light' value='Xoá'></a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        // hiển thị thông báo nếu không có khoa nào
                                        echo "<tr><td colspan='6'>Không có khoa nào.</td></tr>";
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
                            <a href="index.php?act=add_khoa" class="btn btn-light">NHẬP THÊM</a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
