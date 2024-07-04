<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="users.php " class="text-light">Add Users</a></button>
        <table class=" m-auto table table-success table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Standard</th>
                    <th scope="col">Password</th>
                    <th scope="col">Stream</th>
                    <th scope="col">Intrest</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $sql = "select * from `users`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $address = $row['address'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $standard = $row['standard'];
                        $password = $row['password'];
                        $stream = $row['stream'];
                        $intrest = $row['intrest'];
                        $image = $row['image'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $address . '</td>
                        <td>' . $email . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $standard . '</td>
                        <td>' . $password . '</td>
                        <td>' . $stream . '</td>
                        <td>' . $intrest . '</td>
                        <td><img src="images/' . $image . '" alt="image" width="80%" height="80%"></td>
                        <td><div class="d-flex">
                        <button class="btn btn-primary m-1"><a href="update.php?id=' . $id . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger m-1"><a href="delete.php?id=' . $id . '" class="text-light">Delete</a></button>
                        </td>
                        </div>
                        </tr>';
                    }
                } else {
                    echo "error";
                }



                ?>

                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>
    </div>


</body>

</html>