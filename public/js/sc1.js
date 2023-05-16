// Obtener referencia al botón de toggle del sidebar
var sidebarToggle = document.getElementById('sidebarToggle');

// Obtener referencia a la imagen en el sidebar
var sidebarImage = document.getElementById('sidebarImage');

// Agregar evento de clic al botón de toggle
sidebarToggle.addEventListener('click', function() {
  // Verificar si el sidebar está colapsado o expandido
  var isCollapsed = document.body.classList.contains('sidebar-toggled');

  // Cambiar el tamaño de la imagen dependiendo del estado del sidebar
  if (isCollapsed) {
    sidebarImage.style.width = '140px';
    sidebarImage.style.height = '60px';
  } else {
    sidebarImage.style.width = '100px';
    sidebarImage.style.height = '40px';
  }
});