<?php
 session_start();
 if(isset($_SESSION['unique_id'])){
     header("location:users.php");
 }


?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat app</header>
            <form action="#">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">ອີແມວ</label>
                        <input type="text" name="email" placeholder="ອີແມວ">
                    </div>
                    <div class="field input">
                        <label for="">ລະຫັດຜ່ານ</label>
                        <input type="password" name="password" placeholder="ລະຫັດຜ່ານ">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="ເຂົ້າສູ່ລະບົບ">
                    </div>
                
            </form>
            <div class="link">ຍັງບໍ່ໄດ້ລົງທະບຽນ? <a href="index.php">ລົງທະບຽນຕອນນີ້</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>