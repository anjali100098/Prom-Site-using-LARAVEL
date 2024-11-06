<!DOCTYPE html>
<html>

<head>

    <style type="text/css">
        input[type='text'] {
            width: 400px;
            height: 50px;
        }

        .table_deg {
            text-align: center;
            margin: auto;
            border: 2px solid black;
            margin-top: 50px;
        }
    </style>


    @include('admin.admincss')
</head>

<body>

    {{-- @include('admin.Sidebar') --}}
    <form action="{{ url('add_category') }}" method="post">
        @csrf
        <div>
            <input type="text" name="Category">
            <input class="btn btn-primary" type="submit" value="ADD">
        </div>
    </form>

    <div>
        <table class="table_deg">
            <tr>
                <th>Category Name</th>
                <th>Delete</th>
                <th>EDIT</th>
            </tr>
            @foreach ($data as $cat)
                <tr>
                    <td>{{ $cat->category_name }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('delete_category', $cat->id) }}">DELETE</a>
                    </td>

                    <td>
                        <a class="btn btn-success" href="{{ url('edit_category', $cat->id) }}">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
