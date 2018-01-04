<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 02-Jan-18
 * Time: 10:47 AM
 */
    require_once 'vendor/autoload.php';
    use App\classes\Student;

    $message='';
    if (isset($_POST['btn'])){
        $message = Student::saveStudentInfo($_POST);
    }
?>
<hr>

<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>

<h1 style="color: #1c7430"><?php echo $message?></h1>
<hr>
<form action="" method="POST">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>

        <tr>
            <th>Mobile</th>
            <td><input type="tel" name="mobile"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>
