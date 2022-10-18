<?php
require("../includes/db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ajax Basics</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css files -->
    <link href="../public/css/slate-bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div id="comments" class="jumbotron">
            <?php
            $sql = "SELECT * FROM comments LIMIT 2";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>";
                    echo $row["author"];
                    echo "<br />";
                    echo $row["message"];
                    echo "</p>";
                }
            } else {
                echo "There are no comments!";
            }
            ?>

        </div>
        <button class="btn btn-outline-success"> Show More Comments </button>
    </div>
    <!-- js scripts -->
    <script src="../public/js/jquery-3.5.1.js"></script>
    <script src="../public/js/popper.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script>
        console.log('it is working!');
    </script>
    <script>
        $(document).ready(function() {
            let commentCount = 2;
            $("button").click(function() {
                commentCount = commentCount + 2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount
                })
            })
        })
    </script>
</body>

</html>