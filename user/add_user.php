<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="cord-body">
            <form action="user_action.php?action=add" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control">
                </div>

                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" name="lastname" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control">
                </div>

                <div class="form-group">
                    <label>Course</label>
                    <input type="text" name="course" class="form-control">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>

                <div class="form-group">
                    <label>Web site</label>
                    <input type="text" name="website">
                </div>

                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="fb" class="form-control">
                </div>

                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="tweitter" class="form-control">
                </div>

                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" name="instagram" class="form-control">
                </div>

                <div class="form-group">
                    <label>Youtube</label>
                    <input type="text" name="youtube" class="form-control">
                </div>

                <div class="form-group">
                    <label>Admisson</label>
                    <input type="text" name="admisson" class="form-control">
                </div>

                <div class="form-group">
                    <label>Graduate</label>
                    <input type="text" name="graguate" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary" name="add">Save</button>

            </form>

        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>