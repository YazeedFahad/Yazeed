html>
<head>
<link  rel="stylesheet" href="CSSs/popupWindow.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

        $( document ).ready(function() {
            $('.trigger').click(function() {
                $('.modal-wrapper').toggleClass('open');
                $('.page-wrapper').toggleClass('blur');
                return false;
            });
        });
    </script>
</head>
<body>
<div class="page-wrapper">
    <a class="btn trigger" href="javascript:;">Click Me!</a>
</div>
<div class="modal-wrapper">
    <div class="modal">
        <div class="head">
            <a class="btn-close trigger" href="javascript:;"></a>
        </div>
        <div class="content">
        </div>
    </div>
</div></body></html>