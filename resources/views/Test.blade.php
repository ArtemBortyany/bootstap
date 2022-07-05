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
<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Открыть</button>
<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">х</button>
                <h4 class="modal-title">Заголовок окна</h4>
            </div>
            <div class="modal-body">Некий текст уведомления</div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                <button class="btn btn-info" id="DemoModal" data-dismiss="modal">Ок</button>
                <button class="btn btn-info" id="PaymentModal" data-dismiss="modal">Ок</button>
            </div>
        </div>
    </div>
</div>

<div class=" me_test">1</div>
<div class=" me_test">2</div>
<div class=" me_test">3</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $('#myModal').modal("toggle");

    $('#myModal').on('shown.bs.modal', function (event) {
        // функции
    });
    $('#DemoModal').click(function () {
        alert('Хорошо')
    });

    $(function () {
        $('.me_test').addClass('btn-danger')//.removeClass('btn-danger');
    });

    $("#PaymentModal").click(function () {
        $.ajax('/api/post-contact', {
            type: 'POST',  // http method
            data: {
                name: $('#PaymentModal').val(),
            },
            success: function (data) {
                console.log(data)
                if (data.error == 0){
                    alert(data.message)
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    });

</script>
</body>
</html>
