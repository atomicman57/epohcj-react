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
import phone from '../assets/images/phone.png';
import address from '../assets/images/address.png';
import message from '../assets/images/message.png';
import music from '../assets/images/music.png';
import fela from '../assets/images/fela.jpg';
import musicCover from '../assets/images/musiccover.jpg';
import naijaFlag from '../assets/images/Nigeria-icon.png';
import fbround from '../assets/images/fbround.png';
import twround from '../assets/images/twround.png';
import iground from '../assets/images/iground.png';
import gpround from '../assets/images/gpround.png';
import ytround from '../assets/images/ytround.png';
import fb from '../assets/images/fb.png';
import tw from '../assets/images/tw.png';
import ig from '../assets/images/ig.png';
import cloud from '../assets/images/cloud.png';
import gp from '../assets/images/gp.png';
import linkedin from '../assets/images/li.png';
import mg from '../assets/images/mg.png';


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
            <hr className="left myhr" style={{ width: '25%' }} />
            <br />
            <h5>IF YOU HAVE A QUESTION,COMMENT,EVENT
              <br />
               INQUIRY OR BOOKING REQUEST, FEEL FREE
              <br />
               TO SEND US A MESSAGE AND WE WILL GET BACK
              TO YOU
            </h5>
            <br />
            <div className="row">
              <div className="col s2">
                <img src={address} style={{ height: '80px' }} />
              </div>
              <div className="col s4" style={{ marginTop: '25px' }}>
               ADDRESS COMES HERE
              </div>
              <br />
            </div>
            <div className="row">
              <div className="col s2">
                <img src={phone} style={{ height: '80px' }} />
              </div>
              <div className="col s4" style={{ marginTop: '25px' }}>
               (000)000-000
              </div>
              <br />
            </div>
            <div className="row">
              <div className="col s2">
                <img src={message} style={{ height: '80px' }} />
              </div>
              <div className="col s4" style={{ marginTop: '25px' }}>
               CONTACT@EPHOJ.COM.NG
              </div>
              <br />
            </div>
          </div>
          <div className="col s6">
            <h5>
        DROP US A LINE
            </h5>
            <hr className="left myhr" style={{ width: '25%' }} />
            <br />
            <div className="row">
              <div className="col s6">
                <input type="text" placeholder="NAME (REQUIRED)" />
              </div>
              <div className="col s6">
                <input type="text" placeholder="EMAIL (REQUIRED)" />
              </div>
              <div className="col s12">
                <input type="text" placeholder="SUBJECT" />
              </div>
              <div className="col s12">
                <textarea className="materialize-textarea" style={{ height: '200px' }} />
              </div>
            </div>
            <button className="waves-effect waves-light btn mybutton3">SEND</button>
          </div>
        </div>
      </div>
    </div>
    <div className="mydiv2" style={{ color: 'white' }}>
      <center>
        <h2>
        PRODUCERS
        </h2>
        <hr className="myhr" style={{ borderColor: 'red' }} />
        <h5>RECENT PHOTOS OF MOST POPULAR PRODUCERS</h5>
        <br />
        <div>
          <input type="text" className="mytext2" placeholder="EMAIL ADDRESS" />
          <button className="btn mybutton4" >SUBSCRIBE</button>
        </div>
        <br />
        <img src={music} />
        <br />
        <img src={fbround} style={{ height: '100px', marginRight: '2%' }} />
        <img src={twround} style={{ height: '100px', marginRight: '2%' }} />
        <img src={iground} style={{ height: '100px', marginRight: '2%' }} />
        <img src={gpround} style={{ height: '100px', marginRight: '2%' }} />
        <img src={ytround} style={{ height: '100px', marginRight: '2%' }} />
        <br />
        <h5> GET CONNECTED WITH YOUR FAVOURITE YOUNG AND DUMB CREW</h5>
      </center>
    </div>
    <div className="mydiv3">
      <center>
        <div className="row" style={{ fontSize: '22px' }}>
          <div className="col s1"><a href="#" className="mylink"> ARTIST </a></div>
          <div className="col s1"> <a href="#" className="mylink"> EVENTS </a></div>
          <div className="col s1"> <a href="#" className="mylink">NEWS </a></div>
          <div className="col s1"> <a href="#" className="mylink">STORE </a></div>
          <div className="col s3"> <a href="#" className="mylink">BACK TO THE TOP </a></div>
          <div className="col s2"> <a href="#" className="mylink"> T: 000 000 000 </a></div>
          <div className="col s3"> <a href="#" className="mylink"> E:CONTACT@EPHOC.COM </a></div>
        </div>
        <br />
        <h5>COPYRIGHT 2017 &copy; EPHOCJ</h5>
        <br />
        <h6>DESIGN & DEVELOPMENT BY EPHOCJ</h6>
        <br />
        <h6>TERMS/PRIVACY POLICY</h6>
        <br />
        <img src={fb} style={{ height: '20px', marginRight: '2%' }} />
        <img src={ig} style={{ height: '20px', marginRight: '2%' }} />
        <img src={linkedin} style={{ height: '20px', marginRight: '2%' }} />
        <img src={tw} style={{ height: '20px', marginRight: '2%' }} />
        <img src={gp} style={{ height: '20px', marginRight: '2%' }} />
        <img src={cloud} style={{ height: '20px', marginRight: '2%' }} />
        <img src={mg} style={{ height: '20px', marginRight: '2%' }} />
      </center>
    </div>
  </div>
);

PageTwo.propTypes = {
  children: PropTypes.object.isRequired
};

export default PageTwo;
