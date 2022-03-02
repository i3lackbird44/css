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
        <button class="btn btn-success">hide content</button>
        <button class="btn btn-secondary spinner">Add loading spinner</button>
        <button class="btn btn-secondary vertical">Add loading vertical</button>
        <button class="btn btn-dark">Remove loading</button>
        <div class="content-box">TEST</div>
        
        <div class="template">
            <div class="loader-spinner">
                <div class="overlay">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="loader-vertical">
                <div class="overlay">
                    <div class="loader-vertical">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(function(){
        var temp_load_spinner = $('.template .loader-spinner').html();
        var temp_load_vertical = $('.template .loader-vertical').html();
        $('.btn.btn-primary').click(function(){
            $('.content-box').removeClass('hide-popup');
            $('.content-box').show();
            $('.content-box').addClass('show-popup');
        });
        $('.btn.btn-success').click(function(){
            $('.content-box').removeClass('show-popup');
            $('.content-box').addClass('hide-popup');
            $('.content-box .overlay').remove();
            setTimeout(() => {
                $('.content-box').hide();
            }, 800);
        });
        $('.btn.btn-secondary.spinner').click(function(){
            $('.content-box').append(temp_load_spinner);
            $('.content-box .overlay').show();
            $('.content-box .overlay').addClass('show');
        });
        $('.btn.btn-secondary.vertical').click(function(){
            $('.content-box').append(temp_load_vertical);
            $('.content-box .overlay').show();
            $('.content-box .overlay').addClass('show');
        });
        $('.btn.btn-dark').click(function(){
            $('.content-box .overlay').addClass('hide');
            setTimeout(() => {
                $('.content-box .overlay').remove();
            }, 800);
        });
    });
</script>