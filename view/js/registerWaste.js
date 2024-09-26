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

              let email = document.getElementById('email').value
              let wasteType = document.getElementById('wasteType').value
              let quantity = document.getElementById('quantity').value
              let company = document.getElementById('company').value
            

              let objData = {"register":"ok", "wasteType":wasteType, "quantity":quantity, "company":company}
              let objDataEmail = {"email":email}
              // console.log(objData)
              let objDataUser =  new User(objData)
              let objDataUserEmail =  new User(objDataEmail)
              objDataUser.registerWaste()
              objDataUserEmail.registerWaste()

          }
          form.classList.add('was-validated')
      }, false)
  })
})()