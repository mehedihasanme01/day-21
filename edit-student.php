<?php

    require_once 'vendor/autoload.php';
    use App\classes\Student;

    $id = $_GET['id'];
    $queryResult =Student::getStudentInfoById($id);
    $student = mysqli_fetch_assoc($queryResult);




    $message='';
    if (isset($_POST['btn'])){
        $message = Student::updateStudentInfo($_POST, $id);
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
            <td><input type="text" name="name" value="<?php echo $student['name']?>"></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="<?php echo $student['email']?>"></td>
        </tr>

        <tr>
            <th>Mobile</th>
            <td><input type="tel" name="mobile" value="<?php echo $student['mobile']?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>

