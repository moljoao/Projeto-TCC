<script type='text/javascript'>
        $("#arquivo").on('change', function () {
            if (typeof (FileReader) != "undefined") {

                var imagem = $("#imagem");
                imagem.empty();

                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "ml-5 image"
                    }).appendTo(imagem);
                }
                imagem.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } 
            else{
                alert("Este navegador nao suporta FileReader.");
            }
        });
    </script>