import React from 'react';
import PropTypes from 'prop-types';

import NavigationBar from './NavigationBar.jsx';
import Footer from './Footer.jsx';

const App = ({ children }) => (
  <div>
    {/*<NavigationBar />*/}
    {children}
    {/*<Footer />*/}
  </div>
);

App.propTypes = {
  children: PropTypes.object.isRequired,
};

export default App;
