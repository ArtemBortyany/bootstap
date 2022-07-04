@extends('sample')
    <div class="container-fluid">
        <h2>Первый ряд - содержит два блока общей шириной на весь экран</h2>
            <div class="row">
                <div class="col-md-6" style="background-color: aqua">One</div>
                <div class="col-md-6" style="background-color: darkred">Two</div>
            </div>
        <h3>Второй ряд - содержит 6 блоков общей шириной на весь экран</h3>
            <div class="row">
                <div class="col-md-2" style="background-color: aqua">One</div>
                <div class="col-md-2" style="background-color: darkred">Two</div>
                <div class="col-md-2" style="background-color: fuchsia">Three</div>
                <div class="col-md-2" style="background-color: blue">Four</div>
                <div class="col-md-2" style="background-color: orange">Five</div>
                <div class="col-md-2" style="background-color: forestgreen">Six</div>
            </div>
        <h4>Третий ряд - содержит 2 блока шириной на половину экрана и ещё 3 блока на оставшуюся половину</h4>
            <div class="row">
                <div class="col-md-3" style="background-color: aqua"><b>One</b></div>
                <div class="col-md-3" style="background-color: darkred"><b>Two</b></div>
                <div class="col-md-2" style="background-color: fuchsia">Three</div>
                <div class="col-md-2" style="background-color: blue">Four</div>
                <div class="col-md-2" style="background-color: orange">Five</div>
            </div>
        </div>
    </div>
