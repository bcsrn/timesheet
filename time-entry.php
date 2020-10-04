<?php

session_start();

?>

<html>
    <h1>Welcome : <?= $_SESSION['email']; ?></h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><b>Project</b></td>
                <td><b>Del Row</b></td>
                <td><b>Project Description</b></td>
                <td><b>Activity Description</b></td>
                <td><b>Monday</b></td>
                <td><b>Tuesday</b></td>
                <td><b>Wednesday</b></td>
                <td><b>Thursday</b></td>
                <td><b>Friday</b></td>
                <td><b>Total</b></td>
                <td><b>Status</b></td>
                <td><b>Remarks</b></td>
            </tr>
            <tr>
                <td><b>Please check if work from home</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="checkbox" tabindex="-1" name="VacMon"></td>
                <td><input type="checkbox" tabindex="-1" name="VacTue"></td>
                <td><input type="checkbox" tabindex="-1" name="VacWed"></td>
                <td><input type="checkbox" tabindex="-1" name="VacThur"></td>
                <td><input type="checkbox" tabindex="-1" name="VacFri"></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td><input type="text" name="Project" size="3" maxlength="4" value=""> </td>
                <td><input type="text" name="Activity" size="3" maxlength="4" value="" > </td>
                <td><input type="text" name="Monday" size="3" maxlength="4" value=<?=$_POST["Monday"]?> > </td>
                <td><input type="text" name="Tuesday" size="3" maxlength="4" value=<?=$_POST["Tuesday"]?> > </td>
                <td><input type="text" name="Wednesday" size="3" maxlength="4" value=<?=$_POST["Wednesday"]?>> </td>
                <td><input type="text" name="Thursday" size="3" maxlength="4" value=<?=$_POST["Thursday"]?> > </td>
                <td><input type="text" name="Friday" size="3" maxlength="4" value=<?=$_POST["Friday"]?> ></td>
                <td><input type="text" name="Total" size="3" maxlength="4" value=<?= $_POST["Monday"] + $_POST["Tuesday"]+ $_POST["Wednesday"]+ $_POST["Friday"]+ $_POST["Thursday"] ?> ></td>
                <td><input type="text" name="Status" size="3" maxlength="4" value="" ></td>
                <td><input type="text" name="Remarks" size="3" maxlength="4" value="" ></td>

            </tr>
        </table>
        <input type="submit" value="submit">
    </form>
</html>