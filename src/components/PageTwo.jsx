import React from 'react';
import PropTypes from 'prop-types';

const PageTwo = () => (
  <div>
   <h1> Page 2 </h1>
  </div>
);

PageTwo.propTypes = {
  children: PropTypes.object.isRequired,
};

export default PageTwo;
