import React from 'react';
import PropTypes from 'prop-types';
import { Slider, Slide } from 'react-materialize';
import slide1 from '../assets/images/slide1.jpg';
import slide2 from '../assets/images/slide2.jpg';
import slide3 from '../assets/images/slide3.jpg';
import artiste1 from '../assets/images/artiste1.jpg';
import artiste2 from '../assets/images/artiste2.jpg';
import artiste3 from '../assets/images/artiste3.png';
import artiste4 from '../assets/images/artiste4.jpg';
import artiste5 from '../assets/images/artiste5.png';
import artiste6 from '../assets/images/artiste6.jpg';





const PageTwo = () => (
  <div>
    <div>
      <Slider>
        <Slide
          src={slide1}
          title="Music Is Life To Us"
        >
        Lorem Here's our small slogan.
        </Slide>
        <Slide
          src={slide2}
          title="Left aligned Caption"
          placement="left"
        >
        Here's our small slogan.
        </Slide>
        <Slide
          src={slide3}
          title="Right aligned Caption"
          placement="right"
        >
        Here's our small slogan.
        </Slide>
      </Slider>
    </div>
    <div>
      <h1>
        ARTISTS
      </h1>
      <hr />
      <h5>POPULAR SINGERS</h5>
      <div>
        <div className="row">
          <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste1} />
                <span className="card-title"><b>ADEKUNLE GOLD</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div>
           <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste2} />
                <span className="card-title"><b>OLAMIDE</b>
                  <br />
                  RAPPER
                </span>
              </div>
            </div>
          </div> <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste3} />
                <span className="card-title"><b>FALZ</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div> <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste4} />
                <span className="card-title"><b>2 FACE</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div> <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste5} />
                <span className="card-title"><b>ADEKUNLE GOLD</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div> <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste6} />
                <span className="card-title"><b>WIZKID</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div>

         </div>
      </div>
      <center>
      <button className="waves-effect waves-light btn">LOAD MORE</button>
      </center>
      <div>
         <h1>
        ARTISTS
      </h1>
      <hr />
      <h5>NEWLY ADDED ARTIST VIDEO</h5>
      <div>
        <div className="row">
          <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste1} />
                <span className="card-title"><b>ADEKUNLE GOLD</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div>
           <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste2} />
                <span className="card-title"><b>OLAMIDE</b>
                  <br />
                  RAPPER
                </span>
              </div>
            </div>
          </div> <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img src={artiste3} />
                <span className="card-title"><b>FALZ</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div>

         </div>
      </div>
      </div>
    </div>
  </div>
);

PageTwo.propTypes = {
  children: PropTypes.object.isRequired
};

export default PageTwo;
