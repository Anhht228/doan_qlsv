<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Form thêm học phần -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Học Phần</h4>
                        <p class="card-description">---------</p>
                        <div class="table-responsive pt-3">
                            <?php
                                if (isset($message)) {
                                    echo "<div class='alert alert-success'>$message</div>";
                                }
                            ?>
                            <form action="index.php?act=add_hocphan" method="post">

                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tên Học Phần</th>
                                            <th>Mã Học Phần</th>
                                            <th>Số Tín Chỉ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Nhập tên học phần -->
                                            <td><input type="text" name="TenHP" required></td>
                                            <!-- Nhập mã học phần -->
                                            <td><input type="text" name="MaHP" required></td>                                                                                                                               
                                            <!-- Nhập số tín chỉ -->
                                            <td>
                                                <select name="SoTC" required>
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
                                    <input type="submit" class="btn btn-primary" name="themmoi" value="THÊM MỚI">
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
