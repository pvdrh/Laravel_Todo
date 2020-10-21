<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Todo - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 1px;
        }
        .task-table tbody tr td:nth-child(2){
            width: 120px;
        }
        .task-table tbody tr td:nth-child(3){
            width: 100px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Danh sách công việc
            </a>
        </div> 

        

  

     </div>
</nav> 




<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        
        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Tên công việc</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text"><div>{{$task->name}}</div></td> 
                            <!-- Task Complete Button -->
                            @if($task->status==0 || $task->status==1)
                            <td>
                                <a href="{{route('task.complete',$task->id)}}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Hoàn thành
                                </a>
                            </td>
                            @endif
                            <!-- Task Recomplete Button -->

                            @if($task->status==0 || $task->status==2)
                            <td>
                                <a href="{{route('task.reComplete',$task->id)}}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Làm Lại
                                </a>
                            </td>

                            @endif
                            <td>
                            <a href="{{route('task.edit',$task->id)}}" type="submit" class="btn btn-info">
                                    <i class="fa fa-btn fa-mask"></i>Chỉnh Sửa
                                </a>
                            </td>
                            <!-- Task Delete Button -->
                             <td>
                                <form action="{{ route('task.delete',$task['id']) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
    
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Xoá
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    
                  
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html> 