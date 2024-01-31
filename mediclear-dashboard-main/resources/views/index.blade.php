<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediclear</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="{{url('assests/css/style.css')}}" rel=stylesheet>



<style>
    body {
        background-image: url("assests/img/mediclearbg.jpg");
        background-size: cover;
        background-attachment: fixed;
        /* background-position: center; */
    }





</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-5 mx-auto divup pt-5">
                <div class="divdown mt-5">

                    <div class="text-center logo"><img src="newlogo1.png" alt="" /></div>

                    <h3 class="text-center text-white pb-3">
                    Admin  Login
                    </h3>

                    <div class="h5 text-center">
                        <input type="text" class="form-control border rounded btn-lg bg-light shadow-lg text" placeholder="Email" />
                      <br>

                        <input type="text" class="form-control border rounded btn-lg bg-light shadow-lg text" placeholder="Password" />

 <br>






                        <div class="mb-3 form-check d-flex flex-start">
                            <input type="checkbox" class="form-check-input h5 " id="exampleCheck1">
                            <label class="form-check-label h5 mt-0 text-white" for="exampleCheck1"> &nbsp;Remember Me</label>
                        </div>
                        <div class="d-flex  justify-content-end">
                            <span><a href="forgetpassword.php" class="text-decoration-none text-white">forget Password?</a></span>
                        </div>
                        <br>


                        <button class="btn btn-light text-dark btn-lg forbutton">
                          <a href="dashboard.php" class="login"> Login</a>
                        </button>



                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
