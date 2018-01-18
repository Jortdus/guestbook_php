<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><strong>View Guestbook | <a href="index.php">Sign Guestbook</a> </strong></td>
</tr>
</table>
<br>

<?php
require 'controller.php';
$con = new controller();

$result = $con->querySelect("SELECT name, comment FROM guestbook");


foreach ($result as $rows) {
    ?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                <tr>
                    <td width="117">Name</td>
                    <td width="14">:</td>
                    <td width="357"><? echo $rows['name']; ?></td>
                </tr>
                <tr>
                    <td valign="top">Comment</td>
                    <td valign="top">:</td>
                    <td><? echo $rows['comment']; ?></td>
                </tr>
            </table></td>
    </tr>
</table>
<?php
}

?>




