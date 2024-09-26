
fetch("http://localhost:3000/type-waste")
  .then((response) => {
    if (!response.ok) {
      throw new Error("Error en la petición");
    }
    return response.json();
  })
  .then((data) => {
    const wasteTypeSelect = document.getElementById("wasteType");

    // Recorrer los datos y agregar las opciones al select
    data.forEach((type) => {
      const option = document.createElement("option");
      option.value = type.id; // Asume que hay un campo 'id' en el objeto tipo de residuo
      option.textContent = type.name; // Asume que hay un campo 'name' en el objeto tipo de residuo
      wasteTypeSelect.appendChild(option);
    });
  })
  .catch((error) => {
    console.error("Error:", error);
  });

fetch("http://localhost:3000/company")
  .then((response) => {
    if (!response.ok) {
      throw new Error("Error en la petición");
    }
    return response.json();
  })
  .then((data) => {
    const wasteTypeSelect = document.getElementById("company");

    // Recorrer los datos y agregar las opciones al select
    data.forEach((type) => {
      const option = document.createElement("option");
      option.value = type.id; // Asume que hay un campo 'id' en el objeto tipo de residuo
      option.textContent = type.name; // Asume que hay un campo 'name' en el objeto tipo de residuo
      wasteTypeSelect.appendChild(option);
    });
  })
  .catch((error) => {
    console.error("Error:", error);
  });

