$(document).ready(function() {
  $('.add-to-cart').click(function() {
      var name = $(this).siblings('.info').find('.name').text();
      var price = parseFloat($(this).siblings('.info').find('.price').data('price'));
      var item = $('<li><span class="item-name">' + name + ' - $' + price.toFixed(2) + '</span><button class="decrease-item">-</button><span class="item-count">1</span><button class="increase-item">+</button><button class="remove-item">X</button></li>');
      $('.cart-list').append(item);
      updateTotal();
  });


  $('.cart-list').on('click', '.remove-item', function() {
      $(this).parent().remove();
      updateTotal();
  });


  $('.cart-list').on('click', '.decrease-item', function() {
      var count = parseInt($(this).siblings('.item-count').text());
      if (count > 1) {
          count--;
          $(this).siblings('.item-count').text(count);
      } else {
          $(this).parent().remove();
      }

      updateTotal();
  });

  $('.cart-list').on('click', '.increase-item', function() {
      var count = parseInt($(this).siblings('.item-count').text());
      count++;
      $(this).siblings('.item-count').text(count);

      updateTotal();
  });

  function updateTotal() {
      var total = 0;
      $('.cart-list li').each(function() {
          var price = parseFloat($(this).find('.item-name').text().match(/\$\d+\.\d+/)[0].slice(1));
          var count = parseInt($(this).find('.item-count').text());
          total += price * count;
      });
      $('.total .amount').text('$' + total.toFixed(2));
  }
});
