@extends('layouts.master')
@section('body')
<div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thêm công việc mới
        </div>

        <div class="panel-body">
            <!-- Display Validation Errors -->

            <!-- New Task Form -->
            <form action="{{ route('task.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="task-content" class="col-sm-3 control-label">Nội dung công việc</label>
                    <div class="col-sm-6">
                        <input type="text" name="content" id="task-content" class="form-control" value="{{ old('task') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="task-deadline" class="col-sm-3 control-label">Thời hạn công việc</label>
                    <div class="col-sm-6">
                        <input type="text" name="deadline" id="task-deadline" class="form-control" value="{{ old('task') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="task-priority" class="col-sm-3 control-label">Mức độ ưu tiên</label>
                    <div class="col-sm-6">
                        <input type="number" name="priority" id="task-priority" class="form-control" value="{{ old('task') }}">
                    </div>
                </div>

                

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Thêm công việc
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </tbody>
    </table>
</div>
@endsection
