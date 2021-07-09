<?php
session_start();

    if( isset($_POST['data-first_name']) && !empty($_POST['data-first_name']) 
     && isset($_POST['data-last_name']) && !empty($_POST['data-last_name']) 
     && isset($_POST['data-email']) && !empty($_POST['data-email']) 
     && isset($_POST['data-gender']) && !empty($_POST['data-gender']) 
     && isset($_POST['data-ip_address']) && !empty($_POST['data-ip_address']) 
     && isset($_POST['data-birth_date']) && !empty($_POST['data-birth_date']) 
     && isset($_POST['data-zip_code']) && !empty($_POST['data-zip_code']) 
     && isset($_POST['data-avatar_url']) && !empty($_POST['data-avatar_url']) 
     && isset($_POST['data-state_code']) && !empty($_POST['data-state_code']) 
     && isset($_POST['data-country_code']) && !empty($_POST['data-country_code']) ){

            // Data cleaning
            $first_name = strip_tags($_POST['data-first_name']);
            $last_name = strip_tags($_POST['data-last_name']);
            $email = strip_tags($_POST['data-email']);
            $gender = strip_tags($_POST['data-gender']);
            $ip_address = strip_tags($_POST['data-ip_address']);
            $birth_date = strip_tags($_POST['data-birth_date']);
            $zip_code = strip_tags($_POST['data-zip_code']);
            $avatar_url = strip_tags($_POST['data-avatar_url']);
            $state_code = strip_tags($_POST['data-state_code']);
            $country_code = strip_tags($_POST['data-country_code']);

            // Data insertion into the database
            require_once('db-connect.php');
            $sql = 'INSERT INTO table_mockdata(`first_name`, `last_name`, `email`, `gender`, `ip_address`, `birth_date`, `zip_code`, `avatar_url`, `state_code`, `country_code`) VALUES(:first_name, :last_name, :email, :gender, :ip_address, :birth_date, :zip_code, :avatar_url, :state_code, :country_code)';
            
            $query = $db->prepare($sql);
            $query->bindValue(':first_name', $first_name, PDO::PARAM_STR);
            $query->bindValue(':last_name', $last_name, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':gender', $gender, PDO::PARAM_STR);
            $query->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
            $query->bindValue(':birth_date', $birth_date, PDO::PARAM_STR);
            $query->bindValue(':zip_code', $zip_code, PDO::PARAM_STR);
            $query->bindValue(':avatar_url', $avatar_url, PDO::PARAM_STR);
            $query->bindValue(':state_code', $state_code, PDO::PARAM_STR);
            $query->bindValue(':country_code', $country_code, PDO::PARAM_STR);
            $query->execute();

            $_SESSION['success'] = 'Successfully registered user!' ;
            header('Location:form.php') ;


    }else{
        $_SESSION['error'] = 'Complete all form fields.' ;
        header('Location:form.php') ;
    }