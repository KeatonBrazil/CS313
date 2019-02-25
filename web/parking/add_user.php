<?php 

    $user = htmlspecialchars($_POST['uzer']);
    $pass = htmlspecialchars($_POST['passw']);
    $cpass = htmlspecialchars($_POST['comfpass']);
    $email = htmlspecialchars($_POST['e_mail']);
    $relation = htmlspecialchars($_POST['member']);
    $major = htmlspecialchars($_POST['degree']);
    $preg = htmlspecialchars($_POST['preg']);
    $apt = htmlspecialchars($_POST['home']);
    

    if (!isset($user) || $user == "" || !isset($pass) || $pass == "" || !isset($email) || $email == "" || !isset($major) || $major == "")
    {
        header("Location: sign_up.php?fail=true");
        die();
    }
    if ($pass !== $cpass) 
    {
        header("Location: sign_up.php?noMatch=true");
        die();        
    }

    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);


    require_once("parking_db.php");
    $db = get_db();

    $user_query = 'SELECT username FROM member';
    $statement = $db->prepare($user_query);
    $statement->execute();
    $names = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($names as $name) {
        $old_user = $name['username'];
        if ($user === $old_user) {
            header("Location: sign_up.php?exists=true");
            die();
        }
    }

    $query = 'INSERT INTO member (username, pass_word, email, school_relation, major, apt_name, pregnant) VALUES (:user, :pass, :email, :relation, :major, :apt, :preg)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':user', $user, PDO::PARAM_STR);
    $stmt->bindValue(':pass', $hashedPassword, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':relation', $relation, PDO::PARAM_STR);
    $stmt->bindValue(':major', $major, PDO::PARAM_STR);
    $stmt->bindValue(':preg', $preg, PDO::PARAM_STR);
    $stmt->bindValue(':apt', $apt, PDO::PARAM_STR);
    $result = $stmt->execute();

    flush();
    header("Location:login_page.php?success=true");
    die();

?>