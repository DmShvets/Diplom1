jQuery(function($) {
  $("input[name='tel_contact']").mask("+380 (99) 999 9999");
})

$(document).scroll(function() {
  $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
    $('.dropdown-menu').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
    $('.scrolldown').toggleClass('hidden', $(this).scrollTop() > $('.scrolldown').height());
})

function fillPageSection1(name){
	document.write("<div class=\"jumbotron jumbotron-fluid height100p\">");
	document.write("<div class=\"region\">");
	document.write("<h1>"+name+"</h1>");
	document.write("</div>");
};

$(document).ready(function(){
  $('#search').click(function() {
    $('.nav-item').addClass('hide-item')
    $('#search').hide()
    $('.search-form').addClass('active')
    $('.close').addClass('active')
  })
  $('.close').click(function(){
    $('.nav-item').removeClass('hide-item')
    $('.search-form').removeClass('active')
    $('.close').removeClass('active')
    $('#search').show()
  })
  at_all = $('#loadmore').attr('at_all');
  for ( j = 3; j < at_all; j++) {
    $( '#div' + j ).hide();
  }
  $('#load_more').click(function() {
    var loaded = $(this).attr('num_loaded');
    loaded = loaded * 1 + 2;
    $('#load_more').attr('num_loaded', loaded );
    for(i = 0; i < loaded; i++) {
      $( '#div' + i ).show();
    }
  });
})

$(document).ready(function(){
    $('.parallax').parallax();
});


$(document).ready(function(){
  $('#about_college').on('click', function() {
    $('.about_college').show();
    $('.in_history').hide();
    $('.events').hide();
    })
  $('#in_history').on('click', function() {
    $('.about_college').hide();
    $('.in_history').show();
    $('.events').hide();
    })
  $('#events').on('click', function() {
    $('.about_college').hide();
    $('.in_history').hide();
    $('.events').show();
})
})
