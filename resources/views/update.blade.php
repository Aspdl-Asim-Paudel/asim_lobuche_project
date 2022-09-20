<?php
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<FORM enctype="multipart/form-data" method="post"
      action="{{action([\App\Http\Controllers\PagesController::class,'update'])}}">


    @csrf
    <input type="hidden" name="id" value="{{$student->id}}">
    <label>Name</label>
    <input type="text" name="name" value="{{$student->name}}" required>
    <label>Address</label>
    <input type="text" name="address" value="{{$student->address}}" required>
    <label>Age</label>
    <input type="number" name="age" value="{{$student->age}}" required>
    <label>DOB</label>
    <input type="date" name="dob" value="{{$student->dob}}" required>

    //image ko hatayeko

    <label>Submit</label>
    <input type="submit" name="submit">


</FORM>
</body>
</html>
