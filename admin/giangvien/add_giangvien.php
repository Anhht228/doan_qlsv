<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form thêm giảng viên -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Giảng viên</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=add_giangvien" method="post">
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
                                            <!-- Nhập tên giảng viên -->
                                            <td><input type="text" name="TenGV" required></td>
                                            <!-- Nhập mã giảng viên -->
                                            <td><input type="text" name="MaGV" required></td>                                                                                                                               
                                            <!-- Chọn mã khoa -->
                                            <td>
                                                <select name="id_Khoa" required>
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
