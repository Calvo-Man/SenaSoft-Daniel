class User {
    constructor(objData) {
        this._objData = objData
    }

    login() {
        let objDataUser = {
            "email": this._objData.email,
            "password": this._objData.password
        }

        fetch("http://localhost:3000/auth/login", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(objDataUser)
        })
            .then(response => response.json).catch(error => {
                console.log(error)
            })
            .then(response => {
                console.log(response)
            })
    }

    registerUser() {

        let objDataUser = {
            "name": this._objData.name,
            "last_name": this._objData.lastName,
            "email": this._objData.email,
            "mobile": this._objData.mobile,
            "password": this._objData.password
        }


        fetch("http://localhost:3000/auth/register", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(objDataUser)

        })
            .then(response => response.json).catch(error => {
                console.log(error)
            })
            .then(response => {
                console.log(response)
                console.log(response.status)

                const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                confirmationModal.show();

            })
    }
    registerWaste() {
        let objDataUser = {
            
            "wasteType": this._objData.wasteType,
            "quantity": this._objData.quantity,
            "company": this._objData.company
        };

        let objDataUserEmail = {
            "email": this._objDataEmail.email
        };

        fetch("http://localhost:3000/waste", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(objDataUser, objDataUserEmail)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en el registro');
            }
            return response.json(); // Corrección aquí
        })
        .then(data => {
            console.log('Registro exitoso:', data);
            // Mostrar modal de confirmación
            const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            confirmationModal.show();
        })
        .catch(error => {
            console.error('Error en el registro:', error);
        });
    }
}