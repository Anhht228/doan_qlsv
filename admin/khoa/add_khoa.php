<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form thêm khoa -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Khoa</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=add_khoa" method="post">

                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tên Khoa</th>
                                            <th>Mã Khoa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Nhập tên Khoa -->
                                            <td><input type="text" name="TenKhoa" required></td>
                                            <!-- Nhập mã khoa -->
                                            <td><input type="text" name="MaKhoa" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-primary" name="themmoi" value="THÊM MỚI">
                                    <input type="reset" class="btn btn-light" name="nhaplai" value="NHẬP LẠI">
                                    <a href="index.php?act=ds_khoa" class="btn btn-info">DANH SÁCH</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
