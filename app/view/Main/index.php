<!--<h1>--><?//= $name; ?><!--</h1>-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>

Создаю кнопку на фронте
request запрос методом пост
вызываю метод пхп в контроллере
возвращаю джейсон в контролллере
принимаю response in data
<div id="getAjax">Ajax</div>
<button id="ajax">CLICK</button>
<script>
    $("#ajax").on("click", function() {
        $.ajax({
            url: '/Main/index',
            method: 'post',
            dataType: 'json',
            data: {text: 1},
            success: function(data){
                $("#getAjax").append(data.test2);
                // $("#getAjax").append(JSON.parse(data));
                // let a = JSON.parse(data[0].test1);
                // console.log(a);
                // console.log(data);
    }
    });
    })
</script>
</body>

</html>