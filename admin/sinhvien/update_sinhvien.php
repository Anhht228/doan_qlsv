<?php
    if(is_array($sinhv)){
        extract($sinhv);
    }

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form cập nhật sinh viên -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật sinh viên</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=update_sinhvien" method="post">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tên sinh viên</th>
                                            <th>Mã sinh viên</th>
                                            <th>Ngày Sinh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Cập nhật tên sinh viên -->
                                            <td><input type="text" name="TenSV" value="<?php if(isset($tensinhvien)&&($tensinhvien!="")) echo $tensinhvien;?>" required></td>
             
                                            <!-- Cập nhật mã sinh viên -->
                                            <td><input type="text" name="MaSV" value="<?php if(isset($masinhvien)&&($masinhvien!="")) echo $masinhvien;?>" required></td>
                                            <!-- Cập nhật ngày sinh của sinh viên -->
                                            <td><input type="date" name="NgaySinh" value="<?php if(isset($ngaysinh)&&($ngaysinh!="")) echo $ngaysinh;?>" required></td>
                                            
                                            
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <input type="hidden" name="id" value="<?php if(isset($id) && $id > 0) echo $id; ?>">
                                    <input type="submit" class="btn btn-primary" name="capnhat" value="CẬP NHẬT">
                                    <input type="reset" class="btn btn-light" name="nhaplai" value="NHẬP LẠI">
                                    <a href="index.php?act=ds_sinhvien" class="btn btn-info">DANH SÁCH</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
