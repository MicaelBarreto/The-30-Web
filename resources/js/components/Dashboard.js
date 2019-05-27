import React, { Component } from 'react';
import { ButtonToolbar, Container, Col, DropdownButton, Dropdown, Button } from 'react-bootstrap';
import '../../../public/css/custom.css';
import { BrowserRouter as Router, Link, Route } from 'react-router-dom';
import Hearder from './partials/Header.js';


export default class Dashboard extends Component {
    render() {
        return(
            <Container>
                <Header />
                <Container className="fallout-middle-container">
                    <ButtonToolbar>
                        <Button
                            href="/enter"
                            className="fallout-button2">
                            Enter Game
                        </Button>
                        <Button
                            href="/create"
                            className="fallout-button2">
                            Create Game
                        </Button>
                    </ButtonToolbar>
                </Container>
            </Container>
        );
    }
        
}
