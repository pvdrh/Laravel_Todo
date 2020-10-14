<!DOCTYPE html>
<html lang="en">
<head>

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

        @foreach($menus as $menu)
            <div>
                <a href="#" style="color: blue">{{ $menu }}</a>
            </div>
        @endforeach

    </div>
</nav>

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chỉnh sửa công việc
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->

                <!-- New Task Form -->
                <form action="{{route('task.')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{$name}}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Cập nhật công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


