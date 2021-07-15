@extends("home_layout")
@section("main")
    <div class="content">
        <div class="container-fluid">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header">
                        <h2 class="modal-title">Book Library</h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{url("/books")}}" method="get">
                                        <input type="text" placeholder="Search name ..." name="book_name" class="form-control-sm float-left" />
                                        <select class="form-control-sm" name="select_author">
                                            <option value="0">Select author</option>
                                            @foreach($authors as $item)
                                                <option @if(app("request")->input("select_author") == $item->author_id) selected @endif value="{{$item->author_id}}">{{$item->author_name}}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control-sm" name="select_available">
                                            <option value="">Select available</option>
                                            <option @if(app("request")->input("select_available") == 1) selected @endif value="1">Available</option>
                                            <option @if(app("request")->input("select_available") == 0) selected @endif value="0">Unvailable</option>
                                        </select>

                                    <button type="submit" class="btn btn-primary" style="margin-left: 10px">Search</button>
                                </form>
                            </div>
                        </div>

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
                                    <td>{{$item->Author->author_name}}</td>
                                    <td>{{$item->ISBN}}</td>
                                    <td>{{$item->pub_year}}</td>
                                    <td>
                                        @if($item->available == 1)
                                            <button class="btn btn-success">Available</button>
                                        @else
                                            <button class="btn btn-warning">Unavailable</button>

                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div style="float: right" >{!! $books->appends(request()->input())->links("vendor.pagination.bootstrap-4") !!}</div>
                    </div>
                </div>

        </div>

    </div>

@endsection
