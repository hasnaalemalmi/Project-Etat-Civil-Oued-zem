<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input:not(.btn){
            background-color: #908c8c85 !important;
        }
        input:not(.btn):focus{
            background-color: #E7E6E6 !important;
        }
        .btn{
            padding: 5px 20px !important;
        }
    </style>
</head>
<body class="create">
    @vite('/resources/css/bootstrap.min.css')
    @vite('/resources/css/app.css')
    @include('nav')
    <form class="form" method="POST" action="{{ route("naissances.store") }}">
        @csrf
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <label for="nomDeNe" class="form-label">الاسم المولود </label>
                <input type="text" name="nomDeNe" class="form-control"> 
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <label for="dateNaissance" class="form-label">تاريخ الازدياد</label>
                <input type="date" name="dateNaissance" class="form-control"> 
            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <label for="nomDePere" class="form-label">الاسم الاب </label> 
                <input type="text" name="nomDePere" class="form-control"> 
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <label for="nomDeMere" class="form-label">الاسم الام </label> 
                <input type="text" name="nomDeMere" class="form-control"> 
            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <label for="adresse" class="form-label">محل السكن</label>
                <input type="text" name="adresse" class="form-control"> 
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <label for="sexe" class="form-label"> الجنس </label>
                <input type="text" name="sexe" class="form-control"> 
            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <label for="orderDeNaissance" class="form-label">رتبة الولادة </label>
                <input type="text" name="orderDeNaissance" class="form-control"> 
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <label for="dateEnrgistrement" class="form-label">تاريخ تسجيل</label>
                <input type="date" name="dateEnrgistrement" class="form-control"> 
            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <input type="submit" value="اضافة" class="btn btn-success button">
                <input type="reset" value="الغاء" class="btn btn-secondary button">
            </div>
        </div>
        </div>
    </form>
    

</body>
</html>