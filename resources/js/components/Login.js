import React, { Component } from "react";
import { Button, Form, Container } from "react-bootstrap";
import ReactDOM from 'react-dom';
import '../../../public/css/custom.css';

class Login extends Component {
  constructor(props) {
    super(props);

    this.state = {
      user: "",
      password: ""
    };

  }

  userChange = (event) => {
    this.setState({ user: event.target.value });
  }

  passChange = (event) => {
    this.setState({ password: event.target.value });
  }

  render() {
    return (
      <Container>
          <div className="Login">
            <div className="fallout-logo-background">
              <h1 className="fallout-logo-words">The 30's</h1>
            </div>
            <form onSubmit="/login">
              <Form.Group controlId="user">
                <Form.Label className="fallout-label">User</Form.Label>
                <Form.Control 
                  type="text" 
                  placeholder="User"
                  value={this.state.user}
                  onChange={this.userChange}
                  className="fallout-input"
                />
              </Form.Group>

              <Form.Group controlId="password">
                <Form.Label className="fallout-label">Password</Form.Label>
                <Form.Control 
                  type="password" 
                  placeholder="Password"
                  value={this.state.password}
                  onChange={this.passChange}
                  className="fallout-input"
                />
              </Form.Group>
              <Button
                block
                type="submit"
                className="fallout-button"
              >
                Login
              </Button>
            </form>
          </div>
      </Container>
    );
  }
}

if(document.getElementById('app')){
  ReactDOM.render(<Login />, document.getElementById('app'))
}
