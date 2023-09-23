<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @vite('/resources/css/bootstrap.min.css')
    @vite('/resources/css/app.css')
    @include('nav')
    <form method="POST" action="{{route('naissances.find')}}">
        @csrf
            <div class="row">
              <div class="col-lg-5 col-sm-10">
                <input type="text" name="nomDeNe" class="form-control" placeholder="اسم المولود">
              </div>
              <div class="col-lg-5 col-sm-10">
                <input type="text" name="anneeDeNaissance" class="form-control" placeholder="سنة الميلاد">
              </div>
              <div class="col-lg-2 col-sm-10  text-center mt-2">
                  <button type="submit" class="btn btn-success">بحث</button>
                  <button type="reset" class="btn btn-secondary">الغاء</button>
                </div>
            </div>
    </form>

    @isset($ne)
    <table class="table mt-3 mx-auto" style="width: 92% ">
        <thead class="bg-success text-light" >
                <tr>
                    <th>اسم المولود</th>
                    <th>تاريخ الازدياد</th>
                    <th>اسم الاب</th>
                    <th>الاسم الام </th>
                    <th>السكن</th>
                    <th>الجنس</th>
                    <th>رتبة الولادة</th>
                    <th>تاريخ تسجيل</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ne as $person)
                    <td>{{$person->nomDeNe}}</td>
                    <td>{{$person->dateNaissance}}</td>
                    <td>{{$person->nomDePere}}</td>
                    <td>{{$person->nomDeMere}}</td>
                    <td>{{$person->adresse}}</td>
                    <td>{{$person->sexe}}</td>
                    <td>{{$person->orderDeNaissance}}</td>
                    <td>{{$person->dateEnrgistrement}}</td>
                @endforeach
            </tbody>
        </table>
    @endisset
</body>
</html>