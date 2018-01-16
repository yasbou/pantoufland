$(function () {
  $('[data-toggle="popover"]').popover();

  $('[data-toggle="popover"]').on('mouseover', function() {

    console.log('show');
    // Ce lien détails, quand je le quitte, ça ferme la popover liée
    $(this).popover('show');
  })

  $('[data-toggle="popover"]').on('mouseout', function() {

    console.log('hide');
    // Ce lien détails, quand je le quitte, ça ferme la popover liée
    $(this).popover('hide');
  })
})
