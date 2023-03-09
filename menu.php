<?php
function create_menu($id, $usertype) {
    if($usertype === "student") {
        echo '<form action="update_account.php" method="post">
        <table border="0">     
        <tr bgcolor="#cccccc">
        <div name="user_id" value ="'.$id.'"></div>
          <td colspan="2" align="center"><input type="submit" value="Update Account"/></td>
        </tr>
        </table>
        </form>';
    }
    elseif($usertype === "parent") {
        echo file_get_contents("studentpage.html");
        echo "<div name='user_id' value ='".$id."'></div>";
    }
    elseif($usertype === "admin") {
        echo file_get_contents("parentpage.html");
        echo "<div name='user_id' value ='".$id."'></div>";
    }
}
?>