import React from "react";
import Titems from "./Titems";

const Testimonial=()=>{
    return (
      <div>

<section id="testimonials" className="testimonials">
      <div className="container">

        <div className="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div className="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div className="swiper-wrapper">

       <Titems p="Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper."

       src="assets/img/testimonials/testimonials-1.jpg"

       name="Saul Goodman"

       title="Ceo & Founder"
       />

      <Titems
        p="Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa."

        src="assets/img/testimonials/testimonials-2.jpg"

        name="Sara Wilsson"

        title="Designer"
      
      />

      

      <Titems
      

      p="Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim."

      src="assets/img/testimonials/testimonials-3.jpg"

      name="Jena Karlis"

      title="Store Owner"
      
      />


      <Titems

      p="Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam."

      src="assets/img/testimonials/testimonials-4.jpg"

      name="Matt Brandon"

      title="Freelancer"
      
      />

      <Titems

      p=" Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid."

      src="assets/img/testimonials/testimonials-5.jpg"

      name="John Larson"

      title="Entrepreneur"
      
      />
       </div>
          <div className="swiper-pagination"></div>
        </div>

      </div>
    </section>

     
      </div>
    )
}

export default Testimonial;