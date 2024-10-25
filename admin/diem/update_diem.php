<?php
    if(is_array($diemso)){
        extract($diemso);
    }

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form cập nhật nhập điểm -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật điểm</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=update_diem" method="post">
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
                                            <!--cập nhật Tên sinh viên -->
                                            <td>
                                                <select name="id_SinhVien" value="<?php if(isset($id_SinhVien)&&($id_SinhVien!="")) echo $id_SinhVien;?>" required>
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
                                            <!-- Cập nhật Tên học phần-->
                                            <td>
                                                <select name="id_HocPhan" value="<?php if(isset($id_HocPhan)&&($id_HocPhan!="")) echo $id_HocPhan;?>" required>
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
                                            <!-- Cập nhật điểm chuyên cần-->
                                            <td><input type="text" name="DiemCC" value="<?php if(isset($diemcc)&&($diemcc!="")) echo $diemcc;?>" required></td>
                                            <!-- Cập nhật điểm giữa kì -->
                                            <td><input type="text" name="DiemGK" value="<?php if(isset($diemgk)&&($diemgk!="")) echo $diemgk;?>" required></td>
                                            <!-- Cập nhật điểm cuối kì kì -->
                                            <td><input type="text" name="DiemCK" value="<?php if(isset($diemck)&&($diemck!="")) echo $diemck;?>" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <input type="hidden" name="id" value="<?php if(isset($id) && $id > 0) echo $id; ?>">
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
