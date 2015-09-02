@extends('layouts.principal')

@section('content')

    <div class="header">
        <div class="top-header">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
                <p>Movie Theater</p>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="header-info">
            <h1>BIG HERO 6</h1>
            <form>
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="email" class="form-control" placeholder="Ingresa Usuario">
                </div>
                <div class="form-group">
                    <label>Contraseņa</label>
                    <input type="password" class="form-control" placeholder="Ingresa Contraseņa">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>

    </div>

    <div class="review-slider">
        <ul id="flexiselDemo1">
            <li><img src="images/r1.jpg" alt=""/></li>
            <li><img src="images/r2.jpg" alt=""/></li>
            <li><img src="images/r3.jpg" alt=""/></li>
            <li><img src="images/r4.jpg" alt=""/></li>
            <li><img src="images/r5.jpg" alt=""/></li>
            <li><img src="images/r6.jpg" alt=""/></li>
        </ul>
    </div>

@endsection