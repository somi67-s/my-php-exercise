<?php
include_once "init.php";
function jsRedirect($url, $sec)
{
    echo "
    <script>
        setTimeout(function() {
        window.location.href = '" . $url . "';
    }, " . $sec * 1000 . ");
    </script>";
}
// ************** GET USERS FUNCTION ********************
function getUsers($return_assoc = 0)
{
    $users = json_decode(file_get_contents(USERS_DB), $return_assoc);
    return array_reverse((array) $users);
}
// ************** Register FUNCTION ********************
function registerUser(stdClass $user): bool
{
    $users = getUsers(1); // return function b soorat assoc
    $users[] = (array) $user;
    $user_json = json_encode($users);
    file_put_contents(USERS_DB, $user_json);
    $_SESSION['login'] = true;
    return true;
}
// ************** GET TICKET FUNCTION ********************
function getTickets($return_assoc = 0)
{
    $tickets = json_decode(file_get_contents(TICKET_DB), $return_assoc);
    return array_reverse((array) $tickets);
}
// ************** TICKET FUNCTION ********************
function ticketUser(stdClass $ticket): bool
{
    $tickets = getTickets(1); // return function b soorat assoc
    $tickets[] = (array) $ticket;
    $ticket_json = json_encode($tickets);
    file_put_contents(TICKET_DB, $ticket_json);
    //$_SESSION['login'] = true;
    return true;
}
// ************** LOGIN FUNCTION ********************
function login($email, $password)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user->password == $password && $user->email == $email) {
            $_SESSION['login'] = $user->fullname;
            return true;
        }
    }
    return false;
}
// ************** Checked LogedIn ********************
function islogedIn()
{
    return isset($_SESSION['login']);
}
// ************** LogOut ********************
function logout()
{
    session_destroy();
    jsRedirect($_SERVER['HTTP_REFERER'], 0.00000001);
}