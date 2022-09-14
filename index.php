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
            <form action="#" enctype ="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">ຊື່</label>
                        <input type="text" name="fname" placeholder="ຊື່" required>
                    </div>
                    <div class="field input">
                        <label for="">ນາມສະກຸນ</label>
                        <input type="text" name="lname" placeholder="ນາມສະກຸນ" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="">ອີແມວ</label>
                        <input type="text" name="email" placeholder="ອີແມວ" required>
                    </div>
                    <div class="field input">
                        <label for="">ລະຫັດຜ່ານ</label>
                        <input type="password" name="password" placeholder="ລະຫັດຜ່ານ" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">ເລືອກຮູບ</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field button">
                        <input type="submit" value="ລົງທະບຽນ">
                    </div>
                
            </form>
            <div class="link">ລົງທະບຽນແລ້ວ? <a href="login.php">ເຂົ້າສູ່ລະບົບ</a></div>
        </section>
    </div>


    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>