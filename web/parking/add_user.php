<?php 
    $user = htmlspecialchars($_POST['uzer']);
    $pass = htmlspecialchars($_POST['passw']);
    $email = htmlspecialchars($_POST['e_mail']);
    $relation = htmlspecialchars($_POST['member']);
    $major = htmlspecialchars($_POST['degree']);
    $preg = htmlspecialchars($_POST['preg']);
    $apt = htmlspecialchars($_POST['home']);
    var_dump($user);
    var_dump($pass);
    var_dump($email);
    var_dump($relation);
    var_dump($major);
    var_dump($preg);
    var_dump($apt);

    if (!isset($user) || $user == "" || !isset($pass) || $pass == "" || !isset($email) || $email == "" || !isset($major) || $major == "")
    {
        header("Location: sign_up.php?fail=true");
        die();
    }

    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
*/
    require_once("parking_db.php");
    $db = get_db();


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
    header("Location:login_page.php");
    die();
*/
?>