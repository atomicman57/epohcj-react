import React from 'react';
import PropTypes from 'prop-types';
import { Link } from 'react-router';
import musicCover from '../assets/images/musiccover.jpg';
import ReactDisqusComments from 'react-disqus-comments';

const PageOne = () => {
  const handleNewComment = (comment) => {
    console.log(comment.text);
  };
  return (
    <div>
      <h3 className="brand-logo mymargin">EPOHCJ</h3>
      <nav className ="mynav">
        <div className="nav-wrapper mynav">
          <Link to="#" data-activates="mobile-demo" className="button-collapse">
            <i className="material-icons">menu</i>
          </Link>
          <ul className="hide-on-med-and-down">
            <li className="mymargin"><Link to="#">Home</Link></li>
            <li><Link to="#">Artistes</Link></li>
            <li><Link to="#">Albums</Link></li>
            <li><Link to="#">Videos</Link></li>
            <li><Link to="#">Lyrics</Link></li>
            <li><Link to="#">Record</Link></li>
            <li><Link to="#">Labels</Link></li>
            <li><Link to="#">Producers</Link></li>
            <li><Link to="#">Radio</Link></li>
            <li><Link to="pagetwo">Page 2</Link></li>
            <li style={{ margin: '0 50px' }}><a href="#"><i className="material-icons">search</i></a></li>
            <li className="mylogin"><Link to="#" style={{ borderRight: '1px white solid' }}>   Login </Link></li>
            <li className="mylogin"><Link to="#">Register</Link></li>

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
            <li><Link to="pagetwo">Page 2</Link></li>
            <li><a href="#"><i className="material-icons">search</i></a></li>
            <li><Link to="#">Login</Link></li>
            <li><Link to="#">Register</Link></li>
          </ul>
        </div>
      </nav>
      <div>
        <div>
          <div style={{ margin: '5%' }}>
            <h5 style={{ float: 'left' }}>Albums</h5>
            <ul className="breadcrumb" style={{ float: 'right' }}>
              <li><a href="#">Home</a></li>
              <li>Artistes</li>
            </ul>
            <hr style={{ clear: 'both' }} />
          </div>
        </div>
        <center>
          <div style={{ width: '50%', height: '10%', margin: '2%' }}>
            <iframe
              width="100%"
              height="166"
              scrolling="no"
              frameBorder="no"
              src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/34019569&amp;color=0066cc"
            />
          </div>
        </center>
      </div>
      <div>
        <div className="row" style={{ margin: '5%' }}>
          <div className="col s12">
            <ul className="tabs">
              <li className="tab col s3 active mysubnav"><a href="#test1">Albums</a></li>
              <li className="tab col s3 mysubnav">
                <a href="#test2">Play List</a>
              </li>
              <li className="tab col s3 mysubnav">
                <a href="#test3">Satus</a>
              </li>
              <li className="tab col s3 mysubnav"><a href="#test4">Option 4</a></li>
            </ul>
          </div>
          <div id="test1" className="col s12">
            <div className="row">
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name</p>
                    </center>
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name</p>
                    </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                        <p>Artiste Name</p>
                      </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                       <div className="card">
                  <div className="card-image">
                             <img src={musicCover} />
                    <span className="card-title">Music</span>
                           </div>
                  <div className="card-action">
                             <center>
                             <p>Artiste Name</p>
                           </center>
                  </div>
                </div>
                            </div> <div className="col s12 m3">
                <div className="card">
                                  <div className="card-image">
                           <img src={musicCover} />
                           <span className="card-title">Music</span>
                         </div>
                  <div className="card-action">
                           <center>
                      <p>Artiste Name</p>
                    </center>
                         </div>
                                </div>
                     </div> <div className="col s12 m3">
                <div className="card">
                                <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                                <div className="card-action">
                    <center>
                      <p>Artiste Name</p>
                    </center>
                  </div>
                              </div>
              </div> <div className="col s12 m3">
                                     <div className="card">
                  <div className="card-image">
                                                <img src={musicCover} />
                                                <span className="card-title">Music</span>
                                              </div>
                  <div className="card-action">
                                                <center>
                      <p>Artiste Name</p>
                    </center>
                                              </div>
                </div>
                                   </div> <div className="col s12 m3">
                <div className="card">
                                                     <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                                                     <div className="card-action">
                    <center>
                                    <p>Artiste Name</p>
                                  </center>
                  </div>
                                                   </div>
                     </div>
            </div>
          </div>
          <div id="test2" className="col s12">
            <div className="row">
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name 2</p>
                    </center>
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name 2</p>
                    </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                        <p>Artiste Name 2</p>
                      </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                       <div className="card">
                  <div className="card-image">
                             <img src={musicCover} />
                             <span className="card-title">Music</span>
                           </div>
                  <div className="card-action">
                             <center>
                      <p>Artiste Name 2</p>
                    </center>
                           </div>
                </div>
                            </div> <div className="col s12 m3">
                <div className="card">
                                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                                  <div className="card-action">
                    <center>
                             <p>Artiste Name 2</p>
                           </center>
                  </div>
                                </div>
                            </div> <div className="col s12 m3">
                                <div className="card">
                  <div className="card-image">
                                  <img src={musicCover} />
                                  <span className="card-title">Music</span>
                                </div>
                  <div className="card-action">
                                  <center>
                      <p>Artiste Name 2</p>
                    </center>
                                </div>
                </div>
                              </div> <div className="col s12 m3">
                <div className="card">
                                       <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                                       <div className="card-action">
                    <center>
                      <p>Artiste Name 2</p>
                    </center>
                  </div>
                                     </div>
              </div> <div className="col s12 m3">
                                            <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                                                <center>
                             <p>Artiste Name 2</p>
                           </center>
                  </div>
                </div>
                                          </div>
            </div>
          </div>
          <div id="test3" className="col s12">
            <div className="row">
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name 3</p>
                    </center>
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name 3</p>
                    </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                        <p>Artiste Name 3</p>
                      </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                       <div className="card">
                  <div className="card-image">
                             <img src={musicCover} />
                             <span className="card-title">Music</span>
                           </div>
                  <div className="card-action">
                             <center>
                      <p>Artiste Name 3</p>
                    </center>
                           </div>
                </div>
                            </div> <div className="col s12 m3">
                <div className="card">
                           <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                           <div className="card-action">
                    <center>
                                    <p>Artiste Name 3</p>
                                  </center>
                  </div>
                         </div>
              </div> <div className="col s12 m3">
                                <div className="card">
                  <div className="card-image">
                                         <img src={musicCover} />
                                         <span className="card-title">Music</span>
                                       </div>
                  <div className="card-action">
                                         <center>
                      <p>Artiste Name 3</p>
                    </center>
                                       </div>
                </div>
                              </div> <div className="col s12 m3">
                       <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                                    <p>Artiste Name 3</p>
                                  </center>
                         </div>
                </div>
                            </div> <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                                  <img src={musicCover} />
                                  <span className="card-title">Music</span>
                                </div>
                  <div className="card-action">
                                  <center>
                      <p>Artiste Name 3</p>
                    </center>
                                </div>
                </div>
                     </div>
            </div>
          </div>
          <div id="test4" className="col s12">
            <div className="row">
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name 4</p>
                    </center>
                  </div>
                </div>
              </div>
              <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                      <p>Artiste Name 4</p>
                    </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                <div className="card">
                  <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                  <div className="card-action">
                    <center>
                        <p>Artiste Name 4</p>
                      </center>
                  </div>
                </div>
              </div> <div className="col s12 m3">
                       <div className="card">
                  <div className="card-image">
                      <img src={musicCover} />
                      <span className="card-title">Music</span>
                    </div>
                  <div className="card-action">
                      <center>
                      <p>Artiste Name 4</p>
                    </center>
                    </div>
                </div>
              </div> <div className="col s12 m3">
                       <div className="card">
                  <div className="card-image">
                           <img src={musicCover} />
                           <span className="card-title">Music</span>
                         </div>
                  <div className="card-action">
                           <center>
                      <p>Artiste Name 4</p>
                    </center>
                         </div>
                </div>
                            </div> <div className="col s12 m3">
                <div className="card">
                                <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                                <div className="card-action">
                    <center>
                                    <p>Artiste Name 4</p>
                                  </center>
                  </div>
                              </div>
              </div> <div className="col s12 m3">
                              <div className="card">
                  <div className="card-image">
                                  <img src={musicCover} />
                                  <span className="card-title">Music</span>
                                </div>
                  <div className="card-action">
                                  <center>
                      <p>Artiste Name 4</p>
                    </center>
                                </div>
                </div>
                                   </div> <div className="col s12 m3">
                <div className="card">
                                <div className="card-image">
                    <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
                                <div className="card-action">
                    <center>
                                    <p>Artiste Name 4</p>
                                  </center>
                  </div>
                              </div>
                     </div>
            </div>
          </div>
        </div>
      </div>
      <div  style={{ margin: '5%' }}>
        <h4> Also Featured In</h4>
                <div className="row">
  <div className="col s12 m3">
            <div className="card">
              <div className="card-image">
                <img src={musicCover} />
                <span className="card-title">Music</span>
              </div>
              <div className="card-action">
                <center>
                  <p>Artiste Name 3</p>
                </center>
              </div>
            </div>
          </div>
          <div className="col s12 m3">
            <div className="card">
              <div className="card-image">
                <img src={musicCover} />
                <span className="card-title">Music</span>
              </div>
              <div className="card-action">
                <center>
                      <p>Artiste Name 3</p>
                </center>
              </div>
            </div>
          </div> <div className="col s12 m3">
            <div className="card">
              <div className="card-image">
                <img src={musicCover} />
                    <span className="card-title">Music</span>
                  </div>
              <div className="card-action">
                <center>
                  <p>Artiste Name 3</p>
                      </center>
                  </div>
            </div>
          </div> <div className="col s12 m3">
            <div className="card">
              <div className="card-image">
                             <img src={musicCover} />
                <span className="card-title">Music</span>
              </div>
                  <div className="card-action">
                             <center>
                      <p>Artiste Name 3</p>
                    </center>
                           </div>
                </div>
                     </div>
</div>


      </div>
      <div  style={{ margin: '5%' }}>
        <h5>Tags</h5>
        <div>
          <div className="chip" style={{ backgroundColor: "#00A755" }}> Kinda Life</div>
         <div className="chip"> Kinda Life</div>
          <div className="chip"> Kinda Life</div>
          <div className="chip"> Kinda Life</div>


          <br />
        <div className="chip"> Kinda Life</div>
<div className="chip"> Kinda Life</div>
<div className="chip"> Kinda Life</div>
<div className="chip"> Kinda Life</div>


        </div>
        <div>
          <ReactDisqusComments
            shortname="example"
            identifier="something-unique-12345"
            title="Example Thread"
            url="http://www.example.com/example-thread"
            category_id="123456"
          />
        </div>
      </div>
      <footer className="page-footer" style={{ backgroundColor: '#535353' }}>
        <div className="container">
        © 2017 EPOHCJ All right reserved
          <a className="grey-text text-lighten-4 right" href="#!">Home</a>
        </div>
      </footer>
    </div>
  );
};

PageOne.propTypes = {
  children: PropTypes.object.isRequired
};

export default PageOne;
