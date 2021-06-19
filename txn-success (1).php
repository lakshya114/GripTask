<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Txn-Status</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<style>
    *{
        font-family: poppins;

    }
    h1{
        text-align: center;
        margin-top: 30px;
        color: teal;
        text-decoration: underline;
    }
</style>
<body>
    <div class="container">
        <h1>Payment Status</h1>
        <!-- <button onclick="">Success</button> -->
        
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // swal("Good job!", "You clicked the button!", "success");
        swal({
        title: "Transaction Success",
        text: "Thanks!",
        type: "success"
        }).then(function(){
        window.location = "index.html";
        });
    </script>
</body>
</html>