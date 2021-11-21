import React from "react";

const Titems=(props)=>{
    return (
      <div>
        
        <div className="swiper-slide">
              <div className="testimonial-item">
                <p>
                  <i className="bx bxs-quote-alt-left quote-icon-left"></i>
                  {props.p}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src={props.src} class="testimonial-img" alt=""/>
                <h3>{props.name}</h3>
                <h4>{props.title}</h4>
              </div>
            </div>

            

      </div>

    )
}

export default Titems;