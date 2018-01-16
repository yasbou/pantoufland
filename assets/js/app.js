let app = {

  init: function() {

    $('.buy').click(app.clickAdd);
    $('.less').click(app.clickRemove);
  },

  clickAdd: function() {

    let productId = $(this).data('id');
    app.addProduct(productId);
  },

  clickRemove: function() {

    let productId = $(this).data('id');
    app.removeProduct(productId);
  },

  addProduct: function(productId) {

    $.ajax('cart/add', {
      method: 'POST',
      dataType: 'json',
      data: { product: productId },
      success: function (data) {

        app.renderCart(data);
      }
    })
  },

  removeProduct: function(productId) {

    $.ajax('cart/remove', {
      method: 'POST',
      dataType: 'json',
      data: { product: productId },
      success: function (data) {

        app.renderCart(data);
      }
    })
  },

  renderCart: function(cart) {

    let total = 0;
    let container = $('#cart');

    container.empty();

    if (cart.length === 0) {

      let p = `<p>C'est vide !</p>`;
      container.append(p);
      return;
    }

    cart.forEach(function(item) {

      let html = `
        <a class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">${item.title}</h5>
            <small class="price">${item.price}</small>
          </div>
          <small class="w-100">
            Quantité :
            <button data-id="${item.id}" class="less" type="button">-</button>
            ${item.quantity}
            <button data-id="${item.id}" class="buy" type="button">+</button>
          </small>
        </a>`;

      total += (item.price * item.quantity);

      container.append(html);
    })

    container.find('.buy').click(app.clickAdd);
    container.find('.less').click(app.clickRemove);

    let html = `
      <a class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Total : </h5>
          <small class="price">${total.toFixed(2)}</small>
        </div>
      </a>`;

    let btn = `<a class="btn btn-success" href="">Acheter</a>`;

    container.append(html, btn);
  }
}

$(app.init);
