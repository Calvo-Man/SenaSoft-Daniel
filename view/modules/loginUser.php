<script src="view/js/user.js"></script>

<div class="container align-items-center py-4">
    <div class="row g-5 align-items-center">
        <div class="col-xl-5 mx-auto fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">

            <div class="card mb-0">
                <div class="card-body">
                    <div class="ticket-form">

                        <h2 class="text-dark text-uppercase mb-4 ">Welcome to Clean World</h2>

                        <form id="formLogin" class="needs-validation">
                            <div class=" row g-4">
                                <div class="col-12">
                                    <input type="email" class="form-control border-0 py-2" id="email" placeholder="Your Email" required>
                                    <div class="invalid-feedback">
                                        This field is required
                                    </div>
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control border-0 py-2" id="password" placeholder="Your Password" required>
                                    <div class="invalid-feedback">
                                        This field is required
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" type="button" class="btn btn-primary w-100 py-2 px-5">Login</button>
                                </div>

                                <div class="d-flex flex-column justify-content-around">
                                    <p>are you not <a class="text-primary fw-bold" href="registerUser">registered</a>?</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Do you want to join as a <a class="text-primary fw-bold" href="loginUser">company</a>?</p>
                                        <p>or <a class="text-primary fw-bold" href="homePage">Cancel</a></p>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="view/js/loginUser.js"></script>