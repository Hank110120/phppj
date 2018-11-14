$('#btn').mouseenter(function(){
  $(this).css({background: '#efc864'});
  $(this).css({top: '19px'});
  $(this).css("opacity", '1.0');
});
$('#btn').mouseleave(function(){
  $(this).css({top: '18px'});
  $(this).css("opacity", '1.0');
  $(this).css({background: 'rgba(170, 175, 175, 0.4)'});
});
