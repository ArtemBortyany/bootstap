<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap уроки</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">
    <ul class="nav nav-pills" role="tablist">
        <li><a href="#home" role="tab" data-toggle="pill">Домой</a></li>
        <li><a href="#profile" role="tab" data-toggle="pill">Профиль</a></li>
        <li class="active"><a href="#message" role="tab" data-toggle="pill">Сообщения</a></li>
        <li><a href="#settings" role="tab" data-toggle="pill">Настройки</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade" id="home">Вкладка домой</div>
        <div role="tabpanel" class="tab-pane fade" id="profile">Вкладка профайл</div>
        <div role="tabpanel" class="tab-pane active fade in" id="message">Вкладка с сообщениями</div>
        <div role="tabpanel" class="tab-pane fade" id="settings">Вкладка с настройками</div>
    </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    $('a[data-toggle="pill"]').on('hidden.bs.tab', function (e) {
        console.log(e.target); // вкладка, которая стала активной
        console.log(e.relatedTarget); // предыдущая активная вкладка
    })
</script>


</body>
</html>
