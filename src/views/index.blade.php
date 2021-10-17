<html>
    <head>
        <title>Astergo | Contact</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .container {
                max-width: 960px;
            }
        </style>
    </head>
    <body class="bg-light">

    <div class="container">


        <div class="row">
            <div class="col-md-8 order-md-1">
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="https://cdn-icons.flaticon.com/png/512/3157/premium/3157945.png?token=exp=1634464356~hmac=e35cf7f46b95b258af789400666f6e81" alt="" width="72" height="72">
                    <h2>Get In Touch</h2>
                    <p class="lead">Below is an example form built entirely with Bootstraps form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                </div>
                <center>
                    @if(Session::has('success'))
                    <div class="alert alert-success">{!! session('success') !!}</div>
                    @endif
                </center>
                <form class="needs-validation" novalidate method="post" action="{{ route('contact.post') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Name</label>
                            <input name="name" type="text" class="form-control" id="firstName">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email">Email </label>
                            <input name="email" type="email" class="form-control">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone <span class="text-muted">(Optional)</span></label>
                            <input name="phone" type="text" class="form-control">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="Message">Message</label>
                        <textarea row="10" name="message" class="form-control" placeholder="Something..."></textarea>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <br>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Contact Me</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        // (function() {
        //     'use strict';
        //
        //     window.addEventListener('load', function() {
        //         // Fetch all the forms we want to apply custom Bootstrap validation styles to
        //         var forms = document.getElementsByClassName('needs-validation');
        //
        //         // Loop over them and prevent submission
        //         var validation = Array.prototype.filter.call(forms, function(form) {
        //             form.addEventListener('submit', function(event) {
        //                 if (form.checkValidity() === false) {
        //                     event.preventDefault();
        //                     event.stopPropagation();
        //                 }
        //                 form.classList.add('was-validated');
        //             }, false);
        //         });
        //     }, false);
        // })();
    </script>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
