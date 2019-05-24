import React, { Component } from 'react';
import { ButtonToolbar, Container, Col, DropdownButton, Dropdown, Button } from 'react-bootstrap';
import ReactDOM from 'react-dom';
import '../../../public/css/custom.css';


class Dashboard extends Component {
    render() {
        return(
            <Container>
                <Container>
                    <Col md={3}>
                        <h1 className="fallout-logo-words">The 30's</h1>
                    </Col>
                    <Col md={{ span: 2, offset: 10 }}>
                        <DropdownButton title="User">
                            <Dropdown.Item href="#">Settings</Dropdown.Item>
                            <Dropdown.Divider />
                            <Dropdown.Item href="#">Exit</Dropdown.Item>
                        </DropdownButton>
                    </Col>
                </Container>
                <Container>
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

ReactDOM.render(<Dashboard />, document.getElementById('dash'))