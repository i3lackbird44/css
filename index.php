<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="asset/style.css">
    <title>Animation</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary">show</button>
        <button class="btn btn-success">hide</button>
        <button class="btn btn-secondary">Add loading</button>
        <div class="content-box">TEST</div>
        <div class="template">
            <div class="overlay">
                <div class="loader"></div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(function(){
        var temp_load = $('.template').html();
        $('.btn.btn-primary').click(function(){
            $('.content-box').removeClass('hide');
            $('.content-box').show();
            $('.content-box').addClass('show');
        });
        $('.btn.btn-success').click(function(){
            $('.content-box').removeClass('show');
            $('.content-box').addClass('hide');
            $('.content-box .overlay').hide();
            setTimeout(() => {
                $('.content-box').hide();
            }, 800);
        });
        $('.btn.btn-secondary').click(function(){
            $('.content-box').append(temp_load);
        });
    });
</script>