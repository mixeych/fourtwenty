@extends('layouts.main')
@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>

            @for($i=0;$i<=3;$i++)
                @include('includes.blog.article')
            @endfor

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

       @include('includes.main_sidebar')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection