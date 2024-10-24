<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách học phần</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tên HP</th>
                                        <th>Mã HP</th>
                                        <th>Số tín chỉ</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($dshocphan) && !empty($dshocphan)) {
                                        //duyệt qua danh sách học phần
                                        foreach ($dshocphan as $hocphan) {
                                            // Tạo URL cho Sửa và Xoá dựa trên id của học phần
                                            $suahp = "index.php?act=sua_hp&id=" . $hocphan['id'];
                                            $xoahp = "index.php?act=xoa_hp&id=" . $hocphan['id'];
                                            echo "<tr>";
                                            echo "<td>" . $hocphan['TenHP'] . "</td>";
                                            echo "<td>" . $hocphan['MaHP'] . "</td>";
                                            echo "<td>" . $hocphan['SoTC'] . "</td>";
                                            echo "<td><a href=\"$suahp\"><input type='button' class='btn btn-light' value='Sửa'></a>  <a href=\"$xoahp\"><input type='button' class='btn btn-light' value='Xoá'></a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        // hiển thị thông báo nếu không có học phần nào
                                        echo "<tr><td colspan='6'>Không có học phần nào.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table><br>
                            <div>
                            <a href="index.php?act=add_hocphan" class="btn btn-light">NHẬP THÊM</a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
