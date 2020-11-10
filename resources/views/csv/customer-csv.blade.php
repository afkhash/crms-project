
<!doctype html>
<html lang="en">
<title> Upload Customer</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="{{ asset('css/app.css') }}?version={{ config('app.version') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                        <a><?php echo( "<button class = 'btn btn-dark buttondesign' onclick= \"location.href='/home'\"><i class='fas fa-home'></i> Home</button>");?></a> 
                        <a><?php echo( "<button class = 'btn btn-dark buttondesign' onclick= \"location.href='/customers'\"><i class='fas fa-user-tag'></i> Customer Records</button>");?></a> 
                        </div>
                        <div class="card-body">
                        <form method ="POST" enctype="multipart/form-data" action="{{route('customer.import')}}">
                        @csrf
                        <div class="form-group">
                            <label for="file">Upload inventory csv</label>
                            <input type="file" name="file" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-primary buttondesign"><i class="fas fa-file-upload"></i> Import</button>
                       
                        </form>
                  
                  
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>