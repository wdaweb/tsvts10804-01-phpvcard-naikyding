<?php 
    session_start();

    //IF NOT INPUT DATA return FORM
    if($_SESSION['log']!='in')header('location:index.php');

    //SELECT LAYOUT
    echo '<link rel="stylesheet" href="css/'.$_SESSION["layout"].'.css">';
    
    //IF NO UPLOAD PHOTO
    $photo = (!empty($_SESSION['img_name']))?$_SESSION['img_name']:'profile_none.jpg';

    switch ($_SESSION['layout']) {
        case 'layout_a':
            $icon = 'ccsusu';
        break;
        case 'layout_b':
            $icon = 'dj_raga';
            break;
    }
?>

<!-- LINK CSS -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/all.min.css">
<div class="profile">

        <div class="item">
            <div class="photo">
                <img src="upload/<?=$photo?>" alt="<?=$photo?>">
                <div class="edit">
                    <form action="api.php" method="post" enctype="multipart/form-data" onchange="submit();"> <!--IF CHANGE SUBMIT-->
                    <label for="file"><i title="add photo" class="fas fa-camera"></i></label>
                        <input type="file" hidden id="file" name="img" submit>
                    </form>
                </div>
            </div>
            <div class="txt_name">
                <h2><?=$_SESSION['name']?></h2>
                <h4><?=$_SESSION['title']?></h4>
            </div>
            <div class="text_info">
                <p><i class="fas fa-phone"></i> <?=$_SESSION['tel']?></p>
                <p><i class="fas fa-envelope"></i> <?=$_SESSION['email']?></p>
            </div>
            <div class="info">
                <p><?=$_SESSION['skill']?></p>
                <div class="btn"><button type="button" onclick="history.go(-1)" >Edit Profile</button></div>
            </div>
        </div>
        <div class="icon">
            <img src="images/<?=$icon?>.gif" alt="">
        </div>
        <div class="icon2">
            <img src="images/<?=$icon?>.gif" alt="">
        </div>
        <div class="icon3">
            <img src="images/<?=$icon?>.gif" alt="">
        </div>
</div>
<?php
