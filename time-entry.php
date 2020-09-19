<?php

session_start();

?>

<html>
    <h1>Welcome : <?= $_SESSION['email']; ?></h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><b>Day of Week</b></td>
                <td><b>Monday</b></td>
                <td><b>Tuesday</b></td>
                <td><b>Wednesday</b></td>
                <td><b>Thursday</b></td>
                <td><b>Friday</b></td>
            </tr>
            <tr>
                <td>Project Hours</td>
                <td><input type="text" name="Monday" size="3" maxlength="4" value="" onkeypress="return inputLimiter(event,'Numbers')"> <input type="checkbox" tabindex="-1" name="Stime1">Sick?<input type="checkbox" tabindex="-1" name="Vac1">Vacation?</td>
                <td><input type="text" name="Tuesday" size="3" maxlength="4" value="" onkeypress="return inputLimiter(event,'Numbers')"> <input type="checkbox" tabindex="-1" name="Stime2">Sick?<input type="checkbox" tabindex="-1" name="Vac2">Vacation?</td>
                <td><input type="text" name="Wednesday" size="3" maxlength="4" value="" onkeypress="return inputLimiter(event,'Numbers')"> <input type="checkbox" tabindex="-1" name="Stime2">Sick?<input type="checkbox" tabindex="-1" name="Vac2">Vacation?</td>
                <td><input type="text" name="Thursday" size="3" maxlength="4" value="" onkeypress="return inputLimiter(event,'Numbers')"> <input type="checkbox" tabindex="-1" name="Stime2">Sick?<input type="checkbox" tabindex="-1" name="Vac2">Vacation?</td>
                <td><input type="text" name="Friday" size="3" maxlength="4" value="" onkeypress="return inputLimiter(event,'Numbers')"> <input type="checkbox" tabindex="-1" name="Stime2">Sick?<input type="checkbox" tabindex="-1" name="Vac2">Vacation?</td>

            </tr>
        </table>
        <input type="submit" value="submit">
    </form>
</html>