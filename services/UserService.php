<?php
include_once '../models/User.php';
include_once '../constants/db_vars.php';

function saveUser(
    $username,
    $password,
    $email,
    $fullname,
    $bio,
    $posts_count,
    $profile_pic_url
) {

    global $ALL_FIELDS_REQUIRED, $USERNAME_EXISTS, $USER_SAVED, $ERROR_SAVING_USER;
    if (empty($username) || empty($password) || empty($email) || empty($fullname)) {
        return $ALL_FIELDS_REQUIRED;
    }

    if (User::find_by_username($username)) {
        return $USERNAME_EXISTS;
    }

    $user = new User(
        null,
        $username,
        $password,
        $email,
        $fullname,
        $bio,
        $posts_count,
        $profile_pic_url,
        null
    );

    try {
        $user->save();
    } catch (Exception $e) {
        return $ERROR_SAVING_USER;
    }
    ;
    return $USER_SAVED;
}
