<!DOCTYPE html>
<html>

<head>
    @include('admin.admincss')
</head>

<body>
    <header class="header">
        @include('admin.adminheader')
    </header>
    {{-- @include('admin.Sidebar') --}}
    <div>
        <form action="">
            @csrf
            <div>
                <label>Product Title</label><br>
                <input type="text" name="product_name"><br>
            </div>
            <div>
                <label>Description</label><br>
                <textarea name="description" cols="30" rows="5" required></textarea><br>
            </div>
            <div>
                <label for="">Price</label><br>
                <input type="text" name="price"><br>
            </div>
            <div>
                <label for="">Quantity</label><br>
                <input type="text" name="quantity"><br>
            </div>

            <input class="btn-btn-success" type="submit" value="Submit"><br>
        </form>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>
</body>

</html>
