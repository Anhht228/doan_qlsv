<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form thêm sinh viên -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Sinh Viên</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=add_sinhvien" method="post">

                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tên sinh viên</th>
                                            <th>Mã sinh viên</th>
                                            <th>Ngày sinh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Nhập tên sinh viên -->
                                            <td><input type="text" name="TenSV" required></td>
                                            <!-- Nhập mã sinh viên -->
                                            <td><input type="text" name="MaSV" required></td>                                                                                                                               
                                            <!-- Nhập ngày sinh của sinh viên -->
                                            <td><input type="date" name="NgaySinh" required></td> 

                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-primary" name="themmoi" value="THÊM MỚI">
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
