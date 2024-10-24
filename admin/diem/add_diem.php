<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form nhập điểm -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nhập điểm</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=add_diem" method="post">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tên SV</th>
                                            <th>Học phần</th>
                                            <th>Điểm chuyên cần</th>
                                            <th>Điểm giữa kì</th>
                                            <th>Điểm cuối kì</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Tên sinh viên -->
                                            <td>
                                                <select name="id_SinhVien" required>
                                                    <option value="">Tên sinh viên</option>
                                                    <?php
                                                    if (isset($dssinhvien) && !empty($dssinhvien)) {
                                                        foreach ($dssinhvien as $sinhvien) {
                                                            echo "<option value='" . $sinhvien['id'] . "'>" . $sinhvien['TenKhoa'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <!-- Tên học phần-->
                                            <td>
                                                <select name="id_HocPhan" required>
                                                    <option value="">Học phần</option>
                                                    <?php
                                                    if (isset($dshocphan) && !empty($dshocphan)) {
                                                        foreach ($dshocphan as $hocphan) {
                                                            echo "<option value='" . $hocphan['id'] . "'>" . $hocphan['TenKhoa'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <!-- Nhập điểm chuyên cần-->
                                            <td><input type="text" name="DiemCC" required></td>
                                            <!-- Nhập điểm giữa kì -->
                                            <td><input type="text" name="DiemGK" required></td>
                                            <!-- Nhập điểm cuối kì kì -->
                                            <td><input type="text" name="DiemCK" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-primary" name="themmoi" value="THÊM MỚI">
                                    <input type="reset" class="btn btn-light" name="nhaplai" value="NHẬP LẠI">
                                    <a href="index.php?act=ds_diem" class="btn btn-info">DANH SÁCH</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
