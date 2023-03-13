<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catregories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>All Categories</h1>
    <table class="table table-hover">

        <thead>
            <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Created Date</th>
            <th>Update Date</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>


                    <td>{{ $category->id }}</td>
                    <td>{{ $category->cat_name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{!! ($category->status) ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>' !!} </td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-primary">View</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
