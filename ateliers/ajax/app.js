let app = {

  init: function() {

    $.ajax('https://swapi.co/api/people/?format=json', {
      dataType: 'json',
      success: function(data) {

        data.results.forEach(function (character, index) {

          let maListe = $('#list');

          maListe.append(`
          <li>
            <div id="char${index}" class="collapsible-header character" data-species="${character.species[0]}"><i class="material-icons">star_half</i>${character.name}</div>
            <div class="collapsible-body">
              <p><label>Taille :</label><span>${character.height}</span></p>
              <p><label>Poids :</label><span>${character.mass}</span></p>
              <p><label>Genre :</label><span>${character.gender}</span></p>
              <p><label>Espèce : </label> <span id="species${index}"></span></p>
            </div>
          </li>`);

          $(`#char${index}`).click(function() {

            let urlSpecies = $(this).data('species');
            app.getRace(urlSpecies, character, index);
          });
        });


      }
    })

    // let test = '{"test":"toto"}';
    // let myJson = JSON.parse(test);
    // let myString = JSON.stringify(myJson);
    // console.log(myJson, myString);
  },

  getRace: function (url, perso, ind) {

    $.ajax(url + '?format=json', {
      dataType: 'json',
      success: function(espece) {

        $("#species" + ind).text(espece.name);
      }
    })
  }
}

$(app.init);
