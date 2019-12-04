<?php
    session_start();


    if(!empty($_POST['name'])){
        foreach($_POST as $key => $value){
            $_SESSION[$key] = $value;
        }
        $_SESSION['log'] = 'in';
    }
    if(!empty($_FILES['img']['name'])){
        $_SESSION['img_name'] = time().'_'.$_FILES['img']['name'];
        copy($_FILES['img']['tmp_name'],'upload/'.$_SESSION['img_name']);
    }
    print_r($_POST);
    echo '<hr>';
    print_r($_SESSION);
    print_r($_FILES);
    header('location:preview.php');
