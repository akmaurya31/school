var MINOVATE = MINOVATE || {};



$(function() {









  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  // global inicialization functions

  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



  MINOVATE.global = {



    init: function() {

      MINOVATE.global.deviceSize();

      MINOVATE.global.layout();

      MINOVATE.global.animsition();

    },



    // device identification function

    deviceSize: function(){

			var jRes = jRespond([

				{

					label: 'smallest',

					enter: 0,

					exit: 479

				},{

					label: 'handheld',

					enter: 480,

					exit: 767

				},{

					label: 'tablet',

					enter: 768,

					exit: 991

				},{

					label: 'laptop',

					enter: 992,

					exit: 1199

				},{

					label: 'desktop',

					enter: 1200,

					exit: 10000

				}

			]);

			jRes.addFunc([

				{

					breakpoint: 'desktop',

					enter: function() { $body.addClass('device-lg'); },

					exit: function() { $body.removeClass('device-lg'); }

				},{

					breakpoint: 'laptop',

					enter: function() { $body.addClass('device-md'); },

					exit: function() { $body.removeClass('device-md'); }

				},{

					breakpoint: 'tablet',

					enter: function() { $body.addClass('device-sm'); },

					exit: function() { $body.removeClass('device-sm'); }

				},{

					breakpoint: 'handheld',

					enter: function() { $body.addClass('device-xs'); },

					exit: function() { $body.removeClass('device-xs'); }

				},{

					breakpoint: 'smallest',

					enter: function() { $body.addClass('device-xxs'); },

					exit: function() { $body.removeClass('device-xxs'); }

				}

			]);

		},



    layout: function() {

      var defaultHeaderScheme = 'scheme-default',

          defaultNavbarScheme = 'scheme-default',

          defaultBrandingScheme = 'scheme-default',

          defaultColorScheme = 'default-scheme-color',

          defaultHeaderPosition = 'header-fixed',

          defaultNavbarPosition = 'aside-fixed',

          defaultRightbarVisibility = 'rightbar-hidden',

          defaultAppClasses = 'scheme-default default-scheme-color header-fixed aside-fixed rightbar-hidden';



      $body.addClass(defaultAppClasses);

      $header.addClass(defaultHeaderScheme);

      $branding.addClass(defaultBrandingScheme);

      $sidebar.addClass(defaultNavbarScheme).addClass(defaultNavbarPosition);



      $headerSchemeEl.on('click', function($event) {

        var scheme = $(this).data('scheme');



        $body.removeClass(defaultHeaderScheme).addClass(scheme);

        $header.removeClass(defaultHeaderScheme).addClass(scheme);

        defaultHeaderScheme = scheme;

        $event.stopPropagation();

      });



      $brandingSchemeEl.on('click', function($event) {

        var scheme = $(this).data('scheme');



        $branding.removeClass(defaultBrandingScheme).addClass(scheme);

        defaultBrandingScheme = scheme;

        $event.stopPropagation();

      });



      $sidebarSchemeEl.on('click', function($event) {

        var scheme = $(this).data('scheme');



        $body.removeClass(defaultNavbarScheme).addClass(scheme);

        $sidebar.removeClass(defaultNavbarScheme).addClass(scheme);

        defaultNavbarScheme = scheme;

        $event.stopPropagation();

      });



      $colorSchemeEl.on('click', function($event) {

        var scheme = $(this).data('scheme');



        $body.removeClass(defaultColorScheme).addClass(scheme);

        defaultColorScheme = scheme;

        $event.stopPropagation();

      });



      $fixedHeaderEl.change(function() {

        if ($body.hasClass('header-fixed')) {

          $body.removeClass('header-fixed').addClass('header-static');

        } else {

          $body.removeClass('header-static').addClass('header-fixed');

        }

      });

      $fixedHeaderEl.parent().on('click', function($event) {

        $event.stopPropagation();

      });



      $fixedAsideEl.change(function() {

        if ($body.hasClass('aside-fixed')) {

          $body.removeClass('aside-fixed').addClass('aside-static');

          $sidebar.removeClass('aside-fixed').addClass('aside-static');

        } else {

          $body.removeClass('aside-static').addClass('aside-fixed');

          $sidebar.removeClass('aside-static').addClass('aside-fixed');

        }

      });

      $fixedAsideEl.parent().on('click', function($event) {

        $event.stopPropagation();

      });



      $toggleRightbarEl.on('click', function() {

        if ($body.hasClass('rightbar-hidden')) {

          $body.removeClass('rightbar-hidden').addClass('rightbar-show');

        } else {

          $body.removeClass('rightbar-show').addClass('rightbar-hidden');

        }

      });



      if ($app.hasClass('boxed-layout')){

        $app.parent().addClass('boxed-layout');

      }



      if ($app.hasClass('sidebar-offcanvas')){

        $app.parent().addClass('sidebar-offcanvas');

      }



      if ($app.hasClass('hz-menu')){

        $app.parent().addClass('hz-menu');

      }



      if ($app.hasClass('rtl')){

        $app.parent().addClass('rtl');

      }



    },



    // initialize animsition

    animsition: function() {

      $wrap.animsition({

        inClass               :   'fade-in',

        outClass              :   'fade-out',

        inDuration            :    1500,

        outDuration           :    800,

        linkElement           :   '.animsition-link',

        // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'

        loading               :    true,

        loadingParentElement  :   'body', //animsition wrapper element

        loadingClass          :   'animsition-loading',

        unSupportCss          : [ 'animation-duration',

          '-webkit-animation-duration',

          '-o-animation-duration'

        ],

        //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.

        //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".



        overlay               :   false,

        overlayClass          :   'animsition-overlay-slide',

        overlayParentElement  :   'body'

      });

    }



  };













  //!!!!!!!!!!!!!!!!!!!!!!!!!

  // header section functions

  //!!!!!!!!!!!!!!!!!!!!!!!!!



  MINOVATE.header = {



    init: function() {



    }





  };













  //!!!!!!!!!!!!!!!!!!!!!!!!!

  // navbar section functions

  //!!!!!!!!!!!!!!!!!!!!!!!!!



  MINOVATE.navbar = {



    init: function() {

      MINOVATE.navbar.menu();

      MINOVATE.navbar.ripple();

      MINOVATE.navbar.removeRipple();

      MINOVATE.navbar.collapse();

      MINOVATE.navbar.offcanvas();

    },



    menu: function(){

      if( $dropdowns.length > 0 ) {



        $dropdowns.addClass('dropdown');



        var $submenus = $dropdowns.find('ul >.dropdown');

        $submenus.addClass('submenu');



        $a.append('<i class="fa fa-plus"></i>');



        $a.on('click', function(event) {

          if ($app.hasClass('sidebar-sm') || $app.hasClass('sidebar-xs') || $app.hasClass('hz-menu')) {

            return false;

          }



          var $this = $(this),

              $parent = $this.parent('li'),

              $openSubmenu = $('.submenu.open');



          if (!$parent.hasClass('submenu')) {

            $dropdowns.not($parent).removeClass('open').find('ul').slideUp();

          }



          $openSubmenu.not($this.parents('.submenu')).removeClass('open').find('ul').slideUp();

          $parent.toggleClass('open').find('>ul').stop().slideToggle();

          event.preventDefault();

        });



        $dropdowns.on('mouseenter', function() {

          $sidebar.addClass('dropdown-open');

          $controls.addClass('dropdown-open');

        });



        $dropdowns.on('mouseleave', function() {

          $sidebar.removeClass('dropdown-open');

          $controls.removeClass('dropdown-open');

        });



        $notDropdownsLinks.on('click', function() {

          $dropdowns.removeClass('open').find('ul').slideUp();

        });



        var $activeDropdown = $('.dropdown>ul>.active').parent();



        $activeDropdown.css('display', 'block');

      }

    },



    ripple: function() {

      var parent, ink, d, x, y;



      $navigation.find('>li>a').click(function(e){

        parent = $(this).parent();



        if(parent.find('.ink').length === 0) {

          parent.prepend('<span class="ink"></span>');

        }



        ink = parent.find('.ink');

        //incase of quick double clicks stop the previous animation

        ink.removeClass('animate');



        //set size of .ink

        if(!ink.height() && !ink.width())

        {

          //use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.

          d = Math.max(parent.outerWidth(), parent.outerHeight());

          ink.css({height: d, width: d});

        }



        //get click coordinates

        //logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;

        x = e.pageX - parent.offset().left - ink.width()/2;

        y = e.pageY - parent.offset().top - ink.height()/2;



        //set the position and add class .animate

        ink.css({top: y+'px', left: x+'px'}).addClass('animate');



        setTimeout(function(){

          $('.ink').remove();

        }, 600);

      });

    },



    removeRipple: function(){

      $sidebar.find('.ink').remove();

    },



    collapse: function(){

      $collapseSidebarEl.on('click', function(e) {
	

        /*if ($app.hasClass('sidebar-sm')) {

          $app.removeClass('sidebar-sm').addClass('sidebar-xs');

        }*/

        if ($app.hasClass('sidebar-xs')) {

          $app.removeClass('sidebar-xs');

        }
	else if ($app.hasClass('sidebar-xs') === false) {

          //$app.removeClass('sidebar-xs');
	  $app.addClass('sidebar-xs');


        }


        /*else {

          $app.addClass('sidebar-sm');
	 //$app.removClass('sidebar-sm');

        }*/



        //$app.removeClass('sidebar-sm-forced sidebar-xs-forced');

        //$app.parent().removeClass('sidebar-sm sidebar-xs');

        //MINOVATE.navbar.removeRipple;

        //$window.trigger('resize');

        //e.preventDefault();

      });

    },



    offcanvas: function() {

      $offcanvasToggleEl.on('click', function(e) {

        if ($app.hasClass('offcanvas-opened')) {

          $app.removeClass('offcanvas-opened');

        } else {

          $app.addClass('offcanvas-opened');

        }

        e.preventDefault();

      });

    }





  };

  







  //!!!!!!!!!!!!!!!!

  // tiles functions

  //!!!!!!!!!!!!!!!!



  MINOVATE.tiles = {



    init: function() {

      MINOVATE.tiles.toggle();

      MINOVATE.tiles.refresh();

      MINOVATE.tiles.fullscreen();

      MINOVATE.tiles.close();

    },



    toggle: function() {

      $tileToggleEl.on('click', function(){

        var element = $(this);

        var tile = element.parents('.tile');



        tile.toggleClass('collapsed');

        tile.children().not('.tile-header').slideToggle(150);

      });

    },



    refresh: function() {

      $tileRefreshEl.on('click', function(){

        var element = $(this);

        var tile = element.parents('.tile');

        var dropdown = element.parents('.dropdown');



        tile.addClass('refreshing');

        dropdown.trigger('click');



        var t = setTimeout( function(){

          tile.removeClass('refreshing');

        }, 3000 );

      });

    },



    fullscreen: function() {

      $tileFullscreenEl.on('click', function(){

        var element = $(this);

        var tile = element.parents('.tile');

        var dropdown = element.parents('.dropdown');



        screenfull.toggle(tile[0]);

        dropdown.trigger('click');

      });



      if ($tileFullscreenEl.length > 0) {

        $(document).on(screenfull.raw.fullscreenchange, function () {

          var element = $(screenfull.element);

          if (screenfull.isFullscreen) {

            element.addClass('isInFullScreen');

          } else {

            $('.tile.isInFullScreen').removeClass('isInFullScreen');

          }

        });

      }

    },



    close: function() {

      $tileCloseEl.on('click', function(){

        var element = $(this);

        var tile = element.parents('.tile');



        tile.addClass('closed').fadeOut();

      });

    }



  };







  //!!!!!!!!!!!!!!!!

  // extra functions

  //!!!!!!!!!!!!!!!!



  MINOVATE.extra = {



    init: function() {

      MINOVATE.extra.sparklineChart();

      MINOVATE.extra.slimScroll();

      MINOVATE.extra.daterangePicker();

      MINOVATE.extra.easypiechart();

      MINOVATE.extra.chosen();

      MINOVATE.extra.toggleClass();

      MINOVATE.extra.colorpicker();

      MINOVATE.extra.touchspin();

      MINOVATE.extra.datepicker();

      MINOVATE.extra.animateProgress();

      MINOVATE.extra.counter();

      MINOVATE.extra.popover();

      MINOVATE.extra.tooltip();

      MINOVATE.extra.splash();

      MINOVATE.extra.lightbox();

    },



    //initialize sparkline chart on elements

    sparklineChart: function(){



      if( $sparklineEl.length > 0 ){

        $sparklineEl.each(function() {

          var element = $(this);



          element.sparkline('html', { enableTagOptions: true });

        });

      }



    },



    //initialize slimscroll on elements

    slimScroll: function(){



      if( $slimScrollEl.length > 0 ){

        $slimScrollEl.each(function() {

          var element = $(this);



          element.slimScroll({height: '100%'});

        });

      }



    },



    //initialize date range picker on elements

    daterangePicker: function() {



      if ($pickDateEl.length > 0) {

        $pickDateEl.each(function() {

          var element = $(this);



          element.find('span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));



          element.daterangepicker({

            format: 'MM/DD/YYYY',

            startDate: moment().subtract(29, 'days'),

            endDate: moment(),

            minDate: '01/01/2012',

            maxDate: '12/31/2015',

            dateLimit: { days: 60 },

            showDropdowns: true,

            showWeekNumbers: true,

            timePicker: false,

            timePickerIncrement: 1,

            timePicker12Hour: true,

            ranges: {

              'Today': [moment(), moment()],

              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],

              'Last 7 Days': [moment().subtract(6, 'days'), moment()],

              'Last 30 Days': [moment().subtract(29, 'days'), moment()],

              'This Month': [moment().startOf('month'), moment().endOf('month')],

              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]

            },

            opens: 'left',

            drops: 'down',

            buttonClasses: ['btn', 'btn-sm'],

            applyClass: 'btn-success',

            cancelClass: 'btn-default',

            separator: ' to ',

            locale: {

              applyLabel: 'Submit',

              cancelLabel: 'Cancel',

              fromLabel: 'From',

              toLabel: 'To',

              customRangeLabel: 'Custom',

              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],

              monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],

              firstDay: 1

            }

          }, function(start, end, label) {

            console.log(start.toISOString(), end.toISOString(), label);

            element.find('span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

          });



        });

      }



    },



    easypiechart: function() {

      if ($easypiechartEl.length > 0) {

        $easypiechartEl.each(function() {

          var element = $(this);

          element.easyPieChart({

            onStart: function(value) {

              if (element.hasClass('animate')) {

                $(this.el).find('span').countTo({to: value});

              }

            }

          });

        });

      }

    },



    chosen: function() {

      if ($chosenEl.length > 0) {

        $chosenEl.each(function() {

          var element = $(this);

          element.on('chosen:ready', function(e, chosen) {

            var width = element.css("width");

            element.next().find('.chosen-choices').addClass('form-control');

            element.next().css("width", width);

            element.next().find('.search-field input').css("width", "125px");

          }).chosen();

        });

      }

    },



    toggleClass: function() {

      $toggleClassEl.on('click', function(){

        var element = $(this),

            className = element.data('toggle'),

            type = element.data('type');



        if (type === 'radio') {

          element.parent().find('.'+className).removeClass(className);

        }



        if (element.hasClass(className)) {

          element.removeClass(className);

        } else {

          element.addClass(className);

        }

      });

    },



    colorpicker: function() {

      if ($colorPickerEl.length > 0) {

        $colorPickerEl.each(function() {

          var element = $(this);

          element.colorpicker();

        });

      }

    },



    touchspin: function() {

      if ($touchspinEl.length > 0) {

        $touchspinEl.each(function() {

          var element = $(this);

          element.TouchSpin();

        });

      }

    },



    datepicker: function() {

      if ($datepickerEl.length > 0) {

        $datepickerEl.each(function() {

          var element = $(this);

          var format = element.data('format')

          element.datetimepicker({

            format: format

          });

        });

      }

    },



    animateProgress: function() {

      if ($animateProgressEl.length > 0) {

        $animateProgressEl.each(function() {

          var element = $(this);

          var progress =  element.data('percentage');



          element.css('width', progress);

        });

      }

    },



    counter: function(){

			if ($counterEl.length > 0) {

        $counterEl.each(function() {

          var element = $(this);



          element.countTo();

        });

      }

		},



    popover: function() {

      $popoverEl = $('[data-toggle="popover"]');

      if ($popoverEl.length > 0) {

        $popoverEl.each(function() {

          var element = $(this);



          element.popover();

        });

      }

    },



    tooltip: function() {

      $tooltipEl = $('[data-toggle="tooltip"]');

      if ($tooltipEl.length > 0) {

        $tooltipEl.each(function() {

          var element = $(this);



          element.tooltip();

        });

      }

    },



    splash: function() {

      var options = "";

      var target = "";

      $splashEl.on('show.bs.modal', function (e) {

        options = e.relatedTarget.dataset.options;

        target = $(e.target);



        target.addClass(options);

        $body.addClass(options).addClass('splash');

      });

      $splashEl.on('hidden.bs.modal', function () {

        target.removeClass(options);

        $body.removeClass(options).removeClass('splash');

      });

    },



    //initialize magnificPopup lightbox

    lightbox: function(){

			var $lightboxImageEl = $('[data-lightbox="image"]'),

          $lightboxIframeEl = $('[data-lightbox="iframe"]'),

          $lightboxGalleryEl = $('[data-lightbox="gallery"]');



			if( $lightboxImageEl.length > 0 ) {

				$lightboxImageEl.magnificPopup({

					type: 'image',

					closeOnContentClick: true,

					closeBtnInside: false,

					fixedContentPos: true,

					image: {

						verticalFit: true

					}

				});

			}



      if( $lightboxIframeEl.length > 0 ) {

				$lightboxIframeEl.magnificPopup({

					disableOn: 600,

					type: 'iframe',

					removalDelay: 160,

					preloader: false,

					fixedContentPos: false

				});

			}



			if( $lightboxGalleryEl.length > 0 ) {

				$lightboxGalleryEl.each(function() {

					var element = $(this);



					if( element.find('a[data-lightbox="gallery-item"]').parent('.clone').hasClass('clone') ) {

						element.find('a[data-lightbox="gallery-item"]').parent('.clone').find('a[data-lightbox="gallery-item"]').attr('data-lightbox','');

					}



					element.magnificPopup({

						delegate: 'a[data-lightbox="gallery-item"]',

						type: 'image',

						closeOnContentClick: true,

						closeBtnInside: false,

						fixedContentPos: true,

						image: {

							verticalFit: true

						},

						gallery: {

							enabled: true,

							navigateByImgClick: true,

							preload: [0,1] // Will preload 0 - before current, and 1 after the current image

						}

					});

				});

			}

		}



  };









  //!!!!!!!!!!!!!!!!!!!!

  // check mobile device

  //!!!!!!!!!!!!!!!!!!!!



  MINOVATE.isMobile = {

    Android: function() {

      return navigator.userAgent.match(/Android/i);

    },

    BlackBerry: function() {

      return navigator.userAgent.match(/BlackBerry/i);

    },

    iOS: function() {

      return navigator.userAgent.match(/iPhone|iPad|iPod/i);

    },

    Opera: function() {

      return navigator.userAgent.match(/Opera Mini/i);

    },

    Windows: function() {

      return navigator.userAgent.match(/IEMobile/i);

    },

    any: function() {

      return (MINOVATE.isMobile.Android() || MINOVATE.isMobile.BlackBerry() || MINOVATE.isMobile.iOS() || MINOVATE.isMobile.Opera() || MINOVATE.isMobile.Windows());

    }

  };







  //!!!!!!!!!!!!!!!!!!!!!!!!!

  // initialize after resize

  //!!!!!!!!!!!!!!!!!!!!!!!!!



  MINOVATE.documentOnResize = {



		init: function(){



      var t = setTimeout( function(){



        MINOVATE.documentOnReady.setSidebar();

        MINOVATE.navbar.removeRipple();



			}, 500 );



		}



	};













  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  // initialize when document ready

  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



  MINOVATE.documentOnReady = {



		init: function(){

      MINOVATE.global.init();

			MINOVATE.header.init();

      MINOVATE.navbar.init();

      MINOVATE.documentOnReady.windowscroll();

      MINOVATE.tiles.init();

      MINOVATE.extra.init();

      MINOVATE.documentOnReady.setSidebar();

		},



    // run on window scrolling



    windowscroll: function(){



			$window.on( 'scroll', function(){





			});

		},





    setSidebar: function() {



      width = $window.width();



      if (width < 992) {

        $app.addClass('sidebar-sm');

      } else {

        $app.removeClass('sidebar-sm sidebar-xs');

      }



      if (width < 768) {

        $app.removeClass('sidebar-sm').addClass('sidebar-xs');

      } else if (width > 992){

        $app.removeClass('sidebar-sm sidebar-xs');

      } else {

        $app.removeClass('sidebar-xs').addClass('sidebar-sm');

      }



      if ($app.hasClass('sidebar-sm-forced')) {

        $app.addClass('sidebar-sm');

      }



      if ($app.hasClass('sidebar-xs-forced')) {

        $app.addClass('sidebar-xs');

      }



    }



	};















  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  // initialize when document load

  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



	MINOVATE.documentOnLoad = {



		init: function(){



		}



	};













  //!!!!!!!!!!!!!!!!!!!!!!!!!

  // global variables
  //!!!!!!!!!!!!!!!!!!!!!!!!!



  var $window = $(window),

      $body = $('body'),

      $header = $('#header'),

      $branding = $('#header .branding'),

      $sidebar = $('#sidebar'),

      $controls = $('#controls'),

      $app = $('.appWrapper'),

      $navigation = $('#navigation'),

      $sparklineEl = $('.sparklineChart'),

      $slimScrollEl = $('.slim-scroll'),

      $collapseSidebarEl = $('.collapse-sidebar'),

      $wrap = $('#wrap'),

      $offcanvasToggleEl = $('.offcanvas-toggle'),



      //navigation elements

      $dropdowns = $navigation.find('ul').parent('li'),

      $a = $dropdowns.children('a'),

      $notDropdowns = $navigation.children('li').not($dropdowns),

      $notDropdownsLinks = $notDropdowns.children('a'),

      // end of navuigation elements



      $headerSchemeEl = $('.color-schemes .header-scheme'),

      $brandingSchemeEl = $('.color-schemes .branding-scheme'),

      $sidebarSchemeEl = $('.color-schemes .sidebar-scheme'),

      $colorSchemeEl = $('.color-schemes .color-scheme'),

      $fixedHeaderEl = $('#fixed-header'),

      $fixedAsideEl = $('#fixed-aside'),

      $toggleRightbarEl = $('.toggle-right-sidebar'),

      $pickDateEl = $('.pickDate'),



      $tileEl = $('.tile'),

      $tileToggleEl = $('.tile .tile-toggle'),

      $tileRefreshEl = $('.tile .tile-refresh'),

      $tileFullscreenEl = $('.tile .tile-fullscreen'),

      $tileCloseEl = $('.tile .tile-close'),



      $easypiechartEl = $('.easypiechart'),

      $chosenEl = $('.chosen-select'),

      $toggleClassEl = $('.toggle-class'),

      $colorPickerEl = $('.colorpicker'),

      $touchspinEl = $('.touchspin'),

      $datepickerEl = $('.datepicker'),

      $animateProgressEl = $('.animate-progress-bar'),

      $counterEl = $('.counter'),

      $splashEl = $('.splash');





  //!!!!!!!!!!!!!

  // initializing

  //!!!!!!!!!!!!!

  $(document).ready( MINOVATE.documentOnReady.init );

  $window.load( MINOVATE.documentOnLoad.init );

  $window.on( 'resize', MINOVATE.documentOnResize.init );



});



/*********************** 

*****

* custom js

****

*/

document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {

  const dropZoneElement = inputElement.closest(".drop-zone");



  dropZoneElement.addEventListener("click", (e) => {

    inputElement.click();

  });



  inputElement.addEventListener("change", (e) => {

    if (inputElement.files.length) {

      updateThumbnail(dropZoneElement, inputElement.files[0]);

    }

  });



  dropZoneElement.addEventListener("dragover", (e) => {

    e.preventDefault();

    dropZoneElement.classList.add("drop-zone--over");

  });



  ["dragleave", "dragend"].forEach((type) => {

    dropZoneElement.addEventListener(type, (e) => {

      dropZoneElement.classList.remove("drop-zone--over");

    });

  });



  dropZoneElement.addEventListener("drop", (e) => {

    e.preventDefault();



    if (e.dataTransfer.files.length) {

      inputElement.files = e.dataTransfer.files;

      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);

    }



    dropZoneElement.classList.remove("drop-zone--over");

  });

});



/**

 * Updates the thumbnail on a drop zone element.

 *

 * @param {HTMLElement} dropZoneElement

 * @param {File} file

 */

function updateThumbnail(dropZoneElement, file) {

  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");



  // First time - remove the prompt

  if (dropZoneElement.querySelector(".drop-zone__prompt")) {

    dropZoneElement.querySelector(".drop-zone__prompt").remove();

  }



  // First time - there is no thumbnail element, so lets create it

  if (!thumbnailElement) {

    thumbnailElement = document.createElement("div");

    thumbnailElement.classList.add("drop-zone__thumb");

    dropZoneElement.appendChild(thumbnailElement);

  }



  thumbnailElement.dataset.label = file.name;



  // Show thumbnail for image files

  if (file.type.startsWith("image/")) {

    const reader = new FileReader();



    reader.readAsDataURL(file);

    reader.onload = () => {

      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;

    };

  } else {

    thumbnailElement.style.backgroundImage = null;

  }

}

/* js by: dhananjay */
/* tabs functionality */
$(function () {
  $('.tab-pane:not(.active)').hide();

$('#content-tabs a').on('click', function(e) {
  e.preventDefault();         
  $('#content-tabs > .nav > li.active')
  .removeClass('active');
  $(this).parent().addClass('active');
  
  $('.form-tab-content > div.active')
  .removeClass('active');
  
  $('.form-tab-content > .tab-pane').hide();
  $($(this).attr('href')).show();
})
});

/* in-out form time handle script */

$(function(){
  $('#time-multi, #time-single').on('keyup paste propertychange input', function(){
    let time = this.value.split(':');
    let hours = parseInt(time[0]);
    let minutes = parseInt(time[1])
    if(this.value != null && (hours >= 15)){
      $(this).parent().siblings().children('input.form-control').prop('disabled', false);
    } else{
      $(this).parent().siblings().children('input.form-control').prop('disabled', true);
    }    
  });
});

/* switches functionality */
$(function () {
  $("#switch01").click(function () {
      if ($(this).is(":checked")) {
          $("#switch01--content").show('slow');
      } else {
          $("#switch01--content").hide('slow');
      }
  });
});
$(function () {
  $("#switch02").click(function () {
      if ($(this).is(":checked")) {
          $("#switch02--content").show('slow');
      } else {
          $("#switch02--content").hide('slow');
      }
  });
});
$(function () {
  $("#switch03").click(function () {
      if ($(this).is(":checked")) {
          $("#switch03--content").show('slow');
      } else {
          $("#switch03--content").hide('slow');
      }
  });
});
$(function () {
  $("#switch04").click(function () {
      if ($(this).is(":checked")) {
          $("#switch04--content").show('slow');
      } else {
          $("#switch04--content").hide('slow');
      }
  });
});

/* changes to uppercase */
$(function() {
  $('input[type=text]').keyup(function() {
      this.value = this.value.toUpperCase();
  });
});

/* sweet alerts -- data save */
/* currently called on button call but should be
  called on post method complete*/
  $(function (){
    $('button[type="submit"]').on('click',(e)=>{
      swal({
        title: "Data Saved!",
        text: $(e.target).data("value"),
        icon: "success",
        button: "OK",
      });
    });
  });
/* modal call on deleting row item from table */
$(function (){
  $('td button[title="Delete"]').on('click',(e)=>{
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this data!",
      icon: "warning",
      buttons: ['No', 'Yes'],
      dangerMode: true,
    })
    /* .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Your imaginary file is safe!");
      }
    }); */
  });
});
/* modal call on view icon of row item from table */
/* modal call on vacating hostel row item from table */
$(function (){
  $('td button[title="Vacate Hostel"]').on('click',(e)=>{
    swal({
      title: "Are you sure to vacate?",
      icon: "warning",
      buttons: ['No', 'Yes'],
      dangerMode: true,
    })
    /* .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Your imaginary file is safe!");
      }
    }); */
  });
});
/* modal call on view icon of row item from table */
$(function(){
  $('td button[title="View"]').on('click',function(){
    $("#viewModal").modal('show');
  });
});
$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});
$(function(){
  $("button[type='reset']").on('click',function(){
    swal("Form has been reset!", "", "success");
    $(this).closest('form')[0].reset();
    $(this).closest('form').find('select').each((index,item)=>{
      //item.attr('selectedIndex',0);
       console.log(item);
       item.selectedIndex = 0;
      });
});
});