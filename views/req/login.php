<?php

if (isset($_POST['username']) && 
    isset($_POST['password']) && 
    isset($_POST['role'])) {

    include "../../model/connect.php"; // Kết nối PDO

    $usern = $_POST['username'];
    $passw = $_POST['password'];
    $role = $_POST['role'];

    // Kiểm tra dữ liệu đầu vào
    if (empty($usern)) {
        $em = "Username is required";
        header("Location: ../../login.php?error=" . urlencode($em));
        exit;
    } else if (empty($passw)) {
        $em = "Password is required";
        header("Location: ../../login.php?error=" . urlencode($em));
        exit;
    } else if (empty($role)) {
        $em = "An error occurred";
        header("Location: ../../login.php?error=" . urlencode($em));
        exit;
    } else {
        // Chọn truy vấn SQL dựa trên vai trò của người dùng
        if ($role == '1'){
            $sql = "SELECT * FROM admin WHERE username = ?";
            $role = "Admin";
        } else if ($role == '2'){
            $sql = "SELECT * FROM teachers WHERE username = ?";
            $role = "Teacher";
        } else {
            $sql = "SELECT * FROM students WHERE username = ?";
            $role = "Student";
        }

        // Chuẩn bị câu lệnh PDO
        $stmt = $conn->prepare($sql);

        // Thực thi truy vấn với tham số truyền vào
        $stmt->execute([$username]);

        // Kiểm tra nếu có một hàng trả về
        if ($stmt->rowCount() == 1) {
            // Lấy thông tin người dùng
            $user = $stmt->fetch();
            $username = $user['username'];
            $password = $user['password'];
            $id = $user['id'];
            if($username ==  $usern){
                if(password_verify($passw, $password)){
                    echo "Okay!";
                } else {
                $em = "Incorrect Username or Password";
                header("Location: ../../login.php?error=" . urlencode($em));
                exit;
                }
            } else {
                $em = "Incorrect Username or Password";
                header("Location: ../../login.php?error=" . urlencode($em));
                exit;
            }
            // Kiểm tra mật khẩu ở đây, ví dụ:
            if (password_verify($password, $user['password'])) {
                // Đăng nhập thành công, có thể lưu thông tin vào session
                session_start();
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $role;
                header("Location: ../../dashboard.php");
                exit;
            } else {
                // Mật khẩu không chính xác
                $em = "Incorrect Username or Password";
                header("Location: ../../login.php?error=" . urlencode($em));
                exit;
            }
        } else {
            // Nếu không tìm thấy người dùng, trả về thông báo lỗi
            $em = "Incorrect Username or Password";
            header("Location: ../../login.php?error=" . urlencode($em));
            exit;
        }
    }

} else {
    header("Location: ../../login.php");
    exit;
}

?>
