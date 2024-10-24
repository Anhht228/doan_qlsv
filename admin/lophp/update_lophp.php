<?php
    if(is_array($lhp)){
        extract($lhp);
    }

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form cập nhật lớp học phần -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật lớp học phần</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=update_lophp" method="post">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tên Lớp HP</th>
                                            <th>Mã Lớp HP</th>
                                            <th>ID HP</th>
                                            <th>ID GV</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Cập nhật tên lớp học phần -->
                                            <td><input type="text" name="TenLop" value="<?php if(isset($tenlophp)&&($tenlophp!="")) echo $tenlophp;?>" required></td>
             
                                            <!-- Cập nhật mã lớp học phần -->
                                            <td><input type="text" name="MaLop" value="<?php if(isset($malophp)&&($malophp!="")) echo $malophp;?>" required></td>                                            
             
                                            <!-- Hiển thị danh sách học phần -->
                                            <td>
                                                <select name="id_HocPhan" value="<?php if(isset($id_HP)&&($id_HP!="")) echo $id_HP;?>" required>
                                                    <option value="">Chọn học phần</option>
                                                    <?php
                                                    if (isset($dshocphan) && !empty($dshocphan)) {
                                                        foreach ($dshocphan as $hocphan) {
                                                            echo "<option value='" . $hocphan['id'] . "'>" . $hocphan['TenHP'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            
                                            <!-- Hiển thị danh sách giảng viên -->
                                            <td>
                                                <select name="id_GiangVien" value="<?php if(isset($id_GV)&&($id_GV!="")) echo $id_GV;?>" required>
                                                    <option value="">Chọn giảng viên</option>
                                                    <?php
                                                    if (isset($dsgiangvien) && !empty($dsgiangvien)) {
                                                        foreach ($dsgiangvien as $giangvien) {
                                                            echo "<option value='" . $giangvien['id'] . "'>" . $giangvien['TenGV'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            
                                            
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <input type="hidden" name="id" value="<?php if(isset($id) && $id > 0) echo $id; ?>">
                                    <input type="submit" class="btn btn-primary" name="capnhat" value="CẬP NHẬT">
                                    <input type="reset" class="btn btn-light" name="nhaplai" value="NHẬP LẠI">
                                    <a href="index.php?act=ds_lophp" class="btn btn-info">DANH SÁCH</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
