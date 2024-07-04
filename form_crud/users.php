<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $standard = $_POST['standard'];
    $password = $_POST['password'];
    $stream = $_POST['stream'];
    $intrest = $_POST['intrest'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $upload_dir = 'images';
    move_uploaded_file($image_tmp, $upload_dir . '/' . $image);

    $sql = "INSERT INTO `users` (`name`, `address`, `email`, `phone`, `standard`, `password`, `stream`, `intrest`, `image`, `dt`) VALUES
    ('$name','$address','$email','$phone','$standard','$password','$stream','$intrest','$image',current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Data Inserted Successfully')</script>";
        echo "<script>  window.location.href = 'index.php'</script>";
        // header('location:index.php');
    } else {
        die(mysqli_error($conn));
    }

}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login Forms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-6 offset-md-3 shadow p-3 mb-5 bg-body-tertiary rounded">
                <h2 class="text-center mb-4">Registration Form</h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="studentName">Student Name:</label>
                        <input type="text" class="form-control" id="studentName" name="name"
                            placeholder="Enter Student Name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" rows="3" name="address"
                            placeholder="Enter Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="standard">Standard:</label>
                        <select class="form-control" id="standard" name="standard">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="stream">Stream:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="stream" id="streamEng" value="Eng">
                            <label class="form-check-label" for="streamEng">
                                English
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="stream" id="streamGuj" value="Guj">
                            <label class="form-check-label" for="streamGuj">
                                Gujarati
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="interest">Interest:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="intrest" value="Reading" id="reading">
                            <label class="form-check-label" for="reading">
                                Reading
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Dance" name="intrest" id="dance">
                            <label class="form-check-label" for="dance">
                                Dance
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="intrest" value="Cricket" id="cricket">
                            <label class="form-check-label" for="cricket">
                                Cricket
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="profilePic">Profile Picture:</label>
                        <input type="file" class="form-control-file" name="image" id="profilePic">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4">Login Form</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="#" class="text-secondary">New User?</a>
                </form>
            </div>
        </div>
    </div> -->
</body>

</html>