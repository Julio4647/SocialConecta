<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>note</title>
</head>

<body>
    <h3>Plan de Contenidos</h3>

    <!-- Botón para abrir el modal -->


    <!-- Cards para mostrar las notas -->
    <div class="containerr">
        <button type="button" data-toggle="modal" data-target="#nuevaNotaModal">Nueva Nota</button>
        <div class="controls">
            <button class="prev-button">&lt;</button>
            <button class="next-button">&gt;</button>
          </div>
        <div class="card-wrapperr">
          <div class="cards-containerr">
            @foreach ($datos as $item)
            <div class="cardd mb-4 custom-card">
              <div class="card-bod">
                <h5 class="card-title">{{ $item->title }}</h5>
                <div class="card-text mb-4">{{ $item->description }}</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>


    <!-- Modal para registrar una nueva nota -->
    <div class="modal fade" id="nuevaNotaModal" tabindex="-1" role="dialog" aria-labelledby="nuevaNotaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nuevaNotaModalLabel">Nueva Nota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para registrar una nueva nota -->
                    <form action="{{ route('notaSave') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="contenido">Contenido</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega los scripts necesarios -->
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    var cardsContainer = $('.cards-containerr');
    var cardWidth = cardsContainer.find('.cardd').outerWidth(true);
    var visibleCards = Math.floor(cardsContainer.parent().width() / cardWidth);
    var totalCards = cardsContainer.find('.cardd').length;
    var totalPages = Math.ceil(totalCards / visibleCards);
    var currentPage = 1;
    var maxTranslate = -((totalPages - visibleCards) * cardWidth);
    var translateAmount = visibleCards * cardWidth;

    function updateControls() {
      $('.prev-button').prop('disabled', currentPage === 1);
      $('.next-button').prop('disabled', currentPage === totalPages);
    }

    function translateCards() {
      var translateX = -(currentPage - 1) * translateAmount;
      cardsContainer.css('transform', 'translateX(' + translateX + 'px)');
      updateControls();
    }

    $('.prev-button').on('click', function() {
      if (currentPage > 1) {
        currentPage--;
        translateCards();
      }
    });

    $('.next-button').on('click', function() {
      if (currentPage < totalPages) {
        currentPage++;
        translateCards();
      }
    });

    updateControls();
  });
</script>
</html>
