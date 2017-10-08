import React from 'react';
import PropTypes from 'prop-types';
import { Link } from 'react-router';

const PageOne = () => (
  <div>
    <h3 className="brand-logo">EPOHCJ</h3>
    <nav>
      <div className="nav-wrapper">
        <Link to="#" data-activates="mobile-demo" className="button-collapse">
          <i className="material-icons">menu</i>
        </Link>
        <ul className="left hide-on-med-and-down">
          <li><Link to="#">Home</Link></li>
          <li><Link to="#">Artistes</Link></li>
          <li><Link to="#">Albums</Link></li>
          <li><Link to="#">Videos</Link></li>
          <li><Link to="#">Lyrics</Link></li>
          <li><Link to="#">Record</Link></li>
          <li><Link to="#">Labels</Link></li>
          <li><Link to="#">Producers</Link></li>
          <li><Link to="#">Radio</Link></li>
          <li><a href="sass.html"><i className="material-icons">search</i></a></li>
          <li><Link to="#">Login</Link></li>
          <li><Link to="#">Register</Link></li>          
          
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
          <li><a href="sass.html"><i className="material-icons">search</i></a></li>
          <li><Link to="#">Login</Link></li>
          <li><Link to="#">Register</Link></li>  
        </ul>
      </div>
    </nav>
  </div>
);

PageOne.propTypes = {
  children: PropTypes.object.isRequired
};

export default PageOne;
