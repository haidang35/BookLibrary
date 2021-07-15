@extends("home_layout")
@section("main")
    <div class="content">
        <div class="container-fluid">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header">
                        <h3 class="card-title">Book Library</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>ISBN</th>
                                <th>Public year</th>
                                <th>Available</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->author_id}}</td>
                                    <td>{{$item->ISBN}}</td>
                                    <td>{{$item->pub_year}}</td>
                                    <td>{{$item->available}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

        </div>

    </div>

@endsection
