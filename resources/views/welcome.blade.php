<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login</title>

</head>

<body>
    <section class="login-form">
        <div class="container position-relative ">
            <div class="row">
                <div class="col-md-12 mx-auto" style="max-width: 40rem;">
                    <div class="border p-5 form-design">
                        <form action="" class="">
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('image/logo-2.png')}}" class="img-fluid">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Email Id:">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Password:">
                                </div>
                                <div class="text-center">
                                    <button class="border-0 btn mt-3 btn px-4" id="login-btn">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
