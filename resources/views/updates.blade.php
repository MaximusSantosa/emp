<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <style>
            table, th, td {
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid black;
            }

            #inviright {
                border-right-style: none;
            }

            #invileft {
                border-left-style: none;
            }
        </style>
    </head>
    <body>
        @include('partials.navbar')
        <br>
        <div class="content">
        
        <br><h2>UPDATES</h2>
        
        <div class="modal fade" id="addupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add an update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                {{ Form::open(array('action' => 'MainController@addupdate', 'class' => 'form-horizontal')) }}
                    <div class="form-row">
                        <label class="col-sm-2 col-form-label"  for="title">Title:</label>
                        {{ Form::text('title', null, array('class' => 'col-sm-10 form-control', 'id' => 'title')) }} 
                    </div><br>
                    <div class="form-row">
                        <label class="col-sm-2 col-form-label"  for="body">Body:</label>
                        {{ Form::text('body', null, array('class' => 'col-sm-10 form-control', 'id' => 'body')) }} 
                    </div>
                </div>
                <div class="modal-footer">
                    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
                </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addupdate">Add an update</button>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    @foreach($data as $row)
                    <div>
                        <table>
                            <thead bgcolor="#b3d1ff"><tr><td id="inviright" align="left" style="width:80%;font-weight:bold">Title: {{ $row->title }}</td><td id="invileft" align="left" style="width:100%">Update on {{ $row->post_date }}</td></tr></thead>
                            <tbody><tr><td colspan=2>{{ $row->body }}</td></tr></tbody>
                        <table>
                        <br>
                    </div>
                    @endforeach
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </body>
</html>
