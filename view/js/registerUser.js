// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault()
            if (!form.checkValidity()) {
                event.stopPropagation()
                form.classList.add('was-validated')
            } else {

                let name = document.getElementById('name').value
                let lastName = document.getElementById('lastName').value
                let mobile = document.getElementById('mobile').value
                let email = document.getElementById('email').value
                let password = document.getElementById('password').value

                let objData = {"register":"ok","name":name, "lastName":lastName, "mobile":mobile, "email":email, "password":password}

                // console.log(objData)
                let objDataUser =  new User(objData)
                objDataUser.registerUser()

            }
            form.classList.add('was-validated')
        }, false)
    })
})()