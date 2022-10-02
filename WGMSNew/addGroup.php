<link rel="stylesheet" href="CSSs/Style.css">
<link rel="stylesheet" href="CSSs/login.css">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(function () {
        $("#number").change(){
            if()
            }

        }

    </script>
</head>
<body>
<div class="login-box " style=" transform: none;position: absolute;
background-color: #161616;  ; top: 10%; left:35%;  height: auto; width: 30% ">

    <form action="addGroup_post.php" method="POST" >

    <div class="user-box">
        <input type="text" name="course_id" id="id" required="" maxlength="7">
        <label> رمز المادة </label>
    </div>

    <div class="user-box">
        <input type="text" name="course_number" id="number" required="" maxlength="5">
            <label> رقم الشعبة </label>
    </div>
    <div class="user-box">
        <input type="text" name="group_name" id="name" required="" maxlength="50">
        <label> اسم القروب </label>
    </div>

    <div class="user-box">
        <input type="text" name="courselink" id="link" required="" maxlength="50">
        <label> رابط القروب </label>
    </div>
<div></div>

        <button type="submit" name="add" id="submit" class="agreebutton">

        اضافة
    </button>

        <a style="position: absolute; right:35px; "href="index.php" >

            الغاء
        </a>
    </form>
</div>
</body>