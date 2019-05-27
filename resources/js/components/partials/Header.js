import React, { Component } from 'react';
import { ButtonToolbar, Container, Col, DropdownButton, Dropdown, Button } from 'react-bootstrap';
import '../../../public/css/custom.css';

export default class Header extends Component{
    render() {
        return(
            <Container>
                <Col md={3}>
                    <Link to={"/dashboard"} className="fallout-button2">The 30's</Link>
                </Col>
                <Col md={{ span: 2, offset: 10 }}>
                    <DropdownButton title="User">
                        <Dropdown.Item href="#">Settings</Dropdown.Item>
                        <Dropdown.Divider />
                        <Dropdown.Item href="#">Exit</Dropdown.Item>
                    </DropdownButton>
                </Col>
            </Container>
        );
    }
}