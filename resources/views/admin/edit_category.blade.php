<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.admincss')
</head>

<body>
    <div>
        <header>@include('admin.adminheader')</header>
        <h1>Upadte Category</h1>
        
        <form action="{{ url('update_category', $data->id) }}" method="POST">
            @csrf
            <input type="text" name="category" value="{{ $data->category_name }}">
            <input type="submit" value="Update category">
        </form>
    </div>
    {{ $data->category_name }}
</body>

</html>
