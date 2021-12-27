let selectedBooks = [];
$(document).ready(function(){
    
    $("#buy").click(function() {
      $("#cartContainer").text("");
      $("#cart").text(`Cart (0)`);
      selectedBooks = [];
    });

    // adding book to cart
    $(".add-to-cart").click(function(){
      let id = Number($(this).data("id"));
      let name = $(this).data("name");
      let author = $(this).data("author");
      
      // add book to cart in server
      $.ajax({url: `add-to-cart.php?bookId=${id}`}).done(function(){ console.log('done')});

      let selectedBook = selectedBooks.find(book => book.id === id);
      // if selected book exists in cart, then count it
      if(selectedBook) {
        selectedBook.count += 1;
        $(`#${id}`).replaceWith(`
        <div id=${id} class="cart-item my-1 d-flex justify-content-around align-middle" >
          <img class="cart-item-img" src="/images/${name}.jpg" alt=" " />
          <span title="${name}" class="align-self-center cut-text">${name}</span>
          <span class="align-self-center">${selectedBook.count}</span>
          <a data-id=${id} data-name="${name}" data-author="${author}" href="#" class="cart-item-remove text-danger align-self-center" id="1" >Remove</a>
        </div>`)
        
        // add remove functionality to last element <a>Remove</a>
        $(`#${id}`).children().last().click(function() {
          selectedBooks = selectedBooks.filter(book=> book.id !== Number($(this).data("id")));
          $("#cart").text(`Cart (${selectedBooks.length})`);
          $(this).parent().remove();
        });
      }
      // else just add in list
      else {
        selectedBook = {id, name, author, count: 1}
        selectedBooks.push(selectedBook);      
        $("#cartContainer").append(`
        <div id=${id} class="cart-item my-1 d-flex justify-content-around align-middle" >
          <img class="cart-item-img" src="/images/${name}.jpg" alt=" " />
          <span title="${name}" class="align-self-center cut-text">${name}</span>
          <a data-id=${id} data-name="${name}" data-author="${author}" href="#" class="cart-item-remove text-danger align-self-center" id="1" >Remove</a>
        </div>`);

        // add remove functionality to last element <a>Remove</a>
        $(`#${id}`).children().last().click(function() {
          selectedBooks = selectedBooks.filter(book=> book.id !== Number($(this).data("id")));
          $("#cart").text(`Cart (${selectedBooks.length})`);
          $(this).parent().remove();
        });
      }
      // count cart
      $("#cart").text(`Cart (${selectedBooks.length})`);
      
    });
  });