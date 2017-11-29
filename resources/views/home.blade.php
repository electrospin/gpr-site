@extends('layouts.app')

@section('content')
<!doctype html>


    <style>
        label {
            margin-right: 20px;
        }
        form{
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;

        }
        /*add styles for upload button and input type*/
        input [type="submit"]{
            background: #0098cb;
            border: 0px;
            border-radius: 5px;
            color: #fff;
            padding: 10px;
            margin: 20px auto;

        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        You are logged in!
                        <h1>File Upload </h1>
                        <form action="{{URL::to('upload')}}" method="post" enctype="multipart/form-data">
                            <label> Select file to upload:</label>
                            <input type="file" name="file[]" id="upload" multiple><br />
                            <input type="submit" value="Upload" name="submit">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                        </form>
                        <div id="message"></div>


                        <script>
                            var form = document.getElementById('upload');
                            var request = new XMLHttpRequest(); //To do later use the following
                            /*//var secRequest = new XMLHttpRequestUpload();*/
                            form.addEventListener('submit', function (e) {
                                e.preventDefault();
                                var formdata = new FormData(form);
                                request.open('post', '/upload');
                                request.addEventListener("load", transferComplete);
                                request.send(formdata);
                            });
                            function transferComplete(data) {
                                //console.log(data.currentTarget.response);
                                response = JSON.parse(data.currentTarget.response);
                                if(response.success){
                                    document.getElementById('message').innerHTML = "successfully uploaded files!";
                                }
                            }
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</html>