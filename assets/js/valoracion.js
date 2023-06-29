$(document).ready(function() {
    $('.star').click(function() {
      var valoracion = $(this).data('value');
  
      $.ajax({
        type: 'POST',
        url: 'guardar_valoracion.php',
        data: { valoracion: valoracion },
        success: function(response) {
          alert('¡Valoración guardada!');
        },
        error: function(xhr, status, error) {
          alert('Error al guardar la valoración: ' + error);
        }
      });
    });
  });