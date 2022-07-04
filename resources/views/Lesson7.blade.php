@extends('sample')
<div class="container">
    <form role="form" class="form-horizontal">
        <div class="form-group">
            <label for="email" class="control-label col-md-2">Email</label>
            <div class="col-md-10">
                <input type="email" class="form-control" id="email" placeholder="Введите email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label col-md-2">Пароль</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="password" placeholder="Ведите пароль">
        </div>
            </div>
        <div class="checkbox">
            <label for="password">
                <input type="checkbox"> Чекбокс
            </label>
        </div>
        <button type="button" class="btn btn-success">Регистрация</button>
    </form>
</div>
