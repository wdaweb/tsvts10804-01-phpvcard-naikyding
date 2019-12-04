<?php
session_start();
//if
//if(!empty($_SESSION['log']))header('location:preview.php');
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/all.min.css">
<header>
    <div class="item">
        <div class="wlc">
            <div class="text">
            <h1>Welcome Join Us</h1>
            <p>Our staff and employees will do their best to make your visit comfortable and worthwhile. Today, they will introduce to you our newly built plant and research center. Please do not hesitate to ask any questions you might want to ask. I want to extend my warmest welcome to all of you, and sincerely hope that your visit here will be worthwhile and meaningful.</p>
            </div>
        </div>
        <div class="form">
            <form action="api.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <input type="text" id="name" name="name" placeholder="輸入中文姓名" required>
                        </td>
                        <td style="text-align:right">
                            <label for="file" title="upload photo"><i class=" fas fa-user-circle">上傳頭像</i></label>
                            <input hidden type="file" id="file" name="img" >
                        </td>
                    </tr>
                </table>
                <input type="text"  name="title" placeholder="部門職稱"required>
                <input type="tel" name="tel" placeholder="手機號碼"required>
                <input type="email"  name="email" placeholder="您的電子信箱"required>
                <textarea wrap="hard" name="skill" cols="20" rows="10" placeholder="輸入更多說明，讓我們認識您"></textarea>
                <div class="select" >
                    <select name="layout" id="layout">
                        <option value="layout_a">星探者 - C.C.SU.SU</option>
                        <option value="layout_b">星探者 - DJ.RAGA</option>
                    </select>
                    
                </div>
                <br>
                <button type="submit">送 出</button></<button></<button>   
            </form>
        </div>
    </div>
</header>
<?php

