<script>
        $(document).ready(function(){
            function lodetable(){
                    $.ajax({
                    url : "display.php",
                        type : "GET",
                        success : function(data){
                            $('#table').html(data);
                        }
                    });
                }
            lodetable();

            $('form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'form.php',
                    data: $('form').serialize(),
                    success: function () {
                        alert('Data Inserted Successfully');
                        lodetable();
                        $("form").trigger("reset");
                    }
                });
            });

        });
    </script>