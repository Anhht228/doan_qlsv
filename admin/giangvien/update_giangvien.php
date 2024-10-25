<?php
    if(is_array($giangv)){
        extract($giangv);
    }

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form cập nhật giảng viên -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật giảng viên</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=update_giangvien" method="post">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tên Giảng Viên</th>
                                            <th>Mã Giảng Viên</th>
                                            <th>Mã Khoa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Cập nhật tên giảng viên -->
                                            <td><input type="text" name="TenGV" value="<?php if(isset($tengiangvien)&&($tengiangvien!="")) echo $tengiangvien;?>" required></td>
                                            <!-- Cập nhật mã giảng viên -->
                                            <td><input type="text" name="MaGV" value="<?php if(isset($magiangvien)&&($magiangvien!="")) echo $magiangvien;?>" required></td>                                                                                                                               
                                            <!-- Cập nhật mã khoa -->
                                            <td>
                                                <select name="id_Khoa" value="<?php if(isset($id_Khoa)&&($id_Khoa!="")) echo $id_Khoa;?>" required>
                                                    <option value="">Chọn khoa</option>
                                                    <?php
                                                    if (isset($dskhoa) && !empty($dskhoa)) {
                                                        foreach ($dskhoa as $khoa) {
                                                            echo "<option value='" . $khoa['id'] . "'>" . $khoa['TenKhoa'] . "</option>";
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
                                    <input type="submit" class="btn btn-primary" name="themmoi" value="THÊM MỚI">
                                    <input type="reset" class="btn btn-light" name="nhaplai" value="NHẬP LẠI">
                                    <a href="index.php?act=ds_giangvien" class="btn btn-info">DANH SÁCH</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
