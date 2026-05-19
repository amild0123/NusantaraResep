
const inputSampul = document.getElementById("previewSampul");
const gambarPreview = document.getElementById("gambarPreview");
const textPreview = document.getElementById("textPreview");

inputSampul.addEventListener("change", function(){

    const file = this.files[0];

    if(file){

        const reader = new FileReader();

        reader.onload = function(e){

            gambarPreview.src = e.target.result;

            gambarPreview.style.display = "block";

            textPreview.style.display = "none";
        }

        reader.readAsDataURL(file);

    }

});
