import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import Dashboard from './components/Dashboard';

export default class Index extends Component {
    render() {
        return(
            <Router>
                <Route path="/dashboard" exact component={ Dashboard } />
            </Router>
        );
    }
}


if(document.getElementById('dash')){
    ReactDOM.render(<Index />, document.getElementById('dash'))
}