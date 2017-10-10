import React from 'react';
import { Route, IndexRoute } from 'react-router';
import App from './components/App.jsx';
import PageOne from './components/PageOne.jsx';
import PageTwo from './components/PageTwo.jsx';

export default (
  <div>
    <Route path="/" component={App}>
      <IndexRoute component={PageTwo} />
      <Route path="pagetwo" component={PageTwo} />
    </Route>
  </div>
);
