var tl = new TimelineMax({
  repeat: -1,
  repeatDelay: 8,
});

$(document).ready(function() {
  TweenMax.set($('.spoke img'), {
    x: 330
  });

  tl
  .staggerTo($('.second-half .spoke img'), 3, {
    rotation: 180,
    ease: Elastic.easeOut,
  }, -8, 'start')
  .staggerTo($('.first-half .spoke img'), 3, {
    rotation: 0,
    ease: Elastic.easeOut,
  }, -8, 'start')
  .staggerTo($('.second-half .spoke img'), 3, {
    rotation: 0,
    ease: Elastic.easeOut,
  }, -8, 'mid')
  .staggerTo($('.first-half .spoke img'), 3, {
    rotation: 180,
    ease: Elastic.easeOut,
  }, -8, 'mid');
});
