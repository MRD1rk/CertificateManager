@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Easy way to get courses
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post"
                  action="{{url('certificates/checkout')}}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Cource info</h2>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="certificateNumber">Certificate Number:</label>
                                    <input id="certificateNumber" name="certificateNumber" class="form-control"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="courceName">Cource name:</label>
                                    <input id="courceName" name="courceName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="certificateDateEnd">Certificate Date End:</label>
                                    <input autocomplete="off" id="certificateDateEnd" name="certificateDateEnd" class="form-control"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Student info</h2>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="studentLastname">Lastname:</label>
                                    <input id="studentLastname" name="studentLastname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="studentFirstname">Firstname:</label>
                                    <input id="studentFirstname" name="studentFirstname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="studentMiddlename">Middlename:</label>
                                    <input id="studentMiddlename" name="studentMiddlename" class="form-control"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $('#certificateDateEnd').datepicker({
            format: 'yyyy-mm-dd',
        }).on('changeDate', function(e){
            $(this).datepicker('hide');
        });
    </script>
@stop
