<?php
    if(is_array($hocp)){
        extract($hocp);
    }

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form cập nhật học phần -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật học phần</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=update_hocphan" method="post">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Học phần</th>
                                            <th>Mã học phần</th>
                                            <th>Số tin chỉ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Cập nhật tên học phần -->
                                            <td><input type="text" name="TenHP" value="<?php if(isset($tenhocphan)&&($tenhocphan!="")) echo $tenhocphan;?>" required></td>
             
                                            <!-- Cập nhật mã học phần -->
                                            <td><input type="text" name="MaHP" value="<?php if(isset($mahocphan)&&($mahocphan!="")) echo $mahocphan;?>" required></td>
                                            <!-- cập nhập số tín chỉ -->
                                            <td>
                                                <select name="SoTC" value="<?php if(isset($sotinchi)&&($sotinchi!="")) echo $sotinchi;?>" required>
                                                    <option value="1">1 Tín chỉ</option>
                                                    <option value="2">2 Tín chỉ</option>
                                                    <option value="3">3 Tín chỉ</option>
                                                    <option value="4">4 Tín chỉ</option>
                                                    <option value="5">5 Tín chỉ</option>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <input type="hidden" name="id" value="<?php if(isset($id) && $id > 0) echo $id; ?>">
                                    <input type="submit" class="btn btn-primary" name="capnhat" value="CẬP NHẬT">
                                    <input type="reset" class="btn btn-light" name="nhaplai" value="NHẬP LẠI">
                                    <a href="index.php?act=ds_hocphan" class="btn btn-info">DANH SÁCH</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
