
<div >
    <div class=" mt-5 " style="justify-content: center;">
        <form action="{{ route('ulasan.store') }}" method="post" role="form" class="php-email-form">
            @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Pekerjaan" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Ulasan" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center" style="color: #4e73df"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#ulasanForm').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
        
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Tambahkan ulasan baru ke bagian testimonial
                        var newTestimonial = `
                            // <div class="swiper-slide">
                            //     <div class="testimonial-wrap">
                            //         <div class="testimonial-item">
                            //             <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            //             <h3>${response.name}</h3>
                            //             <h4>${response.subject}</h4>
                            //             <p>
                            //                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            //                 ${response.message}
                            //                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            //             </p>
                            //         </div>
                            //     </div>
                            // </div>
                        `;
                        $('.swiper-wrapper').append(newTestimonial);
                        // Tampilkan pesan sukses
                        $('.sent-message').show();
                    },
                    error: function(response) {
                        // Tampilkan pesan error
                        $('.error-message').show();
                    }
                });
            });
        });
        </script>