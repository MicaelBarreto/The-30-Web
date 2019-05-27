import React, { Component } from 'react';
import { ButtonToolbar, Container, Col, DropdownButton, Dropdown, Button } from 'react-bootstrap';
import '../../../public/css/custom.css';
import { BrowserRouter as Router, Link, Route } from 'react-router-dom';
import Hearder from './partials/Header.js';

export default class Enter extends Component {
    render() {
        return(
            <Container>
                <Header />
                <Container className="fallout-middle-container">
                    <h1>Enter Game ID</h1>
                </Container>
            </Container>
        );
    }
}