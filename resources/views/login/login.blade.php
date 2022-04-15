<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets1/css/bootstrap.min.css">
    <title>fprm</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="input-group text-center">
                <form method="post"   action="{{route('login')}}" enctype="multipart/form-data" class="m-auto">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12  ">
                            <div class="form-group">
                                <input type="email" name="email" id="nome" placeholder="carlos@gmail.com" class="form-control"  required>
                            </div>
                    </div>
                
                    <div class="row mt-4">  
                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="password" class="form-control" required minlength="3">
                            </div>
                        </div>
                    </div>

                    <a>
                        <button class="btn btn-danger mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                        </button>
                    </a>
                </form>
            </div>
           
        </div>
    </div>
   <script src="/assets1/js/bootstrap.bundle.js"></script>
</body>
</html>