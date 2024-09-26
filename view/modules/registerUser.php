<script src="view/js/user.js"></script>

<div class="container align-items-center py-4">
    <div class="row g-5 align-items-center">
        <div class="col-xl-5 mx-auto fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">

            <div class="card mb-0">
                <div class="card-body">
                    <div class="ticket-form">

                        <h2 class="text-dark text-uppercase mb-4 ">Welcome to Clean World</h2>

                        <form id="formRegister" class="needs-validation">
                            <div class=" row g-4">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="textHelp" required>
                                </div>

                                <div class="mb-3">
                                    <label for="lastName" class="form-label">LasName</label>
                                    <input type="text" class="form-control" id="lastName" aria-describedby="textHelp" required>
                                </div>

                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile</label>
                                    <input type="number" class="form-control" id="mobile" aria-describedby="textHelp" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="textHelp" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" aria-describedby="textHelp" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" type="button" class="btn btn-primary w-100 py-2 px-5">Register</button>
                            </div>

                            <div class="d-flex justify-content-around align-items-center">
                                <p><a class="text-primary fw-bold" href="loginUser">Sign in</a></p>
                                <p>or <a class="text-primary fw-bold" href="homePage">Cancel</a></p>
                            </div>
                        </form>

                        <!-- Modal de confirmación -->
                        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmationModalLabel">Registro exitoso</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¡Tu registro se ha completado exitosamente!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="view/js/registerUser.js"></script>