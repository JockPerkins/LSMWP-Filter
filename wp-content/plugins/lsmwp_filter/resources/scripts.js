// Select Category Button
$('.filter-bar li').on('click', function(){
  // get class / category of the clicked item
  var thisCategory = $(this).data('category');
  // hide all post items
  $('#main .post').hide();
  // show all post items where class = class / category
  $('#main .category-' + thisCategory).show();
  // show the clear filter button
  $('.clear-filter').show();
});

// Clear Filter Button
$('.clear-filter a').on('click', function(){
  // show all posts
  $('#main .post').show();
  // hide button
  $('.clear-filter').hide();
})
