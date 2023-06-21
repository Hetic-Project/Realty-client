const fileInput = document.getElementById('file-input');
const imageContainer = document.getElementById('image-container');

fileInput.addEventListener('change', function() {
  const file = this.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    imageContainer.style.backgroundImage = `url(${e.target.result})`;
    imageContainer.classList.add("imageCreateLocation");
    imageContainer.removeAttribute("id");
  };

  reader.readAsDataURL(file);
});

listEquipement = getElementById("equipementJs");

function equipement() {
  let nameEquipement = document.getElementById("textService").value;
  console.log(nameEquipement);
  let oneEquipement = document.createElement("div")
  oneEquipement.id


}

                <div class="listEquipement">
                    <input type="checkbox" id="kitchen" name="kitchen">
                    <img class="kitchenPicture" src="../.././../images/kitchen.svg">
                    <label for="kitchen" class="textKitchen">Cuisine complète</label>       
                </div>