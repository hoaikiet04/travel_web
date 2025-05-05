$(document).ready(function() {
    $('.item-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slides',
      autoplay: true,
      autoplaySpeed: 4000,
    });

    $('.slides').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: $('.inner-prev'),
      nextArrow: $('.inner-next'),
      asNavFor: '.item-slider',
      dots: true,
      fade: true,
      autoplay: true,
      autoplaySpeed: 4000,
    });

    $('.slides').on('afterChange', function(event, slick, currentSlide) {
      $('.inner-slide').removeClass('slick-active');
      $('.inner-slide').eq(currentSlide).addClass('slick-active');
    });

    $('.slides .inner-slide').eq(0).addClass('slick-active');

    $('form').on('submit', function(e) {
      e.preventDefault();

      const destination = $('#destination').val();
      const tourType = $('#tour-type').val();
      const departureDate = $('#departure-date').val();
      const guests = parseInt($('#guests').val());

      $.ajax({
        url: 'get_tours.php',
        type: 'GET',
        data: {
          destination: destination,
          tourType: tourType,
          departureDate: departureDate,
          guests: guests
        },
        dataType: 'json',
        success: function(tours) {
          displayTourResults(tours);
        },
        error: function(xhr, status, error) {
          console.error('Lỗi khi lấy dữ liệu tour:', error);
          displayTourResults([]);
        }
      });
    });

    function displayTourResults(tours) {
      const $sectionFive = $('.section-five .inner-list');
      $sectionFive.empty();

      if (tours.length === 0 || (tours.error && tours.length === 0)) {
        $sectionFive.append('<p>Không tìm thấy tour phù hợp.</p>');
        return;
      }

      tours.forEach(tour => {
        const tourItem = `
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 flex-box">
            <div class="list-box">
              <div class="box-image">
                <img src="${tour.image}" alt="${tour.title}" />
              </div>
              <div class="content-box">
                <div class="list-icons">
                  <div class="icon-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="icon-media">
                    <i class="fa-solid fa-camera-retro"></i>
                    <i class="fa-solid fa-video"></i>
                  </div>
                </div>
                <h2 class="content-title">${tour.title}</h2>
                <div class="content-sub">
                  <i class="fa-solid fa-location-dot"></i>
                  <span class="sub-address">${tour.destination}</span>
                </div>
                <div class="content-price">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>Từ ${parseInt(tour.price).toLocaleString()}</span>
                </div>
              </div>
            </div>
          </div>
        `;
        $sectionFive.append(tourItem);
      });
    }

    const useNewSearchPage = true;
    $('form').on('submit', function(e) {
        if (useNewSearchPage) {
            e.preventDefault();
            const destination = $('#destination').val();
            const tourType = $('#tour-type').val();
            const departureDate = $('#departure-date').val();
            const guests = parseInt($('#guests').val());
            const queryString = `?destination=${encodeURIComponent(destination)}&tourType=${encodeURIComponent(tourType)}&departureDate=${encodeURIComponent(departureDate)}&guests=${guests}`;
            window.location.href = 'search_results.html' + queryString;
        }
    });
});