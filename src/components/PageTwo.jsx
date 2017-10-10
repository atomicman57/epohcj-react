import React from 'react';
import PropTypes from 'prop-types';
import { Link } from 'react-router';
import ImageSlider from 'react-slick';
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
import artiste7 from '../assets/images/artiste7.jpg';
import fela from '../assets/images/fela.jpg';


import musicCover from '../assets/images/musiccover.jpg';
import naijaFlag from '../assets/images/Nigeria-icon.png';

const settings = {
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1
};

const PageTwo = () => (
  <div>
    <div>
      <nav
        className="mynav" style={{
          zIndex: '200', position: 'absolute', top: 15, width: '95%', marginLeft: '3%', borderRadius: '200px'
        }}>
        <div className="nav-wrapper mynav" style={{ borderRadius: '20px' }}>
          <Link to="#" data-activates="mobile-demo" className="button-collapse">
            <i className="material-icons">menu</i>
          </Link>
          <ul className="hide-on-med-and-down">
            <Link href="#" className="brand-logo" style={{ marginLeft: '2%' }}>Logo</Link>
            <li className="mymargin">
              <Link to="#">Welcome</Link>
            </li>
            <li><Link to="#">Artistes</Link></li>
            <li><Link to="#">Albums</Link></li>
            <li><Link to="#">Videos</Link></li>
            <li><Link to="#">Lyrics</Link></li>
            <li><Link to="#">Record</Link></li>
            <li><Link to="#">Labels</Link></li>
            <li><Link to="#">Producers</Link></li>
            <li><Link to="#">Radio</Link></li>
            <li><Link to="/">Page 1</Link></li>
            <li style={{ marginLeft: '30px', borderRight: '1px white solid' }} className="mylogin"><a href="#"><i className="material-icons">add_shopping_cart</i></a></li>
            <li style={{ borderRight: '1px white solid' }} className="mylogin"><a href="#"><img style={{ position: 'relative', top: 10 }} src={naijaFlag} /></a></li>
            <li style={{ borderRight: '1px white solid' }} className="mylogin"><a href="#"><i className="material-icons">search</i></a></li>
            <li className="mylogin"><a href="#"><i className="material-icons">menu</i></a></li>


          </ul>
          <ul className="side-nav" id="mobile-demo">
            <li><Link to="#">Home</Link></li>
            <li><Link to="#">Artistes</Link></li>
            <li><Link to="#">Albums</Link></li>
            <li><Link to="#">Videos</Link></li>
            <li><Link to="#">Lyrics</Link></li>
            <li><Link to="#">Record</Link></li>
            <li><Link to="#">Labels</Link></li>
            <li><Link to="#">Producers</Link></li>
            <li><Link to="#">Radio</Link></li>
            <li><Link to="/">Page 1</Link></li>
            <li><a href="#"><i className="material-icons">search</i></a></li>
            <li><Link to="#">Login</Link></li>
            <li><Link to="#">Register</Link></li>
          </ul>
        </div>
      </nav>
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
    <div >
      <center>
        <h2>
        ARTISTS
        </h2>
        <hr className="myhr" />
        <br />
        <h5>POPULAR SINGERS</h5>
        <br />
      </center>
      <div>
        <div className="row">
          <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img className="mybox" src={artiste1} />
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
                <img className="mybox" src={artiste2} />
                <span className="card-title"><b>OLAMIDE</b>
                  <br />
                  RAPPER
                </span>
              </div>
            </div>
          </div> <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img className="mybox" src={artiste3} />
                <span className="card-title"><b>FALZ</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div>
          <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img className="mybox" src={artiste4} />
                <span className="card-title"><b>2 FACE</b>
                  <br />
                  SINGER
                </span>
              </div>
            </div>
          </div> <div className="col s12 m4">
            <div className="card">
              <div className="card-image">
                <img className="mybox" src={artiste5} />
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
                <img className="mybox" src={artiste6} />
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
        <button className="waves-effect waves-light btn mybutton">LOAD MORE</button>
      </center>
      <br />
      <div className="mydiv">
        <center>
          <h2>
        ARTISTS
          </h2>
          <hr className="myhr" />
          <br />
          <h5>NEWLY ADDED ARTIST VIDEO</h5>
          <br />
        </center>
        <div>
          <div className="row">
            <div className="col s12 m4">
              <center><h5>BUY NOW</h5></center>
              <div className="card">
                <div className="card-image">
                  <img className="mybox" src={artiste1} />
                </div> <div className="card-content">
                  <p>
                    <center>
                      <h5>ARTISTSE: ADEKUNLE GOLD</h5>
                      TITLE: SADE
                      <br />
                      INCLUDES: BADOO
                    </center>
                  </p>
                       </div>
              </div>
            </div>
            <div className="col s12 m4">
              <center><h5>BUY NOW</h5></center>
              <div className="card">
                <div className="card-image">
                  <img className="mybox" src={artiste2} />
                </div>
                <div className="card-content">
                  <p>
                    <center>
                      <h5>ARTISTSE: OLAMIDE</h5>
                      TITLE: BADOO
                      <br />
                      INCLUDES: REMINISE
                    </center>
                  </p>
                </div>
              </div>
            </div> <div className="col s12 m4">
              <center><h5>BUY NOW</h5></center>
              <div className="card">
                <div className="card-image">
                  <img className="mybox" src={artiste3} />
                </div>
                <div className="card-content">
                  <p>
                    <center>
                      <h5>ARTISTSE: FALZ</h5>
                      TITLE: MONEY
                      <br />
                       INCLUDES: NINJA
                    </center>
                  </p>
                </div>
              </div>
                   </div>
            <center>
              <button className="waves-effect waves-light btn mybutton">LOAD MORE</button>
            </center>
          </div>
        </div>
      </div>
      <div>
        <center>
          <h2>
        VIDEOS
          </h2>
          <hr className="myhr" />
          <br />
          <h5>NEWLY ADDED VIDEOS</h5>
          <br />
          <ImageSlider {...settings}>
            <div> <img src={musicCover} style={{ height: '250px' }} /></div>
            <div><img src={musicCover} style={{ height: '250px' }} /></div>
            <div><img src={musicCover} style={{ height: '250px' }} /></div>
            <div><img src={musicCover} style={{ height: '250px' }} /></div>
            <div><img src={musicCover} style={{ height: '250px' }} /></div>
            <div><img src={musicCover} style={{ height: '250px' }} /></div>
          </ImageSlider>
        </center>
      </div>
      <div className="myimagediv">
        <center style={{ color: 'white' }}>
          <h2>
          VIDEOS
          </h2>
          <hr className="myhr" />
          <h5>NEWLY ADDED VIDEOS</h5>
          <br />
          <button className="waves-effect waves-light btn mybutton2">CHECK NOW</button>
        </center>
      </div>
      <div>
        <center>
          <h2>
        PRODUCERS
          </h2>
          <hr className="myhr" />
          <br />
          <h5>RECENT PHOTOS OF MOST POPULAR PRODUCERS</h5>
          <br />
        </center>
        <div style={{ margin: '0 5%' }}>
          PRODUCERS
          <hr />
          <br />
          <div>
            <div className="row">
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste7} />
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste3} />
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste2} />
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste4} />
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste2} />
                  </div>
                </div>
              </div> <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste5} />
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste6} />
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img className="mybox" src={artiste1} />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div className="mydiv">
      <div className="mymargin">
        <div className="row">
          <div className="col s6" style={{ fontSize: '20px' }}>
            <h2>
        LYRICS
            </h2>
            <hr className="left myhr" />
            <br />
            <h5>Read Lyrics Here</h5>
            <p className="right mytext">New</p>

            <br />
            <p>Lorem ipsum dolor sit amet, consectetur   &nbsp;&nbsp; &nbsp; &nbsp; <a href="#" className="mytext">Read More</a></p>
            <p>Lorem ipsum dolor sit amet, consectetur   &nbsp;&nbsp; &nbsp; &nbsp; <a href="#" className="mytext">Read More</a></p>
            <p>Lorem ipsum dolor sit amet, consectetur   &nbsp;&nbsp; &nbsp; &nbsp; <a href="#" className="mytext">Read More</a></p>
            <p>Lorem ipsum dolor sit amet, consectetur   &nbsp;&nbsp; &nbsp; &nbsp; <a href="#" className="mytext">Read More</a></p>
          </div>
          <div className="col s6">
            <img className="right" src={fela} style={{ height: '450px' }} />
          </div>
        </div>
      </div>
    </div>
    <div className="myimagediv2" style={{ color: 'white' }}>
      <div>
        <center>
          <h2>
        CONTACT
          </h2>
          <hr className="myhr" />
          <h5>GET IN TOUCH WITH US</h5>
        </center>
        <br />
      </div>
      <div>
        <div className="row">

          <div className="col s6">
            <h5>
        CONNECT WITH US
            </h5>
            <hr className="left myhr" style={{ width: "25%"}} />
            <br />
            <h5>IF YOU HAVE A QUESTION,COMMENT,EVENT
              <br />
               INQUIRY OR BOOKING REQUEST, FEEL FREE 
               <br />
               TO SEND US A MESSAGE AND WE WILL GET BACK
              TO YOU
            </h5>
          </div>
          <div className="col s6">
aaaa
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
