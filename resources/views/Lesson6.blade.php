@extends('sample')
<button class="btn btn-default">Стандартная</button>
<input type="submit" class="btn btn-primary" value="Основная">
<input type="submit" class="btn btn-success" value="Подтвердить">
<a href="#" class="btn btn-info" role="button">Уведомление</a>
<button class="btn btn-warning">Внимание</button>
<button class="btn btn-danger">Отмены</button>
<button class="btn btn-link">Ссылка</button>
<br/><br/>
<button class="btn btn-default btn-lg">Кнопка</button>
<button class="btn btn-default btn-md">Кнопка</button>
<button class="btn btn-default btn-sm">Кнопка</button>
<button class="btn btn-default btn-xs">Кнопка</button>
<br/><br/>
<button class="btn btn-default btn-md btn-block">Кнопка</button>
<br/><br/>
<button class="btn btn-default btn-md active">Кнопка</button>
<button class="btn btn-default btn-md disabled">Кнопка</button>
<br/><br/>
<div class="btn-group btn-group-md" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="radio"> Параметр 1
    </label>
    <label class="btn btn-primary">
        <input type="radio"> Параметр 2
    </label>
    <label class="btn btn-primary">
        <input type="radio"> Параметр 3
    </label>
</div>
<br/><br/>
<div class="group" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="checkbox"> Параметр 1
    </label>
    <label class="btn btn-primary">
        <input type="checkbox"> Параметр 2
    </label>
    <label class="btn btn-primary">
        <input type="checkbox"> Параметр 3
    </label>
</div>
<br/><br/>
<div class="btn-group-vertical btn-group-md" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="radio"> Параметр 1
    </label>
    <label class="btn btn-primary">
        <input type="radio"> Параметр 2
    </label>
    <label class="btn btn-primary">
        <input type="radio"> Параметр 3
    </label>
</div>
<br/><br/>
<h3>Создание кнопок ДЗ </h3>
<div class="btn-group">
    <input type="submit" class="btn btn-success" value="Подтвердить">
    <input type="submit" class="btn btn-primary" value="Основная">
    <button href="#" class="btn btn-outline-info">Стандартная</button>
    <button class="btn btn-danger">Отмены</button>
</div>


