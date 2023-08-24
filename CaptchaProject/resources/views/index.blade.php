<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Create Captcha In Laravel</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-7 mt-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-danger">How To Create Captcha In Ralavel</h1>
            </div>
        <div class="card-body">
            <form method="post" action="/post">
                @csrf
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <label class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <label class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter Your Password" name="password" value="{{ old('password') }}">
                    @error('password')
                    <label class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mt-2 mb-2">
                    <div class="captcha">
                        <span> {!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-danger reload" id="reload">
                            &#x21bb;
                        </button>
                    </div>
                </div>
                
                <div class="form-group mb-2">
                    <input type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                    @error('captcha')
                    <label class="text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary col-md-12 pt-2">Submit</button>
                <button type="reset" class="btn btn-success col-md-12 pt-2">Clear</button>

            </form>    
        </div>    
        </div>
    </div>
    <script>
        $('#reload').click(function(){
            $.ajax({
                type:'GET',
                url:'reload-captcha',
                success:function(data){
                    $(".captcha span").html(data.captcha)
                }
            });
        });

         function reply(caller){
            $('.replyDiv').insertAfter($(caller));
            $('.replyDiv').show();
         }
    </script>
    <!-- Comment and Reply System Starts here -->
    <div style="text-align:center;">
        <h1 style="font-size:30px; text-align:center; padding-top:20px; padding-bottom:20px;">Comments</h1>
        <form action="{{ url('add_comment') }}" method="post">
            @csrf
            <textarea  style="height:150px; width: 600px;" placeholder="Comment Something here" name="comment"></textarea>
            </br>
            <input type="submit" class="btn btn-primary" value="Comment">
        </form>
    </div>

    <div style="padding-left:22%;">
    <h1 style="font-size: 20px; padding-bottom: 20px;">All Comments</h1>
    </div>
    
    <div style="padding-left:22%;">
    <b>Janvier</b>
    <p>This is my first comment</p>
    <a href="javascript::void(0);" onclick="reply(this)" class="btn btn-success">Reply</a>
    </div>

    <div style="padding-left:22%;">
    <b>Kwibaza</b>
    <p>This is my 2nd comment</p>
    <a href="javascript::void(0);" onclick="reply(this)" class="btn btn-success">Reply</a>
    </div>

    <div style="padding-left:22%;">
    <b>Emmy</b>
    <p>This is my 3rd comment</p>
    <a href="javascript::void(0);" onclick="reply(this)" class="btn btn-success">Reply</a>
    </div>
    <div style="display:none;" class="replyDiv">
        <textarea height:100px; width:800px; placeholder="Comment Something here"></textarea> 
    </br>
        <a href="" class="btn btn-primary">Reply</a>
    </div>
    </div>

    


    <!-- Comment and Reply System Starts here -->
</body>
</html>