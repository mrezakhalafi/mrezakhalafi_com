//Load

$('.switch-skills').hide();
$('.switch-questions').hide();
$('.switch-minats').hide();

$('.switch-magangs').hide();
$('.switch-skripsis').hide();
$('.switch-startups').hide();
$('.switch-tugass').hide();

//Slider

$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});

// JS Scroll

$(".ability").click(function() {
    $('html, body').animate({
        scrollTop: $("#ability").offset().top
    }, 2000);
});

$(".portfolio").click(function() {
    $('html, body').animate({
        scrollTop: $("#portfolio").offset().top
    }, 2000);
});

$(".jobs").click(function() {
    $('html, body').animate({
        scrollTop: $("#jobs").offset().top
    }, 2000);
});

$(".testimonials").click(function() {
    $('html, body').animate({
        scrollTop: $("#testimonials").offset().top
    }, 2000);
});

$(".article").click(function() {
    $('html, body').animate({
        scrollTop: $("#article").offset().top
    }, 2000);
});

$(".contact").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 2000);
});

$('.disabled').click(function(e){
    e.preventDefault();
})

// JS Button

$('.ability-box').on('mouseenter', function() {
    $(this).removeClass('ability-box');
    $('.ability-box-active').addClass('ability-box').removeClass('ability-box-active');
    $(this).addClass('ability-box-active');
});

$('.ability-box-active').on('mouseenter', function() {
    $('.ability-box-active').addClass('ability-box').removeClass('ability-box-active');
    $(this).addClass('ability-box-active').removeClass('ability-box');
});

$('.btn-sub-portfolio').on('mouseenter', function() {
    $(this).removeClass('btn-sub-portfolio');
    $('.btn-sub-portfolio-active').addClass('btn-sub-portfolio').removeClass('btn-sub-portfolio-active');
    $(this).addClass('btn-sub-portfolio-active');
});

$('.btn-sub-portfolio-active').on('mouseenter', function() {
    $('.btn-sub-portfolio-active').addClass('btn-sub-portfolio').removeClass('btn-sub-portfolio-active');
    $(this).addClass('btn-sub-portfolio-active').removeClass('btn-sub-portfolio');
});

$('.btn-about').on('mouseenter', function() {
    $(this).removeClass('btn-about');
    $('.btn-about-active').addClass('btn-about').removeClass('btn-about-active');
    $(this).addClass('btn-about-active');
});

$('.btn-about-active').on('mouseenter', function() {
    $('.btn-about-active').addClass('btn-about').removeClass('btn-about-active');
    $(this).addClass('btn-about-active').removeClass('btn-about');
});

// JS Sweetalert

// function login(){
//     swal("Fitur Belum Tersedia", "Website masih dalam tahap pengembangan.", "error");
//   };

// function email(){
//     swal("Fitur Belum Tersedia", "Website masih dalam tahap pengembangan.", "error");
//   };

$('.btn_error').on('click', function() {
    swal("Fitur Belum Tersedia", "Website masih dalam tahap pengembangan.", "error");
});

//About 

$('.btn-homes').on('click', function() {
    $('.switch-skills').hide();
    $('.switch-questions').hide();
    $('.switch-minats').hide();
    $('.switch-about').show();
});

$('.btn-skills').on('click', function() {
    $('.switch-about').hide();
    $('.switch-questions').hide();
    $('.switch-minats').hide();
    $('.switch-skills').show();
});

$('.btn-questions').on('click', function() {
    $('.switch-about').hide();
    $('.switch-skills').hide();
    $('.switch-minats').hide();
    $('.switch-questions').show();
});

$('.btn-minats').on('click', function() {
    $('.switch-about').hide();
    $('.switch-questions').hide();
    $('.switch-skills').hide();
    $('.switch-minats').show();
});

//Portofolio

$('.btn-alls').on('click', function() {
    $('.switch-magangs').hide();
    $('.switch-tugass').hide();
    $('.switch-skripsis').hide();
    $('.switch-startups').hide();
    $('.switch-all').show();
});

$('.btn-magangs').on('click', function() {
    $('.switch-all').hide();
    $('.switch-tugass').hide();
    $('.switch-skripsis').hide();
    $('.switch-startups').hide();
    $('.switch-magangs').show();
});

$('.btn-skripsis').on('click', function() {
    $('.switch-all').hide();
    $('.switch-tugass').hide();
    $('.switch-magangs').hide();
    $('.switch-startups').hide();
    $('.switch-skripsis').show();
});

$('.btn-startups').on('click', function() {
    $('.switch-all').hide();
    $('.switch-tugass').hide();
    $('.switch-skripsis').hide();
    $('.switch-magangs').hide();
    $('.switch-startups').show();
});

$('.btn-tugass').on('click', function() {
    $('.switch-all').hide();
    $('.switch-magangs').hide();
    $('.switch-skripsis').hide();
    $('.switch-startups').hide();
    $('.switch-tugass').show();
});