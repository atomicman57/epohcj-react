import React from 'react';
import ReactDOM from 'react-dom';
import { Router, browserHistory } from 'react-router';
import './assets/sass/style.scss';
import routes from './routes.jsx';

const app = document.getElementById('app');
window.jQuery = window.$ = jQuery;


ReactDOM.render(
    <Router history={browserHistory} routes={routes} />, app
);
