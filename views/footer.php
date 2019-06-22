
<footer class="footer">
    <div class="container">
        <span class="text-muted">&copy; <?php  echo date('Y');  ?> Todos los derechos reservados.</span>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };

    $(document).ready(function() {

        $('.delete').click(function(){
            //Recogemos la id del contenedor padre
            var parent = $(this).parent().attr('id');
            //Recogemos el valor del servicio
            var service = $(this).parent().attr('data');

            var dataString = 'id='+service;

            $.ajax({
                type: "POST",
                url: "includes/delete.php",
                data: dataString,
                success: function() {
                    $('#delete-ok').empty();
                    $('#delete-ok').append('<div>Se ha eliminado correctamente el servicio con id='+service+'.</div>').fadeIn("slow");
                    $('#'+parent).remove();
                }
            });
        });
    });
</script>
</body>
</html>