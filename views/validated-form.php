<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax Basics</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css files -->
    <link href="../public/css/slate-bootstrap.min.css" type="text/css" rel="stylesheet" />
    <style>
        .input-error {
            box-shadow: 0 0 5px red;
            border: 1px solid red;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="container jumbotron mt-3 bg-white shadow-lg" style="border: 1px solid lightgreen;">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <form action="mail.php" method="POST">
                        <div class="form-group">
                            <input id="mail-name" type="text" name="name" placeholder="Input your name" class="form-control mt-2 mb-2" />
                        </div>
                        <div class="form-group">
                            <input id="mail-email" type="text" name="email" placeholder="someone@example.com" class="form-control mt-2 mb-2" />
                        </div>
                        <div class="form-group">
                            <select id="mail-gender" name="gender" class="form-control">
                                <option value="male" selected> Male </option>
                                <option value="female"> Female </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea id="mail-message" name="message" placeholder="Message" class="form-control" cols="5" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button id="mail-submit" type="submit" name="submit" class="btn btn-outline-success">
                                Send e-mail
                            </button>
                        </div>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- js scripts -->
    <script src="../public/js/jquery-3.5.1.js"></script>
    <script src="../public/js/popper.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();
                let name = $("#mail-name").val();
                let email = $("#mail-email").val();
                let gender = $("#mail-gender").val();
                let message = $("#mail-message").val();
                let submit = $("#mail-submit").val();
                $(".form-message").load("mail.php", {
                    name: name,
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                })
            })
        })
    </script>
</body>

</html>